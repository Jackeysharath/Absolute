<?php

function pe($value){
	print "<pre>";
	print_r($value);
	exit;
}
function View($url){
//$_SESSION['data']=$data;
include $url;
}
function push(){
	$args = func_get_args();

}
?>