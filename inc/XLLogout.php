<?php
	session_start();
	session_destroy();
	
	include("../db/DB.php");
	DataProvider::ChangeURL("../index.php");
?>