<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Slider</h4>
                                <p class="category">List Slider From Bethania</p>
                            </div>
                            <div align="right" class="header">
                             <a href="<?php echo base_url(); ?>slider/add"><input type="button" class="btn btn success" Value="Tambah Data"></a>
                             </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>SLider Title</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        $no = 1 ;
                                        foreach ($show_slider as $content ) { ?>    
                                        <tr>
                                        	<td><?php echo $no; ?></td>
                                            <td><a class="btn btn-admin btn-info" href="">Preview</a></td>
                                            <td>
                                              <a class="btn btn-admin btn-info" href="<?php echo base_url(); ?>slider/edit/view/<?php echo $content->id_content;?>"><i class="pe-7s-info icon-btn"></i>Detail</a>
                                              <a href="" type="button" class="btn btn-admin btn-info" data-toggle="modal" data-target="#delete_slider<?php echo $content->id_content;?>"><i class="pe-7s-trash icon-btn"></i>Hapus</a>
                                            </td>
                                        	<!-- <td><center><a href="<?php echo base_url(); ?>slider/edit/view/<?php echo $content->id_content;?>"><input type="button" value="Edit" class="btn btn-info"></p></a>
                                                <input type="button" Value="Hapus" class="btn btn-danger" data-toggle="modal" data-target="#delete_slider<?php echo $content->id_content;?>"></center></td> -->
                                        </tr>
                                         <?php $no++;}?>
                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                   


                </div>
            </div>

                       <?php $no = 1; foreach ($show_slider as $hapus_slider) { ?>
<div class="modal fade" id="delete_slider<?php echo $hapus_slider->id_content?>" role="dialog" >
  <div class="modal-dialog">
   <div class="modal-content" >
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Are you Sure Delete This Item ?</h4>
    </div>
    <div class="modal-body">
      <table class="table">
       <center>
        <form action="<?php echo base_url(); ?>slider/delete/<?php echo $hapus_slider->id_content?>" method="POST" >
         <input type="text" id="hapus_gambar" name="hapus_gambar" class="hide" value="./assets/images/upload/slider1/<?php echo $hapus_slider->nama_file;?>"> 
        <button type="submit" class="btn btn-success button" ><span>Yes,Iam Sure</span></button>
        </form>
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