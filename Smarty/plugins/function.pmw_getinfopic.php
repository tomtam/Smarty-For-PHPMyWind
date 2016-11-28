<?php
function smarty_function_pmw_getinfopic($params, &$smarty){
	global $dosql;
	$arr=explode(',',$params['set']);
	foreach($arr as $str){
		$a=explode(':',$str);
		switch ($a[0])
		{
			case "单页ID":
				$classid = $a[1];
				break;
		}
	}
	$classid = empty($classid)?'0':$classid;
	$res = $dosql->GetOne("SELECT `picurl` FROM `#@__info` WHERE `classid`=$classid");
	if($res['picurl'])
	{
		$picurl = $res['picurl'];
	}else{
		$picurl = 'admin/templates/images/dfthumb.png';
	}
	$smarty->assign('infopic',$picurl);
}
?>