<?php
/* Smarty version 4.1.0, created on 2022-03-28 19:17:13
  from 'D:\programowanie\Nowy folder\htdocs\Smarty-obiekt\app\Calc\view_calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241ed9912ec83_68576662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31247c6e3f9bb46377b0408b78b926d7d083ba39' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Smarty-obiekt\\app\\Calc\\view_calc.html',
      1 => 1648487819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241ed9912ec83_68576662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3708966241ed9911c5d6_12206093', 'tytul');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17640878026241ed9911d705_57333572', 'under');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14356441246241ed9911dca1_99067303', 'whitey');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18639609586241ed9911e1d6_21529134', 'form');
?>


	
	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17227914106241ed991208a0_84953783', 'k1');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19008233796241ed99121336_38670209', 'k2');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_219393166241ed99121930_77479561', 'k3');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18643800326241ed99122390_17158278', 'k4');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6095695526241ed9912e5a3_86982068', 'Cform');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'tytul'} */
class Block_3708966241ed9911c5d6_12206093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tytul' => 
  array (
    0 => 'Block_3708966241ed9911c5d6_12206093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'tytul'} */
/* {block 'under'} */
class Block_17640878026241ed9911d705_57333572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'under' => 
  array (
    0 => 'Block_17640878026241ed9911d705_57333572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'under'} */
/* {block 'whitey'} */
class Block_14356441246241ed9911dca1_99067303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_14356441246241ed9911dca1_99067303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 coś <?php
}
}
/* {/block 'whitey'} */
/* {block 'form'} */
class Block_18639609586241ed9911e1d6_21529134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_18639609586241ed9911e1d6_21529134',
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
class Block_17227914106241ed991208a0_84953783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k1' => 
  array (
    0 => 'Block_17227914106241ed991208a0_84953783',
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
class Block_19008233796241ed99121336_38670209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k2' => 
  array (
    0 => 'Block_19008233796241ed99121336_38670209',
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
class Block_219393166241ed99121930_77479561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k3' => 
  array (
    0 => 'Block_219393166241ed99121930_77479561',
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
class Block_18643800326241ed99122390_17158278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k4' => 
  array (
    0 => 'Block_18643800326241ed99122390_17158278',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
    <?php }
}
}
/* {/block 'k4'} */
/* {block 'Cform'} */
class Block_6095695526241ed9912e5a3_86982068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Cform' => 
  array (
    0 => 'Block_6095695526241ed9912e5a3_86982068',
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
