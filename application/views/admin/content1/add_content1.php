<div class="container-fluid">
    <div class="row">
        <div >
            <div class="card">
                <div class="header">
                    <h4 class="title">Tambah Content 1</h4>
                </div> 
                <form action="<?php echo base_url(); ?>content1/add/data" method="POST" >
                    <div class="content">
                       <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" id="judul_content1" name="judul_content1" placeholder="Username" value="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Judul</label>
                                <input type="text" class="form-control" placeholder="subjudul_content1" id="subjudul_content1" name="subjudul_content1" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Isi Content</label>
                                <textarea class="form-control" id="isi_content1" name="isi_content1">
                                </textarea>
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

