<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Cake Shop</title>
	<link rel="stylesheet" type="text/css" href="css/review.css">
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
			<h1><a href="index.php">MY CAKE SHOP</a></h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="cake.php">Cake</a></li>
				<li><a href="order.php">Order</a></li>
				<li class="active"><a href="review.php">Review</a></li>
			</ul>
		</div>
	</header>
	
	<br>
	<section>
        <div class="container" align="center">
            <div class="hei">
            <br><br>
            <h3>Form Review</h3>
            <br><br>
            
            <div class="row">
                <div class="col-6">
                <form action="send.php" method="post" target="_blank">

                <div class="form-group">
                    <label for="name">Name</label><br>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="cake" >Cake Order</label><br>
                    <input type="text" class="form-control" name="cake" placeholder="Cake">
                </div>
                <div class="form-group">
                    <label for="message">Message</label><br>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
                <div class="form-group">
	                <input type="hidden" name="noWa" value="6281287254375">
	                <input type="submit" name="submit" class="btn btn-primary"value="Send">
	                </div>
                </form>
            </div>
            </div>
        </div>
    </section>
</body>
</html>

