<?php
/* Smarty version 4.5.1, created on 2024-04-09 12:07:31
  from 'C:\Tools\htdocs\Zadanie 3\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66151363702175_97133263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb1f383319726a998ed823f28f80f81ef2963ae6' => 
    array (
      0 => 'C:\\Tools\\htdocs\\Zadanie 3\\app\\calc_view.tpl',
      1 => 1711486376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66151363702175_97133263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58285630966151363655214_92402664', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11292262526615136365e9d7_87611776', 'banner');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1432128601661513636667e0_63756740', 'kalkulator');
?>

<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1425632610661513636fe5b5_31772853', 'kontakt');
?>
 -->

            
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2117212181661513637001d1_71476287', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'header'} */
class Block_58285630966151363655214_92402664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_58285630966151363655214_92402664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="header">
        <h1><a href="index.html">Kalkulator Rat Kredytu</a> by Tomasz Król</h1>
					<nav id="nav">
						<ul>
							<li><a href="\kalkulator\">Home</a></li>
						</ul>
					</nav>
</header>
<?php
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_11292262526615136365e9d7_87611776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_11292262526615136365e9d7_87611776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="banner">
        <h2>KALKULATOR</h2>
					<p>Oblicz ratę dla Twojego kredytu.</p>
					</header>
<?php
}
}
/* {/block 'banner'} */
/* {block 'kalkulator'} */
class Block_1432128601661513636667e0_63756740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kalkulator' => 
  array (
    0 => 'Block_1432128601661513636667e0_63756740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Tools\\htdocs\\Zadanie3\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div class="kalkulator">
<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post" class="pure-form pure-form-stacked">
<legend>Kalkulator rat kredytu</legend>
	<label for="id_kwotaKredytu">Kwota kredytu: </label>
	<input id="id_kwotaKredytu" type="text" name="kwotaKredytu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwotaKredytu'];?>
" />
	<label for="id_wiek">Wiek: </label>
	<input id="id_wiek" type="text" name="wiek" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['wiek'];?>
" />
	<label for="id_oprocent">Oprocentowanie: </label>
	<input id="id_oprocent" type="text" name="oprocent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprocent'];?>
" />
	<br>
	<button type="submit" class="pure-button">Oblicz</button>
</form>	
    </div>

        <div class="messages">

        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
                <h4>Wystąpiły błędy: </h4>
                <ol class="err">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
                <h4>Informacje: </h4>
                <ol class="inf">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        <?php }?>
        
        <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?> 
            <h4>Wynik</h4>
            <p class="res">
            <u>
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

            </u>
            </p>
        <?php }?>
        
        </div>
</body>
<?php
}
}
/* {/block 'kalkulator'} */
/* {block 'kontakt'} */
class Block_1425632610661513636fe5b5_31772853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_1425632610661513636fe5b5_31772853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p><a href="#">Wyślij mail</p>
<p>Zadźwoń: 492912313</p>
			<?php
}
}
/* {/block 'kontakt'} */
/* {block 'footer'} */
class Block_2117212181661513637001d1_71476287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2117212181661513637001d1_71476287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                
                <footer id="footer">
                    <p class="copyright">&copy; Krolkarmel. All rights reserved.</p>
                    <p><a href="https://html5up.net/">Design: HTML5 UP</p>
                </footer> 
            
                <?php
}
}
/* {/block 'footer'} */
}
