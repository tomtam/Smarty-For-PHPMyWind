<?php /* Smarty version Smarty-3.1.13, created on 2016-11-27 18:39:28
         compiled from "F:\php-work\smarty\templates\default\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:16945583a61f1980d24-97121534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aa3a7486db2367138f52cdce558dfffcf9a991f' => 
    array (
      0 => 'F:\\php-work\\smarty\\templates\\default\\index.htm',
      1 => 1480243164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16945583a61f1980d24-97121534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_583a61f2327606_77742392',
  'variables' => 
  array (
    'header' => 0,
    'config' => 0,
    'nav' => 0,
    'list' => 0,
    'subnav' => 0,
    'info' => 0,
    'infopic' => 0,
    'news' => 0,
    'newslist' => 0,
    'newsshow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583a61f2327606_77742392')) {function content_583a61f2327606_77742392($_smarty_tpl) {?><?php if (!is_callable('smarty_function_pmw_getheader')) include 'F:\\php-work\\smarty\\Smarty\\plugins\\function.pmw_getheader.php';
if (!is_callable('smarty_function_pmw_getnav')) include 'F:\\php-work\\smarty\\Smarty\\plugins\\function.pmw_getnav.php';
if (!is_callable('smarty_function_pmw_getinfo')) include 'F:\\php-work\\smarty\\Smarty\\plugins\\function.pmw_getinfo.php';
if (!is_callable('smarty_function_pmw_getinfopic')) include 'F:\\php-work\\smarty\\Smarty\\plugins\\function.pmw_getinfopic.php';
if (!is_callable('smarty_function_pmw_newslist')) include 'F:\\php-work\\smarty\\Smarty\\plugins\\function.pmw_newslist.php';
if (!is_callable('smarty_function_pmw_productlist')) include 'F:\\php-work\\smarty\\Smarty\\plugins\\function.pmw_productlist.php';
if (!is_callable('smarty_function_pmw_newsshow')) include 'F:\\php-work\\smarty\\Smarty\\plugins\\function.pmw_newsshow.php';
if (!is_callable('smarty_function_pmw_productshow')) include 'F:\\php-work\\smarty\\Smarty\\plugins\\function.pmw_productshow.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php echo smarty_function_pmw_getheader(array('set'=>"所属站点:1,所属栏目:1,详情ID:2"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

</head>
<body>
	<?php echo $_smarty_tpl->tpl_vars['config']->value['cfg_webname'];?>

	<ul>
		<?php echo smarty_function_pmw_getnav(array('set'=>"上级导航:0,排序:ASC,列表名:nav"),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['nav']->value){?>
				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a>
						<?php echo smarty_function_pmw_getnav(array('set'=>"上级导航:".((string)$_smarty_tpl->tpl_vars['list']->value['id']).",排序:DESC,列表名:subnav"),$_smarty_tpl);?>

							<?php if ($_smarty_tpl->tpl_vars['subnav']->value){?>
								<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subnav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
									|__ <li><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['linkurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['classname'];?>
</a></li>
								<?php } ?>
							<?php }?>
					</li>
				<?php } ?>
			<?php }?>
	</ul>
	<?php echo smarty_function_pmw_getinfo(array('set'=>"单页ID:1,显示字数:5,跳转网址:?v=about&id=1"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

	<?php echo smarty_function_pmw_getinfopic(array('set'=>"单页ID:1"),$_smarty_tpl);?>

	<img src="<?php echo $_smarty_tpl->tpl_vars['infopic']->value;?>
">
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php echo smarty_function_pmw_newslist(array('set'=>"列表名:news,显示数目:1,分类:4,站点:1,标题长度:5"),$_smarty_tpl);?>

	<?php  $_smarty_tpl->tpl_vars['newslist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newslist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newslist']->key => $_smarty_tpl->tpl_vars['newslist']->value){
$_smarty_tpl->tpl_vars['newslist']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['newslist']->value['title'];?>

	<?php } ?>
	<br>
	<?php echo smarty_function_pmw_productlist(array('set'=>"列表名:news,显示数目:1,分类:7,站点:1"),$_smarty_tpl);?>

	<?php  $_smarty_tpl->tpl_vars['newslist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newslist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newslist']->key => $_smarty_tpl->tpl_vars['newslist']->value){
$_smarty_tpl->tpl_vars['newslist']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['newslist']->value['title'];?>

	<?php } ?>
	<?php echo smarty_function_pmw_newsshow(array('set'=>"编号:1,列表名:newsshow"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->tpl_vars['newsshow']->value['content'];?>

	<?php echo smarty_function_pmw_productshow(array('set'=>"编号:1,列表名:newsshow"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->tpl_vars['newsshow']->value['content'];?>

</body>
</html><?php }} ?>