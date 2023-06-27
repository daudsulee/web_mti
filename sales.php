
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width"/>
<title></title>

<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/skins/teal.css"><!-- skin color -->
<link rel="stylesheet" href="stylesheets/responsive.css">
   
</head>
<body>

<section id="contact">
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<h2 class="section-heading">OUR<b> SALES</b></h2>
		<hr class="primary">	
	</div>
</div>
</div>
</section>
    <!-- TABS-->
	<div class="twelve columns">
		
		<dl class="tabs">
			<dd class="active"><a href="#sim1">All</a></dd>
			<dd><a href="#sim2">Top Customer</a></dd>
			<dd><a href="#sim3">Type Customer</a></dd>
			<dd><a href="#sim4">Chasis Maker</a></dd>
            <dd><a href="#sim5">Our_Client</a></dd>
            <dd><a href="#sim6">Sales Record</a></dd>
            
		</dl>
		<ul class="tabs-content">
			
			<li class="active" id="sim1Tab">
			
			<?php
			$no=1;
			include "config/koneksi.php";
			$query=mysql_query("select * from customer");
			while($data=mysql_fetch_array($query)){
			?>
			<div class="col-md-4 text-center">
				<img src="gambar/<?php echo $data['nama_file'] ?>" width="100%" alt="">
				<p> <h5><?php echo $data['judul'] ?></h5>
			</p>
			</div>
			<?php $no++;}?>
			
			</li>
			

			
			<li id="sim2Tab">
			<div>
   			<?php
			$no=1;
			include "config/koneksi.php";
			$query=mysql_query("select * from customer where type_customer='Top_Customer'");
			while($data=mysql_fetch_array($query)){  
			?>
            <div class="col-md-4 text-center">
				<img src="gambar/<?php echo $data['nama_file'] ?>" width="100%" alt="">
				<p> <h5><?php echo $data['judul'] ?></h5>
			</p>
			</div>
			<?php $no++;}?>
		    </div>
			</li>

			
			<li id="sim3Tab">
			<div>
			<?php
			$no=1;
			include "config/koneksi.php";
			$query=mysql_query("select * from customer where type_customer='Type_Customer'");
			while($data=mysql_fetch_array($query)){  
			?>
           <div class="col-md-4 text-center">
				<img src="gambar/<?php echo $data['nama_file'] ?>" width="100%" alt="">
				<p> <h5><?php echo $data['judul'] ?></h5>
			</p>
			</div>
			<?php $no++;}?>
		    </div>
			</li>
			


			
			<li id="sim4Tab">
			<div>
			<?php
			$no=1;
			include "config/koneksi.php";
			$query=mysql_query("select * from customer where type_customer='Chasis_Maker'");
			while($data=mysql_fetch_array($query)){  
			?>
			<div class="col-md-4 text-center">
				<img src="gambar/<?php echo $data['nama_file'] ?>" width="100%" alt="">
				<p> <h5><?php echo $data['judul'] ?></h5>
			</p>
			</div>
			<?php $no++;}?>
		    </div>
			</li>

			<li id="sim5Tab">
			<div>
			<?php
			$no=1;
			include "config/koneksi.php";
			$query=mysql_query("select * from customer where type_customer='Our_Client'");
			while($data=mysql_fetch_array($query)){  
			?>
			<div class="col-md-4 text-center">
				<img src="gambar/<?php echo $data['nama_file'] ?>" width="100%" alt="">
				<p> <h5><?php echo $data['judul'] ?></h5>
			</p>
			</div>
			<?php $no++;}?>
		    </div>
			</li>

			<li id="sim6Tab">
			<div>
			<?php
			$no=1;
			include "config/koneksi.php";
			$query=mysql_query("select * from customer where type_customer='Sales_Record'");
			while($data=mysql_fetch_array($query)){  
			?>
			<div class="col-md-4 text-center">
				<img src="gambar/<?php echo $data['nama_file'] ?>" width="100%" alt="">
				<p> <h5><?php echo $data['judul'] ?></h5>
			</p>
			</div>
			<?php $no++;}?>
		    </div>
			</li>
		</ul>
	</div><!-- end main content-->
    
	
</div>
	<div class="row">
		<hr>
        
        
		<!-- TABLES-->
		
		<!-- ALERTS-->
		
		<!-- VIDEOS-->
		
		<!-- PROGRESS BARS-->
		
		<!-- FORMS-->
		
		
			<!-- PAGINATION-->
			
		</div>
	</div></div>
<div class="hr">
</div>
<!-- TWITTER
================================================== -->
<div class="tweetarea">
	<div class="tweettext">
		<div class="row">
			<div class="twelve columns">
				<div class="tweet">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FOOOTER 
================================================== -->

<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/twitterusername.js"></script>
</body>
</html>