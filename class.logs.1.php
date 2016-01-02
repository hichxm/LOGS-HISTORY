<?php

class logs{
	public function initialise(){
		$DATA = array();
		$DATA['M'] = "[".date("d")."/".date("m")."/".date("y")."]";
		$DATA['H'] = "[".date("H").":".date("i").":".date("s")."]";
		$DATA['URL'] = $_SERVER['REMOTE_ADDR']." connect to " .$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
		$DATA['COMPLETE'] = $DATA['M'].$DATA['H']." ".$DATA['URL']."\n";
		$files = fopen("logs.txt", "a+");
		fputs($files, $DATA['COMPLETE']);
		fclose($files);
	}
}