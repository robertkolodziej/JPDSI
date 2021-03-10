<?php
/* Smarty version 3.1.39, created on 2021-03-10 20:42:45
  from 'Z:\Xampp\htdocs\kalkulator\app\kredyt_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604921356fb930_62680337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '208ed1489da98846e32c112e517a02758aad6543' => 
    array (
      0 => 'Z:\\Xampp\\htdocs\\kalkulator\\app\\kredyt_view.tpl',
      1 => 1615405363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604921356fb930_62680337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_258601695604921356ea010_93751224', 'stopka');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_377496939604921356eabd5_66897860', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'stopka'} */
class Block_258601695604921356ea010_93751224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stopka' => 
  array (
    0 => 'Block_258601695604921356ea010_93751224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Kalkulator kredytowy stworzony przez Roberta Kołodziej w ramach laboratorium JPDSI<?php
}
}
/* {/block 'stopka'} */
/* {block "content"} */
class Block_377496939604921356eabd5_66897860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_377496939604921356eabd5_66897860',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
    	

            <form <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/kredyt.php" method="post" >
    <fieldset>
        <label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="amount" value="" /><br />
	<label for="id_y">Liczba miesięcy: </label>
	<input id="id_y" type="text" name="months" value="" /><br />
	<label for="id_z">Oprocentowanie: </label>
	<input id="id_z" type="text" name="interest" value="" /><br />
    </fieldset>
    <input type="submit" value="Oblicz"  />
</form>
        </div>
<!--
<?php echo '<?php

';?>
if (isset($msg)) {
	if (count ( $msg ) > 0) {
		echo '<ol style="margin: 0; position: absolute;top: 80%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%); border-style:ridge; border-radius: 15px;width: 300px; background-color: red; width:300px;text-align: center;color:white;">';
		foreach ( $msg as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
<?php echo '?>';?>
-->

<?php if ((isset($_smarty_tpl->tpl_vars['msg']->value))) {
if (count($_smarty_tpl->tpl_vars['msg']->value) > 0) {?>
<h4>Wystąpiły następujące błedy:</h4>
<ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>
<?php }
}?>

<!--<?php echo '<?php ';?>
if (isset($result)){ <?php echo '?>';?>

<div style="margin: 0; position: absolute;top: 80%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%); border-style:ridge; border-radius: 15px;width: 300px; ;text-align: center; background-color:rgb(240,240,240);  ">
<?php echo '<?php ';?>
echo 'Rata będzie wynosić: '.round($result, 2); <?php echo '?>';?>

</div>
<?php echo '<?php ';?>
} <?php echo '?>';?>
-->
<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Twoja rata będzie wynosić:</h4>
	<p>
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }
}
}
/* {/block "content"} */
}
