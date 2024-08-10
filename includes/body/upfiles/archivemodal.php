         <div class="modal fade" id="pdf">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">Select Archive to Upload</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
<!-- Archive Type Buttons -->
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #4CAF50; color: white; transition: background-color 0.3s;" onclick="document.getElementById('zip').style.display='block'">Upload zip</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #2196F3; color: white; transition: background-color 0.3s;" onclick="document.getElementById('rar').style.display='block'">Upload rar</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FF5722; color: white; transition: background-color 0.3s;" onclick="document.getElementById('tar').style.display='block'">Upload tar</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FFC107; color: black; transition: background-color 0.3s;" onclick="document.getElementById('gz').style.display='block'">Upload gz</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #9C27B0; color: white; transition: background-color 0.3s;" onclick="document.getElementById('7z').style.display='block'">Upload 7z</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #673AB7; color: white; transition: background-color 0.3s;" onclick="document.getElementById('iso').style.display='block'">Upload iso</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #3F51B5; color: white; transition: background-color 0.3s;" onclick="document.getElementById('arj').style.display='block'">Upload arj</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #00BCD4; color: white; transition: background-color 0.3s;" onclick="document.getElementById('lha').style.display='block'">Upload lha</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #009688; color: white; transition: background-color 0.3s;" onclick="document.getElementById('cab').style.display='block'">Upload cab</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #4CAF50; color: white; transition: background-color 0.3s;" onclick="document.getElementById('dmg').style.display='block'">Upload dmg</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #2196F3; color: white; transition: background-color 0.3s;" onclick="document.getElementById('ace').style.display='block'">Upload ace</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FF5722; color: white; transition: background-color 0.3s;" onclick="document.getElementById('bz2').style.display='block'">Upload bz2</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FFC107; color: black; transition: background-color 0.3s;" onclick="document.getElementById('sit').style.display='block'">Upload sit</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #9C27B0; color: white; transition: background-color 0.3s;" onclick="document.getElementById('cpio').style.display='block'">Upload cpio</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #673AB7; color: white; transition: background-color 0.3s;" onclick="document.getElementById('z').style.display='block'">Upload z</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #3F51B5; color: white; transition: background-color 0.3s;" onclick="document.getElementById('lz').style.display='block'">Upload lz</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #00BCD4; color: white; transition: background-color 0.3s;" onclick="document.getElementById('lzma').style.display='block'">Upload lzma</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #009688; color: white; transition: background-color 0.3s;" onclick="document.getElementById('xz').style.display='block'">Upload xz</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #4CAF50; color: white; transition: background-color 0.3s;" onclick="document.getElementById('p7z').style.display='block'">Upload p7z</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #2196F3; color: white; transition: background-color 0.3s;" onclick="document.getElementById('jar').style.display='block'">Upload jar</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FF5722; color: white; transition: background-color 0.3s;" onclick="document.getElementById('hqx').style.display='block'">Upload hqx</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FFC107; color: black; transition: background-color 0.3s;" onclick="document.getElementById('cbr').style.display='block'">Upload cbr</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #9C27B0; color: white; transition: background-color 0.3s;" onclick="document.getElementById('cbt').style.display='block'">Upload cbt</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #673AB7; color: white; transition: background-color 0.3s;" onclick="document.getElementById('targz').style.display='block'">Upload tar.gz</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #3F51B5; color: white; transition: background-color 0.3s;" onclick="document.getElementById('tarbz2').style.display='block'">Upload tar.bz2</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #00BCD4; color: white; transition: background-color 0.3s;" onclick="document.getElementById('tarxz').style.display='block'">Upload tar.xz</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #009688; color: white; transition: background-color 0.3s;" onclick="document.getElementById('zipx').style.display='block'">Upload zipx</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #4CAF50; color: white; transition: background-color 0.3s;" onclick="document.getElementById('war').style.display='block'">Upload war</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #2196F3; color: white; transition: background-color 0.3s;" onclick="document.getElementById('tbz').style.display='block'">Upload tbz</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FF5722; color: white; transition: background-color 0.3s;" onclick="document.getElementById('tbz2').style.display='block'">Upload tbz2</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FFC107; color: black; transition: background-color 0.3s;" onclick="document.getElementById('tarlz').style.display='block'">Upload tar.lz</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #9C27B0; color: white; transition: background-color 0.3s;" onclick="document.getElementById('tarlzma').style.display='block'">Upload tar.lzma</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #673AB7; color: white; transition: background-color 0.3s;" onclick="document.getElementById('tarzst').style.display='block'">Upload tar.zst</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #3F51B5; color: white; transition: background-color 0.3s;" onclick="document.getElementById('lzip').style.display='block'">Upload lzip</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #00BCD4; color: white; transition: background-color 0.3s;" onclick="document.getElementById('lzop').style.display='block'">Upload lzop</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #009688; color: white; transition: background-color 0.3s;" onclick="document.getElementById('sqz').style.display='block'">Upload sqz</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #4CAF50; color: white; transition: background-color 0.3s;" onclick="document.getElementById('zpaq').style.display='block'">Upload zpaq</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #2196F3; color: white; transition: background-color 0.3s;" onclick="document.getElementById('zip64').style.display='block'">Upload zip64</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FF5722; color: white; transition: background-color 0.3s;" onclick="document.getElementById('pk3').style.display='block'">Upload pk3</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FFC107; color: black; transition: background-color 0.3s;" onclick="document.getElementById('pk4').style.display='block'">Upload pk4</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #9C27B0; color: white; transition: background-color 0.3s;" onclick="document.getElementById('pak').style.display='block'">Upload pak</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #673AB7; color: white; transition: background-color 0.3s;" onclick="document.getElementById('wim').style.display='block'">Upload wim</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #3F51B5; color: white; transition: background-color 0.3s;" onclick="document.getElementById('vhd').style.display='block'">Upload vhd</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #00BCD4; color: white; transition: background-color 0.3s;" onclick="document.getElementById('vmdk').style.display='block'">Upload vmdk</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #009688; color: white; transition: background-color 0.3s;" onclick="document.getElementById('taz').style.display='block'">Upload taz</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #4CAF50; color: white; transition: background-color 0.3s;" onclick="document.getElementById('zst').style.display='block'">Upload zst</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #2196F3; color: white; transition: background-color 0.3s;" onclick="document.getElementById('zipx').style.display='block'">Upload zipx</button>
<button style="padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; background-color: #FF5722; color: white; transition: background-color 0.3s;" onclick="document.getElementById('rar5').style.display='block'">Upload rar5</button>
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