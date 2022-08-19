<?php
/* Smarty version 3.1.43, created on 2022-08-18 17:04:04
  from '/Applications/MAMP/htdocs/prestandbox/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62fe54e4723fc1_17266159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b436a9e05b966e4f85683dc3df0ede0e6f0740f0' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestandbox/themes/classic/templates/_partials/helpers.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe54e4723fc1_17266159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/prestandbox/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/b4/36/a9/b436a9e05b966e4f85683dc3df0ede0e6f0740f0_2.file.helpers.tpl.php',
    'uid' => 'b436a9e05b966e4f85683dc3df0ede0e6f0740f0',
    'call_name' => 'smarty_template_function_renderLogo_179226293162fe54e470cb46_58415396',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_179226293162fe54e470cb46_58415396 */
if (!function_exists('smarty_template_function_renderLogo_179226293162fe54e470cb46_58415396')) {
function smarty_template_function_renderLogo_179226293162fe54e470cb46_58415396(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_179226293162fe54e470cb46_58415396 */
}
