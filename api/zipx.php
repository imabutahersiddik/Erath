<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download ZIPX</title>
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
        <h1>Download ZIPX</h1>
        <input type="text" id="urlInput" placeholder="Paste URL here...">
        <button id="processUrlBtn">Process URL</button>
        <br><br>
        <textarea id="outputUrl" rows="10" cols="50" style="display:none;" placeholder="Decrypted data will appear here..."></textarea>
        <br>
        <a id="downloadLink" style="display:none;">Download</a>
    </div>
    <div class="instructions">
    <h2>Instructions to Extract Your File</h2>
    <ol>
        <li>
            <strong>Download the zipx File:</strong>
            After clicking the download link, a file with a random number and the zipx extension will be saved to your device.
        </li>
        <li>
            <strong>Open the zipx File:</strong>
            Use an archiving tool (like WinRAR, 7-Zip, or any other compatible software) to open the downloaded zipx file.
        </li>
        <li>
            <strong>Locate the .bin File:</strong>
            Inside the zipx file, you will find a .bin file. This file contains your original content.
        </li>
        <li>
            <strong>Rename the .bin File:</strong>
            Right-click on the .bin file and choose to rename it. Change the file extension from .bin to .zipx. For example, if the file is named <code>random_number.bin</code>, rename it to <code>filename.zipx</code>.
        </li>
        <li>
            <strong>Extract the .zipx File:</strong>
            Now, use the archiving tool again to extract the newly renamed <code>filename.zipx</code> file. This will reveal the original file content.
        </li>
        <li>
            <strong>Access Your Original File:</strong>
            After extraction, you will find your original file content in the extracted folder. You can now open or use it as needed.
        </li>
    </ol>
    </div>
    <script>
        // Set the current page URL in the input field when the page loads
        window.onload = function() {
            document.getElementById('urlInput').value = window.location.href;
        };

        document.getElementById('processUrlBtn').addEventListener('click', function() {
            const urlInput = document.getElementById('urlInput').value;
            const encryptedDataPattern = /\/\/[^\/]+\/zipx\/([^ ]+)/; // Adjusted regex to match any domain

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
            const base64Url = `data:application/zip;base64,${encryptedData}`;

            // Show the output URL
            const outputUrl = document.getElementById('outputUrl');
            outputUrl.style.display = 'block';
            outputUrl.value = base64Url;

            // Create a download link
            const downloadLink = document.getElementById('downloadLink');
            downloadLink.href = base64Url;
            downloadLink.download = 'downloaded_file.zipx'; // Change this if you want a different filename
            downloadLink.style.display = 'block';
            downloadLink.innerText = 'Download .zipx File';
        });
    </script>
</body>
</html>