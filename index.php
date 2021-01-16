<?php
	session_start();

	include('db/DB.php');
	$_SESSION["url"] = $_SERVER['REQUEST_URI'];

	
?>

<?php include "./inc/incHead.php"; ?>
<?php include "./inc/incBanner.php"; ?>

<?php include("inc/incCategory.php"); ?>
<?php include("inc/incProducer.php");?>

<div id="content">
<?php
	if (isset($_GET["act"])) {
		$act = $_GET["act"];
		switch ($act) {
			case 'Index':
				include('pages/pHome.php');
				break;
			case 'Category':			
				include('pages/pCategory.php');
				break;
			case 'Producer':
				include('pages/pProducer.php');
				break;
			case 'ProductDetail':
				include('pages/pProductDetail.php');
				break;
			case 'Error':
				include('pages/pError.php');
				break;
			case 'OrderSucessful':
				include('pages/pOrderSuccessful.php');
				break;
			case 'Checkout':
				include('pages/pCheckout.php');
				break;
			case 'Account':
				include('pages/pAccount.php');
				break;			
			case 'Login':
				include('inc/pLogin.php');
				break;
			case 'Logout':
				include('inc/pLogout.php');
				break;
			case 'ChangePassword':
				include('pages/pChangePassword.php');
				break;
			case 'Register':
				include('inc/pRegister.php');
				break;
			case 'sRegister':
				include('pages/sRegister.php');
				break;
			case 'eRegister':
				include('pages/eRegister.php');
				break;
			case 'pError':
				include('pages/pError.php');
				break;
			
			
		}
	} else {
		include('pages/pHome.php');
	}

?>
</div>
<?php include "./inc/incFoot.php"; ?>