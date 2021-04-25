<?php

session_start();

if(!isset($_SESSION['username'])){
	?>
						<script>
							alert("You are logged out!!!");
						</script>
					<?php
  header('Location: login.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'css/style.php' ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<body>

<header>
	<nav class="navbar">
		<div class="logo"> 
			<a href="" target="_blank"> Web Security Project</a>
		</div>

		<div class="menu">
			<ul>
				<li><a href="#" class="active"> home </a></li>
				<li><a href="#" > gallery </a></li>
				<li><a href="#" > services </a></li>
				<li><a href="#" > contact </a></li>
				<li><a href="#" > about </a></li>
			</ul>
		</div>

		<div class="contact_btn">
			<a href="logout.php">Logout</a>
		</div>
	</nav>

	<div class="center_content">
		<h1>Hello..<?php echo $_SESSION['username'];?> whats up :)</h1>
		<h2>- STAY HOME DON'T PANIC BEAT THE PANDEMIC - </h2>
	</div>

	<div class="social_network">
		<div class="fa_icons">
			<a href="#">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</a>
		</div>
		<div class="fa_icons">
			<a href="#">
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</a>
		</div>
		<div class="fa_icons">
			<a href="#" target="_blank">
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</a>
		</div>
		<div class="fa_icons">
			<a href="#">
				<i class="fa fa-youtube" aria-hidden="true"></i>
			</a>
		</div>
	</div>

	<div class="grid_sec">
		<img src="images/grid.png">
	</div>

</header>

</body>
</html>