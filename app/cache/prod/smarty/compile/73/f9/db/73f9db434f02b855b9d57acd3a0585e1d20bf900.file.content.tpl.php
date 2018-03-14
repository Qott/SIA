<?php /* Smarty version Smarty-3.1.19, created on 2018-03-14 23:31:45
         compiled from "/home/betty/www/prestashop/admin162edhmah/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6790851975aa9a2d154a416-28258293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73f9db434f02b855b9d57acd3a0585e1d20bf900' => 
    array (
      0 => '/home/betty/www/prestashop/admin162edhmah/themes/default/template/content.tpl',
      1 => 1519649750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6790851975aa9a2d154a416-28258293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa9a2d156b972_52474707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9a2d156b972_52474707')) {function content_5aa9a2d156b972_52474707($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
