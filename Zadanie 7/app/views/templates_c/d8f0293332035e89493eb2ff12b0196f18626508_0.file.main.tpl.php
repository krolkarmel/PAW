<?php
/* Smarty version 4.5.1, created on 2024-04-23 02:23:58
  from 'C:\Tools\htdocs\kalkulator\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6626ff9ea10776_37736872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8f0293332035e89493eb2ff12b0196f18626508' => 
    array (
      0 => 'C:\\Tools\\htdocs\\kalkulator\\templates\\main.tpl',
      1 => 1713831826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6626ff9ea10776_37736872 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16312946086626ff9ea0ec18_12289809', 'header');
?>


				</div>


				<div class ="main">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5326171966626ff9ea0f527_01779060', 'banner');
?>

			
			
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3815543326626ff9ea0fb55_83844142', 'kalkulator');
?>



		</div>

		<div class = "down">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20906438176626ff9ea100f0_31094927', 'footer');
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
class Block_16312946086626ff9ea0ec18_12289809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16312946086626ff9ea0ec18_12289809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_5326171966626ff9ea0f527_01779060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_5326171966626ff9ea0f527_01779060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'banner'} */
/* {block 'kalkulator'} */
class Block_3815543326626ff9ea0fb55_83844142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kalkulator' => 
  array (
    0 => 'Block_3815543326626ff9ea0fb55_83844142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'kalkulator'} */
/* {block 'footer'} */
class Block_20906438176626ff9ea100f0_31094927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20906438176626ff9ea100f0_31094927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php
}
}
/* {/block 'footer'} */
}
