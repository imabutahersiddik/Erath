const bannedWords = ["zitube", "not.not.com", "not.not-not.org"];

// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
  const textArea = document.getElementById("html-code");

  if (textArea) { // Check if the textarea element exists
    textArea.addEventListener("input", function() {
      let text = this.value;
      const chunkSize = 10000; // Adjust as needed
      let censoredText = "";
      for (let i = 0; i < text.length; i += chunkSize) {
        const chunk = text.substring(i, i + chunkSize);
        censoredText += censorChunk(chunk);
      }
      this.value = censoredText;
    });
  } else {
    console.error("Textarea with ID 'sensor' not found!");
  }

  function censorChunk(chunk) {
    bannedWords.forEach(word => {
      // Escape periods (dots) in the word for the regex
      let escapedWord = word.replace(/\./g, '\\.'); 
      // Use word boundaries for more accurate matching
      let regex = new RegExp(`\\b${escapedWord}\\b`, "gi"); 
      chunk = chunk.replace(regex, "*".repeat(word.length)); 
    });
    return chunk;
  }
});
