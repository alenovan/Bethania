<?php foreach ($edit_user as $user) { ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">Tambah Profile</h4>
                </div> 
                <form action="<?php echo base_url(); ?>user/edit/<?php echo $user->id_akun;?>" method="POST" >
                   
                    <div class="content">
                     <div class="row">
                         
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" id="username_akun" name="username_akun" placeholder="Username" value="<?php echo $user->username_akun; ?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email_akun" name="email_akun" value="<?php echo $user->email_akun; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Company" value="*******" id="password_akun" name="password_akun" >
                            </div>
                        </div>
                        
                    </div>

                    

                    

                    <button type="submit"  class="btn btn-admin btn-infol pull-right">Tambah Profile</button>
                    <div class="clearfix"></div>
                    
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card card-user">
            <div class="image">
                <img id="cover_image" name="cover_image" src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
            </div>
            
            <div class="content">
              
               
               <h4 class="title" id="name_baru" name="name_baru">Nama : <?php echo $user->username_akun; ?></h4>   
               <br>     
               <h4 class="title" id="email_baru" name="email_baru" style="">Email : <?php echo $user->email_akun; ?></h4>
               <br>
               <h4 class="title" id="password_baru" name="password_baru" style="">Password : ******</h4>
               
               
           </div>
           <hr>
           <div class="text-center">
               
           </div>
       </div>
   </div>

</div>
</div>

<script type="text/javascript">

document.getElementById("username_akun").onkeyup = function() {
    document.getElementById("name_baru").innerHTML = "Nama : "+this.value;   
}

document.getElementById("email_akun").onkeyup = function() {
    document.getElementById("email_baru").innerHTML ="Email : " +this.value;   
}

document.getElementById("password_akun").onkeyup = function() {
    document.getElementById("password_baru").innerHTML ="Password : " +"**********";   
}

</script>
<?php } ?>