<?php
/* Smarty version 4.5.1, created on 2024-04-23 02:41:01
  from 'C:\Tools\htdocs\Zadanie 4\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6627039d56d2e9_63132216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d1a319a0eb3375a517350cd6054ce871df9d1e5' => 
    array (
      0 => 'C:\\Tools\\htdocs\\Zadanie 4\\templates\\main.tpl',
      1 => 1713831826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6627039d56d2e9_63132216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
    	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
    	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">
	</head>
	<body>
		<div id="page-wrapper">

				<div class ="up">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11684684726627039d56bad0_02537058', 'header');
?>


				</div>


				<div class ="main">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7670847766627039d56c185_64082788', 'banner');
?>

			
			
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16489947026627039d56c742_55073619', 'kalkulator');
?>



		</div>

		<div class = "down">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18008626866627039d56ccd6_24271186', 'footer');
?>


				</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'header'} */
class Block_11684684726627039d56bad0_02537058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_11684684726627039d56bad0_02537058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_7670847766627039d56c185_64082788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_7670847766627039d56c185_64082788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'banner'} */
/* {block 'kalkulator'} */
class Block_16489947026627039d56c742_55073619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kalkulator' => 
  array (
    0 => 'Block_16489947026627039d56c742_55073619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'kalkulator'} */
/* {block 'footer'} */
class Block_18008626866627039d56ccd6_24271186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18008626866627039d56ccd6_24271186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php
}
}
/* {/block 'footer'} */
}
