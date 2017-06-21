<?php
	$link=new mysqli("localhost","root","root","usersave");
	if($link->connect_errno>0){
		echo "链接失败<br/>错误{$link->connect_errno}";
		exit;
	}else{
		echo "链接成功";
	}