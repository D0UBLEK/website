<?php
	if (isset($_GET['article']))
	{
		$file = str_replace('../', '', $_GET['article']);

		if (is_numeric($file))
			$file = 'blog_'.$file.'.html';

		if (strpos($file, 'blog_') !== false && strpos($file, 'html') !== false) {
			include(dirname(__FILE__).'/blog/'.$file);
		}
		else {
			echo 'Invalid Format';
		}
	}
	else
	{
		include(dirname(__FILE__).'/blog.html');
	}
?>
