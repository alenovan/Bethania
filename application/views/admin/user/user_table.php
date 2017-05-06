<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">List User</h4>
          <p class="category">List User From Bethania</p>
        </div>
        <div align="right" class="header">
         <a href="<?php echo base_url(); ?>user/add/view"><input type="button" class="btn btn success" Value="Tambah Data"></a>
       </div>
       <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
          <thead>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th><center>Action</center></th>
          </thead>
          <tbody>
            <?php
            $no = 1; 
            foreach ($show_akun as $akun) { ?>
            <tr>
             <td><?php echo $no;?></td>
             <td><?php echo $akun->username_akun?></td>
             <td><?php echo $akun->email_akun?></td>
             <td>******</td>
             
             <td><center><a href="<?php echo base_url(); ?>user/edit/view/<?php echo $akun->id_akun;?>"><input type="button" value="Edit" class="btn btn-info"></p></a>
              <input type="button" Value="Hapus" class="btn btn-danger"   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#delete_akun<?php echo $akun->id_akun;?>"></center></td>
              
            </tr>
            <?php $no++; }?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
</div>


<?php $no = 1; foreach ($show_akun as $edit_akun) { ?>
<div class="modal fade" id="delete_akun<?php echo $edit_akun->id_akun?>" role="dialog" >
  <div class="modal-dialog">
   <div class="modal-content" >
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Are you Sure Delete This Item ?</h4>
    </div>
    <div class="modal-body">
      <table class="table">
       <center>
        <a href="<?php echo base_url(); ?>hapus_user/<?php echo $edit_akun->id_akun?>"><button type="submit" class="btn btn-success button" ><span>Yes,Iam Sure</span></button></a>
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
