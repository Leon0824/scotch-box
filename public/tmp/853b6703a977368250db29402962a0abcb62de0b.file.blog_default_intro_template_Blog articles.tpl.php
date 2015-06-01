<?php /* Smarty version Smarty-3.1.14, created on 2015-03-18 05:45:45
         compiled from "/var/www/public/media/com_form2content/templates/blog_default_intro_template_Blog articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160942211355090b204e8020-06692594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '853b6703a977368250db29402962a0abcb62de0b' => 
    array (
      0 => '/var/www/public/media/com_form2content/templates/blog_default_intro_template_Blog articles.tpl',
      1 => 1426657519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160942211355090b204e8020-06692594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55090b205db2a0_00109084',
  'variables' => 
  array (
    'JOOMLA_TITLE' => 0,
    'INTRO_TEXT' => 0,
    'MAIN_TEXT' => 0,
    'INTRO_IMAGE' => 0,
    'SOURCE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55090b205db2a0_00109084')) {function content_55090b205db2a0_00109084($_smarty_tpl) {?>
<h1><?php echo $_smarty_tpl->tpl_vars['JOOMLA_TITLE']->value;?>
</h1>

intro_text: <?php echo $_smarty_tpl->tpl_vars['INTRO_TEXT']->value;?>

<hr/>main_text: <?php echo $_smarty_tpl->tpl_vars['MAIN_TEXT']->value;?>

<hr/>intro_image: <?php echo $_smarty_tpl->tpl_vars['INTRO_IMAGE']->value;?>

<hr/>source_url: <?php echo $_smarty_tpl->tpl_vars['SOURCE_URL']->value;?>

<hr/><?php }} ?>