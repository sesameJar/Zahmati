<?php

	include './header.php';

?>

		<div class="contact-us">
			<form action="sendmail.php" id="contact-from" method="post">
				<label for="name">Name :</label>
				<input type="text" class="text" name="name" id="name" />
				<label for="email">E-mail :</label>
				<input type="text" class="text" name="email" id="email" />
				<label for="message">Message :</label>
				<textarea name="message" id="message" cols="30" rows="4"></textarea>
				<input type="submit" value="send" class="button" />
				<input type="reset" value="again!" class="button" />
			</form>
			<p>
				ADDRESS : Mashhad, Ebne Sina 21, NO. 11, Floor 2nd.
				<br/ >
				TEL : <br />
				+98 919 832 09 75
				<br />
				Office : <br />
				+98 511 848 21 29

			</p>	
		</div>
<?php

	include './footer.php';

