<?php /* Smarty version 3.1.24, created on 2015-12-01 22:49:32
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/acceuil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17848565e15ec61e6a3_55664364%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be24643bbf132d288836bc5a4dec36b35ba31e5a' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/acceuil.tpl',
      1 => 1448958740,
      2 => 'file',
    ),
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1448999914,
      2 => 'file',
    ),
    'c6108e6354c178d52ddd29ee819a8d52e3cc3d31' => 
    array (
      0 => 'c6108e6354c178d52ddd29ee819a8d52e3cc3d31',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '17848565e15ec61e6a3_55664364',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565e15ec6b8026_44237868',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565e15ec6b8026_44237868')) {
function content_565e15ec6b8026_44237868 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17848565e15ec61e6a3_55664364';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Welcome on what to cook </title>
		<meta charset="UTF-8">
	</head>
	<body>
		<header>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</header>
		<main>
		<!--<img src="C:/UwAmp/www/ProjetPHP/PartageRecette/media/categories/a4aky34o.png"/>-->
			<?php
$_smarty_tpl->properties['nocache_hash'] = '17848565e15ec61e6a3_55664364';
?>

	<article>
		<p>BIENVENUE NARVALO</p>
	</article>
	<section>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['alea'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
			<?php echo $_smarty_tpl->tpl_vars['value']->value;?>

		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
	</section>

		</main>
		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>
	</body>

</html><?php }
}
?>