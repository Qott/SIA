<?php /* Smarty version Smarty-3.1.19, created on 2018-03-14 23:36:39
         compiled from "/home/betty/www/prestashop/admin162edhmah/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2626789835aa9a3f7c923f2-51401855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f624909fea6dee58eb7bcf7b383bf74b1a507845' => 
    array (
      0 => '/home/betty/www/prestashop/admin162edhmah/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1519649750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2626789835aa9a3f7c923f2-51401855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa9a3f7c976d0_70444887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9a3f7c976d0_70444887')) {function content_5aa9a3f7c976d0_70444887($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
