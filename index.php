<!DOCTYPE html>
<html>
<head>
	<title>AJAX</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="ajax.js"></script>
</head>
<body>

	<p>The "data-file" attribute sets the file this will be including in 'ajax.php'. Example: data-file="contact" will include "contact.php".</p>

		<div id="message"></div>
		<form action="" method="post" data-file="contact" class="ajax">
			<fieldset>
				<label for="form_first_name" class="required">First Name</label>
				<input type="text" id="form_first_name" name="form_first_name" required="required" value="" />
					<br />
				<label for="form_last_name" class="required">Last Name</label>
				<input type="text" id="form_last_name" name="form_last_name" required="required" value="" />
					<br />
				<input type="button" id="submit" value="Submit" />
			</fieldset>
		</form>

</body>
</html>
