<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!--start: Wrapper-->
<div id="wrapper">

	<!--start: Container -->
	<div class="container">
		<!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
		<!-- start: Row -->

		<div class="row">
				<div class="span4">
					<div class="icons-box">
						<div class="title">
							<h3><?= $produk['br_nm']; ?></h3>
						</div>
						<img src="<?= $produk['br_gbr']; ?>" />
						<div>
							<h3>Rp.<?= number_format($produk['br_hrg'], 2, ",", "."); ?></h3>
						</div>
						<!--	<p>
							
							</p> -->
						<div class="clear">
							<a href="detailproduk.php?hal=detailbarang&kd=<?php echo $produk['br_id']; ?>" class="btn btn-lg btn-danger">Detail</a>
							<a href="detailproduk.php?hal=detailbarang&kd=<?php echo $produk['br_id']; ?>" class="btn btn-lg btn-success">Beli &raquo;</a>
						</div>

					</div>
				</div>
			<!----><div class="col-sm-4">
					<div class="card">
						<h3 class="card-title"><?= $produk['br_nm']; ?></h3>
						<img src="/gambar/<?= $produk['br_gbr']; ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h3>Rp.<?= number_format($produk['br_hrg'], 2, ",", "."); ?></h3>
						</div>
						<div class="clear">
							<a href="/Home/detail/<?= $produk['br_id']; ?>" class="btn btn-lg btn-danger">Detail</a>
							<a href="/Home/detail/<?= $produk['br_id']; ?>" class="btn btn-lg btn-success">Beli &raquo;</a>
						</div>
					</div>
				</div>
		</div>
		<!-- end: Row -->


	</div>


</div>

</div>
<!--end: Row-->

</div>
<!--end: Container-->

<!--start: Container -->
<div class="container">

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

</div>
<!--end: Container-->

</div>
<!-- end: Wrapper  -->


<?= $this->endsection(); ?>