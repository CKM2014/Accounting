<?php
date_default_timezone_set('Asia/Dhaka');
function uri_active($uri){
	$ex_uri = explode('=', $uri);
	if(!empty($ex_uri[1])){
	$page = $ex_uri[1];
	return $page;
	}
}
?>