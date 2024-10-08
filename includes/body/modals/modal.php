         <div class="modal fade" id="help">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Help</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <h2>Help: How to Use Erath Hosting</h2>
        <p><strong>Step 1: Paste Your HTML Code</strong><br>
        In the provided textarea, paste your HTML code that you want to host. Make sure your code is complete and properly formatted.</p>
        
        <p><strong>Step 2: Submit Your Code</strong><br>
        Once you’ve pasted your HTML code, click the "Erath" button to submit your code. This action will process your input and prepare it for hosting.</p>
        
        <p><strong>Step 3: Get Your Link</strong><br>
        After clicking the "Erath" button, you will receive a link to your hosted web page. This link will allow you to access your page from any browser.</p>
        
        <p><strong>Step 4: View Your Web Page</strong><br>
        Click on the provided link to view your web page. You can share this link with others or bookmark it for easy access.</p>
        
        <p>If you encounter any issues or have further questions, please refer to our FAQs or contact support.</p>
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