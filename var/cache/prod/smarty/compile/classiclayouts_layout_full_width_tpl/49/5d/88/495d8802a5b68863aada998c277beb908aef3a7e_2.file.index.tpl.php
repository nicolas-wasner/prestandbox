<?php
/* Smarty version 3.1.43, created on 2022-08-18 17:04:04
  from '/Applications/MAMP/htdocs/prestandbox/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62fe54e463ce39_72019139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '495d8802a5b68863aada998c277beb908aef3a7e' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestandbox/themes/classic/templates/index.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe54e463ce39_72019139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203081498062fe54e462f892_42730213', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_188519875962fe54e4631685_81550686 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_191073182662fe54e4635460_87631579 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_137724693862fe54e4633c39_48261800 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191073182662fe54e4635460_87631579', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_203081498062fe54e462f892_42730213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_203081498062fe54e462f892_42730213',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_188519875962fe54e4631685_81550686',
  ),
  'page_content' => 
  array (
    0 => 'Block_137724693862fe54e4633c39_48261800',
  ),
  'hook_home' => 
  array (
    0 => 'Block_191073182662fe54e4635460_87631579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188519875962fe54e4631685_81550686', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137724693862fe54e4633c39_48261800', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
