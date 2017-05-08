<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Content 2</h4>
                                <p class="category">List Content 2 From Bethania</p>
                            </div>
                            <div align="right" class="header">
                             <a href="<?php echo base_url(); ?>content2/add"><input type="button" class="btn btn success" Value="Tambah Data"></a>
                             <!-- <a href="<?php echo md5(SHA1(md5('content2/add/slider')))?>"><input type="button" class="btn btn success" Value="Tambah Slider"></a> -->
                             </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No</th>
                                    	<th>Judul</th>
                                    	<th>Sub Judul</th>
                                    	<th>Kategori</th>
                                        <th>Action</th>
                                    </thead>
                                     <tbody>
                                        <?php 
                                        $no = 1 ;
                                        foreach ($show_content2 as $content ) { ?>    
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $content->judul_content; ?></td>
                                            <td><?php echo $content->sub_judul; ?></td>
                                            <td><?php echo $content->kategory_id; ?></td>
                                            <!-- <td><center><a href="<?php echo base_url(); ?>content2/edit/edit_view/<?php echo $content->id_content;?>"><input type="button" value="Edit" class="btn btn-info"></p></a>
                                                <input type="button" Value="Hapus" class="btn btn-danger"  data-toggle="modal" data-target="#delete_content2<?php echo $content->id_content;?>"></center></td> -->
                                            <td>
                                            <a class="btn btn-admin btn-info" href="<?php echo base_url(); ?>content2/edit/edit_view/<?php echo $content->id_content;?>"><i class="pe-7s-info icon-btn"></i>Detail</a>
                                            <a href="" type="button" class="btn btn-admin btn-info" data-toggle="modal" data-target="#delete_content2<?php echo $content->id_content;?>"><i class="pe-7s-trash icon-btn"></i>Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $no++;}?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $no = 1; foreach ($show_content2 as $hapus_content2) { ?>
<div class="modal fade" id="delete_content2<?php echo $hapus_content2->id_content?>" role="dialog" >
  <div class="modal-dialog">
     <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you Sure Delete This Item ?</h4>
      </div>
      <div class="modal-body">
          <table class="table">
             <center>
                <a href="<?php echo base_url(); ?>hapus_content2/<?php echo $hapus_content2->id_content?>"><button type="submit" class="btn btn-success button" ><span>Yes,Iam Sure</span></button></a>
                <button class="btn btn-danger button"data-dismiss="modal"><span>No, Remove This Item</span></button>
            </center>    
        </td>
    </tr>

</table>
</div>
<div class="modal-footer">
   
   <button  id="deleteclose" class="btn btn-info button" data-dismiss="modal"><span>Close</span></button>
</div>
</div>

</div>
</div>



<?php } ?>