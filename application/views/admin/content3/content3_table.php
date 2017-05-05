<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Content 3</h4>
                                <p class="category">List Content3 From Bethania</p>
                            </div>
                            <div align="right" class="header">
                             <a href="<?php echo md5(SHA1(md5('content3/add')))?>"><input type="button" class="btn btn success" Value="Tambah Data"></a>
                             </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th>Create At</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1 ;
                                        foreach ($show_content3 as $content ) { ?>    
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $content->judul_content; ?></td>
                                            <td><?php echo $content->sub_judul; ?></td>
                                            <td><?php echo $content->create_at; ?></td>                                            
                                            <td><center><a href="<?php echo md5('content3/edit/view');?>/<?php echo $content->id_content;?>"><input type="button" value="Edit" class="btn btn-info"></p>
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