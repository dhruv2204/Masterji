<?php if(!defined('access'))
{
    header('Location: http://masterjimob.dhruvsrivastav.com');
}?>
<?php define('access',1);
include 'head.php';?>
<?php
if(isset($_POST['username'])&&(isset($_POST['password']))){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash=md5($password);
    if((!empty($username))&&(!empty($password))) {
        $query="SELECT `id` FROM `login` WHERE `username`='$username' AND `password`='$password_hash'";
       if($result=mysqli_query($con,$query)){
           $query_num_rows=mysqli_num_rows($result);
               if($query_num_rows==0){
                  echo '<br><br><br><h1 align="center">INVALID USERNAME PASSWORD COMBINATION</h1>'; 
               }
           else if($query_num_rows==1){
           $user_id=mysqli_fetch_assoc($result);
		   
               $_SESSION['user_id']=$user_id['id'];
               header('Location: http://masterjimob.dhruvsrivastav.com/personal.php');
		   
		   
		   }
    }}
    else{
        echo '<br><br><br><h1 align="center">Enter Username and Password</h1>';
    }
}


?>
<?php define('access',1);
include 'navbar2.php' ?>
<div class="Login text-center" style="padding-top:5%" >
<h1 align="center" style="padding-top:20px">Login</h1>
<div id="loginform" class="container-fluid    " >
<form action="<?php echo $current_file;?>" class='col-sm-12' method="POST">
 <div class=' col-sm-12  form-group'>
 <input type="text" name="username" placeholder="Username" class='  form-control'> 
</div>
<div class=' col-sm-12  form-group'>
 <input type="password" name="password" placeholder="Password" class=' form-control'>
 </div>
    <input type="submit" class="btn btn-primary" value="Log in"> 
</div>
</form>   
</div>  
