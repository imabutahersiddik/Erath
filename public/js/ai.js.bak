document.getElementById('generateTextButton').addEventListener('click', async function() {
    const selectedPrompt = document.getElementById('promptSelect').value;
    const selectedAI = document.getElementById('aiSelect').value;
    const apiKey = document.getElementById('apiKeyInput').value.trim(); // Get the API key from the input

    let generatedText = '';
    if (selectedAI === 'gemini') {
        generatedText = await generateTextWithGemini(selectedPrompt, apiKey);
    } else if (selectedAI === 'anthropic') {
        generatedText = await generateTextWithAnthropic(selectedPrompt, apiKey);
    }

    document.getElementById('aiOutput').value = generatedText;
    document.getElementById('insertTextButton').style.display = 'inline-block'; // Show insert button
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
            body: JSON.stringify(data)
        });

        const responseData = await response.json();
        return responseData.completion || "No text generated."; // Adjust based on actual response structure
    } catch (error) {
        console.error('Error calling Anthropic API:', error);
        return "Error generating text.";
    }
}