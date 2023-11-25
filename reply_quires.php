<?php
session_start();
if(!isset($_SESSION['type'])){
  echo'<script>alert("please verify your identity");window.location.href="login.php"</script>';
}else{

  include "connection.php";
    $id=$_GET['id'];
    $data=mysqli_query($conn,"SELECT * FROM quiries WHERE q_id='$id'");
    $row=mysqli_fetch_assoc($data);
    if(isset($_POST['submit'])){
    $value=$_POST['id'];
    $reply=$_POST['reply'];
    $currentDate = date("Y-m-d");
    $data1=mysqli_query($conn,"UPDATE quiries SET reply='$reply',final_date='$currentDate' WHERE q_id='$id'");
      if($data1){
        echo'<script>alert("Replied");window.location.href="quires.php"</script>';
      }else{
        echo'<script>alert("Failed to reply");window.location.href="quires.php"</script>'; 
      }

    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Travel & Tourism</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .one{
      margin-top: 80px;
      
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>TraVEl</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Profile</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="view_orders.php">Orders</a></li> 
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="view_users.php">Users</a></li>
              <li class="dropdown"><a href="#"><span>Packages</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="add_packages.php">Add Package</a></li>
                  <li><a href="view_packages.php">View Package</a></li>
                 
                </ul>
              </li>
              <li><a href="quires.php">Quires</a></li>
              <li><a href="feedback.php">Feedback</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  <section>
    <div class="one container">
    <div class="row">
    <div class="col-4">
    
    </div>
    <div class="col-4">
    <form method="POST" >
    <div class="mb-3">
    <fieldset disabled="disabled">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Query</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['quires'];?>">
          </div>

    </fieldset>
        
      <div class="mb-3">
        <label  class="form-label">Reply</label><br>
        <textarea name="reply" class="form-control" cols="40" rows="10"></textarea>
      </div>
      <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </section>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
  }
  ?>