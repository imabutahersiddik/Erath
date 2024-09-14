
<script>
// Create a style element
const style = document.createElement('style');

// Set the CSS content
style.textContent = `
#aiConversationModal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .aimodal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .aimodal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .aimodal-header h5 {
            margin: 0;
            flex-grow: 1;
        }
        .search-form-group {
            margin-bottom: 15px;
        }
        .conversation-list {
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .conversation-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }
        .delete-icon {
            display: none;
            cursor: pointer;
            color: red;
        }
        .conversation-item:hover .delete-icon {
            display: inline;
        }
        #conversationMessages {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .prompt-item {
            margin: 5px;
            padding: 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            cursor: pointer;
        }
        .prompt-item:hover {
            background-color: #007bff;
            color: white;
        }
        .input-group {
            display: flex;
            margin-top: 10px;
        }
        #messageInput {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
        }
        .response-item {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
        }
        .response-item button {
            margin-left: 10px;
            background-color: #dc3545; /* Red for delete */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
        }
        .response-item button:hover {
            background-color: #c82333; /* Darker red on hover */
        }
        .edit-title {
            flex-grow: 1;
            border: none;
            padding: 5px;
            font-size: 16px;
            outline: none;
        }
        #swapAIButton {
            margin-left: 10px;
        }
        .aipagination {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .error-message {
            color: red;
        }
        /* Style for the main AI conversation div */
        #aiConversationDiv {
            display: none; /* Initially hidden */
            position: fixed; /* Fixed position */
            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Adjust for centering */
            width: 80%; /* Width of the div */
            max-width: 600px; /* Max width */
            background-color: white; /* Background color */
            border: 1px solid #ccc; /* Border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow */
            z-index: 1050; /* Ensure it appears above other content */
            padding: 20px; /* Padding inside the div */
            border-radius: 5px; /* Rounded corners */
        }

        /* Style for the overlay */
        #overlay {
            display: none; /* Initially hidden */
            position: fixed; /* Fixed position */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            z-index: 1040; /* Ensure it appears below the visible div */
        }

        /* Style for the prompts div */
        #promptsDiv {
            display: none; /* Initially hidden */
            position: fixed; /* Fixed position */
            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Adjust for centering */
            width: 80%; /* Width of the div */
            max-width: 600px; /* Max width */
            background-color: white; /* Background color */
            border: 1px solid #ccc; /* Border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow */
            z-index: 1050; /* Ensure it appears above other content */
            padding: 20px; /* Padding inside the div */
            border-radius: 5px; /* Rounded corners */
        }
`;

// Append the style element to the head of the document
document.head.appendChild(style);
</script>
<!-- AI Conversation Modal -->
<!-- Overlay -->
<div id="overlay"></div>

<!-- Main AI Conversation Div -->
<div id="aiConversationModal">
    <div class="aimodal-header">
        <h5>AI Conversation</h5>
        <button type="button" class="close" onclick="closeDiv()">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="search-form-group">
        <label for="aiSelect">Select AI Model:</label>
        <select id="aiSelect">
            <option value="gemini">Gemini</option>
            <option value="mistral" selected="selected">Mistral</option>
        </select>
    </div>
    <div class="search-form-group">
        <label for="apiKeyInput">API Key:</label>
        <input type="text" id="apiKeyInput" placeholder="Paste your API key here...">
    </div>
    <nav>
    <!-- Button to show the prompts div -->
<button type="button" class="btn btn-secondary" id="showPromptsButton">Open AI Prompts</button>
        <h5>Recent Conversations</h5>
        <div class="conversation-list" id="conversationList">
            <!-- Conversations will be dynamically added here -->
        </div>
        <div class="aipagination">
            <button id="prevPageButton" style="display: none;">Previous</button>
            <button id="nextPageButton" style="display: none;">Next</button>
        </div>
    </nav>
    <div id="conversationContainer" style="display: none;">
        <div class="aimodal-header">
            <input type="text" id="conversationTitle" class="edit-title">
            <button id="closeConversationButton" class="close-button" onclick="closeConversation()">Close</button>
        </div>
        <div id="conversationMessages">
            <!-- Messages will be dynamically added here -->
        </div>
        <div class="input-group">
            <textarea id="messageInput" rows="3" placeholder="Type your message..."></textarea>
            <button id="sendMessageButton" onclick="sendMessage()">Send</button>
            <button id="swapAIButton">Swap AI</button>
        </div>
        <div id="errorContainer" class="error-message"></div>
    </div>
</div>

