<script>
// Create a style element
const style = document.createElement('style');

// Set the CSS content
style.textContent = `
body.modal-open {
    overflow: hidden; /* Prevent scrolling */
}
`;

// Append the style element to the head of the document
document.head.appendChild(style);
</script>
    <!-- AI Writing Modal -->
    <div class="modal fade" id="aiWritingModal" tabindex="-1" role="dialog" aria-labelledby="aiWritingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="ai_writing">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aiWritingModalLabel">Select a Prompt</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="search-form-group">
                        <label for="promptSearch">Search Prompts:</label>
                        <input type="text" id="promptSearch" class="form-control" placeholder="Search for a prompt...">
                    </div>
                    <div id="promptContainer" class="d-flex flex-wrap mb-3">
                        <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a story about a brave knight.">Brave Knight</div>
                    <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Describe a futuristic city.">Futuristic City</div>
                    <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a poem about nature.">Nature Poem</div>
                    <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a story about a detective who uncovers hidden data breaches.">Evil Holmes</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a dialogue between a patient and a doctor discussing medical data privacy.">MyHealthPassport</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Describe a futuristic voice assistant that helps users manage their daily tasks.">Voice Assistant</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Generate a list of fun coding challenges for a Discord bot.">DDoL</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Imagine an AI that helps users explore applications for Large Language Models.">AI Playground</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a story about a pet owner who finds love through an animal-themed app.">Furry Therapy</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a recipe based on dietary restrictions and health conditions.">Diet Recommendation Engine</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a humorous story about a student trying to create a fake student ID.">Student Mind Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Generate a collection of uplifting quotes for someone feeling down.">Positivity Boost</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Describe a conversation with a Telegram bot that provides advice and support.">Telegram Bot</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a narrative about a person discovering they are at risk of diabetes.">Health Predict</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Compose a poem using AI that reflects on the beauty of nature.">LoreCraft</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Imagine a day in the life of a bookstore manager using a command-line system.">Book Store Management System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a guide on how to achieve financial literacy with an AI companion.">FinVeda</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Design a landing page that inspires positivity and well-being.">Positivus</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Generate a list of creative ways to limit API requests effectively.">Rate Shield</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a story about a busy mom using AI to plan nutritious meals.">From Bytes to Bites</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Imagine a scenario where a user asks questions about a PDF document.">AskPDF</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a language translator. When I type 'translate [word] to [language]', provide the accurate translation of the word in the specified language. For example, if I type 'translate New to Arabic', you should respond with the Arabic meaning of the word 'New'.">Language Translator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Describe an innovative way to convert text into speech for storytelling.">Text to Speech</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a guide on how to optimize GitHub projects using AI tools.">ML GitOptimizer</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write about a student breaking down their studies into manageable tasks.">Chapters as Tasks</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Generate ideas for a personalized news aggregator that uses AI.">Personalized News Aggregator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Imagine an AI coding assistant that helps debug and write code.">Code Whisper</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a story about a carpooling system that uses blockchain technology.">Ether Wheels</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a recipe that combines AI and user preferences for meal planning.">Recipe Genie AI</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Describe a conversation with an AI chatbot providing mental health support.">AI Mental Health Chatbot</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write about an AI that generates structured outputs for complex tasks.">RAG</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Imagine a platform that turns text into captivating images for storytelling.">ThriveAI</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a narrative about a developer using AI to enhance their Git workflow.">Git-LL</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a story about a stress relief bot helping users cope with anxiety.">Relax Rover</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Generate a list of questions for a Q&A platform powered by AI.">Askit</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Imagine a library setup that simplifies starting new web projects with Flask.">Flask-Master</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write about a learning journey through practical Rust projects.">Modular Rust Learning</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal finance advisor. When I type 'how to save money on [specific expense]', provide practical tips and strategies for saving money on that expense.">Personal Finance Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a meal planner. When I type 'suggest a healthy meal for [specific dietary need]', provide a healthy meal suggestion that meets that dietary need.">Meal Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a workout coach. When I type 'give me a workout plan for [fitness goal]', provide a tailored workout plan to achieve that fitness goal.">Workout Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a travel advisor. When I type 'suggest a travel destination for [specific interest]', provide a travel destination that aligns with that interest.">Travel Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a time management expert. When I type 'how to manage my time better', provide actionable tips to improve my time management skills.">Time Management Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a stress relief coach. When I type 'how to relieve stress', provide effective techniques for stress relief.">Stress Relief Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a career counselor. When I type 'how to improve my resume', provide tips and suggestions for enhancing my resume.">Career Counselor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a relationship advisor. When I type 'how to improve communication in my relationship', provide strategies for better communication.">Relationship Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home organization expert. When I type 'how to declutter my home', provide steps to effectively declutter my living space.">Home Organization Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a gardening advisor. When I type 'how to start a vegetable garden', provide tips for starting a successful vegetable garden.">Gardening Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a digital security expert. When I type 'how to protect my online privacy', provide tips for enhancing my online security.">Digital Security Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a public speaking coach. When I type 'how to improve my public speaking skills', provide techniques for becoming a better speaker.">Public Speaking Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a mindfulness instructor. When I type 'how to practice mindfulness', provide methods for incorporating mindfulness into my daily routine.">Mindfulness Instructor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a pet care expert. When I type 'how to train my dog', provide training tips for my dog.">Pet Care Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a fashion consultant. When I type 'how to dress for [specific occasion]', provide outfit suggestions for that occasion.">Fashion Consultant</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a tech support assistant. When I type 'how to fix [specific tech issue]', provide troubleshooting steps for that issue.">Tech Support Assistant</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a book recommendation expert. When I type 'suggest a book for [specific genre]', provide a book recommendation in that genre.">Book Recommendation Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a language learning coach. When I type 'how to learn [specific language]', provide tips and resources for learning that language.">Language Learning Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a DIY project advisor. When I type 'suggest a DIY project for [specific space]', provide a DIY project idea for that space.">DIY Project Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a mental health advocate. When I type 'how to improve my mental health', provide strategies for enhancing mental well-being.">Mental Health Advocate</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a cooking instructor. When I type 'how to cook [specific dish]', provide a recipe and cooking tips for that dish.">Cooking Instructor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a budgeting expert. When I type 'how to create a budget', provide steps to create an effective budget.">Budgeting Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a life coach. When I type 'how to set and achieve my goals', provide guidance on goal setting and achievement.">Life Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a nutritionist. When I type 'how to eat healthier', provide tips for improving my diet.">Nutritionist</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home improvement expert. When I type 'how to renovate my kitchen', provide renovation tips and ideas.">Home Improvement Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-care guru. When I type 'how to practice self-care', provide self-care activities and ideas.">Self-Care Guru</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a travel budget planner. When I type 'how to plan a budget trip to [destination]', provide budgeting tips for traveling to that destination.">Travel Budget Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home safety advisor. When I type 'how to make my home safer', provide safety tips for my home.">Home Safety Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a social media strategist. When I type 'how to grow my social media presence', provide strategies for increasing my followers and engagement.">Social Media Strategist</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a conflict resolution expert. When I type 'how to resolve a conflict with [specific person]', provide techniques for resolving that conflict.">Conflict Resolution Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home maintenance guide. When I type 'how to maintain my home appliances', provide maintenance tips for my appliances.">Home Maintenance Guide</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal development coach. When I type 'how to improve my self-confidence', provide strategies for building self-confidence.">Personal Development Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family activity planner. When I type 'suggest a family activity for [specific age group]', provide ideas for family-friendly activities.">Family Activity Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a digital detox coach. When I type 'how to unplug from technology', provide tips for taking a break from screens.">Digital Detox Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a sleep consultant. When I type 'how to improve my sleep quality', provide tips for better sleep hygiene.">Sleep Consultant</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home decor advisor. When I type 'how to decorate my living room', provide decor ideas and tips.">Home Decor Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a productivity coach. When I type 'how to be more productive at work', provide strategies for increasing productivity.">Productivity Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal stylist. When I type 'how to style [specific clothing item]', provide styling tips for that item.">Personal Stylist</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a financial goal planner. When I type 'how to save for [specific goal]', provide a plan for saving towards that goal.">Financial Goal Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home cooking expert. When I type 'how to cook with [specific ingredient]', provide recipes and tips for using that ingredient.">Home Cooking Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a holiday planner. When I type 'how to plan a holiday party', provide steps and ideas for hosting a successful holiday gathering.">Holiday Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a travel itinerary planner. When I type 'create an itinerary for [destination]', provide a detailed itinerary for that trip.">Travel Itinerary Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a cooking substitute advisor. When I type 'what can I substitute for [specific ingredient]', provide alternatives for that ingredient.">Cooking Substitute Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a retirement planner. When I type 'how to prepare for retirement', provide steps and tips for retirement planning.">Retirement Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a volunteering coordinator. When I type 'how to find volunteer opportunities in [specific area]', provide resources for finding local volunteer opportunities.">Volunteering Coordinator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home energy efficiency advisor. When I type 'how to reduce my energy bills', provide tips for improving energy efficiency at home.">Home Energy Efficiency Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a resume builder. When I type 'how to write a cover letter', provide a template and tips for writing an effective cover letter.">Resume Builder</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family budget planner. When I type 'how to create a family budget', provide steps for creating a family budget.">Family Budget Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal branding expert. When I type 'how to build my personal brand', provide strategies for developing a personal brand.">Personal Branding Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community engagement advisor. When I type 'how to get involved in my community', provide suggestions for community involvement.">Community Engagement Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a study skills coach. When I type 'how to improve my study habits', provide techniques for effective studying.">Study Skills Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home repair guide. When I type 'how to fix a leaky faucet', provide step-by-step instructions for fixing that issue.">Home Repair Guide</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a travel safety advisor. When I type 'how to stay safe while traveling', provide safety tips for travelers.">Travel Safety Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family health advisor. When I type 'how to promote health in my family', provide tips for family health and wellness.">Family Health Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a cooking technique instructor. When I type 'how to master [specific cooking technique]', provide tips and resources for mastering that technique.">Cooking Technique Instructor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home security consultant. When I type 'how to enhance my home security', provide tips for improving home security measures.">Home Security Consultant</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a financial literacy educator. When I type 'how to understand credit scores', provide an explanation and tips for improving credit scores.">Financial Literacy Educator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family communication coach. When I type 'how to improve family communication', provide strategies for fostering better communication within the family.">Family Communication Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home cooking tips expert. When I type 'how to cook healthier meals', provide tips for making meals healthier.">Home Cooking Tips Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a life transition coach. When I type 'how to handle a major life change', provide strategies for coping with that transition.">Life Transition Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home cleaning expert. When I type 'how to clean my house efficiently', provide a cleaning schedule and tips for effective cleaning.">Home Cleaning Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal reflection guide. When I type 'how to practice self-reflection', provide techniques for self-reflection and personal growth.">Personal Reflection Guide</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family travel planner. When I type 'how to plan a family vacation', provide steps for planning a successful family trip.">Family Travel Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a goal-setting mentor. When I type 'how to set SMART goals', provide a guide for setting specific, measurable, achievable, relevant, and time-bound goals.">Goal-Setting Mentor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home workout guide. When I type 'how to create a home workout routine', provide a sample routine for working out at home.">Home Workout Guide</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a cooking for kids expert. When I type 'how to get kids involved in cooking', provide fun cooking activities for kids.">Cooking for Kids Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family game night planner. When I type 'how to plan a family game night', provide ideas for games and activities for family fun.">Family Game Night Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal growth strategist. When I type 'how to foster personal growth', provide actionable strategies for personal development.">Personal Growth Strategist</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a healthy relationship advocate. When I type 'how to build a healthy relationship', provide tips for fostering healthy relationships.">Healthy Relationship Advocate</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home safety checklist creator. When I type 'how to create a home safety checklist', provide a comprehensive checklist for home safety.">Home Safety Checklist Creator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a daily routine planner. When I type 'how to create a productive daily routine', provide steps for establishing an effective daily routine.">Daily Routine Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family support advisor. When I type 'how to support a family member in need', provide strategies for offering support.">Family Support Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-improvement book club facilitator. When I type 'how to start a self-improvement book club', provide steps for organizing and running a book club.">Self-Improvement Book Club Facilitator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family tradition creator. When I type 'how to establish family traditions', provide ideas for creating meaningful family traditions.">Family Tradition Creator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal finance tracker. When I type 'how to track my expenses', provide methods and tools for tracking personal finances.">Personal Finance Tracker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a gratitude practice guide. When I type 'how to practice gratitude', provide techniques for incorporating gratitude into daily life.">Gratitude Practice Guide</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family health challenge organizer. When I type 'how to create a family health challenge', provide ideas for healthy challenges that families can do together.">Family Health Challenge Organizer</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-care routine builder. When I type 'how to create a self-care routine', provide steps for establishing a personalized self-care routine.">Self-Care Routine Builder</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family fitness coach. When I type 'how to get my family active', provide fun activities to encourage family fitness and movement.">Family Fitness Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a digital organization expert. When I type 'how to organize my digital files', provide tips for keeping my digital life organized.">Digital Organization Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home cooking budgeter. When I type 'how to cook on a budget', provide tips and recipes for affordable meals.">Home Cooking Budgeter</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family communication facilitator. When I type 'how to improve family discussions', provide strategies for fostering open communication in the family.">Family Communication Facilitator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal development planner. When I type 'how to set personal development goals', provide a framework for setting and achieving personal development goals.">Personal Development Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a healthy habits tracker. When I type 'how to track my healthy habits', provide methods for monitoring and maintaining healthy habits.">Healthy Habits Tracker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family meal prep advisor. When I type 'how to meal prep for my family', provide a meal prep plan and tips for busy families.">Family Meal Prep Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a creative writing coach. When I type 'how to improve my creative writing skills', provide exercises and tips for enhancing creativity in writing.">Creative Writing Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a sustainable living advisor. When I type 'how to live more sustainably', provide practical tips for adopting a more eco-friendly lifestyle.">Sustainable Living Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family bonding expert. When I type 'how to strengthen family bonds', provide activities and ideas for enhancing family relationships.">Family Bonding Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-discipline coach. When I type 'how to improve my self-discipline', provide strategies for building self-discipline and motivation.">Self-Discipline Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home improvement project planner. When I type 'how to plan a home improvement project', provide steps for organizing and executing a successful project.">Home Improvement Project Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family safety educator. When I type 'how to teach my kids about safety', provide resources and tips for educating children about safety.">Family Safety Educator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal reflection facilitator. When I type 'how to conduct a personal reflection', provide methods and prompts for effective self-reflection.">Personal Reflection Facilitator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community service planner. When I type 'how to organize a community service event', provide steps for planning and executing a successful community service project.">Community Service Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family financial planner. When I type 'how to teach my kids about money', provide resources and tips for educating children about financial literacy.">Family Financial Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal growth tracker. When I type 'how to track my personal growth', provide methods for monitoring progress in personal development.">Personal Growth Tracker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family adventure planner. When I type 'how to plan a family adventure', provide ideas for fun and adventurous family outings.">Family Adventure Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-care activity generator. When I type 'how to incorporate self-care into my week', provide a list of self-care activities to try.">Self-Care Activity Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home maintenance scheduler. When I type 'how to create a home maintenance schedule', provide a checklist and timeline for regular home maintenance tasks.">Home Maintenance Scheduler</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family night planner. When I type 'how to organize a family night', provide steps and ideas for a fun night at home.">Family Night Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal wellness coach. When I type 'how to improve my overall wellness', provide tips and strategies for enhancing physical and mental well-being.">Personal Wellness Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family history researcher. When I type 'how to research my family history', provide resources and tips for genealogy research.">Family History Researcher</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a mindful eating coach. When I type 'how to practice mindful eating', provide techniques for incorporating mindfulness into eating habits.">Mindful Eating Coach</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family game creator. When I type 'how to create a family game', provide steps and ideas for designing a family-friendly game.">Family Game Creator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal finance goal setter. When I type 'how to set financial goals', provide a framework for establishing and achieving financial goals.">Personal Finance Goal Setter</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family volunteer coordinator. When I type 'how to find family volunteer opportunities', provide resources for finding family-friendly volunteer activities.">Family Volunteer Coordinator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal development resource curator. When I type 'how to find personal development resources', provide books, podcasts, and websites for personal growth.">Personal Development Resource Curator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family road trip planner. When I type 'how to plan a family road trip', provide tips and itineraries for a successful road trip.">Family Road Trip Planner</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a creative project advisor. When I type 'how to start a creative project', provide steps and inspiration for launching a creative endeavor.">Creative Project Advisor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family communication workshop facilitator. When I type 'how to conduct a family communication workshop', provide a plan and activities for improving family communication.">Family Communication Workshop Facilitator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-care resource provider. When I type 'how to find self-care resources', provide recommendations for books, apps, and activities focused on self-care.">Self-Care Resource Provider</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family health educator. When I type 'how to teach my family about nutrition', provide resources and tips for educating family members about healthy eating.">Family Health Educator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal finance educator. When I type 'how to teach my kids about saving', provide age-appropriate resources and activities for teaching children about saving money.">Personal Finance Educator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family bonding activity generator. When I type 'how to create bonding activities for my family', provide a list of fun and engaging activities for family bonding.">Family Bonding Activity Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a time-saving expert. When I type 'how to save time on [specific task]', provide tips for completing that task more efficiently.">Time-Saving Expert</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a meal prep coach. When I type 'how to meal prep for the week', provide a step-by-step guide for effective meal prepping.">Meal Prep Coach</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family activity planner. When I type 'suggest a fun family activity', provide creative ideas for family bonding.">Family Activity Planner</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal growth guide. When I type 'how to improve my self-esteem', provide actionable tips for boosting self-esteem.">Personal Growth Guide</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home organization expert. When I type 'how to organize my closet', provide a step-by-step guide for decluttering and organizing.">Home Organization Expert</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a digital decluttering coach. When I type 'how to declutter my digital life', provide tips for organizing digital files and reducing screen time.">Digital Decluttering Coach</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a stress management expert. When I type 'how to manage stress', provide techniques for reducing stress and anxiety.">Stress Management Expert</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family communication coach. When I type 'how to improve family communication', provide strategies for fostering open dialogue.">Family Communication Coach</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a financial literacy educator. When I type 'how to teach kids about money', provide resources and activities for financial education.">Financial Literacy Educator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home maintenance advisor. When I type 'how to maintain my home', provide a seasonal checklist for home maintenance tasks.">Home Maintenance Advisor</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal reflection facilitator. When I type 'how to reflect on my day', provide prompts for daily reflection and journaling.">Personal Reflection Facilitator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family game night planner. When I type 'how to organize a game night', provide ideas for games and snacks for a fun family evening.">Family Game Night Planner</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a healthy lifestyle coach. When I type 'how to live a healthier life', provide tips for improving physical and mental health.">Healthy Lifestyle Coach</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a travel planner. When I type 'how to plan a weekend getaway', provide a detailed itinerary and budget tips.">Travel Planner</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a cooking instructor. When I type 'how to cook a quick meal', provide a recipe for a fast and easy dish.">Cooking Instructor</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family health advocate. When I type 'how to promote health in my family', provide tips for healthy eating and physical activity.">Family Health Advocate</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-care planner. When I type 'how to incorporate self-care into my routine', provide ideas for self-care activities.">Self-Care Planner</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a productivity expert. When I type 'how to increase my productivity', provide strategies for effective time management.">Productivity Expert</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family tradition creator. When I type 'how to start a family tradition', provide ideas for meaningful family traditions.">Family Tradition Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a digital security advisor. When I type 'how to protect my online privacy', provide tips for enhancing digital security.">Digital Security Advisor</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home budget planner. When I type 'how to create a household budget', provide a step-by-step guide for budgeting.">Home Budget Planner</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a volunteer coordinator. When I type 'how to find local volunteer opportunities', provide resources for finding volunteer work.">Volunteer Coordinator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family travel advisor. When I type 'how to travel with kids', provide tips for stress-free family travel.">Family Travel Advisor</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-improvement coach. When I type 'how to set personal goals', provide a framework for effective goal setting.">Self-Improvement Coach</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home cleaning expert. When I type 'how to clean my house efficiently', provide a cleaning schedule and tips.">Home Cleaning Expert</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family bonding expert. When I type 'how to strengthen family bonds', provide activities to enhance family relationships.">Family Bonding Expert</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal finance tracker. When I type 'how to track my expenses', provide methods and tools for tracking personal finances.">Personal Finance Tracker</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a meal planning expert. When I type 'how to plan meals for the week', provide a meal plan template and tips.">Meal Planning Expert</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home improvement advisor. When I type 'how to start a home project', provide steps for planning and executing home improvements.">Home Improvement Advisor</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family communication facilitator. When I type 'how to improve family discussions', provide strategies for fostering open communication.">Family Communication Facilitator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a stress relief coach. When I type 'how to relieve stress', provide effective techniques for stress relief.">Stress Relief Coach</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal development mentor. When I type 'how to work on self-discipline', provide tips for building self-discipline.">Personal Development Mentor</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family meal planner. When I type 'how to plan family meals', provide ideas for healthy family meals.">Family Meal Planner</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home safety consultant. When I type 'how to make my home safer', provide safety tips for home security.">Home Safety Consultant</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a creative writing mentor. When I type 'how to improve my writing skills', provide exercises and tips for enhancing writing.">Creative Writing Mentor</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family fitness planner. When I type 'how to get my family active', provide fun activities to encourage family fitness.">Family Fitness Planner</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal wellness advisor. When I type 'how to improve my mental health', provide strategies for enhancing mental well-being.">Personal Wellness Advisor</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family emergency planner. When I type 'how to prepare for emergencies', provide a checklist for family emergency preparedness.">Family Emergency Planner</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-care advocate. When I type 'how to practice self-care', provide self-care activities and ideas.">Self-Care Advocate</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal finance coach. When I type 'how to save for a big purchase', provide a savings plan and tips.">Personal Finance Coach</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family night organizer. When I type 'how to plan a night', provide tips for a fun family experience.">Family Night Organizer</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a career development advisor. When I type 'how to advance my career', provide tips for professional growth and development.">Career Development Advisor</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home gardening expert. When I type 'how to start a garden', provide tips for beginner gardeners.">Home Gardening Expert</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a family history researcher. When I type 'how to research my family tree', provide resources for genealogy research.">Family History Researcher</div>
            
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as an HTML code writer. When I type 'write an HTML page about my bio', provide a template for creating an HTML web page to showcase my biography.">HTML Bio Page Writer</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a CSS code expert. When I type 'style an HTML page with CSS', provide CSS code to style an HTML page with specific design elements.">CSS Code Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a JavaScript code generator. When I type 'add interactivity to an HTML page with JavaScript', provide JavaScript code to add interactive features to an HTML page.">JavaScript Code Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a responsive web design coder. When I type 'create a responsive HTML page', provide HTML and CSS code to create a web page that adapts to different screen sizes.">Responsive Web Design Coder</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web accessibility expert. When I type 'make an HTML page accessible', provide HTML code and tips to ensure an HTML page is accessible to users with disabilities.">Web Accessibility Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web form creator. When I type 'build an HTML form', provide HTML code for creating a form with various input fields and validation.">Web Form Creator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web table expert. When I type 'create an HTML table', provide HTML code for generating a table with rows, columns, and data.">Web Table Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web navigation coder. When I type 'build an HTML navigation menu', provide HTML and CSS code for creating a navigation menu for a website.">Web Navigation Coder</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web image gallery creator. When I type 'make an HTML image gallery', provide HTML and CSS code for building an image gallery with thumbnails and lightbox functionality.">Web Image Gallery Creator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web video player coder. When I type 'embed an HTML video player', provide HTML and JavaScript code for embedding a video player on a web page.">Web Video Player Coder</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web audio player expert. When I type 'add an HTML audio player', provide HTML and JavaScript code for embedding an audio player on a web page.">Web Audio Player Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web iframe integrator. When I type 'embed an HTML iframe', provide HTML code for embedding an external web page or content within an iframe on a web page.">Web Iframe Integrator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web canvas artist. When I type 'create an HTML canvas', provide HTML and JavaScript code for generating interactive graphics and animations using the HTML canvas element.">Web Canvas Artist</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web SVG expert. When I type 'use SVG in HTML', provide HTML and CSS code for embedding and styling Scalable Vector Graphics (SVG) on a web page.">Web SVG Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web semantic markup specialist. When I type 'use semantic HTML tags', provide HTML code using semantic tags like header, nav, article, section, and footer to structure web content.">Web Semantic Markup Specialist</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web microdata integrator. When I type 'add microdata to HTML', provide HTML code for incorporating microdata to provide additional context and meaning to web content.">Web Microdata Integrator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web offline support coder. When I type 'make an HTML page work offline', provide HTML and JavaScript code for creating a web page that can be accessed offline using service workers and the Cache API.">Web Offline Support Coder</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web performance optimizer. When I type 'optimize HTML for performance', provide HTML and CSS code techniques to improve the loading speed and performance of a web page.">Web Performance Optimizer</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web print stylesheet creator. When I type 'create an HTML print stylesheet', provide CSS code for styling a web page specifically for printing, ensuring proper formatting and layout.">Web Print Stylesheet Creator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web favicon integrator. When I type 'add a favicon to HTML', provide HTML code for embedding a favicon (website icon) on a web page.">Web Favicon Integrator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web Open Graph protocol expert. When I type 'implement Open Graph in HTML', provide HTML code for incorporating Open Graph meta tags to control how a web page appears when shared on social media platforms.">Web Open Graph Protocol Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web Twitter Mind integrator. When I type 'add Twitter Cards to HTML', provide HTML code for embedding Twitter Mind meta tags to enhance the appearance of a web page when shared on Twitter.">Web Twitter Mind Integrator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web schema.org markup specialist. When I type 'use schema.org in HTML', provide HTML code for incorporating schema.org structured data to improve the understanding and presentation of web content in search engine results.">Web Schema.org Markup Specialist</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web AMP (Accelerated Mobile Pages) coder. When I type 'create an AMP HTML page', provide HTML code for building a web page using the AMP framework to optimize for fast loading on mobile devices.">Web AMP Coder</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web progressive web app (PWA) developer. When I type 'build a PWA with HTML', provide HTML and JavaScript code for creating a progressive web app that provides an app-like experience on the web.">Web Progressive Web App Developer</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web web components expert. When I type 'use web components in HTML', provide HTML and JavaScript code for creating reusable custom HTML elements using the Web Components standard.">Web Components Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web web storage integrator. When I type 'store data in HTML5 web storage', provide HTML and JavaScript code for using the Web Storage API (localStorage and sessionStorage) to store data in the browser.">Web Storage Integrator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web offline form handler. When I type 'handle offline HTML forms', provide HTML and JavaScript code for creating forms that can be submitted even when the user is offline, with data being sent when a connection is restored.">Web Offline Form Handler</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web drag and drop expert. When I type 'add drag and drop to HTML', provide HTML and JavaScript code for enabling drag and drop functionality on a web page, allowing users to move elements around or upload files.">Web Drag and Drop Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web clipboard API integrator. When I type 'use the clipboard API in HTML', provide HTML and JavaScript code for interacting with the Clipboard API to allow users to copy and paste content from and to a web page.">Web Clipboard API Integrator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web payment request API coder. When I type 'implement the payment request API in HTML', provide HTML and JavaScript code for using the Payment Request API to streamline the checkout process on a web page.">Web Payment Request API Coder</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web geolocation API expert. When I type 'use the geolocation API in HTML', provide HTML and JavaScript code for accessing the user's location information on a web page with their permission.">Web Geolocation API Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web battery status API integrator. When I type 'implement the battery status API in HTML', provide HTML and JavaScript code for detecting the battery status of the user's device on a web page.">Web Battery Status API Integrator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web network information API expert. When I type 'use the network information API in HTML', provide HTML and JavaScript code for accessing information about the user's network connection on a web page.">Web Network Information API Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web device orientation API integrator. When I type 'implement the device orientation API in HTML', provide HTML and JavaScript code for detecting the orientation and motion of the user's device on a web page.">Web Device Orientation API Integrator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web web bluetooth API expert. When I type 'use the web bluetooth API in HTML', provide HTML and JavaScript code for interacting with Bluetooth devices from a web page, with user permission.">Web Bluetooth API Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web web nfc API integrator. When I type 'implement the web nfc API in HTML', provide HTML and JavaScript code for interacting with NFC (Near Field Communication) devices from a web page, with user permission.">Web NFC API Integrator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web web usb API expert. When I type 'use the web usb API in HTML', provide HTML and JavaScript code for interacting with USB devices from a web page, with user permission.">Web USB API Expert</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a web web serial API integrator. When I type 'implement the web serial API in HTML', provide HTML and JavaScript code for interacting with serial devices from a web page, with user permission.">Web Serial API Integrator</div>
  
