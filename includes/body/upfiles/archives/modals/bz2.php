         <div class="modal fade" id="bz2">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">BZ2 File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your BZ2</h2>
<input type="file" id="bz2fileInput" accept=".bz2">
<button id="bz2encryptBtn">Upload</button>
<br><br>
<textarea id="bz2outputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="bz2downloadLink" style="display:none;">Download BZ2</a>
<button id="bz2copyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('bz2encryptBtn').addEventListener('click', function() {
    const bz2fileInput = document.getElementById('bz2fileInput');
    if (bz2fileInput.files.length === 0) {
        alert("Please select a BZ2 file.");
        return;
    }
    const file = bz2fileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/bz2/" + base64Data;
        const bz2outputUrl = document.getElementById('bz2outputUrl');
        bz2outputUrl.style.display = 'block';
        bz2outputUrl.value = url;
        
        const bz2downloadLink = document.getElementById('bz2downloadLink');
        bz2downloadLink.href = url;
        bz2downloadLink.style.display = 'block';
        bz2downloadLink.innerText = ' Download BZ2';
        bz2downloadLink.className = 'Erath'; // Apply Erath class for styling
        bz2downloadLink.target = "_blank"; // Open link in a new tab
        
        const bz2copyUrlBtn = document.getElementById('bz2copyUrlBtn');
        bz2copyUrlBtn.style.display = 'block';
        bz2copyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        bz2copyUrlBtn.onclick = function() {
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