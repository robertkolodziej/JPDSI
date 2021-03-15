<?php
/* Smarty version 3.1.39, created on 2021-03-15 19:59:43
  from 'Z:\Xampp\htdocs\kalkulator\app\kredyt_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604fae9f38ba75_94965729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cb75b6fabf97488406ee57da28d71e8a16dbc2f' => 
    array (
      0 => 'Z:\\Xampp\\htdocs\\kalkulator\\app\\kredyt_view.tpl',
      1 => 1615834779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604fae9f38ba75_94965729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_826909753604fae9f37e2c6_07359438', 'stopka');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_937738632604fae9f37eef0_78189099', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'stopka'} */
class Block_826909753604fae9f37e2c6_07359438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stopka' => 
  array (
    0 => 'Block_826909753604fae9f37e2c6_07359438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p class="copyright"> Kalkulator kredytowy stworzony przez Roberta Kołodziej w ramach laboratorium JPDSI</p><?php
}
}
/* {/block 'stopka'} */
/* {block "content"} */
class Block_937738632604fae9f37eef0_78189099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_937738632604fae9f37eef0_78189099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
    	

            <form <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
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


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>

<h4>Wystąpiły następujące błedy:</h4>
<ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'm');
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

<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
	<h4>Twoja rata będzie wynosić:</h4>
	<p>
	<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

	</p>
<?php }
}
}
/* {/block "content"} */
}
