<?php

require "./watermark.php";

$files = glob('./sources/*.jpg');

$watermark = new Watermark();

foreach($files as $filename)
{
	if(is_file($filename))
	{
		$from = $filename;
		$to = str_replace('sources', 'tagged', $filename);
		echo "\033[34m Processing:\033[0m $filename";
		$watermark->apply($from, $to, 'watermark.png', 3);
		echo "\033[32m done ✓\033[0m \n";
	}
}

?>