<?php
function get_smarty_request($str){
	$str=rawurldecode($str);
	$strtrim=rtrim($str,']');
	if (substr($strtrim,0,4)=='GET[')
	{
		$getkey=substr($strtrim,4);
		return $_GET[$getkey];
	}elseif (substr($strtrim,0,5)=='POST[')
	{
		$getkey=substr($strtrim,5);
		return $_POST[$getkey];
	}else
	{
		return $str;
	}
}
?>