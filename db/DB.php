<?php
class DataProvider{
	
	public static function ExecuteQuery1($sql)
	{

		$servername = "localhost";
		$username = "root";
		$password = "123456789";
		$dbname = "ecomercial";

		$con = mysqli_connect($servername, $username,  $password);
		mysqli_select_db($con,  $dbname);
		mysqli_set_charset($con, 'UTF8');		
		mysqli_query($con, $sql);
		mysqli_close($con); 
	}
	
	public static function ExecuteQuery($sql)
	{

		$servername = "localhost";
		$username = "root";
		$password = "123456789";
		$dbname = "ecomercial";

		$con = mysqli_connect($servername, $username,  $password);
		mysqli_select_db($con,  $dbname);
		mysqli_set_charset($con, 'UTF8');
		$result = mysqli_query($con, $sql);

		mysqli_close($con);

		return $result;
	}
	
    public static function ChangeURL($path)
	{
		echo '<script type = "text/javascript">';
		echo 'location = "'.$path.'";';
		echo '</script>';
	}
	public static function ExecuteNonQuery()
	{
		$servername = "localhost";
		$username = "root";
		$password = "123456789";
		$dbname = "ecomercial";

		$con = mysqli_connect($servername, $username,  $password);
		mysqli_select_db($con,  $dbname);
		mysqli_set_charset($con, 'UTF8');		
	}
	public static function Close()
	{
		$servername = "localhost";
		$username = "root";
		$password = "123456789";
		$dbname = "ecomercial";

		$con = mysqli_connect($servername, $username,  $password);
		mysqli_select_db($con,  $dbname);
		mysqli_set_charset($con, 'UTF8');		
		mysqli_close($con);
	}
}

?>
	
