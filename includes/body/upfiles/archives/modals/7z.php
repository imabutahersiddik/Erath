         <div class="modal fade" id="7z">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">7Z File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your 7Z</h2>
<input type="file" id="7zfileInput" accept=".7z">
<button id="7zencryptBtn">Upload</button>
<br><br>
<textarea id="7zoutputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="7zdownloadLink" style="display:none;">Download 7Z</a>
<button id="7zcopyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('7zencryptBtn').addEventListener('click', function() {
    const 7zfileInput = document.getElementById('7zfileInput');
    if (7zfileInput.files.length === 0) {
        alert("Please select a 7Z file.");
        return;
    }
    const file = 7zfileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/7z/" + base64Data;
        const 7zoutputUrl = document.getElementById('7zoutputUrl');
        7zoutputUrl.style.display = 'block';
        7zoutputUrl.value = url;
        
        const 7zdownloadLink = document.getElementById('7zdownloadLink');
        7zdownloadLink.href = url;
        7zdownloadLink.style.display = 'block';
        7zdownloadLink.innerText = ' Download 7Z';
        7zdownloadLink.className = 'Erath'; // Apply Erath class for styling
        7zdownloadLink.target = "_blank"; // Open link in a new tab
        
        const 7zcopyUrlBtn = document.getElementById('7zcopyUrlBtn');
        7zcopyUrlBtn.style.display = 'block';
        7zcopyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        7zcopyUrlBtn.onclick = function() {
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