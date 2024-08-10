         <div class="modal fade" id="sit">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">SIT File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your SIT</h2>
<input type="file" id="sitfileInput" accept=".sit">
<button id="sitencryptBtn">Upload</button>
<br><br>
<textarea id="sitoutputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="sitdownloadLink" style="display:none;">Download SIT</a>
<button id="sitcopyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('sitencryptBtn').addEventListener('click', function() {
    const sitfileInput = document.getElementById('sitfileInput');
    if (sitfileInput.files.length === 0) {
        alert("Please select a SIT file.");
        return;
    }
    const file = sitfileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/sit/" + base64Data;
        const sitoutputUrl = document.getElementById('sitoutputUrl');
        sitoutputUrl.style.display = 'block';
        sitoutputUrl.value = url;
        
        const sitdownloadLink = document.getElementById('sitdownloadLink');
        sitdownloadLink.href = url;
        sitdownloadLink.style.display = 'block';
        sitdownloadLink.innerText = ' Download SIT';
        sitdownloadLink.className = 'Erath'; // Apply Erath class for styling
        sitdownloadLink.target = "_blank"; // Open link in a new tab
        
        const sitcopyUrlBtn = document.getElementById('sitcopyUrlBtn');
        sitcopyUrlBtn.style.display = 'block';
        sitcopyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        sitcopyUrlBtn.onclick = function() {
            navigator.clipboard.writeText(url).then(() => {
                alert('URL copied to clipboard!');
            }, () => {
                alert('Failed to copy the URL.');
            });
        };
    };
    reader.readAsArrayBuffer(file);
});
</script>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Settings</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="btn-group" role="group">
                     <button type="button" data-class="fixed-left" class="btn btn-primary">
                     <i class="fa fa-arrow-left"></i>
                     Fixed Left
                     </button>
                     <button type="button" data-class="fixed-top" class="btn btn-primary">
                     <i class="fa fa-arrow-up"></i>
                     Fixed Top
                     </button>
                     <button type="button" data-class="fixed-right" class="btn btn-primary">
                     <i class="fa fa-arrow-right"></i>
                     Fixed Right
                     </button>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <div class="form-group">
                           <select class="form-control width-md" id="theme_select" onchange="selectTheme(value)"></select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="saveSettings()">Save changes</button>
               </div>
            </div>
         </div>
      </div> 