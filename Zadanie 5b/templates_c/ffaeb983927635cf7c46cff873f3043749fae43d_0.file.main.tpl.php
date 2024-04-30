<?php
/* Smarty version 4.5.1, created on 2024-04-23 02:23:53
  from 'C:\Tools\htdocs\kalkulator\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6626ff999299a3_10120537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffaeb983927635cf7c46cff873f3043749fae43d' => 
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
function content_6626ff999299a3_10120537 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6886340306626ff99927808_30927215', 'header');
?>


				</div>


				<div class ="main">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16395470346626ff999285f6_71960173', 'banner');
?>

			
			
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8113617376626ff99928c56_53744883', 'kalkulator');
?>



		</div>

		<div class = "down">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14787376846626ff99929218_86030888', 'footer');
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
class Block_6886340306626ff99927808_30927215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6886340306626ff99927808_30927215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_16395470346626ff999285f6_71960173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_16395470346626ff999285f6_71960173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'banner'} */
/* {block 'kalkulator'} */
class Block_8113617376626ff99928c56_53744883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kalkulator' => 
  array (
    0 => 'Block_8113617376626ff99928c56_53744883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
}
}
/* {/block 'kalkulator'} */
/* {block 'footer'} */
class Block_14787376846626ff99929218_86030888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_14787376846626ff99929218_86030888',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php
}
}
/* {/block 'footer'} */
}
