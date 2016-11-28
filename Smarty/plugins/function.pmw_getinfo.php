<?php
function smarty_function_pmw_getinfo($params, &$smarty){
	global $dosql;
	$arr=explode(',',$params['set']);
	foreach($arr as $str){
		$a=explode(':',$str);
		switch ($a[0])
		{
			case "单页ID":
				$classid = $a[1];
				break;
			case '显示字数':
				$num = $a[1];
				break;
			case "跳转网址":
				$gourl = $a[1];
				break;
		}
	}
	$classid = empty($classid)?'0':$classid;
	$num = empty($num)?'':$num;
	$gourl = empty($gourl)?'':$gourl;
	$contstr = '';
	$row = $dosql->GetOne("SELECT * FROM `#@__info` WHERE classid=$classid");
	if(isset($row['content']))
	{
		if(!empty($num))
		{
			$contstr .= ReStrLen($row['content'], $num);
		}
		else
		{
			$contstr .= GetContPage($row['content']);
		}
		if($gourl != '') $contstr .= ' <a href="'.$gourl.'">[更多>>]</a>';
	}
	else
	{
		$contstr .= '网站资料更新中...';
	}
	$smarty->assign('info',$contstr);
}
?>