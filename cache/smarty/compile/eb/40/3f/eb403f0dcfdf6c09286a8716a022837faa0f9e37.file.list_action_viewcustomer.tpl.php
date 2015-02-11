<?php /* Smarty version Smarty-3.1.19, created on 2015-02-06 22:16:36
         compiled from "C:\wamp\www\prestashop\modules\blocknewsletter\views\templates\admin\list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205654d4efec518248-34820811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb403f0dcfdf6c09286a8716a022837faa0f9e37' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blocknewsletter\\views\\templates\\admin\\list_action_viewcustomer.tpl',
      1 => 1420605414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205654d4efec518248-34820811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d4efec7527c4_30478707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4efec7527c4_30478707')) {function content_54d4efec7527c4_30478707($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
