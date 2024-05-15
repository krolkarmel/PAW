<?php
/* Smarty version 4.5.1, created on 2024-05-15 16:11:43
  from 'C:\Tools\htdocs\Zadanie 6\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6644c29fc26ee2_99701954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3beb6d287ab52b613b9eb1223bde0417d587bf6' => 
    array (
      0 => 'C:\\Tools\\htdocs\\Zadanie 6\\app\\views\\calc_view.tpl',
      1 => 1715782300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6644c29fc26ee2_99701954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18606890816644c29fc0e892_76898060', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7395934776644c29fc13589_54146392', 'banner');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7857818016644c29fc13f71_68023268', 'kalkulator');
?>

<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_942715526644c29fc26130_73945645', 'kontakt');
?>
 -->

            
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6567761636644c29fc268d1_37466534', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'header'} */
class Block_18606890816644c29fc0e892_76898060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_18606890816644c29fc0e892_76898060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="header">
        <h1><a href="index.html">Kalkulator Rat Kredytu</a> by Tomasz Król</h1>
					<nav id="nav">
						<ul>
							<li><a href="\kalkulator\">Home</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" >Zaloguj</a></li>
						</ul>
                        
					</nav>
</header>
<?php
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_7395934776644c29fc13589_54146392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_7395934776644c29fc13589_54146392',
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
class Block_7857818016644c29fc13f71_68023268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kalkulator' => 
  array (
    0 => 'Block_7857818016644c29fc13f71_68023268',
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
class Block_942715526644c29fc26130_73945645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_942715526644c29fc26130_73945645',
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
class Block_6567761636644c29fc268d1_37466534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6567761636644c29fc268d1_37466534',
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
