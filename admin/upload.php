<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Michael Image Upload</title>
	<meta charset="UTF-8">
	<meta name="description" content="Michael Blog">
	<meta name="keywords" content="michael, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="../img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/magnific-popup.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="../css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<style>
.container {
  position:absolute;
  top:50%;
  right:0%;
  left:0%;
}
</style>

<!-- Header section  -->
<header class="header-section hs-bd">
  <a href="../index.html" class="site-logo">
    <img src='../img/logo.png' alt='logo'>
  </a>
  <div class="header-controls">
    <button class="nav-switch-btn"><i class="fa fa-bars"></i></button>
  </div>
  <ul class="main-menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="upload.php">Upload</a></li>
  </ul>
</header>
<div class="clearfix"></div>
<!-- Header section end  -->

<div class="container">
  <div class="col-md-12">
		<?php
		if (isset($_COOKIE['username']) && isset($_COOKIE['password']) && $_COOKIE['username'] == 'Michael' && $_COOKIE['password'] === str_replace(array("\n", "\r", " "), '', file_get_contents('creds.txt')))
		{
			?>
			<form action="png_upload.php" method="post" enctype="multipart/form-data">
				<div class="custom-file">
					<input name="upload" type="file" class="custom-file-input" id="customFile">
					<label class="custom-file-label" for="customFile">Choose file (Only PNG)</label>
					<input type="submit" value="Upload Image" name="submit">
				</div>
			</form>
			<?php
			}
			else {
				echo 'You must be login to use this feature.';
			}
		?>
  </div>
</div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.slicknav.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/circle-progress.min.js"></script>
<script src="../js/mixitup.min.js"></script>
<script src="../js/instafeed.min.js"></script>
<script src="../js/masonry.pkgd.min.js"></script>
<script src="../js/main.js"></script>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
 var fileName = $(this).val().split("\\").pop();
 $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
