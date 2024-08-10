         <div class="modal fade" id="zst">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">ZST File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your ZST</h2>
<input type="file" id="zstfileInput" accept=".zst">
<button id="zstencryptBtn">Upload</button>
<br><br>
<textarea id="zstoutputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="zstdownloadLink" style="display:none;">Download ZST</a>
<button id="zstcopyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('zstencryptBtn').addEventListener('click', function() {
    const zstfileInput = document.getElementById('zstfileInput');
    if (zstfileInput.files.length === 0) {
        alert("Please select a ZST file.");
        return;
    }
    const file = zstfileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/zst/" + base64Data;
        const zstoutputUrl = document.getElementById('zstoutputUrl');
        zstoutputUrl.style.display = 'block';
        zstoutputUrl.value = url;
        
        const zstdownloadLink = document.getElementById('zstdownloadLink');
        zstdownloadLink.href = url;
        zstdownloadLink.style.display = 'block';
        zstdownloadLink.innerText = ' Download ZST';
        zstdownloadLink.className = 'Erath'; // Apply Erath class for styling
        zstdownloadLink.target = "_blank"; // Open link in a new tab
        
        const zstcopyUrlBtn = document.getElementById('zstcopyUrlBtn');
        zstcopyUrlBtn.style.display = 'block';
        zstcopyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        zstcopyUrlBtn.onclick = function() {
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