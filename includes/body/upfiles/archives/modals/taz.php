         <div class="modal fade" id="taz">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">TAZ File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your TAZ</h2>
<input type="file" id="tazfileInput" accept=".taz">
<button id="tazencryptBtn">Upload</button>
<br><br>
<textarea id="tazoutputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="tazdownloadLink" style="display:none;">Download TAZ</a>
<button id="tazcopyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('tazencryptBtn').addEventListener('click', function() {
    const tazfileInput = document.getElementById('tazfileInput');
    if (tazfileInput.files.length === 0) {
        alert("Please select a TAZ file.");
        return;
    }
    const file = tazfileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/taz/" + base64Data;
        const tazoutputUrl = document.getElementById('tazoutputUrl');
        tazoutputUrl.style.display = 'block';
        tazoutputUrl.value = url;
        
        const tazdownloadLink = document.getElementById('tazdownloadLink');
        tazdownloadLink.href = url;
        tazdownloadLink.style.display = 'block';
        tazdownloadLink.innerText = ' Download TAZ';
        tazdownloadLink.className = 'Erath'; // Apply Erath class for styling
        tazdownloadLink.target = "_blank"; // Open link in a new tab
        
        const tazcopyUrlBtn = document.getElementById('tazcopyUrlBtn');
        tazcopyUrlBtn.style.display = 'block';
        tazcopyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        tazcopyUrlBtn.onclick = function() {
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