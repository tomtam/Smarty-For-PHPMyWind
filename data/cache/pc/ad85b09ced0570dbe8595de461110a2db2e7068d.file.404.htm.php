<?php /* Smarty version Smarty-3.1.13, created on 2016-11-27 12:37:46
         compiled from "F:\php-work\smarty\templates\default\404.htm" */ ?>
<?php /*%%SmartyHeaderCode:9378583a631a274130-79849572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad85b09ced0570dbe8595de461110a2db2e7068d' => 
    array (
      0 => 'F:\\php-work\\smarty\\templates\\default\\404.htm',
      1 => 1480167065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9378583a631a274130-79849572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_583a631a5d3352_94919473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583a631a5d3352_94919473')) {function content_583a631a5d3352_94919473($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <title>找不到您要的页面了呢</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
css/404.css">
    <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
js/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
js/scriptalizer.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            $('#parallax').jparallax({});
        });
    </script>
</head>
<body>
    <div id="content" class="narrowcolumn">

<div id="parallax">
    <div class="error1">
        <img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
images/wand.jpg" alt="Mauer" />
    </div>
    <div class="error2">
        <img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
images/licht.png" alt="Licht" />
    </div>
    <div class="error3">
        <img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
images/halo1.png" alt="Halo1" />
    </div>
    <div class="error4">
        <img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
images/halo2.png" alt="Halo2" />
    </div>
    <div class="error5">
        <img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
images/batman-404.png" alt="Batcave 404" />
    </div>
</div>
<div class="footer-banner" style="width:728px; margin:0 auto"></div>
</div>
 
</body>
</html>


<?php }} ?>