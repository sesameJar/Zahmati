<?php

	include './header.php';
	
?>
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
		<div class="contact-us">
			<form action="sendmail.php" id="contact-from" method="post">
				<label for="name">Name :</label>
				<input type="text" class="text" name="name" id="name" placeholder="Type Your/Company Name!" />
				<label for="email">E-mail :</label>
				<input type="text" class="text" name="email" id="email" placeholder="Type Your Email!" />
				<label for="message">Message :</label>
				<textarea name="message" id="message" cols="30" rows="10" placeholder="Share Your Id !"></textarea>
				<input type="submit" value="send" class="button" />
				<input type="reset" value="again!" class="button" />
			</form>
		</div>
	</article>
	<footer>
		<h2>graphic designer</h2>
		<p>
			designed by : mohammad zahmati<br />
			code developed by : <a class="goldentech" href="http://goldentech.org">goldenTECH.org</a><br />
			copyright 2012
		</p>
	</footer>
</div>

</body>
</html>