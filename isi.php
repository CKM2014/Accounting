<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
//$page=htmlentities($_GET['page']);
$halaman="$page.php";

if(!file_exists($halaman) || empty($page)){
	include "home.php";
}else{
	include "$halaman";
}
?>