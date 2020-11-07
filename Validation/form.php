<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bài tập Regular Expression</title>
	<link rel="stylesheet" href="style.css">	<!--link tới file CSS-->
</head>
<body>
<?php
require_once 'library.php';
$errorEmail='';
$email='';
$errorUsername='';
$username='';
$errorPassword='';
$password='';
$errorweb='';
$web='';
if (!empty($_POST)) {
    $email=$_POST['email'];
    if(checkData($email,"email")==false){
        $errorEmail="Email sai qui cách,kiểm tra lại!";
        $email='';
    }
    $username=$_POST['name'];
    if (checkData($username,"username")==false){
        $errorUsername="User sai qui cách,kiểm tra lại!";
        $username='';
    }
    $password=$_POST['password'];
    if (checkData($password,"password")==false){
        $errorPassword="Password sai qui cách,kiểm tra lại!";
        $password='';
    }
    $web=$_POST['website'];
    if (checkData($web,"web")==false){
        $errorweb="Password sai qui cách,kiểm tra lại!";
        $web='';
    }
    
}
?>
	<div class="bg-img">
		<div class="content">
			<header>Login Form</header>
			<form class="form1" action="#" method="post">
				<div class="obj">
					<div class="field">
						<div class="inputtext">Email</div>
						<div class="inputcontent"><input type="text" required=""
							placeholder="Email" name="email" value="<?php echo $email; ?>" />
						</div>		
					</div>
					<div class="outputError"><?php echo $errorEmail; ?></div>
				</div>
				
				<div class="obj">
					<div class="field space">
						<div class="inputtext">Username</div>
						<div class="inputcontent"><input type="text" required="" placeholder="User name" name="name" value="<?php echo $username; ?>"/></div>
					</div>
					<div class="outputError"><?php echo $errorUsername ;?></div>
				</div>

				<div class="obj">
					<div class="field space">
						<div class="inputtext">Password</div>
						<div class="inputcontent"><input type="password" class="pass-key" required="" placeholder="Password" name="password" value="<?php echo $password; ?>" /></div>						
					</div>
					<div class="outputError"><?php echo $errorPassword; ?></div>
				</div>

				<div class="obj">
					<div class="field space">
						<div class="inputtext">Website</div>
						<div class="inputcontent"><input type="text" required="" placeholder="website" name="website" value="<?php echo $web; ?>" /></div>	
					</div>
					<div class="outputError"><?php echo $errorweb; ?></div>
				</div>
				
				<div class="pass">
					<a href="#">Forgot Password?</a>
				</div>
				
				<div class="field">
					<input class="btn" type="submit" value="submit">
				</div>
				
			</form>
		</div>
	</div>
		
</body>
</html>