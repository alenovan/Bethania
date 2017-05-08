<?php foreach ($content2 as $content) { ?>
    

<div class="container-fluid">
                <div class="row">
                    <div >
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Content 2</h4>
                            </div> 
                               <form action="<?php echo base_url(); ?>content2/edit/<?php echo $content->id_content;?>" method="POST" >
                                 
                            <div class="content">
                                   <div class="row">
                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input type="text" class="form-control" id="judul_content2" name="judul_content2" placeholder="Judul Content" value="<?php echo $content->judul_content; ?>" >
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
                                                <input type="text" class="form-control" placeholder="Sub Judul Content" id="subjudul_content2" name="subjudul_content2" value="<?php echo $content->sub_judul; ?>">
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Pilih</label>
                                                <select class="form-control" id="kategori_content2" name="kategori_content2" value="<?php echo $content->sub_judul; ?>">
                                                    <option value="2" <?php if($content->kategory_id == 2)echo 'selected';else{echo "";}?>>Our Menu</option>
                                                    <option value="3"<?php if($content->kategory_id == 3)echo 'selected';else{echo "";}?>>Break Fast</option>
                                                    <option value="4"<?php if($content->kategory_id == 4)echo 'selected';else{echo "";}?>>Lunch</option>
                                                    <option value="5"<?php if($content->kategory_id == 5)echo 'selected';else{echo "";}?>>Dinner</option>
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

                                   

                                    

                                  <button type="submit"  class="bbtn btn-admin btn-info pull-right">Tambah Content 1</button>
                                    <div class="clearfix"></div>
                                
                            </div>
                        </form>
                        </div>
                    </div>
                  
                </div>
            </div>
            <?php }
            ?>