<!-- Prompts Div -->
<div id="promptsDiv">
    <div class="aimodal-header">
        <h5>AI Prompts</h5>
        <button type="button" class="close" onclick="closePromptsDiv()">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="search-form-group">
        <input type="text" id="promptSearch" placeholder="Search prompts..." onkeyup="filterPrompts()">
        <span class="close-button" id="closePromptButton" onclick="closePromptContainer()">×</span>
    </div>
    <div id="promptContainer" class="d-flex flex-wrap mb-3">
        <div class="prompt-item" data-prompt="How's the weather today?">Weather</div>
        <div class="prompt-item" data-prompt="Tell me a joke.">Joke</div>
        <div class="prompt-item" data-prompt="What's the latest news?">News</div>
        <div class="prompt-item" data-prompt="Give me a recipe.">Recipe</div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Show the AI conversation div and overlay when the button is clicked
        $('#aiConModal').on('click', function() {
            $('#aiConversationModal').fadeIn(); // Show the content div
            $('#overlay').fadeIn(); // Show the overlay
        });

        // Show the prompts div and overlay when the button is clicked
        $('#showPromptsButton').on('click', function() {
            $('#promptsDiv').fadeIn(); // Show the prompts div
            $('#overlay').fadeIn(); // Show the overlay
        });

        // Function to close the AI conversation div and overlay
        window.closeDiv = function() {
            $('#aiConversationModal').fadeOut(); // Hide the content div
            $('#overlay').fadeOut(); // Hide the overlay
        };

        // Function to close the prompts div and overlay
        window.closePromptsDiv = function() {
            $('#promptsDiv').fadeOut(); // Hide the prompts div
            $('#overlay').fadeOut(); // Hide the overlay
        };

        // Hide the divs and overlay when the overlay is clicked
        $('#overlay').on('click', function() {
            closeDiv(); // Hide the AI conversation div
            closePromptsDiv(); // Hide the prompts div
        });
    });

    // Function to filter prompts based on user input
    function filterPrompts() {
        const searchInput = document.getElementById('promptSearch').value.toLowerCase();
        const prompts = document.querySelectorAll('.prompt-item');

        prompts.forEach(prompt => {
            const promptText = prompt.textContent.toLowerCase();
            const promptData = prompt.getAttribute('data-prompt').toLowerCase(); // Get data-prompt attribute
            if (promptText.includes(searchInput) || promptData.includes(searchInput)) {
                prompt.style.display = 'block'; // Show matching prompts
            } else {
                prompt.style.display = 'none'; // Hide non-matching prompts
            }
        });
    }

    // Function to close the prompt container (if needed)
    function closePromptContainer() {
        $('#promptContainer').fadeOut(); // Hide the prompt container
    }
