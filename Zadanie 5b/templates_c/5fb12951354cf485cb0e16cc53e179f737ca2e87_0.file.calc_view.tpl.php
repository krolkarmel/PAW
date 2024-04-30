<?php
/* Smarty version 4.5.1, created on 2024-04-24 14:23:10
  from 'C:\Tools\htdocs\Zadanie 5b\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6628f9ae757332_96021599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fb12951354cf485cb0e16cc53e179f737ca2e87' => 
    array (
      0 => 'C:\\Tools\\htdocs\\Zadanie 5b\\app\\views\\calc_view.tpl',
      1 => 1713961388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6628f9ae757332_96021599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12745351556628f9ae746193_22517892', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3064651256628f9ae746eb6_11971599', 'banner');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4554800336628f9ae747736_26030189', 'kalkulator');
?>

<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16030332416628f9ae756722_89195385', 'kontakt');
?>
 -->

            
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15799768926628f9ae756df6_26499953', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'header'} */
class Block_12745351556628f9ae746193_22517892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12745351556628f9ae746193_22517892',
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
class Block_3064651256628f9ae746eb6_11971599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_3064651256628f9ae746eb6_11971599',
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
class Block_4554800336628f9ae747736_26030189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kalkulator' => 
  array (
    0 => 'Block_4554800336628f9ae747736_26030189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="kalkulator">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
creditCalc" method="post" class="pure-form pure-form-stacked">
<div class="row gtr-uniform">
    <fieldset>

    <div class="col-6 col-12-xsmall">
        <label for="id_wiek">Liczba lat: </label>
        <input id="id_wiek" type="text" placeholder="Np.'8'" name="wiek" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->wiek;?>
"><br>
    </div>

    <div class="col-6 col-12-xsmall">
        <label for="id_kwotaKredytu">Kwota kredytu: </label>
        <input id="id_kwotaKredytu" type="text" placeholder="Np. '400000'" name="kwotaKredytu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwotaKredytu;?>
"><br>
    </div>

    <div class="col-6 col-12-xsmall">
        <label for="id_oprocent">Oprocentowanie: </label>
        <input id="id_oprocent" type="text" placeholder="Np. '6.76'" name="oprocent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocent;?>
"><br>
    </div>

    </fieldset>
    <div class="col-12">
        <ul class="actions">
                <li><input type="submit" value="Oblicz" class="primary" /></li>
        </ul>
    </div>
</div>
</form>
    </div>

        <div class="messages">

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>
      

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
                <h4>Informacje: </h4>
                <ol class="inf">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
        <?php }?>
        
        <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
            <h4>Wynik</h4>
            <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

            </p>
        <?php }?>
        
        </div>
</body>
<?php
}
}
/* {/block 'kalkulator'} */
/* {block 'kontakt'} */
class Block_16030332416628f9ae756722_89195385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_16030332416628f9ae756722_89195385',
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
class Block_15799768926628f9ae756df6_26499953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15799768926628f9ae756df6_26499953',
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
