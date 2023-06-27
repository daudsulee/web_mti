<?php
 $no=1;
  include "config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from kaizen where id_kaizen='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
       
 <!-- Section Contact
================================================== -->
<section id="contact">
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<h2 class="section-heading"><b> <?php echo $data['judul'] ?></b></h2>
		<hr class="primary">
		
	</div>
</div>
</div>
</section>
 <?php $no++;}?>

<div class="container">
<div class="row">
	<div class="col-md-12 text-left">
 <?php

  $no=1;
  include "config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from kaizen where id_kaizen='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
			<p>
				<img src="/admin/<?php echo $data['nama_file'] ?>" width="500" height="500" alt="">
			</p>
			<p>
				 
			</p>
             
			<br/>			
				
			
		</div>
		 <!-- SIDEBAR -->
		<div class="twelve columns">
			
			
			<p>
				<?php echo $data['keterangan'] ?>
			</p>
            <?php $no++;}?>
			

</div>
</div>
</div>