</script>
<script>
    let conversations = [];
    let currentConversation = null;
    let currentAI = 'mistral'; // Default AI model
    const conversationsPerPage = 5; // Number of conversations to show per page
    let currentPage = 1; // Current page number

    // Close modal
    function closeModal() {
        document.getElementById('aiConversationModal').style.display = 'none';
    }

    // Close prompt section
    function closePromptContainer() {
        document.getElementById('promptContainer').style.display = 'none';
    }

    // Close conversation
    function closeConversation() {
        document.getElementById('conversationContainer').style.display = 'none';
        document.getElementById('promptContainer').style.display = 'block'; // Show prompt list again
    }

    // Load conversations from local storage
    function loadConversationsFromStorage() {
        const storedConversations = JSON.parse(localStorage.getItem('conversations')) || [];
        conversations = storedConversations;
        renderConversations();
    }

    // Render conversations with pagination
    function renderConversations() {
        const conversationList = document.getElementById('conversationList');
        conversationList.innerHTML = '';

        const startIndex = (currentPage - 1) * conversationsPerPage;
        const endIndex = startIndex + conversationsPerPage;
        const conversationsToRender = conversations.slice(startIndex, endIndex);

        conversationsToRender.forEach((conv, index) => {
            const convItem = document.createElement('div');
            convItem.className = 'conversation-item';
            convItem.innerHTML = `
                <span onclick="openConversation(${startIndex + index})">${conv.title}</span>
                <div>
                    <i class="fas fa-trash delete-icon" onclick="deleteConversation(${startIndex + index})"></i>
                </div>
            `;
            conversationList.appendChild(convItem);
        });

        // Show or hide pagination buttons
        document.getElementById('prevPageButton').style.display = currentPage > 1 ? 'inline-block' : 'none';
        document.getElementById('nextPageButton').style.display = endIndex < conversations.length ? 'inline-block' : 'none';
    }

    // Previous page button
    document.getElementById('prevPageButton').addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            renderConversations();
        }
    });

    // Next page button
    document.getElementById('nextPageButton').addEventListener('click', function() {
        if (currentPage * conversationsPerPage < conversations.length) {
            currentPage++;
            renderConversations();
        }
    });

    // Open a conversation for continuing
    function openConversation(index) {
        currentConversation = conversations[index];
        document.getElementById('conversationTitle').value = currentConversation.title;
        document.getElementById('conversationMessages').innerHTML = '';
        currentConversation.messages.forEach(msg => {
            const msgDiv = document.createElement('div');
            msgDiv.className = 'response-item';
            msgDiv.innerHTML = `
                <strong>${msg.role.charAt(0).toUpperCase() + msg.role.slice(1)}:</strong> ${msg.content}
                <button onclick="editResponse(${index}, '${msg.role}', '${msg.content}')"><i class="fas fa-edit"></i></button>
                <button onclick="deleteResponse(${index}, '${msg.role}', '${msg.content}')"><i class="fas fa-trash"></i></button>
            `;
            document.getElementById('conversationMessages').appendChild(msgDiv);
        });
        document.getElementById('conversationContainer').style.display = 'block';
        document.getElementById('promptContainer').style.display = 'none';
    }

    // Start a new conversation
    document.querySelectorAll('.prompt-item').forEach(item => {
        item.addEventListener('click', function() {
            const prompt = this.getAttribute('data-prompt');
            const title = `${prompt} - ${new Date().toLocaleString()}`;
            currentConversation = { title, messages: [] };
            conversations.push(currentConversation);
            document.getElementById('conversationTitle').value = title;
            document.getElementById('conversationContainer').style.display = 'block';
            document.getElementById('promptContainer').style.display = 'none';
            document.getElementById('conversationMessages').innerHTML = `<div><strong>${prompt}</strong></div>`;
            renderConversations();
        });
    });

    // Send message
    async function sendMessage() {
        const messageInput = document.getElementById('messageInput');
        const userMessage = messageInput.value.trim();
        if (!userMessage) return;

        // Add user message to conversation
        currentConversation.messages.push({ role: 'user', content: userMessage });
        document.getElementById('conversationMessages').innerHTML += `<div><strong>You:</strong> ${userMessage}</div>`;
        messageInput.value = '';

        // Get the selected AI model and API key
        const apiKey = document.getElementById('apiKeyInput').value.trim();
        currentAI = document.getElementById('aiSelect').value;

        // Generate AI response
        let aiResponse = '';
        try {
            if (currentAI === 'gemini') {
                aiResponse = await generateTextWithGemini(userMessage, apiKey);
            } else if (currentAI === 'mistral') {
                aiResponse = await generateTextWithMistral(userMessage, apiKey);
            }
            currentConversation.messages.push({ role: 'ai', content: aiResponse });
            document.getElementById('conversationMessages').innerHTML += `<div><strong>AI:</strong> ${aiResponse}</div>`;
            renderConversations();
            saveConversationsToStorage();
        } catch (error) {
            console.error('Error generating AI response:', error);
            document.getElementById('errorContainer').innerText = `Error: ${error.message}`;
        }
    }

    // Edit user or AI response
    function editResponse(convIndex, role, content) {
        const newContent = prompt("Edit your message:", content);
        if (newContent) {
            conversations[convIndex].messages = conversations[convIndex].messages.map(msg => {
                if (msg.role === role && msg.content === content) {
                    return { ...msg, content: newContent };
                }
                return msg;
            });
            renderConversations();
            loadConversationMessages(convIndex);
            saveConversationsToStorage();
        }
    }

    // Delete user or AI response
    function deleteResponse(convIndex, role, content) {
        conversations[convIndex].messages = conversations[convIndex].messages.filter(msg => !(msg.role === role && msg.content === content));
        renderConversations();
        loadConversationMessages(convIndex);
        saveConversationsToStorage();
    }

    // Delete conversation
    function deleteConversation(index) {
        conversations.splice(index, 1);
        renderConversations();
        saveConversationsToStorage();
    }

    // Load conversation messages
    function loadConversationMessages(index) {
        const messagesContainer = document.getElementById('conversationMessages');
        messagesContainer.innerHTML = '';
        conversations[index].messages.forEach(msg => {
            const msgDiv = document.createElement('div');
            msgDiv.className = 'response-item';
            msgDiv.innerHTML = `
                <strong>${msg.role.charAt(0).toUpperCase() + msg.role.slice(1)}:</strong> ${msg.content}
                <button onclick="editResponse(${index}, '${msg.role}', '${msg.content}')"><i class="fas fa-edit"></i></button>
                <button onclick="deleteResponse(${index}, '${msg.role}', '${msg.content}')"><i class="fas fa-trash"></i></button>
            `;
            messagesContainer.appendChild(msgDiv);
        });
    }

    // Save conversations to local storage
    function saveConversationsToStorage() {
        localStorage.setItem('conversations', JSON.stringify(conversations));
    }

    // AI generation functions
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
                return "No text generated.";
            }
        } catch (error) {
            throw new Error(`Failed to fetch from Gemini API: ${error.message}`);
        }
    }

    async function generateTextWithMistral(prompt, apiKey) {
        const url = 'https://api.mistral.ai/v1/chat/completions';

        const data = {
            model: 'mistral-large-latest',
            messages: [
                { role: 'user', content: prompt }
            ]
        };

        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${apiKey}`,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });

            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(`Mistral API error: ${errorData.error.message || response.statusText}`);
            }

            const responseData = await response.json();
            return responseData.choices[0].message.content || "No text generated.";
        } catch (error) {
            throw new Error("Error calling Mistral API: " + error.message);
        }
    }

    // Filter prompts based on user input
    function filterPrompts() {
        const searchTerm = document.getElementById('promptSearch').value.toLowerCase();
        const promptItems = document.querySelectorAll('.prompt-item');
        promptItems.forEach(item => {
            const promptText = item.textContent.toLowerCase();
            item.style.display = promptText.includes(searchTerm) ? 'block' : 'none';        });
    }

    // Load conversations on page load
    loadConversationsFromStorage();
</script>