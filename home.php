<!-- Section Intro Slider
================================================== -->
<div id="carousel-example-generic" class="carousel intro slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<!-- First slide -->
		<div class="item active" style="background-image:url(gambar/banner/4.jpg)">
		</div>
		<!-- /.item -->
		<!-- Second slide -->
		<div class="item" style="background-image:url(gambar/banner/5.jpg)">
		</div>
		<!-- /.item -->
		<!-- Third slide -->
		<div class="item" style="background-image:url(gambar/banner/1.jpg)">
		</div>
		<!-- /.item -->
		<!-- fourth slide -->
		<div class="item" style="background-image:url(gambar/banner/2.jpg)">
		</div>
		<!-- /.item -->
		<!-- fourth slide -->
		<div class="item" style="background-image:url(gambar/banner/3.jpg)">
		</div>
		<!-- /.item -->
	</div>
	<!-- /.carousel-inner -->
	<!-- Controls (currently displayed none from style.css)-->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
</div>

<!-- /.carousel -->
<!-- Section About
================================================== -->
<section id="about">
<div class="container">
	 <?php
  				$no=1;
 				include "config/koneksi.php";
 				 $query=mysql_query("select * from berita");
  				while($data=mysql_fetch_array($query)){
 			 ?>
	<div class="row">
		<div class="col-lg-5 col-lg-offset-1 text-center">
			<h2 class="section-heading"><?php echo $data['judul'];?></h2>
			<hr>
			<p>
			<?php
			$id_berita=$data['id_berita'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 200 ?
			substr($keterangan, 0, 400) . ' ... <br/><br/><a href="?page=detailnews2&id='.$id_berita.'"><input type="button" class="readmore" value="[Read more]" /></a>' :
			$keterangan;
		?>
			</p>
	</div>
	<?php $no++;}?>
</div>
</div>
</section>
