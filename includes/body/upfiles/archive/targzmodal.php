         <div class="modal fade" id="targz">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Tar.gz File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h2>Upload Tar.gz File and Generate URL</h2>
    <input type="file" id="fileInput" accept=".tar.gz">
    <button id="encryptBtn">Upload and Generate URL</button>
    <br><br>
    <textarea id="outputUrl" rows="10" cols="50" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
    <br>
    <a id="downloadLink" style="display:none;">Download Tar.gz File</a>

    <script>
        document.getElementById('encryptBtn').addEventListener('click', function() {
            const fileInput = document.getElementById('fileInput');
            if (fileInput.files.length === 0) {
                alert("Please select a Tar.gz file.");
                return;
            }
            
            const file = fileInput.files[0];
            const reader = new FileReader();

            reader.onload = function(event) {
                const fileData = new Uint8Array(event.target.result);
                
                // Convert the file data to Base64
                const base64Data = btoa(String.fromCharCode.apply(null, fileData));
                
                // Create a URL for the Base64 data
                const url = "data:application/gzip;base64," + base64Data;

                // Show the output URL
                const outputUrl = document.getElementById('outputUrl');
                outputUrl.style.display = 'block';
                outputUrl.value = url;

                // Create a download link
                const downloadLink = document.getElementById('downloadLink');
                downloadLink.href = url;
                downloadLink.download = 'targz_file.zip'; // Change this if you want a different filename
                downloadLink.style.display = 'block';
                downloadLink.innerText = 'Download Tar.gz File';
            };

            reader.readAsArrayBuffer(file); // Read the file as an ArrayBuffer
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