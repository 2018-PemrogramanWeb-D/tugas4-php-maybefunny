<?php
	session_start();
	if(session_destroy()){ // Destroying All Sessions
		echo '<meta http-equiv="refresh" content="0;url=/index.php">';
	}
?>