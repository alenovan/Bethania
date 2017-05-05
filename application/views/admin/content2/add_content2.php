<div class="container-fluid">
                <div class="row">
                    <div >
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Content 2</h4>
                            </div> 
                              <form action="<?php echo md5(SHA1(md5('content2/add/data')));?>" method="POST" >
                                 
                            <div class="content">
                                   <div class="row">
                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input type="text" class="form-control" id="judul_content2" name="judul_content2" placeholder="Judul Content" value="" >
                                            </div>
                                        </div>
                                       <!--  <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Preview Image</label>
                                                <img class="form-control" style=""src="">
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sub Judul</label>
                                                <input type="text" class="form-control" placeholder="Sub Judul Content" id="subjudul_content2" name="subjudul_content2" >
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Pilih</label>
                                                <select class="form-control" id="kategori_content2" name="kategori_content2">
                                                    <option value="2">Our Menu</option>
                                                    <option value="3">Break Fast</option>
                                                    <option value="4">Lunch</option>
                                                    <option value="5">Dinner</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Gambar</label>
                                                <input type="file" class="form-control" placeholder="Email" id="email" name="email" >
                                            </div>
                                        </div> -->
                                       
                                    </div>

                                   

                                    

                                  <button type="submit"  class="btn btn-info btn-fill pull-right">Tambah Content 1</button>
                                    <div class="clearfix"></div>
                                
                            </div>
                        </form>
                        </div>
                    </div>
                  
                </div>
            </div>