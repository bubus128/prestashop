<?php
/* Smarty version 3.1.33, created on 2021-01-07 14:27:23
  from '/var/www/html/prestashop/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff70c3b14eb34_79166762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0d02562b0f6d40b4e33d52b14ffb85d61d0b432' => 
    array (
      0 => '/var/www/html/prestashop/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1609960769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff70c3b14eb34_79166762 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var MBG = GoogleAnalyticEnhancedECommerce;
            MBG.setCurrency('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isoCode']->value,'htmlall','UTF-8' ));?>
');
            <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

        });
    <?php echo '</script'; ?>
>
    
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['jsState']->value != 1 && $_smarty_tpl->tpl_vars['isBackoffice']->value === true)) {?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        ga('send', 'pageview');
    <?php echo '</script'; ?>
>
    
<?php }
}
}
