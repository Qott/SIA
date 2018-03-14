<?php /* Smarty version Smarty-3.1.19, created on 2018-03-14 23:31:44
         compiled from "/home/betty/www/prestashop/modules/welcome/views/contents/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5669867675aa9a2d007c2d8-30860606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b21f6b31510addf06dc95d6c29b7d8002354d9d' => 
    array (
      0 => '/home/betty/www/prestashop/modules/welcome/views/contents/welcome.tpl',
      1 => 1514910348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5669867675aa9a2d007c2d8-30860606',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa9a2d009f3c7_12020871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9a2d009f3c7_12020871')) {function content_5aa9a2d009f3c7_12020871($_smarty_tpl) {?>

<div class="onboarding-welcome">
  <i class="material-icons onboarding-button-shut-down">close</i>
  <p class="welcome"><?php echo smartyTranslate(array('s'=>'Welcome to your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hi! My name is Preston and I\'m here to show you around.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'You will discover a few essential steps before you can launch your shop:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    <?php echo smartyTranslate(array('s'=>'Create your first product, customize your shop, configure shipping and payments...','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  </div>
  <div class="started">
    <p><?php echo smartyTranslate(array('s'=>'Let\'s get started!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  </div>
  <div class="buttons">
    <button class="btn btn-tertiary-outline btn-lg onboarding-button-shut-down"><?php echo smartyTranslate(array('s'=>'Later','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    <button class="blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Start','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
</div>
<?php }} ?>
