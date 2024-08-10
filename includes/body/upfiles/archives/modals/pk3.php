         <div class="modal fade" id="pk3">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">PK3 File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your PK3</h2>
<input type="file" id="pk3fileInput" accept=".pk3">
<button id="pk3encryptBtn">Upload</button>
<br><br>
<textarea id="pk3outputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="pk3downloadLink" style="display:none;">Download PK3</a>
<button id="pk3copyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('pk3encryptBtn').addEventListener('click', function() {
    const pk3fileInput = document.getElementById('pk3fileInput');
    if (pk3fileInput.files.length === 0) {
        alert("Please select a PK3 file.");
        return;
    }
    const file = pk3fileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/pk3/" + base64Data;
        const pk3outputUrl = document.getElementById('pk3outputUrl');
        pk3outputUrl.style.display = 'block';
        pk3outputUrl.value = url;
        
        const pk3downloadLink = document.getElementById('pk3downloadLink');
        pk3downloadLink.href = url;
        pk3downloadLink.style.display = 'block';
        pk3downloadLink.innerText = ' Download PK3';
        pk3downloadLink.className = 'Erath'; // Apply Erath class for styling
        pk3downloadLink.target = "_blank"; // Open link in a new tab
        
        const pk3copyUrlBtn = document.getElementById('pk3copyUrlBtn');
        pk3copyUrlBtn.style.display = 'block';
        pk3copyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        pk3copyUrlBtn.onclick = function() {
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