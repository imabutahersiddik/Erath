document.getElementById('generateTextButton').addEventListener('click', async function() {
    const selectedPrompt = document.getElementById('promptSelect').value;
    const selectedAI = document.getElementById('aiSelect').value;
    const generatedText = await generateText(selectedAI, selectedPrompt);
    document.getElementById('aiOutput').value = generatedText;
    document.getElementById('insertTextButton').style.display = 'inline-block'; // Show insert button
});

document.getElementById('insertTextButton').addEventListener('click', function() {
    const generatedText = document.getElementById('aiOutput').value;
    const editor = document.getElementById('html-code'); // Assuming your editor's textarea has this ID
    editor.value += generatedText; // Append the generated text
    $('#aiWritingModal').modal('hide'); // Close the modal
});

async function generateText(aiService, prompt) {
    const response = await fetch('./includes/body/ai_writing/', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ aiService, prompt })
    });

    const data = await response.json();
    return data.generated_text; // Adjust based on API response structure
}