<?php
	session_start();
	include("db.php");
	$sql="SELECT * FROM save ORDER BY id DESC";
	$result=$link->query($sql) or die("获取失败");
	$rowList=array();
	while($row=$result->fetch_array()){
		$rowList[]=$row;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	*{padding:0;margin:0;}
	body{padding:20px;}
	form{width:25%;margin:10px auto;}
	.clearFix:after{display: block;clear: both;content:"";display: table}
	.user{font-weight: bold;color:#333;}
	.group{
		padding: 20px;border:1px solid #ccc;margin:0 300px;
	}
	.times{color:#666;float: right;}
	.title{text-indent: 2em;}
	input[type=submit]{width:50px;height:30px;}
	</style>
</head>
<body>
	<?if(!$_SESSION['name']){?><a href="login.php">去登录</a><?}else{?><a href="login.php?ext=out">退出登录</a><?}?>
	<span><?php echo isset($_SESSION['name'])?$_SESSION['name']."已登录":null;?></span>
	
	<form action="save.php" method="post">
		<div class="form_control">
			<label for="title">title:</label>
			<input type="text" name="title" />
		</div>
		<div class="form_control">
			<div>content:</div>
			<textarea rows="5" cols="40" name="cont"></textarea>
		</div>
		<input type="submit" value="发布">
	</form>
	<?php
	foreach($rowList as $row){
		$tim=date("Y-m-d h:i:s",$row['intime']);
	?>
	<div class="group clearFix">
		<div class="user"><?php echo $row['title']?></div>
		<div class="title"><?php echo $row['content']?></div>
		<div class="times"><?php if(isset($_SESSION['name'])){?><a href="del.php?id=<?php echo $row['id']?>">删除</a><?}?><?php echo $tim?></div>
	</div>
	<?php
	}
	?>
</body>
</html>