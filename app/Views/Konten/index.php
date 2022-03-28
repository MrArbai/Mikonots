<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- start: Slider -->
<div class="slider-wrapper">

	<div id="da-slider" class="da-slider">
		<div class="da-slide">
			<h2>T-Shirt Casual</h2>
			<p>Kami menyediakan kaos sport dan casual yang nyaman anda kenakan setiasp hari juga update dengan perkermbangan mode di era sekarang ini.</p>
			<a href="#" class="da-link">Lihat Produk</a>
			<div class="da-img"><img src="img/parallax-slider/kaos.png" alt="image01" /></div>
		</div>
		<div class="da-slide">
			<h2>Jacket & Sweater</h2>
			<p>Kami memiliki banyak koleksi jacket dan sweater, mulai dari rider jacket hingga casual jacket dan juga casual sweater yang cocok dipakai sehari hari.</p>
			<a href="#" class="da-link">Lihat Produk</a>
			<div class="da-img"><img src="img/parallax-slider/jaket5.png" alt="image02" /></div>
		</div>
		<div class="da-slide">
			<h2>Pants & Jeans</h2>
			<p>Kami memiliki koleksi jeans dan celana santai yang bisa anda gunakan sehari hari dengan harga yang terjangkau anda bisa memiliki koleksi kami.</p>
			<a href="#" class="da-link">Lihat Produk</a>
			<div class="da-img"><img src="img/parallax-slider/jeans.png" alt="image03" /></div>
		</div>
		<div class="da-slide">
			<h2>Custom T-Shirt</h2>
			<p>Kami menerima pembuatan kaos custom sesuai dengan design keinginan anda dengan harga yang bisa di sesuaikan dengan kebutuhan anda.</p>
			<a href="#" class="da-link">Lihat Produk</a>
			<div class="da-img"><img src="img/parallax-slider/kaos.png" alt="image04" /></div>
		</div>
		<nav class="da-arrows">
			<span class="da-arrows-prev"></span>
			<span class="da-arrows-next"></span>
		</nav>
	</div>

</div>
<!-- end: Slider -->

<!--start: Wrapper-->
<div id="wrapper">

	<!--start: Container -->
	<div class="container">

		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit">
			<p>
				Kami adalah distro online terlengkap dan terpercaya, dengan harga terjangkau kurang dari 100rb anda sudah dapat memiliki produk kami. Selamat Berbelanja Customer..
			</p>
			<p><a class="btn btn-success btn-large" href="/Home/read">Mulai Berbelanja &raquo;</a></p>

		</div>
		<!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
		<!-- end: Hero Unit -->


		<!-- start: Row -->
		<div class="row">
			<?php foreach ($produk as $k) : ?>
				<div class="col-sm-4">
					<div class="card">
						<h3 class="card-title"><?= $k['br_nm']; ?></h3>
						<img src="/gambar/<?= $k['br_gbr']; ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h3>Rp.<?= number_format($k['br_hrg'], 2, ",", "."); ?></h3>
						</div>
						<div class="clear">
							<a href="/Home/detail/<?= $k['br_id']; ?>" class="btn btn-lg btn-danger">Detail</a>
							<a href="/Home/detail/<?= $k['br_id']; ?>" class="btn btn-lg btn-success">Beli &raquo;</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<!---->
		<!-- end: Row -->

		<hr>

		<!-- start Clients List -->
		<div class="clients-carousel">

			<ul class="slides clients">
				<li><img src="img/logos/1.png" alt="" /></li>
				<li><img src="img/logos/2.png" alt="" /></li>
				<li><img src="img/logos/3.png" alt="" /></li>
				<li><img src="img/logos/4.png" alt="" /></li>
				<li><img src="img/logos/5.png" alt="" /></li>
				<li><img src="img/logos/6.png" alt="" /></li>
				<li><img src="img/logos/7.png" alt="" /></li>
				<li><img src="img/logos/8.png" alt="" /></li>
				<li><img src="img/logos/9.png" alt="" /></li>
				<li><img src="img/logos/10.png" alt="" /></li>
			</ul>

		</div>
		<!-- end Clients List -->

		<hr>

		<!-- start: Row -->
		<div class="row">

			<!-- start: Icon Boxes -->
			<div class="icons-box-vert-container">

				<!-- start: Icon Box Start -->
				<div class="span6">
					<div class="icons-box-vert">
						<i class="ico-ok ico-color circle-color big"></i>
						<div class="icons-box-vert-info">
							<h3>Kemudahan Berbelanja</h3>
							<p>Dapatkan kemudahan berbelanja di DistroIT Cikarang, Kami menyediakan kebutuhan untuk fasion anda.</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- end: Icon Box-->

				<!-- start: Icon Box Start -->
				<div class="span6">
					<div class="icons-box-vert">
						<i class="ico-cup  ico-white circle-color-full big-color"></i>
						<div class="icons-box-vert-info">
							<h3>Juara Pengiriman Delivery</h3>
							<p>Dapatkan kemudahan pengiriman barang ke rumah anda dengan minimal belanja 300 ribu radius 10km dari kantor kami.</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- end: Icon Box -->

				<!-- start: Icon Box Start -->
				<div class="span6">
					<div class="icons-box-vert">
						<i class="ico-ipad ico-color circle-color big"></i>
						<div class="icons-box-vert-info">
							<h3>Berbelanja Dengan Gadget</h3>
							<p>Anda bisa memesan produk kami melalui gadget kesayangan anda, belanja di DistroIT cikarang praktis dan mudah.</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- end: Icon Box -->

				<!-- start: Icon Box Start -->
				<div class="span6">
					<div class="icons-box-vert">
						<i class="ico-thumbs-up  ico-white circle-color-full big-color"></i>
						<div class="icons-box-vert-info">
							<h3>Sosial Media</h3>
							<p>Follow twitter dan fan page facebook kami untuk mendapatkan update promo special setiap harinya.</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<!-- end: Icon Box -->

			</div>
			<!-- end: Icon Boxes -->
			<div class="clear"></div>
		</div>
		<!-- end: Row -->

		<hr>

	</div>
	<!--end: Container-->

</div>
<!-- end: Wrapper  -->

<?= $this->endsection(); ?>