<?php foreach ($slider as $slider) { ?>
<div class="container-fluid">
                <div class="row">
                    <div >
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Update Slider 2</h4>
                            </div> 
                              <form action="<?php echo base_url(); ?>content2/slider/edit/<?php echo $slider->id_content;?>" method="POST" enctype="multipart/form-data">
                                 
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
                                                <img class="form-control" id="show_image" name="show_image" style="height:300px"src="<?php echo base_url(); ?>assets/images/upload/slider2/<?php echo $slider->nama_file;?>" onchange="file('data')">
                                                <input type="text" id="hapus_gambar" name="hapus_gambar" class="hide" value="./assets/images/upload/slider2/<?php echo $slider->nama_file;?>"> 
                                                <input type="text" id="cek_gambar" name="cek_gambar" class="hide" value="0" > 
                                                
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

<?php  } ?>

<script >
  $("#userfile").change(function(){
            var user = document.getElementById ("userfile").value;         
            $("#cek_gambar").val('1');        
     });
  </script>


