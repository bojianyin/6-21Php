<?php
	include('db.php');
	include('inp.class.php');
	$inpVal=new inp();
	$tit=$inpVal->post('title');
	$con=$inpVal->post('cont');
	$tims=time();
	//var_dump($tit,$con);exit;
	//var_dump($tims);exit;
	if($tit=="" or $con==""){
		echo "不能有空填项";
	}else{
		$sql="INSERT INTO save(`title`,`content`,`intime`) VALUES('{$tit}','{$con}','{$tims}')";
		//var_dump($sql);
		$int=$link->query($sql) or die("发布失败");
		$int?header("Location:index.php"):null;
	}