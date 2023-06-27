
<!-- Section About
================================================== -->
<section id="about">
<div class="container">
	<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<h2 class="section-heading">MY<b> ACTIVITY</b></h2>
		<hr class="primary">
		
	</div>
</div>
	 <?php
  				$no=1;
 				include "config/koneksi.php";
 				 $query=mysql_query("select * from social");
  				while($data=mysql_fetch_array($query)){
 			 ?>
	<div class="row">
		<div class="col-lg-5 col-lg-offset-1 text-center">
			<h2 class="section-heading"><?php echo $data['judul'];?></h2>
			<hr>
			<p>
				<div>
				<img src="gambar/<?php echo $data['nama_file'] ?>" width="40%" alt="">
			</div>
				<?php
			$id_social=$data['id_social'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 50 ? 
			substr($keterangan, 0, 120) . ' ... <br/><br/><a href="?page=social&id='.$id_social.'" class="small continue">
			Continue reading</a>' :
			$keterangan;
		?>
			</p>
	</div>

	<?php $no++;}?>
</div>
<hr class="primary">
</div>
	 <?php
  				$no=1;
 				include "config/koneksi.php";
 				 $query=mysql_query("select * from kaizen");
  				while($data=mysql_fetch_array($query)){
 			 ?>
	<div class="row">
		<div class="col-lg-5 col-lg-offset-1 text-center">
			<h2 class="section-heading"><?php echo $data['judul'];?></h2>
			<hr>
			<p>
				<div>
				<img src="gambar/<?php echo $data['nama_file'] ?>" width="40%" alt="">
			</div>
			<?php
			$id_kaizen=$data['id_kaizen'];
			$keterangan=$data['keterangan'];
			echo strlen($keterangan) >= 50 ? 
			substr($keterangan, 0, 120) . ' ... <br/><br/><a href="?page=kaizen&id='.$id_kaizen.'" class="small continue">
			Continue reading</a>' :
			$keterangan;
		?>
			</p>
	</div>

	<?php $no++;}?>
</div>
<hr>


</div>
</section>

