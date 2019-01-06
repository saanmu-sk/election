<?php
	session_start();
	header("Location:candidatelogin.php?msg=logout Succesfully");
	session_destroy();
?>