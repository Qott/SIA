<?php /* Smarty version Smarty-3.1.19, created on 2018-03-14 23:36:39
         compiled from "/home/betty/www/prestashop/admin162edhmah/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1530553725aa9a3f7d09b21-86494105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '777bbbfb36d604ac74a3204aff83df81cd920293' => 
    array (
      0 => '/home/betty/www/prestashop/admin162edhmah/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1519649750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1530553725aa9a3f7d09b21-86494105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa9a3f7d4a9b4_17985237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9a3f7d4a9b4_17985237')) {function content_5aa9a3f7d4a9b4_17985237($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>
