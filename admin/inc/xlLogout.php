<?php
	session_start();
	session_destroy();
	
	include("../code/DataProvider.php");
	DataProvider::ChangeURL("../index.php");
?>