<?php /* Smarty version 3.1.24, created on 2015-11-22 11:31:11
         compiled from "C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/acceuil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:96145651996f9bdff0_69912440%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be24643bbf132d288836bc5a4dec36b35ba31e5a' => 
    array (
      0 => 'C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/modules/acceuil.tpl',
      1 => 1448188266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96145651996f9bdff0_69912440',
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5651996fa25968_38824362',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5651996fa25968_38824362')) {
function content_5651996fa25968_38824362 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '96145651996f9bdff0_69912440';
echo $_smarty_tpl->getSubTemplate ('C:/UwAmp/www/ProjetPHP/PartageRecette/application/views/layout.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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
		<p>bonjour</p>
	</section>
<?php }
}
?>