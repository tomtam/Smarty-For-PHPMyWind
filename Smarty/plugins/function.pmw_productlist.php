<?php
function smarty_function_pmw_productlist($params, &$smarty){
	global $dosql, $dopage;
	$arr=explode(',',$params['set']);
	foreach($arr as $str){
		$a=explode(':',$str);
		switch ($a[0])
		{
			case "列表名":
				$listname = $a[1];
				break;
			case "显示数目":
				$limit = $a[1];
				break;
			case "分类":
				$type = $a[1];
				break;
			case '站点':
				$site = $a[1];
				break;
			case "标题长度":
				$titlelen = $a[1];
				break;
			case "分页显示":
				$paged = $a[1];
				break;
			case "属性":
				$flag = $a[1];
				break;
			case "简介长度":
				$infolen = $a[1];
				break;
			case '排序':
				$sort = $a[1];
				break;
		}
	}
	$listname = empty($listname)?'newslist':$listname;
	$limit	  = empty($limit)?'6':$limit;
	$type 	  = empty($type)?'':$type;
	$titlelen = empty($titlelen)?0:$titlelen;
	$paged	  = empty($paged)?0:$paged;
	$flag	  = empty($flag)?'':$flag;
	$infolen  = empty($infolen)?'':$infolen;
	$site     = empty($site)?1:$site;
	$sort     = empty($sort)?'DESC':$sort;
	$list = array();
	if ($paged == 1) {
		$where = "siteid = $site and classid = $type and checkinfo = true and delstate = '' and deltime = 0";
		if ($flag) {
			$where .= "flag LIKE '%$flag%' ORDER BY orderid $sort";
		}
		$dopage->GetPage("SELECT `title`,`picurl`, `description`, `id` FROM `#@__infoimg` WHERE $where",$limit);
		while($row = $dosql->GetArray())
		{
			if($row['picurl'])
			{
				$picurl = $row['picurl'];
			}else{
				$picurl = 'admin/templates/images/dfthumb.png';
			}
			if ($titlelen != 0) {
				$row['title'] = mb_substr($row['title'],0,$titlelen,"utf-8");
			}
			if ($infolen != 0) {
				$row['description'] = mb_substr(strip_tags($row['description']),0,$infolen,"utf-8");
			}
			$list[] = $row;
		}
		$smarty->assign($listname,$list);
		$smarty->assign('page',$dopage->GetList());
	}else{
		$where = "siteid = $site and classid = $type and checkinfo = true and delstate = '' and deltime = 0";
		if ($flag) {
			$where .= "flag LIKE '%$flag%' ORDER BY orderid $sort";
		}
		$dosql->Execute("SELECT `title`,`picurl`, `description`, `id` FROM `#@__infoimg` WHERE $where limit 0,$limit");
		while($row = $dosql->GetArray())
		{
			if($row['picurl'])
			{
				$picurl = $row['picurl'];
			}else{
				$picurl = 'admin/templates/images/dfthumb.png';
			}
			if ($titlelen != 0) {
				$row['title'] = mb_substr($row['title'],0,$titlelen,"utf-8");
			}
			if ($infolen != 0) {
				$row['description'] = mb_substr(strip_tags($row['description']),0,$infolen,"utf-8");
			}
			$list[] = $row;
		}
		$smarty->assign($listname,$list);
	}
}
?>