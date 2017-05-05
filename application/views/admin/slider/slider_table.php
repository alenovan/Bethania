<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Slider</h4>
                                <p class="category">List Slider From Bethania</p>
                            </div>
                            <div align="right" class="header">
                             <a href="<?php echo md5(SHA1(md5('slider/add')))?>"><input type="button" class="btn btn success" Value="Tambah Data"></a>
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
                                            <td></td>
                                        	<td><center><a href="<?php echo md5('slider/edit/view');?>/<?php echo $content->id_content;?>"><input type="button" value="Edit" class="btn btn-info"></p>
                                                <input type="button" Value="Hapus" class="btn btn-danger"></center></td>
                                        </tr>
                                         <?php $no++;}?>
                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                   


                </div>
            </div>