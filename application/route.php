<?php

	$valid=true;
	if($valid){
		$controller->$action_name();	
	}else{
		pe("<h1 style='color:red;'>Sorry You don't have access to view this page</h1>");
	}
    


?>