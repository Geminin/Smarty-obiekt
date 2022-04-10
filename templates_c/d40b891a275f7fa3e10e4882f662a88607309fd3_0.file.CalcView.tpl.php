<?php
/* Smarty version 4.1.0, created on 2022-04-10 11:58:46
  from 'D:\programowanie\Nowy folder\htdocs\Smarty-obiekt\app\Views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6252aa5697adc5_89239397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd40b891a275f7fa3e10e4882f662a88607309fd3' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Smarty-obiekt\\app\\Views\\CalcView.tpl',
      1 => 1649584723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6252aa5697adc5_89239397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7688909606252aa56971662_02257893', 'logt');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13406393836252aa56974b82_79402980', 'tytul');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9596494146252aa569750f5_02533241', 'under');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18991632816252aa569755f2_46537121', 'whitey');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20596003076252aa56975af3_99234839', 'form');
?>


	
	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5653414876252aa56976490_86377749', 'k1');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16289906696252aa56976e10_96118027', 'k2');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2018986396252aa56977314_60531306', 'k3');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15710012956252aa56977c86_47378313', 'k4');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5006151156252aa5697a8d4_24369712', 'Cform');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'logt'} */
class Block_7688909606252aa56971662_02257893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'logt' => 
  array (
    0 => 'Block_7688909606252aa56971662_02257893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <li> <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="btn">wyloguj</a> </li><?php
}
}
/* {/block 'logt'} */
/* {block 'tytul'} */
class Block_13406393836252aa56974b82_79402980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tytul' => 
  array (
    0 => 'Block_13406393836252aa56974b82_79402980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'tytul'} */
/* {block 'under'} */
class Block_9596494146252aa569750f5_02533241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'under' => 
  array (
    0 => 'Block_9596494146252aa569750f5_02533241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'under'} */
/* {block 'whitey'} */
class Block_18991632816252aa569755f2_46537121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_18991632816252aa569755f2_46537121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
Kiedyś zrobie inny kalkulator <br>
Także spokojnie<br>
Kolejny walutowy będzie jak będą SQL dodawany
<?php
}
}
/* {/block 'whitey'} */
/* {block 'form'} */
class Block_20596003076252aa56975af3_99234839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_20596003076252aa56975af3_99234839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" class="pure-form pure-form-stacked" method="post"> <?php
}
}
/* {/block 'form'} */
/* {block 'k1'} */
class Block_5653414876252aa56976490_86377749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k1' => 
  array (
    0 => 'Block_5653414876252aa56976490_86377749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    Liczba 1:<br>
    <input id="id_x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" />    
<?php
}
}
/* {/block 'k1'} */
/* {block 'k2'} */
class Block_16289906696252aa56976e10_96118027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k2' => 
  array (
    0 => 'Block_16289906696252aa56976e10_96118027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Operacja:<br>
    	<select name="op">
    		<option value="plus">+</option>
    		<option value="minus">-</option>
    		<option value="times">*</option>
    		<option value="div">/</option>
        	<option value="pow">^</option>
    	</select>    
<?php
}
}
/* {/block 'k2'} */
/* {block 'k3'} */
class Block_2018986396252aa56977314_60531306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k3' => 
  array (
    0 => 'Block_2018986396252aa56977314_60531306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Liczba 2:<br>
    <input id="id_x" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" />
<?php
}
}
/* {/block 'k3'} */
/* {block 'k4'} */
class Block_15710012956252aa56977c86_47378313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k4' => 
  array (
    0 => 'Block_15710012956252aa56977c86_47378313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

<?php
}
}
/* {/block 'k4'} */
/* {block 'Cform'} */
class Block_5006151156252aa5697a8d4_24369712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Cform' => 
  array (
    0 => 'Block_5006151156252aa5697a8d4_24369712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<button type="submit" class="pure-button">Oblicz</button>

</form> 
<?php
}
}
/* {/block 'Cform'} */
}
