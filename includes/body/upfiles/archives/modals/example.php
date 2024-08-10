         <div class="modal fade" id="pdf">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">PDF File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload your PDF</h2>
<input type="file" id="examplefileInput" accept=".pdf">
<button id="exampleencryptBtn">Upload</button>
<br><br>
<textarea id="exampleoutputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
<br>
<a id="exampledownloadLink" style="display:none;">Download PDF</a>
<button id="examplecopyUrlBtn" style="display:none;">Copy URL</button>

<script>
window.onload = function() {
    // Get the current page URL
    const currentUrl = window.location.href;
};

document.getElementById('exampleencryptBtn').addEventListener('click', function() {
    const examplefileInput = document.getElementById('examplefileInput');
    if (examplefileInput.files.length === 0) {
        alert("Please select a PDF file.");
        return;
    }
    const file = examplefileInput.files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        const fileData = new Uint8Array(event.target.result);
        const base64Data = btoa(String.fromCharCode.apply(null, fileData));
        const url = "https://erath.vercel.app/pdf/" + base64Data;
        const exampleoutputUrl = document.getElementById('exampleoutputUrl');
        exampleoutputUrl.style.display = 'block';
        exampleoutputUrl.value = url;
        
        const exampledownloadLink = document.getElementById('exampledownloadLink');
        exampledownloadLink.href = url;
        exampledownloadLink.style.display = 'block';
        exampledownloadLink.innerText = ' Download PDF';
        exampledownloadLink.className = 'Erath'; // Apply Erath class for styling
        exampledownloadLink.target = "_blank"; // Open link in a new tab
        
        const examplecopyUrlBtn = document.getElementById('examplecopyUrlBtn');
        examplecopyUrlBtn.style.display = 'block';
        examplecopyUrlBtn.className = 'Erath'; // Apply Erath class for styling
        examplecopyUrlBtn.onclick = function() {
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