<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as an HTML code writer. When I type 'write an HTML page about my bio', provide a template for creating an HTML web page to showcase my biography.">HTML Bio Page Writer</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal portfolio creator. When I type 'create an HTML portfolio', provide a template for an online portfolio showcasing my work and projects.">Portfolio Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a blog layout designer. When I type 'design an HTML blog page', provide a template for a simple blog layout with posts and comments.">Blog Layout Designer</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a contact page builder. When I type 'create a contact page in HTML', provide a template for a contact form with fields for name, email, and message.">Contact Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a recipe page creator. When I type 'write an HTML page for my favorite recipe', provide a template for displaying a recipe with ingredients and instructions.">Recipe Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as an event invitation designer. When I type 'create an HTML invitation for my event', provide a template for an event invitation with RSVP options.">Event Invitation Designer</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a product showcase creator. When I type 'design an HTML product page', provide a template for showcasing a product with images and descriptions.">Product Showcase Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a photo gallery builder. When I type 'create an HTML photo gallery', provide a template for displaying a collection of images in a grid layout.">Photo Gallery Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a testimonial page creator. When I type 'write an HTML page for testimonials', provide a template for displaying customer testimonials with quotes and names.">Testimonial Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a FAQ page designer. When I type 'create an HTML FAQ page', provide a template for frequently asked questions with answers.">FAQ Page Designer</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a news article layout creator. When I type 'design an HTML news article page', provide a template for displaying news articles with headlines and images.">News Article Layout Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a service listing page creator. When I type 'create an HTML services page', provide a template for listing services with descriptions and pricing.">Service Listing Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a team member profile page builder. When I type 'write an HTML page for team profiles', provide a template for showcasing team members with photos and bios.">Team Member Profile Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a newsletter signup form creator. When I type 'create an HTML newsletter signup', provide a template for a newsletter subscription form.">Newsletter Signup Form Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a portfolio project detail page creator. When I type 'design an HTML project detail page', provide a template for showcasing a specific project with details and images.">Portfolio Project Detail Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal blog post writer. When I type 'write an HTML blog post', provide a template for a blog post with a title, content, and images.">Personal Blog Post Writer</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as an online store page creator. When I type 'create an HTML store page', provide a template for an online store with product listings and a shopping cart.">Online Store Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a social media profile page designer. When I type 'create an HTML social media profile', provide a template for a social media profile page with posts and followers.">Social Media Profile Page Designer</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a landing page creator. When I type 'design an HTML landing page', provide a template for a landing page with a call to action and sign-up form.">Landing Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a resume page builder. When I type 'create an HTML resume', provide a template for an online resume with sections for experience and education.">Resume Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a hobby showcase page creator. When I type 'write an HTML page for my hobbies', provide a template for showcasing personal hobbies and interests.">Hobby Showcase Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a travel blog page designer. When I type 'create an HTML travel blog page', provide a template for a travel blog with posts and images from trips.">Travel Blog Page Designer</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a charity event page creator. When I type 'design an HTML charity event page', provide a template for promoting a charity event with details and donation options.">Charity Event Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a fitness tracker page builder. When I type 'create an HTML fitness tracker', provide a template for tracking workouts and progress.">Fitness Tracker Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal finance tracker creator. When I type 'design an HTML finance tracker', provide a template for tracking expenses and budgets.">Personal Finance Tracker Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a review page creator. When I type 'create an HTML review page', provide a template for writing and displaying reviews."> Review Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a book review page builder. When I type 'design an HTML book review page', provide a template for writing and displaying book reviews.">Book Review Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a DIY project page creator. When I type 'create an HTML DIY project page', provide a template for showcasing DIY projects with instructions and materials.">DIY Project Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a gardening tips page builder. When I type 'design an HTML gardening tips page', provide a template for sharing gardening advice and tips.">Gardening Tips Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a pet care page creator. When I type 'create an HTML pet care page', provide a template for sharing tips and information about pet care.">Pet Care Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a cooking tips page builder. When I type 'design an HTML cooking tips page', provide a template for sharing cooking advice and recipes.">Cooking Tips Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a fashion tips page creator. When I type 'create an HTML fashion tips page', provide a template for sharing fashion advice and style tips.">Fashion Tips Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home improvement tips page builder. When I type 'design an HTML home improvement tips page', provide a template for sharing home improvement advice and projects.">Home Improvement Tips Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a technology review page creator. When I type 'create an HTML tech review page', provide a template for writing and displaying technology product reviews.">Technology Review Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a playlist page builder. When I type 'design an HTML playlist page', provide a template for sharing playlists and recommendations."> Playlist Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal development tips page creator. When I type 'create an HTML personal development tips page', provide a template for sharing personal growth advice and resources.">Personal Development Tips Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a mindfulness tips page builder. When I type 'design an HTML mindfulness tips page', provide a template for sharing mindfulness practices and techniques.">Mindfulness Tips Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a travel itinerary page creator. When I type 'create an HTML travel itinerary page', provide a template for sharing travel plans and itineraries.">Travel Itinerary Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a wedding planning page builder. When I type 'design an HTML wedding planning page', provide a template for sharing wedding details and planning resources.">Wedding Planning Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a holiday celebration page creator. When I type 'create an HTML holiday celebration page', provide a template for sharing holiday plans and traditions.">Holiday Celebration Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a charity organization page builder. When I type 'design an HTML charity organization page', provide a template for sharing information about a charity and how to donate.">Charity Organization Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community event page creator. When I type 'create an HTML community event page', provide a template for promoting community events and activities.">Community Event Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local business directory page builder. When I type 'design an HTML local business directory', provide a template for listing local businesses with contact information.">Local Business Directory Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal journal page creator. When I type 'create an HTML personal journal page', provide a template for writing and displaying journal entries.">Personal Journal Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a health blog page builder. When I type 'design an HTML health blog page', provide a template for sharing health tips and articles.">Health Blog Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a recipe collection page creator. When I type 'create an HTML recipe collection page', provide a template for displaying a collection of recipes.">Recipe Collection Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a parenting tips page builder. When I type 'design an HTML parenting tips page', provide a template for sharing parenting advice and resources.">Parenting Tips Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home safety tips page creator. When I type 'create an HTML home safety tips page', provide a template for sharing home safety advice and resources.">Home Safety Tips Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a seasonal activities page builder. When I type 'design an HTML seasonal activities page', provide a template for sharing seasonal activities and events.">Seasonal Activities Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local attractions page creator. When I type 'create an HTML local attractions page', provide a template for showcasing local attractions and points of interest.">Local Attractions Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal finance education page builder. When I type 'design an HTML personal finance education page', provide a template for sharing personal finance tips and resources.">Personal Finance Education Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-improvement resources page creator. When I type 'create an HTML self-improvement resources page', provide a template for listing self-improvement books, podcasts, and articles.">Self-Improvement Resources Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a travel tips page builder. When I type 'design an HTML travel tips page', provide a template for sharing travel advice and tips.">Travel Tips Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a cooking class page creator. When I type 'create an HTML cooking class page', provide a template for promoting cooking classes with details and registration options.">Cooking Class Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a skill-sharing page builder. When I type 'design an HTML skill-sharing page', provide a template for sharing skills and offering classes or workshops.">Skill-Sharing Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community service page creator. When I type 'create an HTML community service page', provide a template for promoting community service opportunities and events.">Community Service Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a motivational quotes page builder. When I type 'design an HTML motivational quotes page', provide a template for displaying inspirational quotes and images.">Motivational Quotes Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal goals tracker page creator. When I type 'create an HTML personal goals tracker', provide a template for tracking and displaying personal goals.">Personal Goals Tracker Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a DIY tutorial page builder. When I type 'design an HTML DIY tutorial page', provide a template for sharing step-by-step DIY tutorials.">DIY Tutorial Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local food guide page creator. When I type 'create an HTML local food guide', provide a template for showcasing local restaurants and food options.">Local Food Guide Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a virtual event page builder. When I type 'design an HTML virtual event page', provide a template for promoting virtual events with registration options.">Virtual Event Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal development workshop page creator. When I type 'create an HTML personal development workshop page', provide a template for promoting workshops with details and registration.">Personal Development Workshop Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local history page builder. When I type 'design an HTML local history page', provide a template for sharing local historical facts and stories.">Local History Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal reflection page creator. When I type 'create an HTML personal reflection page', provide a template for writing and displaying personal reflections and insights.">Personal Reflection Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a gratitude journal page builder. When I type 'design an HTML gratitude journal page', provide a template for sharing daily gratitude entries.">Gratitude Journal Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local wildlife page creator. When I type 'create an HTML local wildlife page', provide a template for showcasing local wildlife and conservation efforts.">Local Wildlife Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community health resources page builder. When I type 'design an HTML community health resources page', provide a template for sharing health resources and services available in the community.">Community Health Resources Page Builder</div>
            
                        <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local sports page creator. When I type 'create an HTML local sports page', provide a template for showcasing local sports teams and events.">Local Sports Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal finance blog page builder. When I type 'design an HTML personal finance blog page', provide a template for sharing personal finance tips and articles.">Personal Finance Blog Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local events calendar page creator. When I type 'create an HTML local events calendar', provide a template for displaying upcoming local events.">Local Events Calendar Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a home organization tips page builder. When I type 'design an HTML home organization tips page', provide a template for sharing home organization advice and resources.">Home Organization Tips Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a travel tips blog page creator. When I type 'create an HTML travel tips blog page', provide a template for sharing travel tips and experiences.">Travel Tips Blog Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local business spotlight page builder. When I type 'design an HTML local business spotlight page', provide a template for highlighting local businesses and their stories.">Local Business Spotlight Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a self-care tips page creator. When I type 'create an HTML self-care tips page', provide a template for sharing self-care practices and advice.">Self-Care Tips Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local art and culture page builder. When I type 'design an HTML local art and culture page', provide a template for showcasing local art events and cultural activities.">Local Art and Culture Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community gardening page creator. When I type 'create an HTML community gardening page', provide a template for promoting community gardening initiatives and resources.">Community Gardening Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal growth challenges page builder. When I type 'design an HTML personal growth challenges page', provide a template for sharing personal growth challenges and achievements.">Personal Growth Challenges Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local volunteer opportunities page creator. When I type 'create an HTML local volunteer opportunities page', provide a template for listing volunteer opportunities in the community.">Local Volunteer Opportunities Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a mental health awareness page builder. When I type 'design an HTML mental health awareness page', provide a template for sharing mental health resources and information.">Mental Health Awareness Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local history project page creator. When I type 'create an HTML local history project page', provide a template for showcasing local history projects and research.">Local History Project Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal achievements page builder. When I type 'design an HTML personal achievements page', provide a template for showcasing personal accomplishments and milestones.">Personal Achievements Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local tourism page creator. When I type 'create an HTML local tourism page', provide a template for promoting local tourist attractions and activities.">Local Tourism Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a sustainability tips page builder. When I type 'design an HTML sustainability tips page', provide a template for sharing tips on sustainable living.">Sustainability Tips Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community health initiatives page creator. When I type 'create an HTML community health initiatives page', provide a template for promoting health initiatives in the community.">Community Health Initiatives Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local scene page builder. When I type 'design an HTML local scene page', provide a template for showcasing local ians and events.">Local Scene Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal development resources page creator. When I type 'create an HTML personal development resources page', provide a template for listing books, courses, and workshops for personal growth.">Personal Development Resources Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local environmental initiatives page builder. When I type 'design an HTML local environmental initiatives page', provide a template for promoting local environmental efforts and projects.">Local Environmental Initiatives Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community arts and crafts page creator. When I type 'create an HTML community arts and crafts page', provide a template for showcasing local arts and crafts events and projects.">Community Arts and Crafts Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local food and drink page builder. When I type 'design an HTML local food and drink page', provide a template for showcasing local food and beverage options.">Local Food and Drink Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local fitness events page creator. When I type 'create an HTML local fitness events page', provide a template for promoting fitness events and classes in the community.">Local Fitness Events Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal reflection journal page builder. When I type 'design an HTML personal reflection journal page', provide a template for writing and displaying personal reflections and insights.">Personal Reflection Journal Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local charity spotlight page creator. When I type 'create an HTML local charity spotlight page', provide a template for highlighting local charities and their missions.">Local Charity Spotlight Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local history timeline page builder. When I type 'design an HTML local history timeline page', provide a template for showcasing significant events in local history.">Local History Timeline Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal projects showcase page creator. When I type 'create an HTML personal projects showcase page', provide a template for displaying personal projects and achievements.">Personal Projects Showcase Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local wildlife conservation page builder. When I type 'design an HTML local wildlife conservation page', provide a template for promoting local wildlife conservation efforts.">Local Wildlife Conservation Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community resource directory page creator. When I type 'create an HTML community resource directory page', provide a template for listing community resources and services.">Community Resource Directory Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local volunteer spotlight page builder. When I type 'design an HTML local volunteer spotlight page', provide a template for highlighting local volunteers and their contributions.">Local Volunteer Spotlight Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal growth blog page creator. When I type 'create an HTML personal growth blog page', provide a template for sharing personal growth experiences and insights.">Personal Growth Blog Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local arts and culture events page builder. When I type 'design an HTML local arts and culture events page', provide a template for promoting arts and culture events in the community.">Local Arts and Culture Events Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local history research page creator. When I type 'create an HTML local history research page', provide a template for sharing local history research and findings.">Local History Research Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community engagement page builder. When I type 'design an HTML community engagement page', provide a template for promoting community engagement initiatives and events.">Community Engagement Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local environmental education page creator. When I type 'create an HTML local environmental education page', provide a template for sharing environmental education resources and programs.">Local Environmental Education Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a personal development challenges page builder. When I type 'design an HTML personal development challenges page', provide a template for sharing personal development challenges and experiences.">Personal Development Challenges Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local cultural heritage page creator. When I type 'create an HTML local cultural heritage page', provide a template for showcasing local cultural heritage and traditions.">Local Cultural Heritage Page Creator</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a community wellness page builder. When I type 'design an HTML community wellness page', provide a template for promoting wellness resources and programs in the community.">Community Wellness Page Builder</div>
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Act as a local education resources page creator. When I type 'create an HTML local education resources page', provide a template for listing educational resources and programs available in the community.">Local Education Resources Page Creator</div>
            
            <div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write an HTML web page about my bio, including sections for my education, work experience, skills, and hobbies, with a responsive design.">HTML Bio Page</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a CSS stylesheet that styles a personal blog, including typography, color schemes, and responsive layouts for mobile devices.">CSS Blog Stylesheet</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a JavaScript function that validates a user registration form, checking for valid email format, password strength, and required fields.">JavaScript Form Validation</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Python script that reads a CSV file containing user data and outputs a summary report of the data, including averages and counts.">Python CSV Report Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a PHP script that connects to a MySQL database and retrieves user information, displaying it in an HTML table.">PHP MySQL User Retrieval</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a React component that displays a list of tasks, allowing users to add, edit, and delete tasks with local storage support.">React Task List Component</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Node.js server application that serves a static HTML page and handles API requests for user data.">Node.js Static Server</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Java program that implements a simple banking system, allowing users to create accounts, deposit, withdraw, and check balances.">Java Banking System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Ruby on Rails application that manages a library system, including models for books, authors, and users, with CRUD functionality.">Ruby on Rails Library Management</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Swift application that displays a list of s fetched from an API, allowing users to search and filter the results.">Swift List App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Kotlin Android app that tracks user expenses, allowing users to add, edit, and delete expense entries with a summary view.">Kotlin Expense Tracker App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SQL database schema for an e-commerce application, including tables for products, orders, and customers, with relationships defined.">SQL E-commerce Schema</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write an HTML form that collects user feedback, including fields for name, email, rating, and comments, with basic validation.">HTML Feedback Form</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a JavaScript function that fetches weather data from an API and displays it on a web page.">JavaScript Weather Fetcher</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Python script that scrapes data from a website and stores it in a JSON file.">Python Web Scraper</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a C# application that manages a to-do list, allowing users to add, complete, and delete tasks with a graphical user interface.">C# To-Do List App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a TypeScript function that calculates the factorial of a number using recursion.">TypeScript Factorial Function</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Flask web application that allows users to register, log in, and manage their profiles.">Flask User Management App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Bash script that automates the backup of a directory to a specified location.">Bash Backup Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create an HTML page with a responsive navigation bar and a footer, using CSS Flexbox for layout.">HTML Responsive Navigation</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a JavaScript function that creates a countdown timer and displays it on a web page.">JavaScript Countdown Timer</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Python script that generates random passwords based on user-defined criteria (length, use of symbols, etc.).">Python Password Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a PHP form handler that processes user input from a contact form and sends an email notification.">PHP Contact Form Handler</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a React app that fetches and displays a list of users from an API, with the ability to view user details.">React User List App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Node.js application that implements a simple chat server using WebSocket.">Node.js Chat Server</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Java program that implements a simple quiz game with multiple-choice questions and scoring.">Java Quiz Game</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Ruby script that reads a text file and counts the frequency of each word.">Ruby Word Frequency Counter</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SwiftUI application that displays a list of contacts, allowing users to add and delete contacts.">SwiftUI Contacts App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Kotlin function that sorts an array of integers in ascending order using the bubble sort algorithm.">Kotlin Bubble Sort Function</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SQL query that retrieves the top 10 most expensive products from an e-commerce database.">SQL Expensive Products Query</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write an HTML page that includes a photo gallery with images that can be clicked to view in a larger size.">HTML Photo Gallery</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a JavaScript function that filters an array of objects based on a specified property value.">JavaScript Object Filter</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Python script that connects to a REST API and retrieves data, displaying it in a formatted way.">Python API Data Fetcher</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a PHP script that generates a PDF report from user input data.">PHP PDF Report Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a React component that implements a simple counter with increment and decrement buttons.">React Counter Component</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Node.js application that serves a RESTful API for managing a collection of books.">Node.js Book API</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Java application that implements a simple text-based game, allowing users to make choices that affect the outcome.">Java Text-Based Game</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Ruby on Rails application that allows users to create and manage events, with RSVP functionality.">Ruby on Rails Event Manager</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Swift application that fetches and displays the latest news articles from an API.">Swift News App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Kotlin application that allows users to track their fitness activities, including logging workouts and progress tracking.">Kotlin Fitness Tracker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a SQL script that creates a table for storing customer reviews, including fields for rating, comments, and timestamps.">SQL Customer Reviews Table</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create an HTML page with a contact form that uses JavaScript to validate the input before submission.">HTML Contact Form with Validation</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a JavaScript function that generates a random quote from an array of quotes and displays it on a web page.">JavaScript Random Quote Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Python script that analyzes a text file and outputs the most common words and their frequencies.">Python Text Analysis Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a PHP script that creates a simple user authentication system with login and registration functionality.">PHP User Authentication</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a React app that allows users to create and manage a shopping list, with local storage support.">React Shopping List App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Node.js application that implements a simple blog with CRUD functionality for posts.">Node.js Blog Application</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Java program that simulates a simple ATM, allowing users to check balance, deposit, and withdraw funds.">Java ATM Simulator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Ruby script that generates a random password based on specified criteria (length, use of symbols, etc.).">Ruby Password Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SwiftUI application that allows users to track their reading progress and manage a list of books.">SwiftUI Reading Tracker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Kotlin function that checks if a string is a palindrome.">Kotlin Palindrome Checker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SQL query that retrieves all orders placed by a specific customer from an e-commerce database.">SQL Customer Orders Query</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write an HTML page that includes a simple calculator using JavaScript for basic arithmetic operations.">HTML Calculator Page</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a JavaScript function that toggles the visibility of an element on a web page.">JavaScript Toggle Visibility</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Python script that sends an email notification based on user-defined triggers.">Python Email Notification Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a PHP script that handles file uploads and stores them in a specified directory.">PHP File Upload Handler</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a React component that implements a simple image slider with next and previous buttons.">React Image Slider Component</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Node.js application that serves a static website with routing for different pages.">Node.js Static Website Server</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Java application that implements a simple contact management system with add, edit, and delete functionality.">Java Contact Management System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Ruby on Rails application that allows users to create a personal blog, with features for posts and comments.">Ruby on Rails Personal Blog</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Swift application that allows users to create and manage a list of favorite recipes.">Swift Recipe Manager App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Kotlin application that fetches and displays quotes from an API, with the ability to share quotes.">Kotlin Quote Fetcher App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a SQL script that updates the prices of products in an e-commerce database based on a specified percentage increase.">SQL Price Update Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create an HTML page with a responsive grid layout for displaying a portfolio of projects.">HTML Portfolio Grid</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a JavaScript function that filters an array of numbers to return only even numbers.">JavaScript Even Number Filter</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Python script that generates a weekly meal plan based on user preferences.">Python Meal Planner Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a PHP script that retrieves and displays user profiles from a database with pagination.">PHP User Profile Display</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a React app that allows users to create and manage a personal journal with entries saved to local storage.">React Journal App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Node.js application that implements a simple URL shortener service.">Node.js URL Shortener</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Java program that implements a simple inventory management system with add, remove, and view functionality.">Java Inventory Management System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Ruby script that fetches and displays the current weather for a specified location using an API.">Ruby Weather Fetcher</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SwiftUI application that allows users to track their habits and set reminders.">SwiftUI Habit Tracker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Kotlin function that calculates the Fibonacci sequence up to a specified number.">Kotlin Fibonacci Function</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SQL query that retrieves the top-rated products from an e-commerce database.">SQL Top-Rated Products Query</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write an HTML page that includes a simple quiz with multiple-choice questions and displays the score at the end.">HTML Quiz Page</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a JavaScript function that converts temperatures between Celsius and Fahrenheit.">JavaScript Temperature Converter</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Python script that automates the process of sending birthday reminders via email.">Python Birthday Reminder Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a PHP script that generates a simple contact list with add, edit, and delete functionality.">PHP Contact List Manager</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a React component that implements a simple stopwatch with start, stop, and reset functionality.">React Stopwatch Component</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Node.js application that serves a simple blog with user authentication and post management.">Node.js Blog with Auth</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Java application that implements a simple voting system with candidates and vote counting.">Java Voting System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Ruby on Rails application that allows users to create and manage their personal budgets.">Ruby on Rails Budget Manager</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Swift application that allows users to create and manage a list of tasks with deadlines.">Swift Task Manager App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Kotlin application that fetches and displays trivia questions from an API, allowing users to answer them.">Kotlin Trivia App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a SQL script that creates a table for storing user feedback with fields for rating and comments.">SQL User Feedback Table</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create an HTML page with a simple timer that counts down from a specified time.">HTML Countdown Timer</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a JavaScript function that generates a random color and applies it to the background of a web page.">JavaScript Random Color Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Python script that analyzes sales data and generates a summary report.">Python Sales Data Analyzer</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a PHP script that handles user login and session management for a web application.">PHP User Login System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a React app that allows users to create and manage a list of favorite books, with the ability to add notes and ratings.">React Favorite Books App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Node.js application that implements a simple recipe API, allowing users to create, read, update, and delete recipes.">Node.js Recipe API</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Java program that implements a simple text editor with features for opening, editing, and saving text files.">Java Text Editor</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Ruby script that fetches and displays the latest tweets from a specific Twitter account using the Twitter API.">Ruby Twitter Fetcher</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SwiftUI application that allows users to track their water intake and set daily goals.">SwiftUI Water Tracker App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Kotlin function that checks if a number is prime and returns true or false.">Kotlin Prime Checker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SQL query that retrieves all products with a discount greater than a specified percentage from an e-commerce database.">SQL Discounted Products Query</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write an HTML page that includes a simple survey form with multiple-choice questions and a submit button.">HTML Survey Form</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a JavaScript function that calculates the area of a rectangle based on user input.">JavaScript Rectangle Area Calculator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Python script that automates the process of downloading images from a specified URL.">Python Image Downloader Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a PHP script that generates a dynamic sitemap for a website based on its pages.">PHP Dynamic Sitemap Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a React component that implements a simple login form with validation and error messages.">React Login Form Component</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Node.js application that implements a simple task manager with user authentication and task assignment.">Node.js Task Manager App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Java application that simulates a simple rock-paper-scissors game between the user and the computer.">Java Rock-Paper-Scissors Game</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Ruby on Rails application that allows users to create and manage their personal journals with entries and tags.">Ruby on Rails Journal Manager</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Swift application that allows users to create and manage a list of goals with deadlines and reminders.">Swift Goals Manager App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Kotlin application that fetches and displays trivia questions from an API, allowing users to answer them and see scores.">Kotlin Trivia Quiz App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a SQL script that creates a table for storing employee information, including fields for name, position, and salary.">SQL Employee Table Creation</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create an HTML page with a simple feedback form that uses JavaScript to display a thank-you message upon submission.">HTML Feedback Form with Thank You</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a JavaScript function that generates a random password based on user-defined criteria (length, use of symbols, etc.).">JavaScript Random Password Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Python script that connects to a database and retrieves user information based on a search query.">Python Database User Retrieval</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a PHP script that implements a simple blog with user authentication and post management.">PHP Blog Application</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a React app that allows users to create and manage a list of fitness activities, tracking their progress over time.">React Fitness Activities Tracker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Node.js application that implements a simple note-taking service with user authentication and note management.">Node.js Note-Taking Service</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Java program that implements a simple library management system with features for adding and removing books.">Java Library Management System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Ruby script that generates a report of sales data from a CSV file, summarizing total sales and average sales per item.">Ruby Sales Report Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SwiftUI application that allows users to track their sleep patterns and set sleep goals.">SwiftUI Sleep Tracker App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Kotlin function that calculates the greatest common divisor (GCD) of two numbers.">Kotlin GCD Function</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SQL query that retrieves all active users from a user management database.">SQL Active Users Query</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write an HTML page that includes a simple calculator using JavaScript for basic arithmetic operations.">HTML Calculator Page</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a JavaScript function that checks if a string contains only digits.">JavaScript Digit Checker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Python script that sends a daily weather report to users via email based on their location.">Python Daily Weather Email Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a PHP script that handles user registration and stores user data in a database.">PHP User Registration Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a React component that implements a simple timer with start, stop, and reset functionality.">React Timer Component</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Node.js application that implements a simple blog with comments and user authentication.">Node.js Blog with Comments</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Java application that simulates a simple card game, allowing users to draw and play cards.">Java Mind Game Simulator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Ruby on Rails application that allows users to create and manage their workout routines with tracking features.">Ruby on Rails Workout Manager</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Swift application that allows users to create and manage a list of travel destinations with notes and photos.">Swift Travel Planner App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Kotlin application that fetches and displays jokes from an API, allowing users to share their favorites.">Kotlin Joke Fetcher App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a SQL script that creates a table for storing product reviews, including fields for rating, comment, and user ID.">SQL Product Reviews Table Creation</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create an HTML page with a simple quiz that uses JavaScript to calculate and display the score at the end.">HTML Quiz with Score Display</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a JavaScript function that validates an email address format using regular expressions.">JavaScript Email Validator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Python script that automates the process of generating weekly reports from user data in a CSV file.">Python Weekly Report Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a PHP script that implements a simple content management system with user roles and permissions.">PHP Content Management System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a React app that allows users to create and manage a list of favorite s, with the ability to add reviews.">React Manager App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Node.js application that implements a simple event management system with user registration and event creation.">Node.js Event Management System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Java program that implements a simple password manager, allowing users to store and retrieve passwords securely.">Java Password Manager</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Ruby script that fetches and displays the current stock prices for specified companies using an API.">Ruby Stock Price Fetcher</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SwiftUI application that allows users to track their fitness goals and progress over time.">SwiftUI Fitness Goals Tracker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Kotlin function that converts temperatures between Celsius and Fahrenheit.">Kotlin Temperature Converter</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SQL query that retrieves all orders placed within the last month from an e-commerce database.">SQL Recent Orders Query</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write an HTML page that includes a simple form for user registration with validation using JavaScript.">HTML Registration Form with Validation</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a JavaScript function that generates a random quote from an array of quotes and displays it on a web page.">JavaScript Random Quote Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Python script that connects to a REST API and retrieves data, displaying it in a formatted way.">Python API Data Fetcher</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a PHP script that handles file uploads and stores them in a specified directory.">PHP File Upload Handler</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a React component that implements a simple image slider with next and previous buttons.">React Image Slider Component</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Node.js application that serves a simple blog with user authentication and post management.">Node.js Blog with Auth</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Java application that implements a simple voting system with candidates and vote counting.">Java Voting System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Ruby on Rails application that allows users to create and manage their personal budgets.">Ruby on Rails Budget Manager</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Swift application that allows users to create and manage a list of tasks with deadlines.">Swift Task Manager App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Kotlin application that fetches and displays quotes from an API, with the ability to share quotes.">Kotlin Quote Fetcher App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a SQL script that creates a table for storing user feedback with fields for rating and comments.">SQL User Feedback Table</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create an HTML page with a simple timer that counts down from a specified time.">HTML Countdown Timer</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a JavaScript function that toggles the visibility of an element on a web page.">JavaScript Toggle Visibility</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Python script that analyzes sales data and generates a summary report.">Python Sales Data Analyzer</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a PHP script that retrieves and displays user profiles from a database with pagination.">PHP User Profile Display</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a React app that allows users to create and manage a personal journal with entries saved to local storage.">React Journal App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Node.js application that implements a simple note-taking service with user authentication and note management.">Node.js Note-Taking Service</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Java program that implements a simple contact management system with add, edit, and delete functionality.">Java Contact Management System</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Ruby script that generates a random password based on specified criteria (length, use of symbols, etc.).">Ruby Password Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SwiftUI application that allows users to track their sleep patterns and set sleep goals.">SwiftUI Sleep Tracker App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Kotlin function that calculates the greatest common divisor (GCD) of two numbers.">Kotlin GCD Function</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a SQL query that retrieves all active users from a user management database.">SQL Active Users Query</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write an HTML page that includes a simple calculator using JavaScript for basic arithmetic operations.">HTML Calculator Page</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a JavaScript function that checks if a string contains only digits.">JavaScript Digit Checker</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Python script that sends a daily weather report to users via email based on their location.">Python Daily Weather Email Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a PHP script that handles user registration and stores user data in a database.">PHP User Registration Script</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a React component that implements a simple timer with start, stop, and reset functionality.">React Timer Component</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Node.js application that implements a simple blog with comments and user authentication.">Node.js Blog with Comments</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Java application that simulates a simple card game, allowing users to draw and play cards.">Java Mind Game Simulator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Ruby on Rails application that allows users to create and manage their workout routines with tracking features.">Ruby on Rails Workout Manager</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a Swift application that allows users to create and manage a list of travel destinations with notes and photos.">Swift Travel Planner App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Kotlin application that fetches and displays trivia questions from an API, allowing users to answer them and see scores.">Kotlin Trivia Quiz App</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a SQL script that creates a table for storing product reviews, including fields for rating, comment, and user ID.">SQL Product Reviews Table Creation</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create an HTML page with a simple quiz that uses JavaScript to calculate and display the score at the end.">HTML Quiz with Score Display</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a JavaScript function that validates an email address format using regular expressions.">JavaScript Email Validator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Create a Python script that automates the process of generating weekly reports from user data in a CSV file.">Python Weekly Report Generator</div>

