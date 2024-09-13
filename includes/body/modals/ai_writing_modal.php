<!-- AI Writing Modal -->
<div class="modal fade" id="aiWritingModal" tabindex="-1" role="dialog" aria-labelledby="aiWritingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aiWritingModalLabel">Write with AI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="aiSelect">Select AI Service:</label>
                    <select class="form-control" id="aiSelect">
                        <option value="gemini">Gemini</option>
                        <!-- The Anthropic option is hidden by commenting it out
                        <option value="anthropic">Anthropic</option>
                        -->
                        <option value="mistral">Mistral</option> <!-- Added Mistral option -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="apiKeyInput">Enter Your API Key:</label>
                    <input type="text" class="form-control" id="apiKeyInput" placeholder="Enter API Key">
                </div>
                <div class="form-group">
                    <label for="promptSelect">Select a Prompt:</label>
                    <select class="form-control" id="promptSelect">
                        <option value="Write a story about a brave knight.">Brave Knight</option>
                        <option value="Describe a futuristic city.">Futuristic City</option>
                        <option value="Write a poem about nature.">Nature Poem</option>
                        <!-- Add more prompts as needed -->
                    </select>
                </div>
                <textarea id="aiOutput" rows="5" class="form-control" placeholder="AI-generated text will appear here..."></textarea>
                <div id="error-message" style="color: red; margin-top: 10px;"></div> <!-- Error message display -->
                <div id="console-output" style="max-height: 150px; overflow-y: auto; margin-top: 10px; background-color: #f9f9f9; border: 1px solid #ccc; padding: 10px;"></div> <!-- Console output for logging -->
            </div>
            <div class="modal-footer">
                <button id="generateTextButton" class="btn btn-success">Generate Text</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="insertTextButton" class="btn btn-primary" style="display: none;">Insert Text</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Check if the URL contains the 'debug' parameter
    const isDebugMode = new URLSearchParams(window.location.search).has('debug');

    document.getElementById('generateTextButton').addEventListener('click', async function() {
        const selectedPrompt = document.getElementById('promptSelect').value;
        const selectedAI = document.getElementById('aiSelect').value;
        const apiKey = document.getElementById('apiKeyInput').value.trim(); // Get the API key from the input
        document.getElementById('error-message').innerText = ''; // Clear previous error messages

        let generatedText = '';
        try {
            if (selectedAI === 'gemini') {
                generatedText = await generateTextWithGemini(selectedPrompt, apiKey);
            } 
            // Uncomment the following block if you want to enable Anthropic again
            /*
            else if (selectedAI === 'anthropic') {
                generatedText = await generateTextWithAnthropic(selectedPrompt, apiKey);
            }
            */
            else if (selectedAI === 'mistral') {
                generatedText = await generateTextWithMistral(selectedPrompt, apiKey);
            }

            document.getElementById('aiOutput').value = generatedText;
            document.getElementById('insertTextButton').style.display = 'inline-block'; // Show insert button
        } catch (error) {
            console.error('Error generating text:', error);
            document.getElementById('error-message').innerText = "Error generating text: " + error.message; // Display error message
            if (isDebugMode) {
                logMessage("Error:", error.message); // Log the error message to the console output if in debug mode
            }
        }
    });

    document.getElementById('insertTextButton').addEventListener('click', function() {
        const generatedText = document.getElementById('aiOutput').value;
        const editor = document.getElementById('html-code'); // Assuming your editor's textarea has this ID
        editor.value += generatedText; // Append the generated text
        $('#aiWritingModal').modal('hide'); // Close the modal
    });

    async function generateTextWithGemini(prompt, apiKey) {
        const url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=${apiKey}`;

        const requestOptions = {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                contents: [{
                    parts: [{
                        text: prompt,
                    }],
                }],
            }),
        };

        try {
            const response = await fetch(url, requestOptions);
            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(`Gemini API error: ${errorData.error.message || response.statusText}`);
            }

            const responseData = await response.json();
            logMessage("Response Data:", responseData); // Log the message to the UI if in debug mode

            if (
                responseData.candidates &&
                Array.isArray(responseData.candidates) &&
                responseData.candidates.length > 0 &&
                responseData.candidates[0].content &&
                responseData.candidates[0].content.parts &&
                Array.isArray(responseData.candidates[0].content.parts) &&
                responseData.candidates[0].content.parts.length > 0
            ) {
                return responseData.candidates[0].content.parts[0].text || "No text generated.";
            } else {
                logMessage("Unexpected response structure:", responseData); // Log the message to the UI if in debug mode
                return "No text generated.";
            }
        } catch (error) {
            logMessage("Error:", error.message); // Log the error message to the UI if in debug mode
            throw new Error(`Failed to fetch from Gemini API: ${error.message}`);
        }
    }

    // Function for generating text using Mistral API
    async function generateTextWithMistral(prompt, apiKey) {
        const url = 'https://api.mistral.ai/v1/chat/completions';

        const data = {
            model: 'mistral-large-latest', // Specify the model to use
            messages: [
                { role: 'user', content: prompt } // Use the prompt as the user's message
            ]
        };

        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${apiKey}`,
                    'Content-Type': 'application/json' // Ensure the content type is set
                },
                body: JSON.stringify(data) // Send the data as a JSON string
            });

            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(`Mistral API error: ${errorData.error.message || response.statusText}`);
            }

            const responseData = await response.json(); // Parse the response data
            return responseData.choices[0].message.content || "No text generated."; // Extract generated text
        } catch (error) {
            console.error('Error calling Mistral API:', error);
            throw new Error("Error calling Mistral API: " + error.message);
        }
    }

    // Uncomment this function if you want to enable Anthropic API again
    /*
    async function generateTextWithAnthropic(prompt, apiKey) {
        const url = 'https://api.anthropic.com/v1/messages';

        const data = {
            model: 'claude-3-5-sonnet-20240620', // Specify the model to use
            max_tokens: 1024,
            messages: [
                { role: 'user', content: prompt }
            ]
        };

        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'x-api-key': apiKey,
                    'anthropic-version': '2023-06-01',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data) // Send the data as a JSON string
            });

            const responseData = await response.json(); // Parse the response data
            return responseData.completion || "No text generated."; // Adjust based on actual response structure
        } catch (error) {
            console.error('Error calling Anthropic API:', error);
            throw new Error("Error calling Anthropic API: " + error.message);
        }
    }
    */

    function logMessage(...args) {
        const consoleOutput = document.getElementById('console-output');
        const message = args.map(arg => JSON.stringify(arg)).join(' ');
        const messageElement = document.createElement('div');
        messageElement.textContent = message;
        consoleOutput.appendChild(messageElement);
    }
</script>