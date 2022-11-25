<?php  
session_start();//session starts here  

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
    <style>  
    .login-panel {  
        margin-top: 70px; 
    }
    body { 
        background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%); 
    }
    .cntr {
    width: 300px;
    
    
}
    
    </style>
</head>
<body>

<div class="container" align="center">
    <div class="login-panel panel panel-success">
<img src = "img/mnsnhs_logo.png"  />

  <div class="panel-heading">
      <br/>
  <h2 class="panel-title">Sign In</h2></div>
  <div class="panel-body">  
       <form role="form" class="cntr" method="post" action="">
    <fieldset>  <br/>
    <div class="form-group"  >  
         <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>  
     </div>  <br/>
     <div class="form-group">  
        <input class="form-control" placeholder="Password" name="password" type="password" required>  
      </div> <br/>
  <div class="form-group">
      <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login" >
      </div>
    </fieldset>  
    </form> 
</div></div></div>

</body>
</html>
<?php  
  
//include_once $_SERVER["DOCUMENT_ROOT"]."/php/dbconfig.php";  

include_once 'dbconfig.php';  

  
if(isset($_POST['login']))  
{  
    $user_name=$_POST['username'];  
    $user_pass=$_POST['password'];  
    
    //to prevent sql injection
    $user_name=stripcslashes($user_name);  
    $user_pass=stripcslashes($user_pass); 
    
    $user_name=mysqli_real_escape_string($conn, $user_name);  
    $user_pass=mysqli_real_escape_string($conn, $user_pass);
  
    $check_user="select * from noticelogin WHERE username= BINARY '$user_name'AND password= BINARY '$user_pass'";  
  
    $run=mysqli_query($conn,$check_user);  
    $ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
    $details= $_SERVER['HTTP_USER_AGENT'];
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('Main.php','_self')</script>";  
  
        $_SESSION['username']=$user_name;//here session is used and value of $user_name store in $_SESSION.  
        $update_time = "UPDATE noticelogin SET logged_in = now() WHERE username= '$user_name'";
        $run1=mysqli_query($conn,$update_time);
        $update_ip = "UPDATE noticelogin SET ip = '$ip', details='$details' WHERE username= '$user_name'";
        $run2=mysqli_query($conn,$update_ip);
  
    }  
    else  
    {  
      echo "<script>alert('Username or password is incorrect!')</script>";  
    }  
}  
?>