<?php

function is_login(){
	if(isset($_SESSION["id"])){
		return TRUE;
	}else{
		return FALSE;
	}
}

?>