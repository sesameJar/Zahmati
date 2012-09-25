<?php

	include './header.php';
?>
		<div class="books">
			<div class="little">
				<div id="prearrow"></div>
				<div class="little-slide">
					<ul>
						<?php 
							$logo_thumb_images_path = "./images/thumbnail/book & magazine" ;
							$logo_images            = "./images/book & magazine" ;
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
				<img src="./images/book & magazine/arezoo-haye-sar-b-mohr.jpg" alt="" />
			</div>
		</div>
		<?php

			include "./footer.php";