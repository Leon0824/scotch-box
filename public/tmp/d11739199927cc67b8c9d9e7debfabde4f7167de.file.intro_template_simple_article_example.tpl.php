<?php /* Smarty version Smarty-3.1.14, created on 2015-03-18 02:00:18
         compiled from "/var/www/public/media/com_form2content/templates/intro_template_simple_article_example.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4514050745508dc32a2b803-67938951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd11739199927cc67b8c9d9e7debfabde4f7167de' => 
    array (
      0 => '/var/www/public/media/com_form2content/templates/intro_template_simple_article_example.tpl',
      1 => 1426644018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4514050745508dc32a2b803-67938951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IMAGE' => 0,
    'JOOMLA_ARTICLE_LINK' => 0,
    'JOOMLA_TITLE' => 0,
    'INTRO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5508dc32b6d9d7_45562744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508dc32b6d9d7_45562744')) {function content_5508dc32b6d9d7_45562744($_smarty_tpl) {?>


<p>
<?php if ($_smarty_tpl->tpl_vars['IMAGE']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['JOOMLA_ARTICLE_LINK']->value;?>
" target="_self"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value;?>
" align="left" style="padding-right:10px;" alt="<?php echo $_smarty_tpl->tpl_vars['JOOMLA_TITLE']->value;?>
" /></a><?php }?>
<?php echo $_smarty_tpl->tpl_vars['INTRO']->value;?>
</p>


<?php }} ?>