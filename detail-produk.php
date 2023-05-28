<?php 
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);

	$produk = mysqli_query($conn, "SELECT * FROM produk WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Laptop</title>
	<link rel="stylesheet" type="text/css" href="css/filecss.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<div class="container">
			<h1><a href="index.php">Toko Laptop</a></h1>
			<ul>
				<li><a href="produk.php">Kembali</a></li>
			</ul>
		</div>
	</header>

	<div class="section">
		<div class="container">
			<h3>Detail Produk</h3>
			<div class="box">
				<div class="col-2">
					<img src="produk/<?php echo $p->product_image ?>" width="100%">
				</div>
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp. <?php echo number_format($p->product_price) ?></h4>
					<p>Deskripsi :<br>
						<?php echo $p->product_description ?>
					</p>
					<p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank">
						Hubungin via Whatsapp
						<img src="img/wa.png" width="50px"></a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="info_logo">
				<h2 style="text-align: center;"> <b>Tentang saya</b></h2>
				</div>
				<div class="row">
				<center>
				<div class="col-md-6">
					<div>
						<p>
						Jl. Pendrikan Kidul
						</p>
					</div>
					<div>
						<p>
						+62 81236320221
						</p>
					</div>
					<div>
						<p>
						alfaikhwan@gmail.com
						</p>
					</div>
				</div>
				</center>
			</div>
			<small>Copyright &copy; Toko Laptop</small>
		</div>
	</div>
</body>
</html>