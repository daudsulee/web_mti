	<section id="contact">
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<?php 
	$id=$_GET['id'];
	include "config/koneksi.php";
	$query=mysql_query("select * from produk where id_produk='$id'");
	while($data=mysql_fetch_array($query)){  
	?>
		<h2 class="section-heading"><b> <?php echo $data['judul_gambar'] ?></b></h2>
		<hr class="primary">
	  <?php }?>	
	</div>
	<div class="col-md-8 col-md-offset-2 text-center">
	<?php 
	$id=$_GET['id'];
	include "config/koneksi.php";
	$query=mysql_query("select * from produk where id_produk='$id'");
	while($data=mysql_fetch_array($query)){  
	?>
	<p>	
	<img src="gambar/produk_q/<?php echo $data['nama_gambar'] ?>" width="100%" class="blogimage breadcrumbs" alt="">
	</p>
	<p>
	 <h4><b>Spesifikasi</b></h4>
	 <hr class="primary">
	<?php echo $data['spesifikasi'] ?>
	</p>
    <?php }?>
		
	</div>
</div>
</div>
</section>

