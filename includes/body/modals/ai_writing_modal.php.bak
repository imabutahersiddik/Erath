<!-- AI Writing Modal -->
<div class="modal fade" id="aiWritingModal" tabindex="-1" role="dialog" aria-labelledby="aiWritingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aiWritingModalLabel">Write with AI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="aiSelect">Select AI Service:</label>
                    <select class="form-control" id="aiSelect">
                        <option value="gemini">Gemini</option>
                        <!-- The Anthropic option is hidden by commenting it out
                        <option value="anthropic">Anthropic</option>
                        -->
                        <option value="mistral">Mistral</option> <!-- Added Mistral option -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="apiKeyInput">Enter Your API Key:</label>
                    <input type="text" class="form-control" id="apiKeyInput" placeholder="Enter API Key">
                </div>
                <div class="form-group">
                    <label for="promptSelect">Select a Prompt:</label>
                    <select class="form-control" id="promptSelect">
                        <option value="Write a story about a brave knight.">Brave Knight</option>
                        <option value="Describe a futuristic city.">Futuristic City</option>
                        <option value="Write a poem about nature.">Nature Poem</option>
                        <!-- Add more prompts as needed -->
                    </select>
                </div>
                <textarea id="aiOutput" rows="5" class="form-control" placeholder="AI-generated text will appear here..."></textarea>
                <div id="error-message" style="color: red; margin-top: 10px;"></div> <!-- Error message display -->
                <div id="console-output" style="max-height: 150px; overflow-y: auto; margin-top: 10px; background-color: #f9f9f9; border: 1px solid #ccc; padding: 10px;"></div> <!-- Console output for logging -->
            </div>
            <div class="modal-footer">
                <button id="generateTextButton" class="btn btn-success">Generate Text</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="insertTextButton" class="btn btn-primary" style="display: none;">Insert Text</button>
            </div>
        </div>
    </div>
</div>