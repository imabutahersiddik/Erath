         <div class="modal fade" id="rar5">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">RAR5 File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your RAR5</h2>
<input type="file" id="rar5fileInput" accept=".rar5">
<button id="rar5encryptBtn">Upload</button>
<br><br>
<textarea id="rar5outputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="rar5downloadLink" style="display:none;">Download RAR5</a>
<button id="rar5copyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('rar5encryptBtn').addEventListener('click', function() {
    const rar5fileInput = document.getElementById('rar5fileInput');
    if (rar5fileInput.files.length === 0) {
        alert("Please select a RAR5 file.");
        return;
    }
    const file = rar5fileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/rar5/" + base64Data;
        const rar5outputUrl = document.getElementById('rar5outputUrl');
        rar5outputUrl.style.display = 'block';
        rar5outputUrl.value = url;
        
        const rar5downloadLink = document.getElementById('rar5downloadLink');
        rar5downloadLink.href = url;
        rar5downloadLink.style.display = 'block';
        rar5downloadLink.innerText = ' Download RAR5';
        rar5downloadLink.className = 'Erath'; // Apply Erath class for styling
        rar5downloadLink.target = "_blank"; // Open link in a new tab
        
        const rar5copyUrlBtn = document.getElementById('rar5copyUrlBtn');
        rar5copyUrlBtn.style.display = 'block';
        rar5copyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        rar5copyUrlBtn.onclick = function() {
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