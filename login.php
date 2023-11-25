<?php
session_start();
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  if($email=="admin@gmail.com" && $password=="123"){
     $_SESSION['type']='admin';
    echo'<script>alert("welcome back Administrator");window.location.href="home.php"</script>';
  }else{
    echo'<script>alert("you are no longer as administrator");window.location.href="#"</script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="box">
        <video src="./images/video.mp4" id="bg-video" loop muted autoplay></video>

        <div class="container">
           <form action="" method="post">
            <div class="top">
              <header>Login</header>
          </div>
            <br>
          <div class="input-field">
              <input type="text" class="input" name="email" placeholder="Username" required>
              <i class="fa-solid fa-user"></i>
          </div><br>
          <div class="input-field">
              <input type="password" name="password" class="input" placeholder="Password" required>
              <i class="fa-solid fa-lock"></i>
          </div><br>
        
              <button type="submit" name="submit" class="submit" value="Login">submit</button>
          </div>
           </form>
          
        </div>
    </div>
    
</body>
</html>