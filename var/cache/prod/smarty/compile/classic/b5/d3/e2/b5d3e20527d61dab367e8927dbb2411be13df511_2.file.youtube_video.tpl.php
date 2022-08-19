<?php
/* Smarty version 3.1.43, created on 2022-08-18 17:04:04
  from '/Applications/MAMP/htdocs/prestandbox/modules/youtube_video/views/templates/hook/youtube_video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62fe54e4615d93_35076623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5d3e20527d61dab367e8927dbb2411be13df511' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestandbox/modules/youtube_video/views/templates/hook/youtube_video.tpl',
      1 => 1660833107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe54e4615d93_35076623 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="custom-text">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8');?>
?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>iframe>
        </div><?php }
}
