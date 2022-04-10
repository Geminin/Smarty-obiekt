<?php
/* Smarty version 4.1.0, created on 2022-04-10 11:43:57
  from 'D:\programowanie\Nowy folder\htdocs\Smarty-obiekt\app\Views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6252a6ddbf25f8_81688704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '363da5da35852383b5f31294e22492aa8d9eb5ec' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Smarty-obiekt\\app\\Views\\LoginView.tpl',
      1 => 1649583833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6252a6ddbf25f8_81688704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2776835196252a6ddbea001_57459359', 'tytul');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21114859466252a6ddbeaac1_84594135', 'under');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8253274506252a6ddbeb002_71209062', 'whitey');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20236909226252a6ddbeb4d2_69886884', 'form');
?>


	
	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19081024716252a6ddbee755_20668439', 'k1');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5466347366252a6ddbeec71_53113404', 'k2');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6084357336252a6ddbef138_81889196', 'k3');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10940878696252a6ddbef600_08596771', 'k4');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10921280216252a6ddbf20f7_92654475', 'Cform');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'tytul'} */
class Block_2776835196252a6ddbea001_57459359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tytul' => 
  array (
    0 => 'Block_2776835196252a6ddbea001_57459359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'tytul'} */
/* {block 'under'} */
class Block_21114859466252a6ddbeaac1_84594135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'under' => 
  array (
    0 => 'Block_21114859466252a6ddbeaac1_84594135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'under'} */
/* {block 'whitey'} */
class Block_8253274506252a6ddbeb002_71209062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_8253274506252a6ddbeb002_71209062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<?php
}
}
/* {/block 'whitey'} */
/* {block 'form'} */
class Block_20236909226252a6ddbeb4d2_69886884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_20236909226252a6ddbeb4d2_69886884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="pure-form pure-form-stacked" method="post"> <?php
}
}
/* {/block 'form'} */
/* {block 'k1'} */
class Block_19081024716252a6ddbee755_20668439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k1' => 
  array (
    0 => 'Block_19081024716252a6ddbee755_20668439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

    <label for="id_login">login: </label>
    <input id="id_login" type="text" name="login"/>

<?php
}
}
/* {/block 'k1'} */
/* {block 'k2'} */
class Block_5466347366252a6ddbeec71_53113404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k2' => 
  array (
    0 => 'Block_5466347366252a6ddbeec71_53113404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <label for="id_pass">pass: </label>
    <input id="id_pass" type="password" name="pass" /><br />

<?php
}
}
/* {/block 'k2'} */
/* {block 'k3'} */
class Block_6084357336252a6ddbef138_81889196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k3' => 
  array (
    0 => 'Block_6084357336252a6ddbef138_81889196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>

<?php
}
}
/* {/block 'k3'} */
/* {block 'k4'} */
class Block_10940878696252a6ddbef600_08596771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k4' => 
  array (
    0 => 'Block_10940878696252a6ddbef600_08596771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'k4'} */
/* {block 'Cform'} */
class Block_10921280216252a6ddbf20f7_92654475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Cform' => 
  array (
    0 => 'Block_10921280216252a6ddbf20f7_92654475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

</form> 

<?php
}
}
/* {/block 'Cform'} */
}
