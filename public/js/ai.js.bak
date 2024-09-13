document.getElementById('generateTextButton').addEventListener('click', async function() {
    const selectedPrompt = document.getElementById('promptSelect').value;
    const selectedAI = document.getElementById('aiSelect').value;
    const apiKey = document.getElementById('apiKeyInput').value.trim(); // Get the API key from the input

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
        document.getElementById('aiOutput').value = "Error generating text.";
    }
});

document.getElementById('insertTextButton').addEventListener('click', function() {
    const generatedText = document.getElementById('aiOutput').value;
    const editor = document.getElementById('html-code'); // Assuming your editor's textarea has this ID
    editor.value += generatedText; // Append the generated text
    $('#aiWritingModal').modal('hide'); // Close the modal
});

async function generateTextWithGemini(prompt, apiKey) {
    const url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=${apiKey}`;

    const data = {
        contents: [
            {
                parts: [
                    { text: prompt }
                ]
            }
        ]
    };

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        const responseData = await response.json();
        return responseData.contents[0].parts[0].text || "No text generated.";
    } catch (error) {
        console.error('Error calling Gemini API:', error);
        return "Error generating text.";
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
        return "Error generating text.";
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
        return "Error generating text.";
    }
}
*/
