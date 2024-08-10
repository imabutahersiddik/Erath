         <div class="modal fade" id="tarxz">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">TAR.XZ File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your TAR.XZ</h2>
<input type="file" id="tarxzfileInput" accept=".tar.xz">
<button id="tarxzencryptBtn">Upload</button>
<br><br>
<textarea id="tarxzoutputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="tarxzdownloadLink" style="display:none;">Download TAR.XZ</a>
<button id="tarxzcopyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('tarxzencryptBtn').addEventListener('click', function() {
    const tarxzfileInput = document.getElementById('tarxzfileInput');
    if (tarxzfileInput.files.length === 0) {
        alert("Please select a TAR.XZ file.");
        return;
    }
    const file = tarxzfileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/tarxz/" + base64Data;
        const tarxzoutputUrl = document.getElementById('tarxzoutputUrl');
        tarxzoutputUrl.style.display = 'block';
        tarxzoutputUrl.value = url;
        
        const tarxzdownloadLink = document.getElementById('tarxzdownloadLink');
        tarxzdownloadLink.href = url;
        tarxzdownloadLink.style.display = 'block';
        tarxzdownloadLink.innerText = ' Download TAR.XZ';
        tarxzdownloadLink.className = 'Erath'; // Apply Erath class for styling
        tarxzdownloadLink.target = "_blank"; // Open link in a new tab
        
        const tarxzcopyUrlBtn = document.getElementById('tarxzcopyUrlBtn');
        tarxzcopyUrlBtn.style.display = 'block';
        tarxzcopyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        tarxzcopyUrlBtn.onclick = function() {
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