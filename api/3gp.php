<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download 3GP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 10px 15px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #219150;
        }
        textarea {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #2980b9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #1a6a8b;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Download 3GP</h1>
        <input type="text" id="urlInput" placeholder="Paste URL here...">
        <button id="processUrlBtn">Process URL</button>
        <br><br>
        <textarea id="outputUrl" rows="10" cols="50" style="display:none;" placeholder="Decrypted data will appear here..."></textarea>
        <br>
        <a id="downloadLink" style="display:none;">Download</a>
    </div>

    <script>
        // Set the current page URL in the input field when the page loads
        window.onload = function() {
            document.getElementById('urlInput').value = window.location.href;
        };

        document.getElementById('processUrlBtn').addEventListener('click', function() {
            const urlInput = document.getElementById('urlInput').value;
            const encryptedDataPattern = /\/\/[^\/]+\/3gp\/([^ ]+)/; // Adjusted regex to match any domain

            let encryptedData = '';

            // Check if the URL contains the encrypted data
            const match = urlInput.match(encryptedDataPattern);
            if (match && match[1]) {
                encryptedData = match[1]; // Get the encrypted data from the URL
            } else {
                alert("No encrypted data found in the URL. Please paste the encrypted data.");
                return; // Exit if no encrypted data is found
            }

            // Prepare the full Base64 URL
            const base64Url = `data:video/3gpp;base64,${encryptedData}`;

            // Show the output URL
            const outputUrl = document.getElementById('outputUrl');
            outputUrl.style.display = 'block';
            outputUrl.value = base64Url;

            // Create a download link
            const downloadLink = document.getElementById('downloadLink');
            downloadLink.href = base64Url;
            downloadLink.download = 'downloaded_file.zip'; // Change this if you want a different filename
            downloadLink.style.display = 'block';
            downloadLink.innerText = 'Download 3GP File';
        });
    </script>
</body>
</html>