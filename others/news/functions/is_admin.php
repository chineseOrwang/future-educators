<?php

function is_admin(){
	if(isset($_SESSION["id"])){
		if($_SESSION["id"]=="101"){
			return TRUE;
		}else{
			return FALSE;
		}
	}else{
		return FALSE;
	}
}

?>