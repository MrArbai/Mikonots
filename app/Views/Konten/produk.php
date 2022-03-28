<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<!-- start: Page Title -->
<div id="page-title">

	<div id="page-title-inner">

		<!-- start: Container -->
		<div class="container">

			<h2><i class="ico-stats ico-white"></i>Produk Kami</h2>

		</div>
		<!-- end: Container  -->

	</div>

</div>
<!-- end: Page Title -->

<!--start: Wrapper-->
<div id="wrapper">

	<!--start: Container -->
	<div class="container">
		<!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
		<!-- start: Row -->

		<div class="row">
			<?php foreach ($produk as $k) : ?>
				<div class="span4">
					<div class="icons-box">
						<div class="title">
							<h3><?= $k['br_nm']; ?></h3>
						</div>
						<img src="<?= $k['br_gbr']; ?>" />
						<div>
							<h3>Rp.<?= number_format($k['br_hrg'], 2, ",", "."); ?></h3>
						</div>
						<!--	<p>
							
							</p> -->
						<div class="clear">
							<a href="detailproduk.php?hal=detailbarang&kd=<?php echo $data['br_id']; ?>" class="btn btn-lg btn-danger">Detail</a>
							<a href="detailproduk.php?hal=detailbarang&kd=<?php echo $data['br_id']; ?>" class="btn btn-lg btn-success">Beli &raquo;</a>
						</div>

					</div>
				</div>
			<?php endforeach; ?>
			<!---->
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