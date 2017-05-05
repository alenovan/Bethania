<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List User</h4>
                                <p class="category">List User From Bethania</p>
                            </div>
                            <div align="right" class="header">
                             <a href="<?php echo md5(SHA1(md5('user/add/view')))?>"><input type="button" class="btn btn success" Value="Tambah Data"></a>
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
                                            
                                        	<td><center><a href="<?php echo md5('user/edit/view');?>/<?php echo $akun->id_akun;?>"><input type="button" value="Edit" class="btn btn-info"></p>
                                                <input type="button" Value="Hapus" class="btn btn-danger"></center></td>
                                            
                                        </tr>
                                        <?php $no++; }?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                   


                </div>
            </div>