<?php /* Smarty version Smarty-3.1.19, created on 2018-03-14 23:31:45
         compiled from "/home/betty/www/prestashop/modules/welcome/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15229911665aa9a2d16b68e8-53660478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a67c154be7c5dbc5368d1bf91eaa3be6bb3eda40' => 
    array (
      0 => '/home/betty/www/prestashop/modules/welcome/views/navbar.tpl',
      1 => 1514910348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15229911665aa9a2d16b68e8-53660478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa9a2d16dd9c7_00540907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9a2d16dd9c7_00540907')) {function content_5aa9a2d16dd9c7_00540907($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