<div class="prompt-item btn btn-outline-primary m-1" data-toggle="modal" data-target="#textGenerationModal" data-prompt="Write a PHP script that implements a simple content management system with user roles and permissions.">PHP Content Management System</div>
                        <!-- Add more prompt items here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Text Generation Modal -->
    <div class="modal fade" id="textGenerationModal" tabindex="-1" role="dialog" aria-labelledby="textGenerationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="display:block;">
                    <h5 id="modalDivText" class="modal-title" id="textGenerationModalLabel"></h5>
    <div id="selectedPrompt"></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="selectedPrompt" style="font-weight: bold; margin-bottom: 10px;"></div>
                    <div class="form-group">
                        <label for="extraTextInput">Add Extra Text:</label>
                        <textarea id="extraTextInput" rows="3" class="form-control" placeholder="Add any additional text here..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="aiSelect">Select AI Service:</label>
                        <select class="form-control" id="aiSelect">
                            <option value="gemini">Gemini</option>
                            <option value="mistral">Mistral</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="apiKeyInput">Enter Your API Key:</label>
                        <input type="text" class="form-control" id="apiKeyInput" placeholder="Enter API Key">
                    </div>
                    <textarea id="aiOutput" rows="5" class="form-control" placeholder="AI-generated text will appear here..."></textarea>
                    <div id="error-message" style="color: red; margin-top: 10px;"></div>
                    <div id="console-output" style="max-height: 150px; overflow-y: auto; margin-top: 10px; background-color: #f9f9f9; border: 1px solid #ccc; padding: 10px;"></div>
                </div>
                <div class="modal-footer">
                    <button id="generateTextButton" class="btn btn-success">Generate Text</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="insertTextButton" class="btn btn-primary" style="display: none;">Insert Text</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let showConsoleOutput = false;

        // Load API key from cookies
        document.addEventListener('DOMContentLoaded', () => {
            const apiKey = getCookie('apiKey');
            if (apiKey) {
                document.getElementById('apiKeyInput').value = apiKey;
            }
        });

        // Save API key to cookies
        document.getElementById('apiKeyInput').addEventListener('input', function() {
            setCookie('apiKey', this.value, 365 * 10);
        });

        // Show extra fields when a prompt is selected
        document.querySelectorAll('.prompt-item').forEach(item => {
            item.addEventListener('click', function() {
                const selectedPrompt = this.getAttribute('data-prompt');
                document.getElementById('selectedPrompt').innerText = selectedPrompt;
                $('#aiWritingModal').modal('hide');
                $('#textGenerationModal').modal('show');
            });
        });

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

        // Handle text generation
        document.getElementById('generateTextButton').addEventListener('click', async function() {
            const selectedPrompt = document.getElementById('selectedPrompt').innerText;
            const extraText = document.getElementById('extraTextInput').value.trim();
            const selectedAI = document.getElementById('aiSelect').value;
            const apiKey = document.getElementById('apiKeyInput').value.trim();
            document.getElementById('error-message').innerText = '';

            // Combine the selected prompt with the extra text
            const combinedText = `${selectedPrompt} ${extraText}`.trim();

            let generatedText = '';
            try {
                if (selectedAI === 'gemini') {
                    generatedText = await generateTextWithGemini(combinedText, apiKey);
                } else if (selectedAI === 'mistral') {
                    generatedText = await generateTextWithMistral(combinedText, apiKey);
                }

                document.getElementById('aiOutput').value = generatedText;
                document.getElementById('insertTextButton').style.display = 'inline-block';
            } catch (error) {
                console.error('Error generating text:', error);
                document.getElementById('error-message').innerText = "Error generating text: " + error.message;
                logMessage("Error:", error.message);
            }
        });

        // Insert generated text into editor
        document.getElementById('insertTextButton').addEventListener('click', function() {
            const generatedText = document.getElementById('aiOutput').value;
            const editor = document.getElementById('html-code');
            editor.value += generatedText;
            $('#textGenerationModal').modal('hide');
        });

        async function generateTextWithGemini(prompt, apiKey) {
            // Gemini API implementation
        }

        async function generateTextWithMistral(prompt, apiKey) {
            // Mistral API implementation
        }

        function logMessage(...args) {
            const consoleOutput = document.getElementById('console-output');
            const message = args.map(arg => JSON.stringify(arg)).join(' ');
            const messageElement = document.createElement('div');
            messageElement.textContent = message;

            if (showConsoleOutput) {
                consoleOutput.appendChild(messageElement);
            }
        }

        // Cookie handling functions
        function setCookie(name, value, days) {
            const expires = days ? "; expires=" + new Date(Date.now() + days * 864e5).toUTCString() : "";
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            return document.cookie.split('; ').reduce((r, v) => {
                const parts = v.split('=');
                return parts[0] === name ? decodeURIComponent(parts[1]) : r;
            }, '');
        }
    </script>
<script>
  $(document).ready(function() {
    $('.prompt-item').on('click', function() {
      // Get the data-prompt attribute
      var promptText = $(this).data('prompt');
      
      // Get the text content of the clicked div
      var divText = $(this).text();
      
      // Set the text in the modal
      $('#selectedPrompt').text(promptText);
      $('#modalDivText').text(divText); // New line to set div text
    });
  });
  
  const aiWritingModal = new bootstrap.Modal(document.getElementById('aiWritingModal'));

document.querySelector("#aiWritingModal").addEventListener('show.bs.modal', function () {
    document.body.style.overflow = 'hidden'; // Prevent scrolling
});

document.querySelector("#aiWritingModal").addEventListener('hidden.bs.modal', function () {
    document.body.style.overflow = ''; // Restore scrolling
});
</script>
</body>
</html>