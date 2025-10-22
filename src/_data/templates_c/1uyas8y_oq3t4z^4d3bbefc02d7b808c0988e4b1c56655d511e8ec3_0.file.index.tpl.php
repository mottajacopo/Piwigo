<?php
/* Smarty version 4.3.1, created on 2025-10-22 21:43:34
  from '/app/www/public/themes/default/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68f933e6a19602_78596737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d3bbefc02d7b808c0988e4b1c56655d511e8ec3' => 
    array (
      0 => '/app/www/public/themes/default/template/index.tpl',
      1 => 1760982612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
    'file:themes/default/template/include/search_filters.inc.tpl' => 1,
  ),
),false)) {
function content_68f933e6a19602_78596737 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'core.switchbox','load'=>'async','require'=>'jquery','path'=>'themes/default/js/switchbox.js'),$_smarty_tpl ) );?>


<?php echo $_smarty_tpl->tpl_vars['MENUBAR']->value;?>


<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) || (isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
<div class="content messages<?php if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {?> contentWithMenu<?php }?>">
<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEFORE']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEFORE']->value;
}?>
<div id="content" class="content<?php if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {?> contentWithMenu<?php }?>">
<div class="titrePage<?php if ((isset($_smarty_tpl->tpl_vars['chronology']->value['TITLE']))) {?> calendarTitleBar<?php }?>">
	<a id=albumActionsSwitcher class=pwg-button><span class="pwg-icon pwg-icon-ellipsis"></span></a><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('version'=>1,'id'=>'modus.async','path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/js/modus.async.js",'load'=>'async'),$_smarty_tpl ) );?>
<ul class="categoryActions">
<?php if ((isset($_smarty_tpl->tpl_vars['SEARCH_IN_SET_ACTION']->value)) && $_smarty_tpl->tpl_vars['SEARCH_IN_SET_ACTION']->value) {?>
	  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/vendor/fontello/css/gallery-icon.css",'order'=>-10),$_smarty_tpl ) );?>

    <li id="cmdSearchInSet"><a href="<?php echo $_smarty_tpl->tpl_vars['SEARCH_IN_SET_URL']->value;?>
" title="<?php echo l10n('Search in this set');?>
" class="pwg-state-default pwg-button" rel="nofollow">
      <span class="gallery-icon-search-folder"></span><span class="pwg-button-text"><?php echo l10n('Search in this set');?>
</span>
    </a></li>
<?php }
if (!empty($_smarty_tpl->tpl_vars['image_orders']->value)) {?>
		<li><a id="sortOrderLink" title="<?php echo l10n('Sort order');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-sort"></span><span class="pwg-button-text"><?php echo l10n('Sort order');?>
</span></a><div id="sortOrderBox" class="switchBox"><div class="switchBoxTitle"><?php echo l10n('Sort order');?>
</div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_orders']->value, 'image_order', false, NULL, 'loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['image_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_order']->value) {
$_smarty_tpl->tpl_vars['image_order']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['first'] : null)) {?><br><?php }
if ($_smarty_tpl->tpl_vars['image_order']->value['SELECTED']) {?><span>&#x2714; </span><?php echo $_smarty_tpl->tpl_vars['image_order']->value['DISPLAY'];
} else { ?><span style="visibility:hidden">&#x2714; </span><a href="<?php echo $_smarty_tpl->tpl_vars['image_order']->value['URL'];?>
" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['image_order']->value['DISPLAY'];?>
</a><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin4->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>(window.SwitchBox=window.SwitchBox||[]).push("#sortOrderLink", "#sortOrderBox");<?php $_block_repeat=false;
echo $_block_plugin4->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></li>
<?php }
if (!empty($_smarty_tpl->tpl_vars['image_derivatives']->value)) {?>
		<li><a id="derivativeSwitchLink" title="<?php echo l10n('Photo sizes');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-sizes"></span><span class="pwg-button-text"><?php echo l10n('Photo sizes');?>
</span></a><div id="derivativeSwitchBox" class="switchBox"><div class="switchBoxTitle"><?php echo l10n('Photo sizes');?>
</div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_derivatives']->value, 'image_derivative', false, NULL, 'loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['image_derivative']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_derivative']->value) {
$_smarty_tpl->tpl_vars['image_derivative']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['first'] : null)) {?><br><?php }
if ($_smarty_tpl->tpl_vars['image_derivative']->value['SELECTED']) {?><span>&#x2714; </span><?php echo $_smarty_tpl->tpl_vars['image_derivative']->value['DISPLAY'];
} else { ?><span style="visibility:hidden">&#x2714; </span><a href="<?php echo $_smarty_tpl->tpl_vars['image_derivative']->value['URL'];?>
" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['image_derivative']->value['DISPLAY'];?>
</a><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin5->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>(window.SwitchBox=window.SwitchBox||[]).push("#derivativeSwitchLink", "#derivativeSwitchBox");<?php $_block_repeat=false;
echo $_block_plugin5->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></li>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['favorite']->value))) {?>
		<li id="cmdFavorite"><a href="<?php echo $_smarty_tpl->tpl_vars['favorite']->value['U_FAVORITE'];?>
" title="<?php echo l10n('delete all photos from your favorites');?>
" class="pwg-state-default pwg-button" rel="nofollow">
			<span class="pwg-icon pwg-icon-favorite-del"></span><span class="pwg-button-text"><?php echo l10n('delete all photos from your favorites');?>
</span>
		</a></li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_CADDIE']->value))) {?>
		<li id="cmdCaddie"><a href="<?php echo $_smarty_tpl->tpl_vars['U_CADDIE']->value;?>
" title="<?php echo l10n('Add to caddie');?>
" class="pwg-state-default pwg-button">
			<span class="pwg-icon pwg-icon-caddie-add"></span><span class="pwg-button-text"><?php echo l10n('Caddie');?>
</span>
		</a></li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_EDIT']->value))) {?>
		<li id="cmdEditAlbum"><a href="<?php echo $_smarty_tpl->tpl_vars['U_EDIT']->value;?>
" title="<?php echo l10n('Edit album');?>
" class="pwg-state-default pwg-button">
			<span class="pwg-icon pwg-icon-category-edit"></span><span class="pwg-button-text"><?php echo l10n('Edit');?>
</span>
		</a></li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_SLIDESHOW']->value))) {?>
		<li id="cmdSlideshow"><a href="<?php echo $_smarty_tpl->tpl_vars['U_SLIDESHOW']->value;?>
" title="<?php echo l10n('slideshow');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-slideshow"></span><span class="pwg-button-text"><?php echo l10n('slideshow');?>
</span></a></li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_MODE_FLAT']->value))) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_MODE_FLAT']->value;?>
" title="<?php echo l10n('display all photos in all sub-albums');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-category-view-flat"></span><span class="pwg-button-text"><?php echo l10n('display all photos in all sub-albums');?>
</span></a></li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_MODE_NORMAL']->value))) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_MODE_NORMAL']->value;?>
" title="<?php echo l10n('return to normal view mode');?>
" class="pwg-state-default pwg-button"><span class="pwg-icon pwg-icon-category-view-normal"></span><span class="pwg-button-text"><?php echo l10n('return to normal view mode');?>
</span></a></li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_MODE_POSTED']->value))) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_MODE_POSTED']->value;?>
" title="<?php echo l10n('display a calendar by posted date');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-calendar"></span><span class="pwg-button-text"><?php echo l10n('Calendar');?>
</span></a></li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_MODE_CREATED']->value))) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_MODE_CREATED']->value;?>
" title="<?php echo l10n('display a calendar by creation date');?>
" class="pwg-state-default pwg-button" rel="nofollow"><span class="pwg-icon pwg-icon-camera-calendar"></span><span class="pwg-button-text"><?php echo l10n('Calendar');?>
</span></a></li>
<?php }
if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_BUTTONS']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PLUGIN_INDEX_BUTTONS']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_ACTIONS']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_ACTIONS']->value;
}?>
	</ul>

<h2><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['NB_ITEMS']->value > 0) {?><span class="badge nb_items"><?php echo $_smarty_tpl->tpl_vars['NB_ITEMS']->value;?>
</span><?php }?></h2>

<?php if ((isset($_smarty_tpl->tpl_vars['chronology_views']->value))) {?>
<div class="calendarViews"><?php echo l10n('View');?>
:
	<a id="calendarViewSwitchLink" href="#">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chronology_views']->value, 'view');
$_smarty_tpl->tpl_vars['view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value) {
$_smarty_tpl->tpl_vars['view']->do_else = false;
if ($_smarty_tpl->tpl_vars['view']->value['SELECTED']) {
echo $_smarty_tpl->tpl_vars['view']->value['CONTENT'];
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</a>
	<div id="calendarViewSwitchBox" class="switchBox">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chronology_views']->value, 'view', false, NULL, 'loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value) {
$_smarty_tpl->tpl_vars['view']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['first'] : null)) {?><br><?php }?>
		<span<?php if (!$_smarty_tpl->tpl_vars['view']->value['SELECTED']) {?> style="visibility:hidden"<?php }?>>&#x2714; </span><a href="<?php echo $_smarty_tpl->tpl_vars['view']->value['VALUE'];?>
"><?php echo $_smarty_tpl->tpl_vars['view']->value['CONTENT'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin6->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>(window.SwitchBox=window.SwitchBox||[]).push("#calendarViewSwitchLink", "#calendarViewSwitchBox");<?php $_block_repeat=false;
echo $_block_plugin6->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['chronology']->value['TITLE']))) {?>
<h2 class="calendarTitle"><?php echo $_smarty_tpl->tpl_vars['chronology']->value['TITLE'];?>
</h2>
<?php }?>

</div>
<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEGIN']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEGIN']->value;
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['no_search_results']->value)) {?>
<p class="search_results"><?php echo l10n('No results for');?>
 :
	<em><strong>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['no_search_results']->value, 'res');
$_smarty_tpl->tpl_vars['res']->index = -1;
$_smarty_tpl->tpl_vars['res']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->do_else = false;
$_smarty_tpl->tpl_vars['res']->index++;
$_smarty_tpl->tpl_vars['res']->first = !$_smarty_tpl->tpl_vars['res']->index;
$__foreach_res_18_saved = $_smarty_tpl->tpl_vars['res'];
?>
	<?php if (!$_smarty_tpl->tpl_vars['res']->first) {?> &mdash; <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['res']->value;?>

<?php
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_18_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</strong></em>
</p>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['category_search_results']->value)) {?>
<p class="search_results"><?php echo l10n('Album results for');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['QUERY_SEARCH']->value;?>
</strong> :
	<em><strong>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_search_results']->value, 'res', false, NULL, 'res_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['res']->index = -1;
$_smarty_tpl->tpl_vars['res']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->do_else = false;
$_smarty_tpl->tpl_vars['res']->index++;
$_smarty_tpl->tpl_vars['res']->first = !$_smarty_tpl->tpl_vars['res']->index;
$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['index'];
$__foreach_res_19_saved = $_smarty_tpl->tpl_vars['res'];
?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first'] : null)) {?> &mdash; <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['res']->value;?>

<?php
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_19_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</strong></em>
</p>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['tag_search_results']->value)) {?>
<p class="search_results"><?php echo l10n('Tag results for');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['QUERY_SEARCH']->value;?>
</strong> :
	<em><strong>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tag_search_results']->value, 'tag', false, NULL, 'res_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['index'];
?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first'] : null)) {?> &mdash; <?php }?> <a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</strong></em>
</p>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['FILE_CHRONOLOGY_VIEW']->value))) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['FILE_CHRONOLOGY_VIEW']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['SEARCH_IN_SET_BUTTON']->value)) && $_smarty_tpl->tpl_vars['SEARCH_IN_SET_BUTTON']->value) {?>
<div class="mcs-side-results search-in-set-button">
  <div>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['SEARCH_IN_SET_URL']->value;?>
" class="gallery-icon-search-folder" rel="nofollow"><?php echo l10n('Search in this set');?>
</a></p>
  </div>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value)) {?>
<div class="additional_info">
	<?php echo $_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value;?>

</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['CONTENT']->value)) {
echo $_smarty_tpl->tpl_vars['CONTENT']->value;
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value)) {
echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['cats_navbar']->value)) {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( 'navigation_bar.tpl','navbar' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['cats_navbar']->value), 0, true);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['SEARCH_ID']->value)) {
$_smarty_tpl->_subTemplateRender('file:themes/default/template/include/search_filters.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['THUMBNAILS']->value)) {?>
<div class="loader"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['img_dir'];?>
/ajax_loader.gif"></div>

<ul class="thumbnails" id="thumbnails">
  <?php echo $_smarty_tpl->tpl_vars['THUMBNAILS']->value;?>

</ul>

<?php } elseif (!empty($_smarty_tpl->tpl_vars['SEARCH_ID']->value)) {?>
<div class="mcs-no-result">
  <div class="text">
    <span class="top"><?php echo l10n('No results are available.');?>
</span>
    <span class="bot"><?php echo l10n('You can try to edit your filters and perform a new search.');?>
</span>
  </div>
</div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['thumb_navbar']->value)) {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( 'navigation_bar.tpl','navbar' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['thumb_navbar']->value), 0, true);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_END']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_END']->value;
}?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_AFTER']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_AFTER']->value;
}
}
}
