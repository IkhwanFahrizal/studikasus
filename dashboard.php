<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Laptop</title>
	<link rel="stylesheet" type="text/css" href="css/filecss.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container" class="collapse navbar-collapse" id="navbarNav">
				<h1><a href="dashboard.php">Toko Laptop</a></h1>
				<ul>
					<li><a href="#">Dashboard</a></li>
					<li><a href="profil.php">Profil</a></li>
					<li><a href="data-kategori.php">Data Kategori</a></li>
					<li><a href="data-produk.php">Data Produk</a></li>
					<li><a  href="keluar.php">Keluar</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Halaman admin Toko Laptop</h4>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<small>Copyright &copy; Toko Laptop</small>
		</div>
	</footer>
	
</body>
</html>