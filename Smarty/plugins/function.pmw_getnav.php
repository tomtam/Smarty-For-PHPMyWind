<?php
function smarty_function_pmw_getnav($params, &$smarty){
	global $dosql, $cfg_isreurl;
	$arr=explode(',',$params['set']);
	foreach($arr as $str){
		$a=explode(':',$str);
		switch ($a[0])
		{
			case "上级导航":
				$pid = $a[1];
				break;
			case '排序':
				$sort = $a[1];
				break;
			case "列表名":
				$nav = $a[1];
				break;
		}
	}
	$pid = empty($pid)?'0':$pid;
	$nav = empty($nav)?'':$nav;
	$sort = empty($sort)?'ASC':$sort;
	$list= array();
	$dosql->Execute("SELECT `classname`,`linkurl`,`relinkurl`,`picurl`,`id` FROM `#@__nav` WHERE parentid=$pid AND checkinfo=true ORDER BY orderid $sort");
	while($row = $dosql->GetArray())
	{
		if($cfg_isreurl != 'Y')
			$row['linkurl'] = $row['linkurl'];
		else
			$row['linkurl'] = $row['relinkurl'];
		$list[] = $row;
	}
	$smarty->assign($nav,$list);
}
?>