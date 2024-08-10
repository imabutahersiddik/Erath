         <div class="modal fade" id="lzip">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">LZIP File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your LZIP</h2>
<input type="file" id="lzipfileInput" accept=".lzip">
<button id="lzipencryptBtn">Upload</button>
<br><br>
<textarea id="lzipoutputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="lzipdownloadLink" style="display:none;">Download LZIP</a>
<button id="lzipcopyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('lzipencryptBtn').addEventListener('click', function() {
    const lzipfileInput = document.getElementById('lzipfileInput');
    if (lzipfileInput.files.length === 0) {
        alert("Please select a LZIP file.");
        return;
    }
    const file = lzipfileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/lzip/" + base64Data;
        const lzipoutputUrl = document.getElementById('lzipoutputUrl');
        lzipoutputUrl.style.display = 'block';
        lzipoutputUrl.value = url;
        
        const lzipdownloadLink = document.getElementById('lzipdownloadLink');
        lzipdownloadLink.href = url;
        lzipdownloadLink.style.display = 'block';
        lzipdownloadLink.innerText = ' Download LZIP';
        lzipdownloadLink.className = 'Erath'; // Apply Erath class for styling
        lzipdownloadLink.target = "_blank"; // Open link in a new tab
        
        const lzipcopyUrlBtn = document.getElementById('lzipcopyUrlBtn');
        lzipcopyUrlBtn.style.display = 'block';
        lzipcopyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        lzipcopyUrlBtn.onclick = function() {
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