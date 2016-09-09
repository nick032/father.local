<?php

$query = $_SERVER['QUERY_STRING'];

function checkParams($str) {
	return trim(htmlspecialchars(addslashes(strip_tags($str))));
}

$url = checkParams($_GET['url']);

include "header.php";

if($query == ""){
	include "page1.php";
}elseif(isset($url) && !empty($url)){
	include "$url.php";
}else {
	include "404.php";
}




