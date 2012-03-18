<?php include Kohana::find_file('views', 'header') ?>

	<h3><a href="/">Shorten Another URL</a></h3>
	<p>Generated url <a href="<?php echo $base_url.'/'.$url_hash?>"><?php echo $base_url."/".$url_hash?></a> 
	from <a href="<?php echo $url?>""><?php echo $url?>
	</p>
		
	<br/>

<?php include Kohana::find_file('views', 'footer') ?>