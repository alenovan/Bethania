<div class="container-fluid">
                <div class="row">
                    <div >
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Content 3</h4>
                            </div> 
                              <form action="<?php echo base_url(); ?>content3/add/data" method="POST" >
                                 
                            <div class="content">
                                   <div class="row">
                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Judul Menu</label>
                                                <input type="text" class="form-control" id="judul_content3" name="judul_content3" placeholder="Username" value="" >
                                            </div>
                                            
                                        </div>
                                        
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sub Judul Menu</label>
                                                <input type="text" class="form-control" placeholder="subjudul_content3" id="subjudul_content3" name="subjudul_content3" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal Rilis</label>
                                                <input type="date" class="form-control" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="Email" id="tgl_content3" name="tgl_content3" >
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                    

                                  <button type="submit"  class="btn btn-admin btn-info pull-right">Tambah Content 1</button>
                                    <div class="clearfix"></div>
                                
                            </div>
                        </form>
                        </div>
                    </div>
                  
                </div>
            </div>

          