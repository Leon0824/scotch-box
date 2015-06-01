<?php /* Smarty version Smarty-3.1.14, created on 2015-03-18 02:00:18
         compiled from "/var/www/public/media/com_form2content/templates/main_template_simple_article_example.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2203688505508dc32bae817-97270468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67c178360404475ebf3a9b506db2d6beb48d4821' => 
    array (
      0 => '/var/www/public/media/com_form2content/templates/main_template_simple_article_example.tpl',
      1 => 1426644018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2203688505508dc32bae817-97270468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIN' => 0,
    'IMAGE' => 0,
    'JOOMLA_TITLE' => 0,
    'REFERENCE' => 0,
    'JOOMLA_INFORMATION' => 0,
    'JOOMLA_TITLE_ALIAS' => 0,
    'JOOMLA_ARTICLE_LINK' => 0,
    'JOOMLA_ID' => 0,
    'JOOMLA_PUBLISH_UP' => 0,
    'JOOMLA_PUBLISH_DOWN' => 0,
    'JOOMLA_CREATED' => 0,
    'JOOMLA_MODIFIED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5508dc32c04f78_55769191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508dc32c04f78_55769191')) {function content_5508dc32c04f78_55769191($_smarty_tpl) {?>





<?php if ($_smarty_tpl->tpl_vars['MAIN']->value){?>
<div>


<?php if ($_smarty_tpl->tpl_vars['IMAGE']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value;?>
" align="right" style="padding-left:10px;" alt="<?php echo $_smarty_tpl->tpl_vars['JOOMLA_TITLE']->value;?>
" /><?php }?>

<?php echo $_smarty_tpl->tpl_vars['MAIN']->value;?>


<p><strong>Article reference:</strong> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['REFERENCE']->value)===null||$tmp==='' ? 'No reference available' : $tmp);?>
</p>
<div style="clear:both;"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['JOOMLA_INFORMATION']->value=='1'){?>
<div style=" padding:5px; border:1px solid #999; width:98%; margin:10px 0; clear:both;">
<p>These are Form2Content LITE template parameters. In PRO you can access and display all the Joomla article data like section, category and author info.</p>
<span style="font-size:90%;">
Artice title: <?php echo $_smarty_tpl->tpl_vars['JOOMLA_TITLE']->value;?>
<br/>
Title alias: <?php echo $_smarty_tpl->tpl_vars['JOOMLA_TITLE_ALIAS']->value;?>
<br/>
Article URL (raw output, great for custom 'read more'): <a href="<?php echo $_smarty_tpl->tpl_vars['JOOMLA_ARTICLE_LINK']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['JOOMLA_ARTICLE_LINK']->value;?>
</a><br/>
Joomla Article ID: <?php echo $_smarty_tpl->tpl_vars['JOOMLA_ID']->value;?>
<br/>
Start publishing: <?php if ($_smarty_tpl->tpl_vars['JOOMLA_PUBLISH_UP']->value){?><?php echo $_smarty_tpl->tpl_vars['JOOMLA_PUBLISH_UP']->value;?>
<?php }else{ ?>empty<?php }?><br/>
Stop publishing: <?php if ($_smarty_tpl->tpl_vars['JOOMLA_PUBLISH_DOWN']->value){?><?php echo $_smarty_tpl->tpl_vars['JOOMLA_PUBLISH_DOWN']->value;?>
<?php }else{ ?>empty<?php }?><br/>
Article create date: <?php echo $_smarty_tpl->tpl_vars['JOOMLA_CREATED']->value;?>
<br/>
Article modified date: <?php echo $_smarty_tpl->tpl_vars['JOOMLA_MODIFIED']->value;?>
</span>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['JOOMLA_INFORMATION']->value=='2'){?>
<p>No extra information available.</p>
<?php }else{ ?>
<p>No option to display additional information was made.</p>
<?php }?>

<p style="font-size:80%; border-top:1px dashed #666;">This article has been generated using <a href="http://www.joomla.org/" target="_blank">Joomla</a> and <a href="http://www.form2content.com" target="_blank">Form2Content</a>. Please find <a href="http://www.form2content.com/f2c-joomla/pro/f2c-documentation" target="_blank">F2C documentation here</a>.</p>

<?php }?><?php }} ?>