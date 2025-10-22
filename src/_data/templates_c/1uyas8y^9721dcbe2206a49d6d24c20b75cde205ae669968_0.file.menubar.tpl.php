<?php
/* Smarty version 4.3.1, created on 2025-10-22 21:43:34
  from '/app/www/public/themes/modus/template/menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68f933e68cd8b2_40128527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9721dcbe2206a49d6d24c20b75cde205ae669968' => 
    array (
      0 => '/app/www/public/themes/modus/template/menubar.tpl',
      1 => 1760982612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f933e68cd8b2_40128527 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		var h = jQuery("#theHeader div.banner").css("height");
		var d = jQuery("#menuSwitcher").css("padding-top");

		jQuery(document).ready(function(){
			if( jQuery('#theHeader div.banner').is(':visible') && jQuery("body").css("display") == "flex"){
				jQuery("#menuSwitcher").css("padding-top",parseInt(h)+parseInt(d));
			};
		});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php if (!empty($_smarty_tpl->tpl_vars['blocks']->value)) {?>
<aside id=menubar>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, 'id');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
if (($_smarty_tpl->tpl_vars['id']->value != "mbIdentification" && $_smarty_tpl->tpl_vars['id']->value != "mbMenu")) {?>
	<dl id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
<?php if ($_smarty_tpl->tpl_vars['id']->value == "mbLinks") {
if ((isset($_smarty_tpl->tpl_vars['block']->value->data)) && count($_smarty_tpl->tpl_vars['block']->value->data) == 1) {?>
<dt><a href="<?php echo $_smarty_tpl->tpl_vars['block']->value->data[0]['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['block']->value->data[0]['LABEL'];?>
</a></dt>
<?php } else { ?>
<dt><a><?php echo l10n('Links');?>
</a></dt>
<dd>
	<ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" class="external"<?php if ((isset($_smarty_tpl->tpl_vars['link']->value['new_window']))) {?> onclick="window.open(this.href, '<?php echo $_smarty_tpl->tpl_vars['link']->value['new_window']['NAME'];?>
','<?php echo $_smarty_tpl->tpl_vars['link']->value['new_window']['FEATURES'];?>
'); return false;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link']->value['LABEL'];?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
</dd>
<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['id']->value == "mbTags") {?>
<dt><a><?php echo l10n('Tags');?>
</a></dt>
<dd>
	<div id=menuTagCloud>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?><a class="tagLevel<?php if ((isset($_smarty_tpl->tpl_vars['tag']->value['level']))) {
echo $_smarty_tpl->tpl_vars['tag']->value['level'];
}?>" href=<?php if ((isset($_smarty_tpl->tpl_vars['tag']->value['U_ADD']))) {?>"<?php echo $_smarty_tpl->tpl_vars['tag']->value['U_ADD'];?>
" title="<?php echo l10n_dec('%d photo is also linked to current tags','%d photos are also linked to current tags',$_smarty_tpl->tpl_vars['tag']->value['counter']);?>
" rel=nofollow>+<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
" title="<?php echo l10n('display photos linked to this tag');?>
"><?php }
echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</dd>

<?php } elseif ($_smarty_tpl->tpl_vars['id']->value == "mbSpecials") {?>
<dt><a><?php echo l10n('Explore');?>
</a></dt>
<dd>
	<ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['link']->value['REL']))) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['blocks']->value['mbMenu']))) {?><hr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value['mbMenu']->data, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
if (is_array($_smarty_tpl->tpl_vars['link']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php if ((isset($_smarty_tpl->tpl_vars['link']->value['TITLE']))) {
echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['link']->value['REL']))) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a><?php if ((isset($_smarty_tpl->tpl_vars['link']->value['COUNTER']))) {?> (<?php echo $_smarty_tpl->tpl_vars['link']->value['COUNTER'];?>
)<?php }?></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></ul>
</dd>

<?php } else {
if (!empty($_smarty_tpl->tpl_vars['block']->value->template)) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['block']->value->template, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value->raw_content;?>

<?php }
}?>
	</dl>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['most_visited']))) {?>
<dl id="mbMostVisited"><dt><a href="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['most_visited']['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['most_visited']['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['most_visited']['NAME'];?>
</a></dt></dl>
<?php }
if ((isset($_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['best_rated']))) {?>
<dl id="mbBestRated"><dt><a href="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['best_rated']['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['best_rated']['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['best_rated']['NAME'];?>
</a></dt></dl>
<?php }
if ((isset($_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['recent_pics']))) {?>
<dl><dt><a href="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['recent_pics']['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['recent_pics']['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['recent_pics']['NAME'];?>
</a></dt></dl>
<?php }?>
<dl style="float:none">
	<form style="margin:0;display:inline" action="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
qsearch.php" method=get id=quicksearch onsubmit="return this.q.value!='';">
		<input type="text" name=q id=qsearchInput placeholder="<?php echo htmlspecialchars((string)l10n('Search'), ENT_QUOTES, 'UTF-8', true);?>
..." <?php if (!empty($_smarty_tpl->tpl_vars['QUERY_SEARCH']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['QUERY_SEARCH']->value;?>
"<?php }?>>
	</form>
</dl>
<?php if ((isset($_smarty_tpl->tpl_vars['U_LOGIN']->value))) {?>
<dl style="float:right;margin-top:3px">
	<dt style="font-size:100%;font-weight:normal;padding-left:15px"><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
" rel=nofollow><?php echo l10n('Login');?>
</a></dt>
	<dd style="right:0">
		<ul>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
" rel="nofollow"><?php echo l10n('Login');?>
</a></li>
<?php if ((isset($_smarty_tpl->tpl_vars['U_REGISTER']->value))) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
" title="<?php echo l10n('Create a new account');?>
" rel="nofollow"><?php echo l10n('Register');?>
</a></li>
<?php }?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value;?>
" title="<?php echo l10n('Forgot your password?');?>
" rel="nofollow"><?php echo l10n('Forgot your password?');?>
</a></li>
		</ul>
<form method=post action="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
" id=quickconnect><fieldset><legend><?php echo l10n('Quick connect');?>
</legend><p><label for=userX><?php echo l10n('Username');?>
</label><br><input type=text name=username id=userX value="" style="width:99%"></p><p><label for=passX><?php echo l10n('Password');?>
</label><br><input type=password name=password id=passX style="width:99%"></p><?php if ($_smarty_tpl->tpl_vars['AUTHORIZE_REMEMBERING']->value) {?><p><label><?php echo l10n('Auto login');?>
&nbsp;<input type=checkbox name=remember_me value=1></label></p><?php }?><p><input type=hidden name=redirect value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_SERVER['REQUEST_URI'] ));?>
"><input type=submit name=login value="<?php echo l10n('Submit');?>
"></p></fieldset></form>
	</dd>
</dl>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_LOGOUT']->value))) {?>
<dl style="float:right;margin-top:3px">
	<dt style="font-size:100%;font-weight:normal">
	<?php if ((isset($_smarty_tpl->tpl_vars['USERNAME']->value))) {
echo l10n('Hello');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['U_PROFILE']->value))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['U_PROFILE']->value;?>
"><?php }
echo $_smarty_tpl->tpl_vars['USERNAME']->value;
if ((isset($_smarty_tpl->tpl_vars['U_PROFILE']->value))) {?></a><?php }?> ! &nbsp;<?php }?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGOUT']->value;?>
"><?php echo l10n('Logout');?>
</a>
<?php if ((isset($_smarty_tpl->tpl_vars['U_PROFILE']->value))) {?>
	<a id="mbProfile" href="<?php echo $_smarty_tpl->tpl_vars['U_PROFILE']->value;?>
" title="<?php echo l10n('customize the appareance of the gallery');?>
"><?php echo l10n('Customize');?>
</a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_ADMIN']->value))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['U_ADMIN']->value;?>
" title="<?php echo l10n('available for administrators only');?>
"><?php echo l10n('Admin');?>
</a>
<?php }?>
	</dt>
</dl>
<?php }?>

</aside>
<?php }?>
<a id="menuSwitcher" class="pwg-button" title="<?php echo l10n('Menu');?>
"><span class="pwg-icon pwg-icon-menu"></span></a>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'zzz.d1.menu','load'=>'async','path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/js/menuh.js",'require'=>"jquery",'version'=>0),$_smarty_tpl ) );?>

<?php }
}
