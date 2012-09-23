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
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
				<input type="submit" value="send" class="button" />
				<input type="reset" value="reset" class="button" />
			</form>
		</div>
<?php

	include './footer.php';

