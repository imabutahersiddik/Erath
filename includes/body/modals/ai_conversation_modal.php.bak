<script>
// Create a style element
const style = document.createElement('style');

// Set the CSS content
style.textContent = `
#aiConversationDiv {
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
<div id="aiConversationDiv">
    <div class="aimodal-header">
        <h5>AI Conversation</h5>
        <button type="button" class="close" onclick="closeDiv()">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="search-form-group">
        <label for="aiSelect">Select AI Model:</label>
        <select id="aiSelect">
            <option value="mistral" selected="selected">Mistral</option>
            <option value="gemini">Gemini</option>
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
        <div class="prompt-item" data-prompt="Create a meal planner app that helps users organize their weekly meals based on dietary preferences and available ingredients. Include a shopping list feature.">Meal Planner App</div>

<div class="prompt-item" data-prompt="Develop a personal finance tracker that allows users to input their income and expenses, categorize them, and visualize their spending habits with charts.">Personal Finance Tracker</div>

<div class="prompt-item" data-prompt="Design a community garden management system that connects local gardeners, allows them to share tips, and coordinate planting schedules.">Community Garden Management</div>

<div class="prompt-item" data-prompt="Build a time management tool that helps users prioritize tasks using the Eisenhower Matrix and integrates with their calendar for reminders.">Time Management Tool</div>

<div class="prompt-item" data-prompt="Create a mental health journal app that prompts users with daily questions, tracks their mood, and provides resources for self-care.">Mental Health Journal</div>

<div class="prompt-item" data-prompt="Develop a recipe sharing platform where users can upload, rate, and comment on recipes, with a focus on healthy eating and dietary restrictions.">Recipe Sharing Platform</div>

<div class="prompt-item" data-prompt="Design a local event finder app that aggregates community events based on user interests and location, with RSVP and reminder features.">Local Event Finder</div>

<div class="prompt-item" data-prompt="Create a home inventory management system that helps users track their belongings, manage warranties, and schedule maintenance reminders.">Home Inventory Management</div>

<div class="prompt-item" data-prompt="Build a digital decluttering tool that guides users through organizing their files and emails, offering tips and a progress tracker.">Digital Decluttering Tool</div>

<div class="prompt-item" data-prompt="Develop a language exchange platform that connects users wanting to learn each other's languages through video calls and messaging.">Language Exchange Platform</div>

<div class="prompt-item" data-prompt="Create a smart grocery list app that uses AI to suggest recipes based on the items in your pantry and generates a shopping list for missing ingredients.">Smart Grocery List App</div>

<div class="prompt-item" data-prompt="Develop a customizable wellness tracker that allows users to set personal health goals, log their progress, and receive tailored tips and reminders based on their habits.">Customizable Wellness Tracker</div>

<div class="prompt-item" data-prompt="Design an eco-friendly product finder that helps users locate sustainable and ethically sourced products in their area, complete with user reviews and ratings.">Eco-Friendly Product Finder</div>

<div class="prompt-item" data-prompt="Build a neighborhood skill-sharing platform where users can offer and request services, such as tutoring, gardening, or handyman work, fostering community connections.">Neighborhood Skill-Sharing Platform</div>

<div class="prompt-item" data-prompt="Create an interactive family calendar app that allows family members to share events, set reminders, and coordinate schedules in real-time, with a focus on family bonding.">Interactive Family Calendar</div>

<div class="prompt-item" data-prompt="Develop a digital pet care assistant that helps pet owners track vaccinations, appointments, and dietary needs, while offering reminders and tips for pet health.">Digital Pet Care Assistant</div>

<div class="prompt-item" data-prompt="Design a travel planning app that curates personalized itineraries based on user preferences, budget, and travel history, integrating local experiences and hidden gems.">Personalized Travel Planner</div>

<div class="prompt-item" data-prompt="Build a volunteer matching platform that connects users with local non-profits based on their skills and interests, facilitating community engagement and support.">Volunteer Matching Platform</div>

<div class="prompt-item" data-prompt="Create a digital home maintenance scheduler that reminds homeowners about seasonal tasks, provides DIY guides, and connects them with local service providers.">Home Maintenance Scheduler</div>

<div class="prompt-item" data-prompt="Develop a community recipe swap app that allows users to exchange homemade meals with neighbors, promoting local food sharing and reducing food waste.">Community Recipe Swap</div>

<div class="prompt-item" data-prompt="Create a virtual wardrobe organizer that allows users to upload photos of their clothing, mix and match outfits, and receive suggestions based on weather and occasion.">Virtual Wardrobe Organizer</div>

<div class="prompt-item" data-prompt="Develop an AI-driven meal prep assistant that generates weekly meal prep plans, provides shopping lists, and offers cooking tutorials based on user dietary restrictions and preferences.">AI Meal Prep Assistant</div>

<div class="prompt-item" data-prompt="Design a personal sustainability tracker that helps users monitor their carbon footprint, set eco-friendly goals, and provides tips for reducing waste in daily life.">Personal Sustainability Tracker</div>

<div class="prompt-item" data-prompt="Build a collaborative book club platform that connects readers, facilitates discussions, and organizes virtual meetings, complete with reading lists and member reviews.">Collaborative Book Club Platform</div>

<div class="prompt-item" data-prompt="Create a neighborhood safety app that allows users to report local incidents, share safety tips, and receive alerts about nearby emergencies or hazards.">Neighborhood Safety App</div>

<div class="prompt-item" data-prompt="Develop a family budgeting tool that helps families track expenses, set savings goals, and visualize their financial health with engaging graphs and reports.">Family Budgeting Tool</div>

<div class="prompt-item" data-prompt="Design a home energy efficiency app that analyzes energy consumption patterns, suggests improvements, and connects users with local energy-saving programs and incentives.">Home Energy Efficiency App</div>

<div class="prompt-item" data-prompt="Build a digital gratitude journal that prompts users to reflect on daily positives, track their mood over time, and share their gratitude with a supportive community.">Digital Gratitude Journal</div>

<div class="prompt-item" data-prompt="Create a local history exploration app that allows users to discover and share historical facts, photos, and stories about their neighborhoods, fostering community pride.">Local History Exploration App</div>

<div class="prompt-item" data-prompt="Develop a mental wellness chatbot that provides users with mindfulness exercises, coping strategies, and resources based on their emotional state and preferences.">Mental Wellness Chatbot</div>

<div class="prompt-item" data-prompt="Create a decentralized community marketplace that allows users to buy, sell, or trade goods and services locally, with a focus on sustainability and reducing carbon footprints.">Decentralized Community Marketplace</div>

<div class="prompt-item" data-prompt="Develop a personalized learning platform that uses AI to adapt educational content and resources to individual learning styles, preferences, and progress, making education more accessible.">Personalized Learning Platform</div>

<div class="prompt-item" data-prompt="Design a mental health support network app that connects users with trained volunteers for peer support, offers self-help resources, and promotes mental wellness activities.">Mental Health Support Network</div>

<div class="prompt-item" data-prompt="Build a gamified fitness app that encourages users to complete daily physical challenges, track their progress, and earn rewards while fostering a sense of community through team challenges.">Gamified Fitness App</div>

<div class="prompt-item" data-prompt="Create a virtual event platform that allows users to host and attend interactive workshops, webinars, and social events with features for networking, Q&A, and real-time feedback.">Virtual Event Platform</div>

<div class="prompt-item" data-prompt="Develop a food waste reduction app that connects users with local restaurants and grocery stores to offer surplus food at discounted prices, promoting sustainability and community support.">Food Waste Reduction App</div>

<div class="prompt-item" data-prompt="Design a digital citizenship education platform that provides resources and interactive modules on online safety, privacy, and responsible digital behavior for all age groups.">Digital Citizenship Education Platform</div>

<div class="prompt-item" data-prompt="Build a personal productivity assistant that integrates with calendars and task management tools to analyze user habits and suggest personalized strategies for improving focus and efficiency.">Personal Productivity Assistant</div>

<div class="prompt-item" data-prompt="Create a community-driven travel guide app that allows users to share hidden gems, travel tips, and itineraries, fostering a sense of exploration and connection among travelers.">Community-Driven Travel Guide</div>

<div class="prompt-item" data-prompt="Develop a neighborhood wellness initiative platform that connects users with local health resources, fitness classes, and wellness events, promoting healthy living within the community.">Neighborhood Wellness Initiative</div>

<div class="prompt-item" data-prompt="Create a mental health companion app that uses AI to provide personalized coping strategies, mindfulness exercises, and connects users with licensed therapists for virtual support.">Mental Health Companion App</div>

<div class="prompt-item" data-prompt="Develop a community-driven disaster preparedness platform that provides resources, checklists, and local emergency contacts, enabling neighborhoods to collectively prepare for natural disasters.">Disaster Preparedness Platform</div>

<div class="prompt-item" data-prompt="Design an inclusive fitness app that adapts workouts for users with disabilities, offering personalized training plans, virtual coaching, and community support for all fitness levels.">Inclusive Fitness App</div>

<div class="prompt-item" data-prompt="Build a smart recycling assistant that uses image recognition to educate users on proper recycling practices, track their recycling habits, and connect them with local recycling programs.">Smart Recycling Assistant</div>

<div class="prompt-item" data-prompt="Create a digital storytelling platform that allows users to share their personal stories and experiences through multimedia, fostering empathy and understanding within diverse communities.">Digital Storytelling Platform</div>

<div class="prompt-item" data-prompt="Develop a local food sourcing app that connects consumers directly with local farmers and food producers, promoting farm-to-table practices and reducing food miles.">Local Food Sourcing App</div>

<div class="prompt-item" data-prompt="Design a personal finance education platform that gamifies financial literacy, helping users learn about budgeting, investing, and saving through interactive challenges and community support.">Personal Finance Education Platform</div>

<div class="prompt-item" data-prompt="Build a virtual mentorship network that connects youth with professionals in their fields of interest, providing guidance, resources, and opportunities for career exploration.">Virtual Mentorship Network</div>

<div class="prompt-item" data-prompt="Create a neighborhood art and culture exchange platform that allows users to showcase local artists, organize events, and promote cultural appreciation within their communities.">Neighborhood Art and Culture Exchange</div>

<div class="prompt-item" data-prompt="Develop a holistic wellness platform that integrates physical, mental, and emotional health resources, offering personalized plans and community support for overall well-being.">Holistic Wellness Platform</div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Show the AI conversation div and overlay when the button is clicked
        $('#showDivButton').on('click', function() {
            $('#aiConversationDiv').fadeIn(); // Show the content div
            $('#overlay').fadeIn(); // Show the overlay
        });

        // Show the prompts div and overlay when the button is clicked
        $('#showPromptsButton').on('click', function() {
            $('#promptsDiv').fadeIn(); // Show the prompts div
            $('#overlay').fadeIn(); // Show the overlay
        });

        // Function to close the AI conversation div and overlay
        window.closeDiv = function() {
            $('#aiConversationDiv').fadeOut(); // Hide the content div
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
            const generatedText = responseData.candidates[0].content.parts[0].text || "No text generated.";
            typeWriter(generatedText, document.getElementById('aiOutput'));
        } else {
            throw new Error("No text generated.");
        }
    } catch (error) {
        document.getElementById('error-message').innerText = error.message;
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
        const generatedText = responseData.choices[0].message.content || "No text generated.";
        typeWriter(generatedText, document.getElementById('aiOutput'));
        
    } catch (error) {
        document.getElementById('error-message').innerText = "Error calling Mistral API: " + error.message;
    }
}

    // Filter prompts based on search input
    document.getElementById('promptSearch').addEventListener('input', filterPrompts);

    // Function to filter prompts
    function filterPrompts() {
        const searchValue = document.getElementById('promptSearch').value.toLowerCase();
        document.querySelectorAll('.prompt-item').forEach(item => {
            const promptText = item.textContent.toLowerCase();
            item.style.display = promptText.includes(searchValue) ? 'block' : 'none';
        });
    }

    // Swap AI model functionality
    document.getElementById('swapAIButton').addEventListener('click', function() {
        const aiSelectContainer = document.getElementById('aiSelectContainer');
        aiSelectContainer.style.display = aiSelectContainer.style.display === 'block' ? 'none' : 'block';
    });

    // Confirm AI model swap
    document.getElementById('confirmSwapButton').addEventListener('click', function() {
        const selectedModel = document.getElementById('aiModelSelect').value;
        document.getElementById('aiSelect').value = selectedModel; // Update main AI select dropdown
        document.getElementById('aiSelectContainer').style.display = 'none'; // Hide the swap model dropdown
    });

    // Load conversations on page load
    loadConversationsFromStorage();
</script>