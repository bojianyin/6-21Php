<?php
	include("db.php");
	include("inp.class.php");
	$inp=new inp();
	$isJiao=$inp->get('tj');
	 if($isJiao){
	 	if($isJiao=="zhu"){var_dump($isJiao);
	 		$user=$inp->post('user') or die("用户名不能为空");
			$pwd1=$inp->post('pwd1') or die("密码不能为空");
			$pwd2=$inp->post('pwd2') or die("确认密码不能为空");
			if($pwd1===$pwd2){
				$sql="INSERT INTO inp_log(`username`,`pass`) VALUES('{$user}','{$pwd1}')";
				$sert=$link->query($sql) or die("插入失败");
				header("Location:login.php");
			}else{
				echo "您输入的俩次密码不一致";
				exit;
			}
	 	}
	 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		*{padding:0;margin:0;}
		form{margin:20px;width:200px;}
		form >.form_control{width:100%;}
		input{float:right;}
		label{float:left;}
		.clearFix:after{clear:both;content:"";display: block;}
		input[type=submit]{padding:5px;margin-top:5px;}
	</style>
</head>
<body>
	<form action="resiger.php?tj=zhu" method="post">
		<div class="form_contrl clearFix">
		<label for="user">用户名:</label>
		<input type="text" name="user" />
		</div>
		<div class="form_contrl clearFix">
		<label for="user">密码:</label>
		<input type="password" name="pwd1" />
		</div>
		<div class="form_contrl clearFix">
		<label for="user">确认密码:</label>
		<input type="password" name="pwd2" />
		</div>
		<div class="form_contrl clearFix">
		<input type="submit" value="注册" />
		</div>
	</form>
</body>
</html>