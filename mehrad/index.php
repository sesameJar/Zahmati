<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>زحمتی</title>
	<link rel="stylesheet" type="text/css" href="reset.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="shortcut icon" href='../favicon.ico' />
	<script type="text/javascript" src="../zepto.min.js"></script>
	<script type="text/javascript" src="scripts.js"></script>

	<!--[if lt IE 9]>
     <script src="../html5shiv.js"></script>
	<![endif]-->
</head>
<body>

<div class="main-container">
	<header class="body">
		<nav>
			<menu>
				<li><a href="#">biography .</a></li>
				<li><a href="#">about graphic .</a></li>
				<li><a href="#">poster .</a></li>
				<li><a href="#">logo .</a></li>
				<li><a href="#">book & magazine .</a></li>
				<li><a href="#">others .</a></li>
				<li><a href="#">connect .</a></li>
				<li class="clear"></li>
			</menu>
		</nav>
		<section class="logo"><img src="../images/zahmati-logo.png" alt="zahmati" /></section>
		<div class="clear"></div>
	</header>
	<article class="content">
		<div class="bio">
			
		</div>
		
		<div class="bussines">
			
		</div>
		<div class="logo">
			<div class="little">
				<div id="prearrow"></div>
				<div class="little-slide">
					<ul>
						<?php 
							$logo_thumb_images_path = "../images/thumbnail/logo" ;
							$logo_images            = "../images/logo" ;
							$logo_thumb_images      = scandir($logo_thumb_images_path);

							foreach( $logo_thumb_images as $logo_thumb_image ) {

								$img_type = strtolower( end( explode( '.' , $logo_thumb_image ) ) );

								if( $img_type == 'jpg' || $img_type == 'png' || $img_type == 'gif' ) {

									echo "<li><a href='$logo_images/$logo_thumb_image'><img src=\"$logo_thumb_images_path/$logo_thumb_image\" /></a></li>";
								}

							}
						?>
					</ul>
				</div>
				<div id="nextarrow"></div>
			</div>
			<div id="loadplace">
				<img src="../images/logo/atolie-sarv.jpg" alt="" />
			</div>
		</div>
	</article>
	<footer>
		<h2>graphic designer</h2>
		<p>
			designed by : mohammad zahmati<br />
			code developed by : <a href="http://goldentech.org">goldenTECH.org</a><br />
			copyright 2012
		</p>
	</footer>
</div>

</body>
</html>