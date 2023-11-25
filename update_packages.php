<?php
session_start();
if(!isset($_SESSION['type'])){
  echo'<script>alert("please verify your identity");window.location.href="login.php"</script>';
}else{
include "connection.php";
$id=$_GET['id'];
// var_dump($id);
$sql=mysqli_query($conn,"SELECT * FROM packages WHERE p_id='$id'");
$row=mysqli_fetch_assoc($sql);
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $description=$_POST['description'];
  //image1
    $filename=$_FILES["photo"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder="./image/".$filename;
    $image=$filename;
    $uploadOk=1;
    $imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
    if($imageFileType!="jpg"&& $imageFileType!="png"&& $imageFileType!="jpg"&&$imageFileType!="gif"){
        echo "Sorry image of file type jpg,jepg,pdf and gif are allowed";
        $uploadOk=0;
    }
    if($uploadOk==0){
        echo "sorry";
    }else{
        move_uploaded_file($tempname,$folder);
    }
    //image2
    $filename=$_FILES["photo1"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder="./image/".$filename;
    $image1=$filename;
    $uploadOk=1;
    $imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
    if($imageFileType!="jpg"&& $imageFileType!="png"&& $imageFileType!="jpg"&&$imageFileType!="gif"){
        echo "Sorry image of file type jpg,jepg,pdf and gif are allowed";
        $uploadOk=0;
    }
    if($uploadOk==0){
        echo "sorry";
    }else{
        move_uploaded_file($tempname,$folder);
    }
    //image3
    $filename=$_FILES["photo2"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder="./image/".$filename;
    $image2=$filename;
    $uploadOk=1;
    $imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
    if($imageFileType!="jpg"&& $imageFileType!="png"&& $imageFileType!="jpg"&&$imageFileType!="gif"){
        echo "Sorry image of file type jpg,jepg,pdf and gif are allowed";
        $uploadOk=0;
    }
    if($uploadOk==0){
        echo "sorry";
    }else{
        move_uploaded_file($tempname,$folder);
    }

    $sql1=mysqli_query($conn,"UPDATE Packages SET p_image ='$image',p_image1 ='$image1',p_image2 ='$image2',p_name ='$name',country ='$country',state = '$state',p_description = '$description' WHERE p_id='$id'");
    if($sql1)
    {
        echo '<script> alert("updated sucessfully");window.location.href="view_packages.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

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
      margin-top: 50px;
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
    <div class="two row">
    <form  method="post" enctype="multipart/form-data">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control" name="name" placeholder="package_name" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row['p_name'];?>" >
      </div>
      
      <div class="input-group mb-3">
        <input type="file" class="form-control" name="photo" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">.img</span>
      </div>
      
      <label for="basic-url" class="form-label">Location:</label>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Country</span>
        <input type="text" class="form-control" name="country" placeholder="country"  id="basic-url" aria-describedby="basic-addon3" value="<?php echo $row['country'];?>" >
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">State</span>
        <input type="text" class="form-control" name="state" placeholder="state"  id="basic-url" aria-describedby="basic-addon3" value="<?php echo $row['state'];?>" >
      </div>
      
      <div class="input-group mb-3">
        <input type="file" class="form-control" name="photo1" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">.img</span>
      </div>
      <div class="input-group mb-3">
        <input type="file" class="form-control" name="photo2" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">.img</span>
      </div> 
      <div class="input-group">
        <span class="input-group-text">Description</span>
        <textarea class="form-control" name="description" placeholder="package description" aria-label="With textarea" value="<?php echo $row['p_name'];?>" value="<?php echo $row['p_description'];?>" ></textarea>
      </div>
      <button class="btn btn-warning" name="submit" style="margin-top: 30px;">update</button>
    </form>
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