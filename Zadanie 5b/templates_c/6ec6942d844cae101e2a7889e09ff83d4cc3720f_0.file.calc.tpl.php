<?php
/* Smarty version 4.5.1, created on 2024-03-26 00:14:40
  from 'C:\Tools\htdocs\Zadanie 3\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660205607f6175_14728682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ec6942d844cae101e2a7889e09ff83d4cc3720f' => 
    array (
      0 => 'C:\\Tools\\htdocs\\Zadanie 3\\app\\calc.tpl',
      1 => 1711408476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660205607f6175_14728682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_515347875660205607e13c5_96195168', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76149145660205607e1d09_21515078', 'banner');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_723675124660205607e2347_99296193', 'kalkulator');
?>

<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1143988244660205607f5620_57515039', 'kontakt');
?>
 -->

            
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1214338177660205607f5c55_04727624', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'header'} */
class Block_515347875660205607e13c5_96195168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_515347875660205607e13c5_96195168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="header">
        <h1><a href="index.html">Kalkulator Rat Kredytu</a> by Tomasz Król</h1>
					<nav id="nav">
						<ul>
							<li><a href="\Zadanie 3\">Home</a></li>
						</ul>
					</nav>
</header>
<?php
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_76149145660205607e1d09_21515078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_76149145660205607e1d09_21515078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="banner">
        <h2>KALKULATOR</h2>
					<p>Oblicz ratę dla Twojego kredytu.</p>
					<ul class="actions special">
						<li><a href="\Zadanie 3\" class="button primary">Oblicz ratę kredytu</a></li>
					</ul>
</header>
<?php
}
}
/* {/block 'banner'} */
/* {block 'kalkulator'} */
class Block_723675124660205607e2347_99296193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kalkulator' => 
  array (
    0 => 'Block_723675124660205607e2347_99296193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Tools\\htdocs\\Zadanie3\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div class="kalkulator">
    <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post" class="pure-form pure-form-stacked">
        <div class="row gtr-uniform">
            <fieldset>

            <div class="col-6 col-12-xsmall">
               <h3> <label for="id_cost">Kwota kredytu: </label></h3>
                <input id="id_cost" type="text" placeholder="Np. '400000'" name="cost" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['cost'];?>
"><br>
            </div>


            <div class="col-6 col-12-xsmall">
                <h3><label for="id_years">Liczba lat: </label></h3>
                <input id="id_years" type="text" placeholder="Np.'8'" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
"><br>
            </div>


            <div class="col-6 col-12-xsmall">
                <h3><label for="id_percent">Oprocentowanie: </label></h3>
                <input id="id_percent" type="text" placeholder="Np. '6.76'" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['percent'];?>
"><br>
            </div>

            </fieldset>
            <div class="col-12">
                <ul class="actions">
                        <li><input type="submit" value="Oblicz" class="primary" /></li>
                        <li><input type="reset" value="Zresetuj" /></li>
                </ul>
            </div>
        </div>
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
class Block_1143988244660205607f5620_57515039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_1143988244660205607f5620_57515039',
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
class Block_1214338177660205607f5c55_04727624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1214338177660205607f5c55_04727624',
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
