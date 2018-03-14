<?php /* Smarty version Smarty-3.1.19, created on 2018-03-14 23:31:31
         compiled from "/home/betty/www/prestashop/admin162edhmah/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11266379975aa9a2c3216606-08687846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04f1ea798d52116b39beb2ae8e161a4e187faba2' => 
    array (
      0 => '/home/betty/www/prestashop/admin162edhmah/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1519649750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11266379975aa9a2c3216606-08687846',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa9a2c3236fd3_73793535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9a2c3236fd3_73793535')) {function content_5aa9a2c3236fd3_73793535($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
