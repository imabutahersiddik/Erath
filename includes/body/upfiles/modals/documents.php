         <div class="modal fade" id="documents">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Select Document to Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
<!-- Document Type Buttons -->
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #00BCD4; color: white; transition: background-color 0.3s;" data-toggle="modal" data-target="#pdf">Upload PDF</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #3F51B5; color: white; transition: background-color 0.3s;" data-toggle="modal" data-target="#docx">Upload DOCX</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #673AB7; color: white; transition: background-color 0.3s;" data-toggle="modal" data-target="#xlsx">Upload XLSX</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #9C27B0; color: white; transition: background-color 0.3s;" data-toggle="modal" data-target="#txt">Upload TXT</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FFC107; color: black; transition: background-color 0.3s;" data-toggle="modal" data-target="#csv">Upload CSV</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FF5722; color: white; transition: background-color 0.3s;" data-toggle="modal" data-target="#pptx">Upload PPTX</button>
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