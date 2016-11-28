<?php
function smarty_function_pmw_newsshow($params, &$smarty){
	global $dosql;
	$arr=explode(',',$params['set']);
	foreach($arr as $str){
		$a=explode(':',$str);
		switch ($a[0])
		{
			case "编号":
				$id = $a[1];
				break;
			case '列表名':
				$listname = $a[1];
				break;
		}
	}
	$id = empty($id)?'0':$id;
	$listname = empty($listname)?'newsshow':$listname;
	$row = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=$id");
	$dosql->ExecNoneQuery("UPDATE `#@__infolist` SET hits=hits+1 WHERE id = $id");
	$smarty->assign($listname,$row);
}
?>