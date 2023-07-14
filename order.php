<?php
if (isset($_POST['submit'])) {
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    header("Location: https://wa.me/$phone?text=$message");
    exit; // add exit to prevent further execution
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Cake Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	
</head>
<body>
	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">MY CAKE SHOP</a></h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="cake.php">Cake</a></li>
				<li class="active"><a href="order.php">Order</a></li>
				<li><a href="review.php">Review</a></li>
			</ul>
		</div>
	</header>
	<br></br>
	
<br>
<br>
<h3><marquee width="100%" bgcolor="#FFF8DC">
Selamat Datang di Toko Kue Kami</marquee></h3>
<br></br>
&nbsp;

<center><h1>HOW TO ORDER?</h1></center> 
<br>
<center>Choose one of the ordering media below</center>
<br> &nbsp;&nbsp;&nbsp;

	<!-- header -->
	<div class="pesan">
		<div class="container" align="center">
			<ul>
				&nbsp;
				<h2><a href="#"><i class="fab fa-facebook" valign="center" alt="" width="100%" height="500px"></i></a></h2> &nbsp;
				<h2><a href="https://wa.me/6281287254375"><i class=""><i class="fab fa-whatsapp" valign="center" alt="" width="100%" height="500px"></i></i></a></h2> &nbsp;
				<h2><a href="https://www.instagram.com/shopcakes2/"><i class="fab fa-instagram"  valign="center" alt="" width="100%" height="500px"></i></a></h2>
			</ul>
		</div>
	</div>

	&nbsp;
	<br>
	<br>

	<br>
	<center><p style="word-spacing: lem;">Thank You</p></center> &nbsp;
	<br>
	<footer>
		<div class="container" align="center">
			<small> Copyright &copy; 2021 - My Cake Shop, All Right Reserved. </small>
		</div>
	</footer>
</body>
</html>



