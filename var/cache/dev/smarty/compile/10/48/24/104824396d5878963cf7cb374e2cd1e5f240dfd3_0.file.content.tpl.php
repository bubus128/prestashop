<?php
/* Smarty version 3.1.33, created on 2021-01-07 16:57:25
  from '/var/www/html/prestashop/admin402rkqphj/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff72f65b8f1e5_23028962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '104824396d5878963cf7cb374e2cd1e5f240dfd3' => 
    array (
      0 => '/var/www/html/prestashop/admin402rkqphj/themes/default/template/content.tpl',
      1 => 1609960719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff72f65b8f1e5_23028962 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
