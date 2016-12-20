<?php

session_start();
function check_login(){
	if (isset($_SESSION["session_user"]) && isset($_SESSION["session_password"]) && isset ($_SESSION["session_user"])) {
		$check = array(
		    "check_user"=>$_SESSION["session_user"],
		    "check_pass"=>$_SESSION["session_password"],
		    "check_session"=> $_SESSION["session_user"],
		);
		return $check;
	}
	return ;
}

