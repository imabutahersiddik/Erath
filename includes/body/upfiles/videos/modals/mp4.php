         <div class="modal fade" id="mp4">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">MP4 File Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                         <h1>Upload Your MP4</h1>
    <input type="file" id="fileInputMP4" accept=".mp4" style="margin: 20px 0;">
    <button id="encryptMP4Btn" style="background-color: #007BFF; border: none; color: white; padding: 15px 30px; text-align: center; text-decoration: none; display: inline-block; font-size: 18px; margin: 10px 0; cursor: pointer; border-radius: 5px; transition: background-color 0.3s;">Upload</button>
    <br>
    <textarea id="MP4outputUrl" style="display:none;" placeholder="Encrypted data will appear here..."></textarea>
    <button id="copyBtnmp4" style="display:none; background-color: #007BFF; border: none; color: white; padding: 15px 30px; text-align: center; text-decoration: none; display: inline-block; font-size: 18px; margin: 10px 0; cursor: pointer; border-radius: 5px; transition: background-color 0.3s;">Copy URL</button>
    <br>
    <a id="visitLink" style="display:none; text-decoration: none; color: #007BFF; font-size: 16px;">Download MP4</a>
    <script>
        document.getElementById('encryptMP4Btn').addEventListener('click', function() {
            const fileInputMP4 = document.getElementById('fileInputMP4');
            if (fileInputMP4.files.length === 0) {
                alert("Please select a MP4 file.");
                return;
            }
            
            const file = fileInputMP4.files[0];
            const reader = new FileReader();

            reader.onload = function(event) {
                const fileData = new Uint8Array(event.target.result);
                
                // Convert the file data to a WordArray for encryption
                const wordArray = CryptoJS.lib.WordArray.create(fileData);
                
                // Encrypt the data (you can change the key)
                const secretKey = "your-secret-key"; // Change this to your actual secret key
                const encryptedData = CryptoJS.AES.encrypt(wordArray, secretKey).toString();
                
                // Create a URL for the encrypted data
                const url = "https://erath.vercel.app/mp4/" + btoa(encryptedData);

                // Show the output URL
                const MP4outputUrl = document.getElementById('MP4outputUrl');
                MP4outputUrl.style.display = 'block';
                MP4outputUrl.value = url;

                // Show the copy button
                const copyBtnmp4 = document.getElementById('copyBtnmp4');
                copyBtnmp4.style.display = 'block';
                copyBtnmp4.addEventListener('click', () => {
                    navigator.clipboard.writeText(url)
                        .then(() => {
                            alert("URL copied to clipboard!");
                        })
                        .catch(err => {
                            console.error("Failed to copy: ", err);
                        });
                });

                // Show the visit link
                const visitLink = document.getElementById('visitLink');
                visitLink.href = url;
                visitLink.style.display = 'block';
                visitLink.innerText = 'Download MP4';
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