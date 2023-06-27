
<!-- Section About
================================================== -->
<section id="about">
<div class="container">
	<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<h2 class="section-heading">OUR <b> PRODUCT</b></h2>
		<hr class="primary">
		
	</div>
</div>

<div>
<?php
$no=1;
include "config/koneksi.php";
$query=mysql_query("select * from produk");
while($data=mysql_fetch_array($query)){
?>
<div class="col-md-4 text-center">
	<?php
	$id_produk=$data['id_produk'];
	?>
	<a href="?page=detail_produk&id=<?php echo $data['id_produk'] ?>">
	<img src="gambar/produk_q/<?php echo $data['nama_gambar'] ?>" width="100%" alt=""></a>
	<h2 class="section-heading"><?php echo $data['judul_gambar'];?></h2>

</div>
<?php $no++;}?>
</div>
</section>
