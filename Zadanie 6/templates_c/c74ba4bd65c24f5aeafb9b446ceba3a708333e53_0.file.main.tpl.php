<?php
/* Smarty version 4.5.1, created on 2024-05-15 16:55:52
  from 'C:\Tools\htdocs\Zadanie 6\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6644ccf8d3b632_08921464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c74ba4bd65c24f5aeafb9b446ceba3a708333e53' => 
    array (
      0 => 'C:\\Tools\\htdocs\\Zadanie 6\\app\\views\\templates\\main.tpl',
      1 => 1715784950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6644ccf8d3b632_08921464 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19329159936644ccf8d38de5_43775939', 'header');
?>


				</div>


				<div class ="main">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14836474556644ccf8d39ef0_23270425', 'banner');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12844360956644ccf8d3a534_80520245', 'content');
?>

			
			
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6322796076644ccf8d3aaa9_95653877', 'kalkulator');
?>



		</div>

		<div class = "down">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10232456396644ccf8d3afe9_30406576', 'footer');
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
class Block_19329159936644ccf8d38de5_43775939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_19329159936644ccf8d38de5_43775939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_14836474556644ccf8d39ef0_23270425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_14836474556644ccf8d39ef0_23270425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_12844360956644ccf8d3a534_80520245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12844360956644ccf8d3a534_80520245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php
}
}
/* {/block 'content'} */
/* {block 'kalkulator'} */
class Block_6322796076644ccf8d3aaa9_95653877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kalkulator' => 
  array (
    0 => 'Block_6322796076644ccf8d3aaa9_95653877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'kalkulator'} */
/* {block 'footer'} */
class Block_10232456396644ccf8d3afe9_30406576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10232456396644ccf8d3afe9_30406576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php
}
}
/* {/block 'footer'} */
}
