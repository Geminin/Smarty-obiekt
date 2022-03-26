<?php
/* Smarty version 4.1.0, created on 2022-03-26 11:46:28
  from 'D:\programowanie\Nowy folder\htdocs\Smarty-obiekt\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623eef0468ebc6_80322824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3223a856c3bfc185c08e84d0fe1ef5c8d06f9e2' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Smarty-obiekt\\templates\\main.html',
      1 => 1648243661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623eef0468ebc6_80322824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['conf']->value}->app_url;?>
/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['conf']->value}->app_url;?>
/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['conf']->value}->app_url;?>
/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['conf']->value}->app_url;?>
/assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Projekty <b class="caret"></b></a>
						<ul class="dropdown-menu">

							<li><a href="app/Calc/alc.php">Kalkulator</a></li>

							<li><a href="app/Cred/cred.php">Kalkulator Kredytowy</a></li>

							<li><a href="">Coming Soon</a></li>

							<li><a href="">Coming Soon</a></li>

						</ul>
					</li>
					
					<!-- <li><a class="btn" href="/app/security/logout.php">Logout</a></li> -->
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
    <!-- Tło fade -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1535809620623eef0468b1b0_99925893', 'tytul');
?>
</h1>
				
				<p class="tagline"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1858176405623eef0468b7c6_42453793', 'under');
?>
</p>
				
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		

	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
        <!-- Kolumny -->
    
	    <div class="jumbotron top-space">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1638867564623eef0468bcb1_78204935', 'whitey');
?>


		    <div class="container">
				
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1751810843623eef0468c187_02725492', 'form');
?>

			    <h3 class="text-center thin"></h3>
			
			    <div class="row">
				    <div class="col-md-3 col-sm-6 highlight">
					-----------------------------
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_218925836623eef0468c648_50957183', 'k1');
?>

					-----------------------------
				    </div>
				    <div class="col-md-3 col-sm-6 highlight">
					-----------------------------
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_950161848623eef0468cb00_37784738', 'k2');
?>

					-----------------------------   
				    </div>
				    <div class="col-md-3 col-sm-6 highlight">
					-----------------------------
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188768038623eef0468cfc9_62299568', 'k3');
?>

					-----------------------------    
				    </div>
				    <div class="col-md-3 col-sm-6 highlight">
					-----------------------------
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119493920623eef0468d489_87880439', 'k4');
?>

					-----------------------------   
				    </div>
			    </div> <!-- /row  -->
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1785031294623eef0468d930_12387529', 'Cform');
?>

		    </div>
	    </div>

	<!-- /Highlights -->


	
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">some.Hidden.email@somewhere.com</a><br>
								<br>
								234 Hidden Pond Road, Hidden City, TN 37015
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href="https://github.com/Geminin"><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p> Strona zrobiona przez Studenta</p>

							</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, MW. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/template.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'tytul'} */
class Block_1535809620623eef0468b1b0_99925893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tytul' => 
  array (
    0 => 'Block_1535809620623eef0468b1b0_99925893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'tytul'} */
/* {block 'under'} */
class Block_1858176405623eef0468b7c6_42453793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'under' => 
  array (
    0 => 'Block_1858176405623eef0468b7c6_42453793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'under'} */
/* {block 'whitey'} */
class Block_1638867564623eef0468bcb1_78204935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_1638867564623eef0468bcb1_78204935',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

			<?php
}
}
/* {/block 'whitey'} */
/* {block 'form'} */
class Block_1751810843623eef0468c187_02725492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_1751810843623eef0468c187_02725492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


				<?php
}
}
/* {/block 'form'} */
/* {block 'k1'} */
class Block_218925836623eef0468c648_50957183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k1' => 
  array (
    0 => 'Block_218925836623eef0468c648_50957183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

					<?php
}
}
/* {/block 'k1'} */
/* {block 'k2'} */
class Block_950161848623eef0468cb00_37784738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k2' => 
  array (
    0 => 'Block_950161848623eef0468cb00_37784738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

					<?php
}
}
/* {/block 'k2'} */
/* {block 'k3'} */
class Block_188768038623eef0468cfc9_62299568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k3' => 
  array (
    0 => 'Block_188768038623eef0468cfc9_62299568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

					<?php
}
}
/* {/block 'k3'} */
/* {block 'k4'} */
class Block_119493920623eef0468d489_87880439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k4' => 
  array (
    0 => 'Block_119493920623eef0468d489_87880439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

					<?php
}
}
/* {/block 'k4'} */
/* {block 'Cform'} */
class Block_1785031294623eef0468d930_12387529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Cform' => 
  array (
    0 => 'Block_1785031294623eef0468d930_12387529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<?php
}
}
/* {/block 'Cform'} */
}
