<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Content 1</h4>
                                <p class="category">List Content 1 From Bethania</p>
                            </div>
                            <div align="right" class="header">
                             <a href="<?php echo md5(SHA1(md5('content1/add')))?>"><input type="button" class="btn btn success" Value="Tambah Data"></a>
                             </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No</th>
                                    	<th>Judul</th>
                                    	<th>Sub Judul</th>
                                    	<th>Isi</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1 ;
                                        foreach ($show_content1 as $content ) { ?>    
                                        <tr>
                                        	<td><?php echo $no; ?></td>
                                        	<td><?php echo $content->judul_content; ?></td>
                                        	<td><?php echo $content->sub_judul; ?></td>
                                        	<td><?php echo $content->isi_content; ?></td>
                                        	<td><center><a href="<?php echo md5('content1/edit/view');?>/<?php echo $content->id_content;?>"><input type="button" value="Edit" class="btn btn-info"></p>
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