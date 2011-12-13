<?php /* Smarty version Smarty-3.1.6, created on 2011-12-13 18:09:43
         compiled from "templates/acm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19597036744ee783ea17f610-28278726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282ea6b0bbe802b96a8fc3907ad4da7d03e41bcc' => 
    array (
      0 => 'templates/acm.tpl',
      1 => 1323796152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19597036744ee783ea17f610-28278726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ee783ea21e5f',
  'variables' => 
  array (
    'pageTitle' => 0,
    'pageHeader' => 0,
    'breadcrumbs' => 0,
    'contentHeader' => 0,
    'contentHTML' => 0,
    'footerText' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee783ea21e5f')) {function content_4ee783ea21e5f($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('pageTitle'=>$_tmp1), 0);?>


<div id="main" role="main">
	<div class="mainContent">
		<h1><?php echo $_smarty_tpl->tpl_vars['pageHeader']->value;?>
</h1>
		<?php echo $_smarty_tpl->tpl_vars['breadcrumbs']->value;?>

		<br />
		<div id="ajaxHolder">
			<h2><?php echo $_smarty_tpl->tpl_vars['contentHeader']->value;?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['contentHTML']->value;?>
</p>
		</div>
	</div>
</div>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['footerText']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('footerText'=>$_tmp2), 0);?>
<?php }} ?>