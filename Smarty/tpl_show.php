<?php
	require(PMW."Smarty/Smarty.class.php");//加载Smarty类
	require(PMW."Smarty/common.php");//加载Smarty所需方法
	$dosql->Execute("select * from `#@__webconfig`");
	while($list = $dosql->GetArray())
	{
		$config[$list['varname']] = $list['varvalue'];
	}
	$smarty = new Smarty();//实例化Smarty
	$smarty->caching = FALSE;//true建立缓存
	$smarty->template_dir = PMW."templates/default/";
	$smarty->compile_dir = PMW."data/cache/pc/";
	$smarty->cache_dir = PMW."data/cache/pc/";
	$smarty->left_delimiter = "{%";
	$smarty->right_delimiter = "%}";
	$smarty->assign('config',$config);
?>