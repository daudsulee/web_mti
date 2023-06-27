<section id="contact">
<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<h2 class="section-heading">CORPORATE<b> IDENTITY</b></h2>
		<hr class="primary">
	</div>
</div>
</div>
<div class="container">
<div class="row">
		<!-- begin 1st row -->
	<div class="col-md-8 text-left">
        <?php
            include "config/koneksi.php";
			$id=$_GET['id'];
            $result = mysql_query("select * from corporate where id_corporate='$id'") 
			or die(mysql_error());
			while($data = mysql_fetch_array($result)){
            
                ?>

				<h4><?php echo $data['judul'] ?></h4>
			<p>
				<img src="foto/<?php echo $data['nama_file'] ?>">
			</p>
			<p>
				 
			</p>
             
			<br/>			

			<p style=" text-align: left;">
				<?php echo $data['keterangan'] ?>
			</p>
            <?php } ?>
			
    </div>
</div>
</div>