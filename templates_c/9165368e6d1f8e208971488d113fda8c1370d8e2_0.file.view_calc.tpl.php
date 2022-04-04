<?php
/* Smarty version 4.1.0, created on 2022-04-04 18:38:52
  from 'D:\programowanie\Nowy folder\htdocs\Smarty-obiekt\app\Views\view_calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b1f1c865173_21593973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9165368e6d1f8e208971488d113fda8c1370d8e2' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Smarty-obiekt\\app\\Views\\view_calc.tpl',
      1 => 1649090331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b1f1c865173_21593973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_886593612624b1f1c855a09_22922615', 'tytul');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_461620551624b1f1c856147_37011244', 'under');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_220680674624b1f1c8566d3_79683080', 'whitey');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_804433425624b1f1c856bc8_71190555', 'form');
?>


	
	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_853948651624b1f1c85a068_82354116', 'k1');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276343719624b1f1c85aa21_40242835', 'k2');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1768548914624b1f1c85af09_89198173', 'k3');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1960060637624b1f1c85b823_48010156', 'k4');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1194484631624b1f1c864ce4_07932549', 'Cform');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'tytul'} */
class Block_886593612624b1f1c855a09_22922615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tytul' => 
  array (
    0 => 'Block_886593612624b1f1c855a09_22922615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'tytul'} */
/* {block 'under'} */
class Block_461620551624b1f1c856147_37011244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'under' => 
  array (
    0 => 'Block_461620551624b1f1c856147_37011244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'under'} */
/* {block 'whitey'} */
class Block_220680674624b1f1c8566d3_79683080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_220680674624b1f1c8566d3_79683080',
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
class Block_804433425624b1f1c856bc8_71190555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_804433425624b1f1c856bc8_71190555',
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
class Block_853948651624b1f1c85a068_82354116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k1' => 
  array (
    0 => 'Block_853948651624b1f1c85a068_82354116',
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
class Block_276343719624b1f1c85aa21_40242835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k2' => 
  array (
    0 => 'Block_276343719624b1f1c85aa21_40242835',
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
class Block_1768548914624b1f1c85af09_89198173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k3' => 
  array (
    0 => 'Block_1768548914624b1f1c85af09_89198173',
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
class Block_1960060637624b1f1c85b823_48010156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k4' => 
  array (
    0 => 'Block_1960060637624b1f1c85b823_48010156',
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
class Block_1194484631624b1f1c864ce4_07932549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Cform' => 
  array (
    0 => 'Block_1194484631624b1f1c864ce4_07932549',
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
