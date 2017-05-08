<div class="container-fluid">
                <div class="row">
                    <div >
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Slider Content 2</h4>
                            </div> 
                              <form action="<?php echo base_url(); ?>content2/add/slider/data" method="POST" enctype="multipart/form-data">
                                 
                            <div class="content">
                                   <div class="row">
                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                 <form method="POST" class="file" enctype="multipart/form-data">
                                                 <label for="exampleInputEmail1">Gambar</label>
                                                 <input type="file" class="form-control" placeholder="Email" id="userfile" name="userfile" onchange="slider(event)">
                                                 </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Preview Image</label>
                                                <img class="form-control" style="height:300px"src="" id="show_image" name="show_image">
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

<script>
        var slider = function(event) {
        var output = document.getElementById('show_image');
        output.src = URL.createObjectURL(event.target.files[0]);
        };
          </script>
          