<?php
function smarty_function_pmw_productshow($params, &$smarty){
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
	$listname = empty($listname)?'procutshow':$listname;
	$row = $dosql->GetOne("SELECT * FROM `#@__inimg` WHERE id=$id");
	$dosql->ExecNoneQuery("UPDATE `#@__inimg` SET hits=hits+1 WHERE id = $id");
	$smarty->assign($listname,$row);
}
?>