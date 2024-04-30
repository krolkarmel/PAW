<?php
/* Smarty version 4.5.1, created on 2024-04-09 12:07:32
  from 'C:\Tools\htdocs\Zadanie 3\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6615136417f4b7_04061318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac73a3b84553aed7db2a74c3d22c7606018f9d81' => 
    array (
      0 => 'C:\\Tools\\htdocs\\Zadanie 3\\templates\\main.tpl',
      1 => 1711482728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6615136417f4b7_04061318 (Smarty_Internal_Template $_smarty_tpl) {
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
    	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css">
	</head>
	<body>
		<div id="page-wrapper">

				<div class ="up">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18259729066151364165c00_77808091', 'header');
?>


				</div>


				<div class ="main">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53340975666151364169e51_91643957', 'banner');
?>

			
			
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10783190876615136416de62_96089839', 'kalkulator');
?>



		</div>

		<div class = "down">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144769944266151364171ec0_46206841', 'footer');
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
class Block_18259729066151364165c00_77808091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_18259729066151364165c00_77808091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_53340975666151364169e51_91643957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_53340975666151364169e51_91643957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'banner'} */
/* {block 'kalkulator'} */
class Block_10783190876615136416de62_96089839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kalkulator' => 
  array (
    0 => 'Block_10783190876615136416de62_96089839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'kalkulator'} */
/* {block 'footer'} */
class Block_144769944266151364171ec0_46206841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_144769944266151364171ec0_46206841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php
}
}
/* {/block 'footer'} */
}
