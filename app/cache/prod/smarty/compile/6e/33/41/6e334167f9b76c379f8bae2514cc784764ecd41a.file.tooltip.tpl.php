<?php /* Smarty version Smarty-3.1.19, created on 2018-03-14 23:31:45
         compiled from "/home/betty/www/prestashop/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21371553705aa9a2d1722eb3-23826658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e334167f9b76c379f8bae2514cc784764ecd41a' => 
    array (
      0 => '/home/betty/www/prestashop/modules/welcome/views/templates/tooltip.tpl',
      1 => 1514910348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21371553705aa9a2d1722eb3-23826658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa9a2d1725747_77173511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9a2d1725747_77173511')) {function content_5aa9a2d1725747_77173511($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
