<?php
if ( basename(__FILE__) != basename($_SERVER["SCRIPT_FILENAME"]) ) {
	$connection = mysqli_connect('localhost', 'essicaki_ross', 'hO]8(sv7nT4?', $database);
	if ($connection) {
		echo "1";
	} else {
		echo '0';
	}
}
include '../404.shtml';
?>
