<?php /* Smarty version 3.1.24, created on 2015-11-26 09:26:29
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/profil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:190825656c235372a02_22547091%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c761eae3d3e3985027e91d6cc1fc70ca0672dad7' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/profil.tpl',
      1 => 1448526333,
      2 => 'file',
    ),
    '1b4175c3e93a90a78fbf395ab4c71f04d3800a25' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl',
      1 => 1448525523,
      2 => 'file',
    ),
    '3ece946dd7a42d058cdcdb45eca86e90ab5ce0fb' => 
    array (
      0 => '3ece946dd7a42d058cdcdb45eca86e90ab5ce0fb',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '190825656c235372a02_22547091',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5656c2353fbe22_73128831',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5656c2353fbe22_73128831')) {
function content_5656c2353fbe22_73128831 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '190825656c235372a02_22547091';
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
			<?php
$_smarty_tpl->properties['nocache_hash'] = '190825656c235372a02_22547091';
?>

Bienvenu <?php echo $_smarty_tpl->tpl_vars['data']->value['user']['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user']['prenom'];?>


		</main>
		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>
	</body>

</html><?php }
}
?>