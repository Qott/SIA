<?php /* Smarty version Smarty-3.1.19, created on 2018-03-14 23:36:39
         compiled from "/home/betty/www/prestashop/admin162edhmah/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6371237355aa9a3f7c9a892-97677057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b161114cd1d1a7b71f61ffea220ae63103afc578' => 
    array (
      0 => '/home/betty/www/prestashop/admin162edhmah/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1519649750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6371237355aa9a3f7c9a892-97677057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa9a3f7ca2c80_41988501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9a3f7ca2c80_41988501')) {function content_5aa9a3f7ca2c80_41988501($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="delete">
	<i class="icon-trash"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
