<script>
// Create a style element
const style = document.createElement('style');

// Set the CSS content
style.textContent = `
        #tutorialModal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .modal-content {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
        }
        h2 {
            color: #333;
        }
        p {
            color: #555;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
`;
<div id="tutorialModal">
    <div class="modal-content">
        <h2>Welcome to Erath!</h2>
        <p>Erath is a powerful platform that allows you to easily host and share your web pages. Follow these steps to get started:</p>
        <ol>
            <li><strong>Paste Your HTML Code:</strong> In the textarea, paste your HTML code that you want to host.</li>
            <li><strong>Submit Your Code:</strong> Click the "Erath" button to process your input.</li>
            <li><strong>Get Your Link:</strong> After submission, you will receive a link to your hosted page.</li>
            <li><strong>View Your Web Page:</strong> Click the link to view and share your page.</li>
        </ol>
        
        <h3>What Erath Offers</h3>
        <ul>
            <li><strong>Instant Hosting:</strong> Simply paste your HTML code and get a live link to your web page in seconds.</li>
            <li><strong>Easy Sharing:</strong> Share your hosted pages with anyone, anywhere in the world.</li>
            <li><strong>No Setup Required:</strong> Erath takes care of the hosting infrastructure, so you can focus on creating your content.</li>
            <li><strong>AI Writing Assistance:</strong> Select a prompt from the editor to get started with AI writing and enhance your web pages.</li>
        </ul>
        
        <h3>AI Writing Assistance</h3>
        <ul>
            <li><strong>Brainstorm Ideas:</strong> Get inspiration for your web content with AI-generated ideas and prompts.</li>
            <li><strong>Improve Writing:</strong> Use AI to refine and enhance your writing, ensuring it's engaging and effective.</li>
            <li><strong>Save Time:</strong> AI writing assistance speeds up the content creation process, allowing you to focus on other aspects of your web development.</li>
        </ul>
        
        <button id="closeBtn">Got It!</button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to set a cookie
        function setCookie(name, value, days) {
            const d = new Date();
            d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = "expires=" + d.toUTCString();
            document.cookie = name + "=" + value + ";" + expires + ";path=/";
        }

        // Function to get a cookie
        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // Show the tutorial modal on first visit
        if (!getCookie('tutorialShown')) {
            document.getElementById('tutorialModal').style.display = 'flex';
        }

        document.getElementById('closeBtn').onclick = function() {
            setCookie('tutorialShown', 'true', 30); // Set cookie for 30 days
            document.getElementById('tutorialModal').style.display = 'none';
        };
    });
</script>