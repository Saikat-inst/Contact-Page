<?php include "includes/header.php"?>

<html>
<title>Fill Your Details</title>
<style>
.login {
  margin: auto;
  width: 300px;
  background-color:#ffffff;
  padding: 15px;
  margin-top:30px;
  box-shadow: 1px 1px 15px rgb(179, 183, 190);
}

@media only screen and (max-width:410px){
    body{
        background-size:cover;
        repeat:no-repeat;
        background-position:center;
    }
}
</style>

<body>
 
<div class="wrapper" style='width:100%;padding-top:50px;height:600px;background-image: url(images/login_bg.jpg);background-size:cover;'>
            <form action='' id="test" method='post' class="login">
                <h5>Login</h5>
                <div class="form-group">
               
                    <label>Name</label>
                    <input type='text' name='name' class='form-control'>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type='phone' name='phone' class='form-control'>
                </div>
                <div class="form-group">
                    <button type='submit'name='submit' style="width:100%;" class='btn btn danger'>Submit</button>
                </div>
    
            </form>
    </div>

</body>

<script> 
        $(document).ready(function(){
            $('#test').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'includes/data.php',
                    method:'post',
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    success:function(data){
                    alertify.success(data);
                    }

                })



            })




        });
           
</script>

</html>