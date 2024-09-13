<!-- AI Conversation Modal -->
<div class="modal fade" id="aiConversationModal" tabindex="-1" role="dialog" aria-labelledby="aiConversationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aiConversationModalLabel">AI Conversation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="promptSearch">Search Prompts:</label>
                    <input type="text" id="promptSearch" class="form-control" placeholder="Search for a prompt...">
                </div>
                <div id="selectedPrompt" style="font-weight: bold; margin-bottom: 10px; display: none;">
                    <span id="selectedPromptText"></span>
                    <button type="button" class="close" id="closePromptButton">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> <!-- Display selected prompt -->
                <div id="promptContainer" class="d-flex flex-wrap mb-3">
                    <!-- Prompts will be dynamically added here -->
                    <div class="prompt-item btn btn-outline-primary m-1" data-prompt="Write a story about a brave knight.">Brave Knight</div>
                    <div class="prompt-item btn btn-outline-primary m-1" data-prompt="Describe a futuristic city.">Futuristic City</div>
                    <div class="prompt-item btn btn-outline-primary m-1" data-prompt="Write a poem about nature.">Nature Poem</div>
                </div>
                <div id="conversationContainer" style="display: none;">
                    <div id="conversationTitle" style="font-weight: bold; margin-bottom: 10px;"></div>
                    <div id="conversationMessages"></div>
                    <div class="form-group">
                        <label for="userInput">Your Message:</label>
                        <textarea id="userInput" rows="3" class="form-control" placeholder="Type your message here..."></textarea>
                    </div>
                    <button id="sendMessageButton" class="btn btn-primary">Send</button>
                </div>
                <div id="error-message" style="color: red; margin-top: 10px;"></div> <!-- Error message display -->
                <div id="console-output" style="max-height: 150px; overflow-y: auto; margin-top: 10px; background-color: #f9f9f9; border: 1px solid #ccc; padding: 10px;"></div> <!-- Console output for logging -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    let showConsoleOutput = true; // Set to false to disable console output
    const conversations = []; // Store conversations

    // Load API key from cookies
    document.addEventListener('DOMContentLoaded', () => {
        const apiKey = getCookie('apiKey');
        if (apiKey) {
            document.getElementById('apiKeyInput').value = apiKey;
        }
    });

    // Save API key to cookies
    document.getElementById('apiKeyInput').addEventListener('input', function() {
        setCookie('apiKey', this.value, 365 * 10); // Store for 10 years
    });

    // Show extra fields when a prompt is selected
    document.querySelectorAll('.prompt-item').forEach(item => {
        item.addEventListener('click', function() {
            const selectedPrompt = this.getAttribute('data-prompt');
            document.getElementById('selectedPromptText').innerText = selectedPrompt; // Show selected prompt
            document.getElementById('selectedPrompt').style.display = 'block'; // Show selected prompt
            document.getElementById('promptContainer').style.display = 'none'; // Hide prompt list
            document.getElementById('conversationContainer').style.display = 'block'; // Show conversation fields

            // Set conversation title with current date and time
            const currentDate = new Date();
            const options = { timeZoneName: 'short', hour: '2-digit', minute: '2-digit', hour12: false };
            const dateString = currentDate.toLocaleString('en-US', options);
            document.getElementById('conversationTitle').innerText = `Conversation: ${selectedPrompt} | ${dateString}`;

            // Initialize the conversation with the starting prompt
            addMessageToConversation(`AI: ${selectedPrompt}`, true);
        });
    });

    // Close the selected prompt and show the prompt list
    document.getElementById('closePromptButton').addEventListener('click', function() {
        document.getElementById('selectedPrompt').style.display = 'none'; // Hide selected prompt
        document.getElementById('extraTextContainer').style.display = 'none'; // Hide extra fields
        document.getElementById('conversationContainer').style.display = 'none'; // Hide conversation fields
        document.getElementById('promptContainer').style.display = 'block'; // Show prompt list
        document.getElementById('userInput').value = ''; // Clear user input
    });

    // Filter prompts based on search input
    document.getElementById('promptSearch').addEventListener('input', filterPrompts);

    function filterPrompts() {
        const searchValue = document.getElementById('promptSearch').value.toLowerCase();
        document.querySelectorAll('.prompt-item').forEach(item => {
            const promptText = item.textContent.toLowerCase();
            item.style.display = promptText.includes(searchValue) ? 'block' : 'none';
        });
    }

    // Send message and generate response
    document.getElementById('sendMessageButton').addEventListener('click', async function() {
        const userInput = document.getElementById('userInput').value.trim(); // Get user input
        if (!userInput) return; // Prevent sending empty messages

        addMessageToConversation(`You: ${userInput}`, false); // Add user message to conversation

        const selectedPrompt = document.getElementById('selectedPromptText').innerText;
        const combinedText = `${selectedPrompt} ${userInput}`.trim(); // Combine prompt and user input

        const selectedAI = document.getElementById('aiSelect').value;
        const apiKey = document.getElementById('apiKeyInput').value.trim(); // Get the API key from the input
        document.getElementById('error-message').innerText = ''; // Clear previous error messages

        let generatedText = '';
        try {
            if (selectedAI === 'gemini') {
                generatedText = await generateTextWithGemini(combinedText, apiKey);
            } else if (selectedAI === 'mistral') {
                generatedText = await generateTextWithMistral(combinedText, apiKey);
            }

            addMessageToConversation(`AI: ${generatedText}`, true); // Add AI response to conversation
        } catch (error) {
            console.error('Error generating text:', error);
            document.getElementById('error-message').innerText = "Error generating text: " + error.message; // Display error message
            logMessage("Error:", error.message); // Log the error message to the console output
        }

        document.getElementById('userInput').value = ''; // Clear user input
    });

    function addMessageToConversation(message, isAI) {
        const messageContainer = document.createElement('div');
        messageContainer.className = isAI ? 'ai-message' : 'user-message';
        messageContainer.innerText = message;

        // Add edit and delete buttons for user messages
        if (!isAI) {
            const editButton = document.createElement('button');
            editButton.innerHTML = '<i class="fas fa-edit"></i>'; // FontAwesome edit icon
            editButton.className = 'btn btn-link';
            editButton.onclick = function() {
                const newMessage = prompt("Edit your message:", message);
                if (newMessage !== null) {
                    messageContainer.innerText = newMessage;
                }
            };

            const deleteButton = document.createElement('button');
            deleteButton.innerHTML = '<i class="fas fa-trash"></i>'; // FontAwesome delete icon
            deleteButton.className = 'btn btn-link';
            deleteButton.onclick = function() {
                messageContainer.remove();
            };

            messageContainer.appendChild(editButton);
            messageContainer.appendChild(deleteButton);
        }

        document.getElementById('conversationMessages').appendChild(messageContainer);
    }

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
            logMessage("Response Data:", responseData); // Log the message to the UI

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
                logMessage("Unexpected response structure:", responseData); // Log the message to the UI
                return "No text generated.";
            }
        } catch (error) {
            logMessage("Error:", error.message); // Log the error message to the UI
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

        if (showConsoleOutput) {
            consoleOutput.appendChild(messageElement);
        }
    }

    // Cookie handling functions
    function setCookie(name, value, days) {
        const expires = days ? "; expires=" + new Date(Date.now() + days * 864e5).toUTCString() : "";
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
        return document.cookie.split('; ').reduce((r, v) => {
            const parts = v.split('=');
            return parts[0] === name ? decodeURIComponent(parts[1]) : r;
        }, '');
    }
</script>