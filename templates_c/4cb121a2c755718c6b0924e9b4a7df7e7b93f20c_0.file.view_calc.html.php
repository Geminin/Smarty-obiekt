<?php
/* Smarty version 4.1.0, created on 2022-03-26 11:46:28
  from 'D:\programowanie\Nowy folder\htdocs\Smarty-obiekt\Calc\view_calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623eef046724e0_70446811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cb121a2c755718c6b0924e9b4a7df7e7b93f20c' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Smarty-obiekt\\Calc\\view_calc.html',
      1 => 1648243694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623eef046724e0_70446811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1032244804623eef04662a22_50755763', 'tytul');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1742812776623eef046635c4_54701065', 'under');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1967921190623eef04663b09_06191162', 'whitey');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105126728623eef04663fc4_39877784', 'form');
?>

-----------------------------
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1111746522623eef046660e4_77718143', 'k1');
?>

-----------------------------

-----------------------------
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1836248626623eef04666a60_20115550', 'k2');
?>

-----------------------------

-----------------------------
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1942181926623eef04666f45_25140854', 'k3');
?>

-----------------------------

-----------------------------
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1678349648623eef04667840_35197859', 'k4');
?>

-----------------------------

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1428605104623eef04671f52_29781314', 'Cform');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'tytul'} */
class Block_1032244804623eef04662a22_50755763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tytul' => 
  array (
    0 => 'Block_1032244804623eef04662a22_50755763',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'tytul'} */
/* {block 'under'} */
class Block_1742812776623eef046635c4_54701065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'under' => 
  array (
    0 => 'Block_1742812776623eef046635c4_54701065',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'under'} */
/* {block 'whitey'} */
class Block_1967921190623eef04663b09_06191162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_1967921190623eef04663b09_06191162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 coś <?php
}
}
/* {/block 'whitey'} */
/* {block 'form'} */
class Block_105126728623eef04663fc4_39877784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_105126728623eef04663fc4_39877784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post"> <?php
}
}
/* {/block 'form'} */
/* {block 'k1'} */
class Block_1111746522623eef046660e4_77718143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k1' => 
  array (
    0 => 'Block_1111746522623eef046660e4_77718143',
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
class Block_1836248626623eef04666a60_20115550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k2' => 
  array (
    0 => 'Block_1836248626623eef04666a60_20115550',
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
class Block_1942181926623eef04666f45_25140854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k3' => 
  array (
    0 => 'Block_1942181926623eef04666f45_25140854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Liczba 2:<br>
    <input id="id_x" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" />
<?php
}
}
/* {/block 'k3'} */
/* {block 'k4'} */
class Block_1678349648623eef04667840_35197859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k4' => 
  array (
    0 => 'Block_1678349648623eef04667840_35197859',
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
class Block_1428605104623eef04671f52_29781314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Cform' => 
  array (
    0 => 'Block_1428605104623eef04671f52_29781314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 </form> <?php
}
}
/* {/block 'Cform'} */
}
