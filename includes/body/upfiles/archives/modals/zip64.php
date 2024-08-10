         <div class="modal fade" id="zip64">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">ZIP64 File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your ZIP64</h2>
<input type="file" id="zip64fileInput" accept=".zip64">
<button id="zip64encryptBtn">Upload</button>
<br><br>
<textarea id="zip64outputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="zip64downloadLink" style="display:none;">Download ZIP64</a>
<button id="zip64copyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('zip64encryptBtn').addEventListener('click', function() {
    const zip64fileInput = document.getElementById('zip64fileInput');
    if (zip64fileInput.files.length === 0) {
        alert("Please select a ZIP64 file.");
        return;
    }
    const file = zip64fileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/zip64/" + base64Data;
        const zip64outputUrl = document.getElementById('zip64outputUrl');
        zip64outputUrl.style.display = 'block';
        zip64outputUrl.value = url;
        
        const zip64downloadLink = document.getElementById('zip64downloadLink');
        zip64downloadLink.href = url;
        zip64downloadLink.style.display = 'block';
        zip64downloadLink.innerText = ' Download ZIP64';
        zip64downloadLink.className = 'Erath'; // Apply Erath class for styling
        zip64downloadLink.target = "_blank"; // Open link in a new tab
        
        const zip64copyUrlBtn = document.getElementById('zip64copyUrlBtn');
        zip64copyUrlBtn.style.display = 'block';
        zip64copyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        zip64copyUrlBtn.onclick = function() {
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