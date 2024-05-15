<?php
/* Smarty version 4.5.1, created on 2024-05-15 16:57:21
  from 'C:\Tools\htdocs\Zadanie 6\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6644cd514b7399_20872414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '172b33ba5c51c4c8ce66e44bea707a3bcf7c3a0a' => 
    array (
      0 => 'C:\\Tools\\htdocs\\Zadanie 6\\app\\views\\LoginView.tpl',
      1 => 1715785038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6644cd514b7399_20872414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20760612056644cd514b3390_46236885', 'content');
?>

            <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'content'} */
class Block_20760612056644cd514b3390_46236885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20760612056644cd514b3390_46236885',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
        <legend>Logowanie do systemu</legend>
        <fieldset>
        <div class="pure-control-group">
                <label for="id_login">login:</label>
                <input id="id_login" type="text" name="login" />
        </div>
        <div class="pure-control-group">
                <label for="id_pass">password:</label>
                <input id="id_pass" type="text" name="pass"/>
        </div>
        <div class="pure-controls">
		<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
	</div>
        </fieldset>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
