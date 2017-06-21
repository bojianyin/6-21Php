<?php
	class inp{
		function get($v){
			if(!isset($_GET[$v])){
				return false;
			}
			$val=$_GET[$v];
			return $val;
		}
		function post($v){
			if(!isset($_POST[$v])){
				return false;
			}
			$val=$_POST[$v];
			return $val;
		}
	}