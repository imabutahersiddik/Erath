<!-- AI Conversation Modal -->
<div class="modal fade" id="aiConversationModal" tabindex="-1" role="dialog" aria-labelledby="aiConversationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 800px;">
        <div class="aimodal-content">
            <div class="aimodal-header">
                <h5>AI Conversation</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="search-form-group">
                <label for="aiSelect">Select AI Model:</label>
                <select id="aiSelect">
                    <option value="gemini">Gemini</option>
                    <option value="mistral" selected>Mistral</option>
                </select>
            </div>
            <div class="search-form-group">
                <label for="apiKeyInput">API Key:</label>
                <input type="text" id="apiKeyInput" placeholder="Paste your API key here..." />
            </div>
            <nav>
                <h5>Recent Conversations</h5>
                <div class="conversation-list" id="conversationList">
                    <!-- Conversations will be dynamically added here -->
                </div>
                <div class="aipagination">
                    <button id="prevPageButton" style="display: none;">Previous</button>
                    <button id="nextPageButton" style="display: none;">Next</button>
                </div>
            </nav>
            <div class="search-form-group">
                <input type="text" id="promptSearch" placeholder="Search prompts..." />
                <span class="close-button" id="closePromptButton">&times;</span>
            </div>
            <div id="promptContainer" class="d-flex flex-wrap mb-3">
                <div class="prompt-item" data-prompt="How's the weather today?">Weather</div>
                <div class="prompt-item" data-prompt="Tell me a joke.">Joke</div>
                <div class="prompt-item" data-prompt="What's the latest news?">News</div>
                <div class="prompt-item" data-prompt="Give me a recipe.">Recipe</div>
            </div>
            <div id="conversationContainer" style="display: none;">
                <div class="aimodal-header">
                    <input type="text" id="conversationTitle" class="edit-title" />
                    <button id="closeConversationButton" class="close-button">Close</button>
                </div>
                <div id="conversationMessages">
                    <!-- Messages will be dynamically added here -->
                </div>
                <div class="input-group">
                    <textarea id="messageInput" rows="3" placeholder="Type your message..."></textarea>
                    <button id="sendMessageButton"><i class="fas fa-paper-plane"></i> Send</button>
                    <button id="swapAIButton"><i class="fas fa-exchange-alt"></i> Swap AI</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let conversations = [];
    let currentConversation = null;
    let currentAI = 'mistral'; // Default AI model
    const conversationsPerPage = 5; // Number of conversations to show per page
    let currentPage = 1; // Current page number

// Close aimodal
document.getElementById('closeaimodalButton').addEventListener('click', closeModal);

// Close modal on clicking outside of it
window.addEventListener('click', function(event) {
    const modal = document.getElementById('aiConversationModal');
    if (event.target === modal) {
        closeModal();
    }
});

// Function to close the modal
function closeModal() {
    document.getElementById('aiConversationModal').style.display = 'none';
}

// Close prompt section
document.getElementById('closePromptButton').addEventListener('click', function() {
    document.getElementById('promptContainer').style.display = 'none';
});

// Close conversation
document.getElementById('closeConversationButton').addEventListener('click', function() {
    document.getElementById('conversationContainer').style.display = 'none';
    document.getElementById('promptContainer').style.display = 'block'; // Show prompt list again
});

const handleItemClick = (event) => {
    event.stopPropagation();
    // Handle your item click logic here
};

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
    document.getElementById('sendMessageButton').addEventListener('click', async function() {
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
            document.getElementById('conversationMessages').innerHTML += `<div style="color: red;"><strong>Error:</strong> ${error.message}</div>`;
        }
    });

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

    // Load conversations on page load
    loadConversationsFromStorage();
</script>
<script>
// Create a style element
const style = document.createElement('style');

// Set the CSS content
style.textContent = `
.aiConversationModal {
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
            margin: 15% auto;
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
`;

// Append the style element to the head of the document
document.head.appendChild(style);
</script>