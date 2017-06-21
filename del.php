<?php
	include("db.php");
	$id=$_GET['id'];
	if(isset($id)){
		$sql="DELETE FROM save WHERE `id`='{$id}'";
		$is=$link->query($sql);
		if($is){
			header("Location:index.php");
		}
	}
?>