<?php 
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="css/filecss.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand">Toko Laptop</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse flex-grow-1" id="navbar-nav">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="produk.php">Produk</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>
				</ul>
				<span class="navbar-text me-4">
					Login Admin...?   
				</span>
      			<a href="login.php" class="btn btn-secondary me-4">Login</a>
			</div>
		</div>
	</nav>

	<div>
		<img src="img/bg1.jpg" height="300px" width="100%">
	</div>
<hr/>
	<div class="section">
		<div class="container">
			<h3>Kategori</h3>
			<div class="box">
				<?php 
					$kategori = mysqli_query($conn, "SELECT * FROM kategori ORDER BY category_id DESC");
					if(mysqli_num_rows($kategori) > 0){
						while($k = mysqli_fetch_array($kategori)){
				?>
					<a href="produk.php?kat=<?php echo $k['category_id'] ?>">
						<div class="col-5">
							<img src="img/icon-kategori.jpg" width="50px" style="margin-bottom:6px;">
							<p><?php echo $k['category_name'] ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Kategori tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>
	
	<center>
	<div class="section">
        <div class="container">
                <p>Toko Laptop jual Laptop Acer / Laptop Asus RoG / Laptop Dell Alienware / Laptop BenQ / Laptop Sony / Laptop Gigabyte / Laptop HP / Laptop Lenovo ThinkPad / Laptop Fujitsu / Macbook Pro / Macbook Air murah, garansi resmi dan lengkap. 
					Bagi Anda yang ingin beli laptop asus secara cash ataupun kredit cicilan untuk aktivitas bisnis, kantor, pendidikan, kuliah, sekolah, hiburan (game), multimedia, desain grafis ataupun internet, kami adalah jawabannya. Kami menjual laptop 
					terbaik dari berbagai macam merek, mulai dari laptop lenovo, Asus, Apple (Macbook), Dell, Fujitsu, HP (Hewlett Packard), HP Compaq, Samsung, IBM Lenovo dan laptop Acer. Anda tidak perlu khawatir untuk membeli di tempat kami, karena harga 
					laptop asus yang kami tawarkan adalah harga termurah tanpa menurunkan kualitas dan layanan purna jual kami.</p>
        </div>
		<div class="container">
                <p>So, tunggu apa lagi, bagi Anda yang ingin belanja online laptop terbaru lenovo IdeaPad / laptop acer murah, keren, canggih, fitur lengkap dan garansi resmi, sekali lagi JakartaNotebook.com adalah jawabannya.
					Toko Laptop adalah situs belanja online terbesar di Indonesia. Kami memberikan fasilitas pelayanan terbaik untuk mendukung pengalaman belanja online yang aman, nyaman dan terpercaya. Jaknot memberi beragam kemudahan untuk bertransaksi, 
					seperti kartu kredit dengan cicilan 0%, transfer antar bank BCA dan Mandiri, COD (Cash On Delivery) dan pembayaran cash dengan belanja di toko Jakarta, Semarang, Bandung dan Surabaya </p>
        </div>
    </div>
	</center>

	<div class="section">
		<div class="container">
			<h3>Produk Terbaru</h3>
			<div class="box">
				<?php 
					$produk = mysqli_query($conn, "SELECT * FROM produk WHERE product_status = 1 ORDER BY product_id DESC LIMIT 3");
					if(mysqli_num_rows($produk) > 0){
						while($p = mysqli_fetch_array($produk)){
				?>	
					<a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
						<div class="col-4">
							<img src="produk/<?php echo $p['product_image'] ?>">
							<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
							<p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Produk tidak ada</p>
				<?php } ?>
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