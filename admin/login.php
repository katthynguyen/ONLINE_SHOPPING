<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Internet Dreams</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<h2 class="TieuDe">Đăng nhập phân hệ Admin</h2>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
    	<form action="inc/xlLogin.php" method="post">
        	<table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <th>Tên đăng nhập</th>
                <td><input type="text" name="txtUS" class="login-inp" /></td>
            </tr>
            <tr>
                <th>Mật khẩu</th>
                <td><input type="password" name="txtPS" onfocus="this.value=''" class="login-inp" /></td>
            </tr>
            <tr>
                <th></th>
                <td valign="top"><input type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">Ghi nhớ</label></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" class="submit-login" value="Đăng nhập"  /></td>
            </tr>
            <tr>
            	<th colspan="2">
                	<?php
						if(isset($_GET["error"])==true)
						{
							$error = $_GET["error"];
							switch($error)
							{
								case 1: 
									echo "<h3>Tên đăng nhập hoặc mật khẩu sai</h3>";
									break;
								case 2:
									echo "<h3>Không thực hiện đăng nhập được</h3>";
									break;	
								case 3:
									echo "<h4>Tài khoản không có quyền trên phân hệ Admin</h4>";
									break;
							}
						}
					?>
                </th>
            </tr>
            </table>
        </form>
	</div>
    
 	<!--  end login-inner -->
	<div class="clear"></div>
	<a href="" class="forgot-pwd">Quên mật khẩu?</a>
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Làm ơn, gửi cho chúng tôi địa chỉ email ca bạn và chúng tôi sẽ reset lại mật khẩu dùm bạn.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Địa chỉ email:</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" class="submit-login" value="Gửi mail"  /></td>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Quay lại trang đăng nhập</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>