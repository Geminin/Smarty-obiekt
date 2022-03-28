<?php
/* Smarty version 4.1.0, created on 2022-03-28 19:17:17
  from 'D:\programowanie\Nowy folder\htdocs\Smarty-obiekt\app\Calc\view_calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241ed9da7a1e0_89813571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bca2d7508a090fb067e522d2c7dee022bf3db08e' => 
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
function content_6241ed9da7a1e0_89813571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7441207156241ed9da67898_61960092', 'tytul');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14061619146241ed9da681e2_45008993', 'under');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12449578386241ed9da688c0_29619315', 'whitey');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2056427726241ed9da68f07_74777827', 'form');
?>


	
	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13542365076241ed9da6bb00_49563375', 'k1');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5824293016241ed9da6c599_24454725', 'k2');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_563044666241ed9da6cb10_61731839', 'k3');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4956074096241ed9da6d692_61059779', 'k4');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12809443316241ed9da79af0_96303419', 'Cform');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'tytul'} */
class Block_7441207156241ed9da67898_61960092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tytul' => 
  array (
    0 => 'Block_7441207156241ed9da67898_61960092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'tytul'} */
/* {block 'under'} */
class Block_14061619146241ed9da681e2_45008993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'under' => 
  array (
    0 => 'Block_14061619146241ed9da681e2_45008993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'under'} */
/* {block 'whitey'} */
class Block_12449578386241ed9da688c0_29619315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_12449578386241ed9da688c0_29619315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 coś <?php
}
}
/* {/block 'whitey'} */
/* {block 'form'} */
class Block_2056427726241ed9da68f07_74777827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_2056427726241ed9da68f07_74777827',
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
class Block_13542365076241ed9da6bb00_49563375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k1' => 
  array (
    0 => 'Block_13542365076241ed9da6bb00_49563375',
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
class Block_5824293016241ed9da6c599_24454725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k2' => 
  array (
    0 => 'Block_5824293016241ed9da6c599_24454725',
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
class Block_563044666241ed9da6cb10_61731839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k3' => 
  array (
    0 => 'Block_563044666241ed9da6cb10_61731839',
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
class Block_4956074096241ed9da6d692_61059779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k4' => 
  array (
    0 => 'Block_4956074096241ed9da6d692_61059779',
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
class Block_12809443316241ed9da79af0_96303419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Cform' => 
  array (
    0 => 'Block_12809443316241ed9da79af0_96303419',
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
