<?php
/* Smarty version 3.1.39, created on 2021-04-23 20:42:41
  from 'Z:\Xampp\htdocs\kalkulator\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608315214a4c49_15962423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebd23689948ae1d80b8bd60a7e04a21f95e6512a' => 
    array (
      0 => 'Z:\\Xampp\\htdocs\\kalkulator\\app\\views\\templates\\main.tpl',
      1 => 1619191209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608315214a4c49_15962423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Kalkulator kredytowy</h1>
								<p>Przy użyciu tego kalkulatora będziesz mógł obliczyć orientacyjną ratę miesięczną</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#kredyt">Oblicz swoją ratę!</a></li>	
                                                               
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

	
							<article id="kredyt">
								<h2 class="major">Oblicz swoja rate!</h2>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1926105743608315214a14f9_04350874', 'content');
?>


							</article>


                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_623125522608315214a1d56_70516114', 'bottom');
?>

					</div>


                        <!-- Footer -->
                            
					<footer id="footer">
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_609486134608315214a2495_27914375', 'stopka');
?>

						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>
			</div>
				
<!-- BG -->
			<div id="bg"></div>
		

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
/* {block 'content'} */
class Block_1926105743608315214a14f9_04350874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1926105743608315214a14f9_04350874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Tu powinien być kalkulator ... <?php
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_623125522608315214a1d56_70516114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_623125522608315214a1d56_70516114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 tu powinna być baza danych...<?php
}
}
/* {/block 'bottom'} */
/* {block 'stopka'} */
class Block_609486134608315214a2495_27914375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stopka' => 
  array (
    0 => 'Block_609486134608315214a2495_27914375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Tu powinna być stopka <?php
}
}
/* {/block 'stopka'} */
}
