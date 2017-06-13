<?php
function isLogin(){
	if(!isset($_SESSION['aname'])||$_SESSION['aname']==''){
		return false;
	}
		return true;
	}
?>
