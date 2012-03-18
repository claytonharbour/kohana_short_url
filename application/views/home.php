<?php include Kohana::find_file('views', 'header') ?>

		<form action="post/shorten_url" enctype="multipart/form-data" method="post">
			Enter the URL to shorten: <input type="text" id="url" name="url" /><input type="submit" id="submit" name="submit" value="Send" />
		</form>

<?php include Kohana::find_file('views', 'footer') ?>