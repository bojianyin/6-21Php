<?php
	session_start();
	include("db.php");
	include("inp.class.php");
	$inp=new inp();
	$status=$inp->get('do');
	if($status=="loing"){
		$use=$inp->post('user');
		$pwd=$inp->post('pwd');
		$sql="SELECT * FROM inp_log WHERE `username`='{$use}' and `pass`='{$pwd}'";
		$lin=$link->query($sql);
		if($row=$lin->fetch_array()){
			$_SESSION['name']=$row['username'];
			header("Location:index.php");
		}
	}
	if(isset($_GET['ext'])){
		if($_GET['ext']=="out"){
			unset($_SESSION['name']);
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="login.php?do=loing" method="post">
		<input type="text" name="user" placeholder="请输入您的账号...">
		<input type="password" name="pwd" placeholder="请输入您的密码...">
		<input type="submit" value="登陆" onclick="return checkLogin()">
		<a href="resiger.php">还没账号?去注册</a>
	</form>
	<script>
	var form =document.forms[0];
	function checkLogin(){
		if(form.user.value==""){
			form.user.focus();
			return false;
		}else if(form.pwd.value==""){
			form.pwd.focus();
			return false;
		}
	}
	</script>
</body>
</html>