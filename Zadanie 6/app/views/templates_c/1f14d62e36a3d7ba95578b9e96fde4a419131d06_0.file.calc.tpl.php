<?php
/* Smarty version 4.5.1, created on 2024-03-26 00:14:49
  from 'C:\Tools\htdocs\Zadanie 3\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660205692aed25_70233090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f14d62e36a3d7ba95578b9e96fde4a419131d06' => 
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
function content_660205692aed25_70233090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4515179316602056929e354_24441653', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19465853806602056929ec30_64626345', 'banner');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14407249596602056929f2c6_33686263', 'kalkulator');
?>

<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116602225660205692ae210_46054223', 'kontakt');
?>
 -->

            
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1864328040660205692ae828_76010246', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'header'} */
class Block_4515179316602056929e354_24441653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_4515179316602056929e354_24441653',
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
class Block_19465853806602056929ec30_64626345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_19465853806602056929ec30_64626345',
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
class Block_14407249596602056929f2c6_33686263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kalkulator' => 
  array (
    0 => 'Block_14407249596602056929f2c6_33686263',
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
class Block_116602225660205692ae210_46054223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_116602225660205692ae210_46054223',
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
class Block_1864328040660205692ae828_76010246 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1864328040660205692ae828_76010246',
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
