<?php
	session_start();
	$thongbao='';
	if (isset($_POST['login'])) {
		require_once '../libs/ketnoiCSDL.php';
		if (empty($_POST['admin']) || empty($_POST['pass'])) {
			$thongbao='Phải nhập đầy đủ thông tin';
		}else {
			$admin=$_POST['admin'];
			$pass=$_POST['pass'];
			$sql="SELECT * from t_dangnhap where TenTK='$admin' and PassTK='$pass'";
			$sql_dangnhap=$db->query($sql);
			if ($sql_dangnhap->num_rows >0) {
				$_SESSION['admin']=$admin;
				echo'<script>location.href="quanlysp.php";</script>';
			}else {
				$thongbao='sai username/password';
			}
		}

	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="css/login_style.css">

	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Simple Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->

</head>

<body>
    <div class="container w3">
        <h2>ĐĂNG NHẬP</h2>
		<form action="#" method="post">
			<div class="username">
				<span class="username">Tên đăng nhập</span>
				<input type="text" name="admin" class="name">
				<div class="clear"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Mật khẩu</span>
				<input type="password" name="pass" class="password">
				<div class="clear"></div>
			</div>

			<div class="password-agileits">
				<p><?php echo $thongbao;  ?></p>
				<div class="clear"></div>
			</div>			

			<div class="login-w3">
				<input type="submit" class="login" name="login" value="Đăng nhập">
			</div>
			<div class="clear"></div>
		</form>
	</div>
</body>
</html>