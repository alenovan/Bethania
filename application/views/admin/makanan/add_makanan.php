
<style type="text/css">
.dropzone {
    border: 2px dashed #0087F7;
}
</style>
<div class="container-fluid">
                <div class="row">
                    <div >
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Makanan Detail</h4>
                            </div> 
                              <!-- <form action="<?php echo base_url(); ?>content/add/data" method="POST" > -->
                                 
                            <div class="content">
                                <div class="continer">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Judul</label>
                                                        <input type="text" class="form-control" id="judul_content" name="judul_content" placeholder="Judul Content" value="" >
                                                    </div>
                                                </div> 
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Sub Judul</label>
                                                        <input type="text" class="form-control" placeholder="Sub Judul Content" id="subjudul_content" name="subjudul_content" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Deskripsi Makanan</label>
                                                        <textarea id="isi_content" name="isi_content" class="form-control">
                                                            
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                         <form method="POST" class="file" enctype="multipart/form-data">
                                                         <label for="exampleInputEmail1">Profil Makanan</label>
                                                         <input type="file" class="form-control" placeholder="Email" id="userfile" name="userfile" onchange="slider(event)">
                                                         </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Preview Image</label>
                                                        <img class="form-control" style="height:300px"src="" id="show_image" name="show_image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        


                                        

                                <div style="">
                                    <div class="dropzone" >
                                        <div class="dz-message">
                                        <h3> <b>Klik Atau Drop</b> Gambar Detail Makanan Disini</h3>
                                        </div>
                                    </div>
                                </div>

                                    
                                    

                                  <button type="submit"  onclick="add_makanan()" class="btn btn-admin btn-info pull-right" id="submit">Tambah Content 1</button>
                                    <div class="clearfix"></div>
                                
                            </div>
                        <!-- </form> -->
                        </div>
                    </div>
                  
                </div>
           

            <script type="text/javascript">

        function add_makanan() {
        $.ajax({
            url: "<?php echo base_url('add_makanan') ?>",
            method: 'post',
            data: 'judul_content=' + $('#judul_content').val() +
                  '&isi_content=' + $('#isi_content').val()+
                  '&subjudul_content=' + $('#subjudul_content').val(),
            dataType: 'html',
            success: function (data) {
               // alert('  success');
            }
        });

        // return false;

        var upload_profil = new FormData($('.file')[0]);
          $.ajax({
                url: "<?php echo base_url('upload_profil') ?>",
                type: 'POST',
                data: upload_profil,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success: function(data){         
                },
                
        });
       return false; 
    }



            Dropzone.autoDiscover = false;

            var foto_upload= new Dropzone(".dropzone",{  
            url: "<?php echo base_url('upload_makanan') ?>",
            method: 'post',
            maxFilesize: 2,          
            acceptedFiles:"image/*",
            paramName:"userfile",
            dictInvalidFileType:"Type file ini tidak dizinkan",
            addRemoveLinks:true,
            autoProcessQueue: false,
            success: function(msg) {
                window.location = 'http://yourredirectlocation.com';
            }    
            });
           
           $(document).on('click', '#submit', function () {
            foto_upload.options.autoProcessQueue = true;
            foto_upload.processQueue();
            window.location.href("https://www.w3schools.com");
            });
            foto_upload.on("queuecomplete", function() {
            foto_upload.options.autoProcessQueue = false;
            });
  


</script>


<script>
        var slider = function(event) {
        var output = document.getElementById('show_image');
        output.src = URL.createObjectURL(event.target.files[0]);
        };
</script>