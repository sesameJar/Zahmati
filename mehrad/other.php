<?php

	include './header.php';
?>
		<div class="books">
			<div class="little">
				<div id="prearrow"></div>
				<div class="little-slide">
					<ul>
						<?php 
							$logo_thumb_images_path = "../images/thumbnail/others" ;
							$logo_images            = "../images/others" ;
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
				<img src="../images/others/atolie-sarv.jpg" alt="" />
			</div>
		</div>
		<?php

			include "./footer.php"