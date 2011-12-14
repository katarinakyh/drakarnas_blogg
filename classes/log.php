<?php

class Log {

	private $path;
	public function __contruct($filename) {
		$this -> path = $filename;
	}

	public function message($content) {
		file_put_contents($path, $content);
		//echo $content;

	}
}

?>