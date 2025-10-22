<?php
/* Smarty version 4.3.1, created on 2025-10-22 21:43:34
  from '/config/www/plugins/language_switch/language_switch_flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68f933e69cc0f8_13244782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b92c2951fc2c759399a732e3be3b08ed0c1e2668' => 
    array (
      0 => '/config/www/plugins/language_switch/language_switch_flags.tpl',
      1 => 1760982612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f933e69cc0f8_13244782 (Smarty_Internal_Template $_smarty_tpl) {
?><li id="languageSwitch"><a id="languageSwitchLink" title="<?php echo l10n('Language');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon langflag-<?php echo $_smarty_tpl->tpl_vars['lang_switch']->value['Active']['code'];?>
">&nbsp;</span><span class="pwg-button-text"><?php echo l10n('Language');?>
</span></a><div id="languageSwitchBox" class="switchBox"><div class="switchBoxTitle"><?php echo l10n('Language');?>
</div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lang_switch']->value['flags'], 'flag', false, NULL, 'f', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['index']++;
?><a rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['flag']->value['url'];?>
"><?php if ($_smarty_tpl->tpl_vars['lang_info']->value['direction'] == "ltr") {?><span class="pwg-icon langflag-<?php echo $_smarty_tpl->tpl_vars['flag']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['flag']->value['alt'];?>
</span><?php echo $_smarty_tpl->tpl_vars['flag']->value['title'];
} else {
echo $_smarty_tpl->tpl_vars['flag']->value['title'];?>
<span class="pwg-icon langflag-<?php echo $_smarty_tpl->tpl_vars['flag']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['flag']->value['alt'];?>
</span><?php }?></a><?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['index'] : null)+1)%3 == 0) {?><br><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></li>

<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin3->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery("#languageSwitchLink").click(function() {
	var elt = jQuery("#languageSwitchBox");
	elt.css("left", Math.min(jQuery(this).offset().left, jQuery(window).width() - elt.outerWidth(true) - 5))
		.css("top", jQuery(this).offset().top + jQuery(this).outerHeight(true))
		.toggle();
});
jQuery("#languageSwitchBox").on("mouseleave", function() {
	jQuery(this).hide();
});
<?php $_block_repeat=false;
echo $_block_plugin3->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['LANGUAGE_SWITCH_LOAD_STYLE']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>($_smarty_tpl->tpl_vars['LANGUAGE_SWITCH_PATH']->value).("style.css")),$_smarty_tpl ) );?>

<?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>($_smarty_tpl->tpl_vars['LANGUAGE_SWITCH_PATH']->value).("language_switch.css")),$_smarty_tpl ) );
}
}
