<?php
	/*
	 * @author 盖志鑫 <gzxy.mr.g@foxmail.com>
	 * @createTime 2016.11.26
	 * @updateTime 2016.11.27
	 */
	define('PMW',dirname(__FILE__).'/');//系统目录定义
	header("Content-Type:text/html;charset=utf-8");
	if(file_exists(PMW . 'data/install_lock.txt'))
	{
		require_once(PMW.'include/config.inc.php');
		require_once(PMW.'Smarty/tpl_show.php');
		$smarty->assign('URL','templates/default/');
		$page = isset($v)?$v.'.htm':"index.htm";
		//判断是否开启错误提示
		if($cfg_diserror == 'Y')
		{
			error_reporting(E_ALL);
		}else
		{
			error_reporting(0);
		}
		if(IsMobile() && !strstr(GetCurUrl(),'4g.php') && $cfg_mobile=='Y' && !strstr(GetCurUrl(),'/admin'))
		{
			header('location:4g.php');
			exit();
		}
		$TPL_URL = PMW."templates/default/".$page;//模版文件路径
		if(!file_exists($TPL_URL)){
			$smarty->display('404.htm');
			exit;
		}
		$smarty->display($page);
	}else{
		header('location:install/index.php');
		exit;
	}
?>