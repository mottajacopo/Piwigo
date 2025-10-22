<?php
/* Smarty version 4.3.1, created on 2025-10-22 21:43:34
  from '/config/www/themes/modus/css/base.css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68f933e6a68bb8_07495640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a32228433caeef99fe89c908e349fd6ad04ecddd' => 
    array (
      0 => '/config/www/themes/modus/css/base.css.tpl',
      1 => 1760982612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68f933e6a68bb8_07495640 (Smarty_Internal_Template $_smarty_tpl) {
?>BODY {
	margin: 0;
	padding: 0;
	font-size: 13px;
	font-family: Arial,Helvetica,sans-serif;
	min-width: 300px; /*responsive layout*/
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['BODY']['backgroundColor'];?>
;
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['BODY']['color'];?>
;
}

A {
	text-decoration:none;
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['A']['color'];?>
;
}

A:hover {
	text-decoration:underline;
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['A:hover']['color'];?>
;
}

A .pwg-icon,
.pwg-icon {
	opacity: 0.9;
  font-size:17px!important;
}
A:hover .pwg-icon {
	opacity: 1;
}

IMG {
	border: 0; /*IE <= 9 adds border for linked images*/
}

H2 {
	margin: 0;
	padding: 2px 5px 3px 0;
	text-align: left;
	font-size: 20px;
	font-weight: normal;
}

BLOCKQUOTE {
	margin: 8px 10px; /*reduce default user agent margin too large for mobiles*/
}

INPUT, SELECT {
	margin: 0;
	font-size: 1em;	/* <= some browsers don't set it correctly */
}

TABLE {	/* horizontaly centered */
	margin-left: auto;
	margin-right: auto;
}


FORM { padding: 0; margin: 0; }


<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['controls'])) {?>
INPUT[type="text"], INPUT[type="password"], SELECT, TEXTAREA
<?php if (empty($_smarty_tpl->tpl_vars['skin']->value['buttons'])) {?>
,INPUT[type="button"], INPUT[type="submit"], INPUT[type="reset"]
<?php }?>
{
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['controls']['backgroundColor'])) {?>
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['controls']['backgroundColor'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['controls']['gradient'])) {?>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cssGradient' ][ 0 ], array( $_smarty_tpl->tpl_vars['skin']->value['controls']['gradient'] ));?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['controls']['color'])) {?>
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['controls']['color'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['controls']['border'])) {?>
	border: <?php echo $_smarty_tpl->tpl_vars['skin']->value['controls']['border'];?>
;
<?php }?>
}
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['controls:focus'])) {?>
INPUT:focus, TEXTAREA:focus {
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['controls:focus']['backgroundColor'])) {?>
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['controls:focus']['backgroundColor'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['controls:focus']['color'])) {?>
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['controls:focus']['color'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['controls:focus']['boxShadow'])) {?>
	box-shadow: <?php echo $_smarty_tpl->tpl_vars['skin']->value['controls:focus']['boxShadow'];?>
;
<?php }?>
}
<?php }?>


<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttons'])) {?>
INPUT[type="button"], INPUT[type="submit"], INPUT[type="reset"] {
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttons']['backgroundColor'])) {?>
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['buttons']['backgroundColor'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttons']['gradient'])) {?>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cssGradient' ][ 0 ], array( $_smarty_tpl->tpl_vars['skin']->value['buttons']['gradient'] ));?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttons']['color'])) {?>
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['buttons']['color'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttons']['border'])) {?>
	border: <?php echo $_smarty_tpl->tpl_vars['skin']->value['buttons']['border'];?>
;
<?php }?>
}
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttonsHover'])) {?>
INPUT[type="button"]:hover, INPUT[type="submit"]:hover, INPUT[type="reset"]:hover {
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['backgroundColor'])) {?>
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['backgroundColor'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['gradient'])) {?>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cssGradient' ][ 0 ], array( $_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['gradient'] ));?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['color'])) {?>
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['color'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['boxShadow'])) {?>
	box-shadow: <?php echo $_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['boxShadow'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['border'])) {?>
	border: <?php echo $_smarty_tpl->tpl_vars['skin']->value['buttonsHover']['border'];?>
;
<?php }?>
}
<?php }?>

FIELDSET {
	padding: 1em;
	margin: 1em 0.5em;
	border: 1px solid gray;
}

LEGEND {
	font-style: italic;
	color: inherit; /*for IE*/
}


/**
 * Content
 */

.titrePage {
	padding: 3px 10px;
	line-height: 24px;
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['backgroundColor'])) {?>
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['pageTitle']['backgroundColor'];?>
;
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['gradient'])) {?>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cssGradient' ][ 0 ], array( $_smarty_tpl->tpl_vars['skin']->value['pageTitle']['gradient'] ));?>

<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['color'])) {?>
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['pageTitle']['color'];?>
;
<?php }?>
}

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['link']['color'])) {?>
.titrePage A {
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['pageTitle']['link']['color'];?>
;
}
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['linkHover']['color'])) {?>
.titrePage A:hover {
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['pageTitle']['linkHover']['color'];?>
;
}
<?php }?>

/* now revert text colors to dropdowns*/
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['color'])) {?>
.titrePage .switchBox {
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['BODY']['color'];?>
;
}
<?php }
if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['link']['color'])) {?>
.titrePage .switchBox A {
	color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['A']['color'];?>
;
}
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['linkHover']['color'])) {?>
.titrePage .switchBox A:hover {
	color: <?php echo (($tmp = $_smarty_tpl->tpl_vars['skin']->value['A:hover']['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['skin']->value['A']['color'] ?? null : $tmp);?>
;
}
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['pageTitle']['textShadowColor'])) {?>
.titrePage H2 A, #imageHeaderBar H2{
	text-shadow: 1px 1px 3px <?php echo $_smarty_tpl->tpl_vars['skin']->value['pageTitle']['textShadowColor'];?>
;
}
<?php }?>

.titrePage H2 span.badge::before {
	content:'[';
}
.titrePage H2 span.badge::after {
	content:']';
}

.content .navigationBar, .content .additional_info, .content .calendarBar {
	margin: 8px 4px;
	text-align: center;
}

.content .pageNumberSelected {
	font-style: italic;
	font-weight: bold;
}

.content .additional_info {
	font-size: 110%;
}

.content .notification {
  padding:0 25px;
}

/* category and tag results paragraphs on a quick search */
.search_results {
  font-size: 16px;
  margin: 10px 16px;
}

/* actions */
.categoryActions {
	margin: 0 2px;
	width: auto;
	padding: 0;
	text-indent: 0;
	list-style: none;
	text-align: center;
	float: right;
}

.categoryActions LI {
	display: inline;
}

.switchBox {
	display: none;
	position: absolute;
	left: 0; top: 0; /*left, right set through js*/
	padding: 0.5em;
	z-index: 100;
	text-align:left;
	box-shadow: 2px 2px 5px gray;
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['dropdowns']['backgroundColor'];?>
;
}

.switchBoxTitle {
  border-bottom:1px solid gray;
  padding-bottom:5px;
  margin-bottom:5px;
}

#copyright {
	clear: both;
	font-size: 83%;
	text-align: center;
	margin: 0 0 10px 0;
}

A.wiki { cursor:help; }

/* Loader gif new in 2.5 */
.loader {
  display: none;
  position: fixed;
  right: 0;
  bottom: 0;
}

/* User comments */
#comments {
	padding-left: 5px;
	padding-right: 5px;
	clear: both; /*the main image and info table might float on picture page for large screens*/
}

.commentsList {
	margin: 5px;
	padding: 0;
	list-style: none;
}

.commentElement {
	border-radius: 5px;
	margin: 5px 0;
	padding: 2px 0 0 2px;
	width: 100%;
<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['comment']['backgroundColor'])) {?>
	background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['comment']['backgroundColor'];?>
;
<?php }?>
}

.commentElement .description {
	overflow: auto;
	/*width: inherit;*/
}

#comments input[type="text"],
#comments TEXTAREA {
	max-width: 100%;
	width: 100%;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.commentAuthor {
	font-weight: bold;
}

.commentDate {
	font-style: italic
}

#comments FORM P	 {
	margin: 5px 0;
}


/**
 * Filter forms are displayed label by label with the input (or select...)
 * below the label. Use an UL to make a group (radiobox for instance).
 * Use a SPAN to group objects in line
 */

.filter UL {
	display: block;
	float: left;
	margin: 0 1em 0 0;
	padding: 0;
}

.filter LI {
	list-style: none;
	margin-bottom: 0.5em;
}

.filter P {
	line-height: 2em;
	margin-bottom: 0.1em;
}

.filter input[name="search_allwords"] {
	width: 50%;
	min-width: 240px;
	max-width: 500px;
}

.filter>P {
	margin-left: 1.5em;
}

.properties UL {
	list-style: none;
	margin: 0;
	padding: 0;
}

.properties LI {
	margin-bottom: 0.5em;
	padding: 0;
	line-height: 1.8em;
	clear: left;
}

.properties SPAN.property {
	font-weight: bold;
	float: left;
	width: 50%;
	text-align: right;
	margin: 0;
	padding: 0 0.5em 0 0;
}

.properties .fields,
.plugins.fields {
  width: 100%;
	display: flex;
	flex-direction: column;
	gap: 15px;
}

.properties div.property,
.plugins.fields > div {
  display: grid;
  grid-template-columns: 1fr 1fr;
	gap: 10px;
	align-items: center;
}

.plugins.fields > div {
	margin-left: 5px;
}

.properties div.property.radio {
	margin: 5px 0;
}

.properties div.property :first-child,
.plugins.fields > div > :first-child {
  text-align: right;
	font-weight: bold;
}

.properties div.property :last-child,
.plugins.fields > div > :last-child {
	width: fit-content;
}

.properties P {
	text-align: center;
	margin-top: 2em;
	margin-bottom: 2em;
}

.bottomButtons {
	margin-top: 50px !important;
}




/* jQuery datepicker */
/*IMG.ui-datepicker-trigger {
	cursor : pointer;
}*/


/**
 * Default colors
 */

 /* So that non-links are slightly greyed out */
.content .navigationBar, SPAN.calItem, TD.calDayCellEmpty {
	color: gray;
}


.errors { /* Errors display */
	color: red;
	font-weight: bold;
	margin: 5px;
	border: 1px solid red;
	background: #ffe1e1 url(../../default/icon/errors.png) no-repeat center right;
	padding: 10px 50px 10px 10px;
}

/* Informations box */
.infos {
	color: #002000;
	background: #98fb98 url(../../default/icon/infos.png) no-repeat center right;
	margin: 5px;
	padding: 10px 50px 10px 10px;
}

/* Header message like upgrade*/
.header_msgs {
	text-align:center;
	font-weight: bold;
	color:#696969;	/* dimgray */
	background-color: #d3d3d3;
	margin: 1px;
	padding: 1px;
}

.message {
  color:white;
  background-color:#666;
  margin-bottom:1em;
  padding: 12px;
  border-radius: 3px;
}

/* image comments rules */

#commentAdd {
	float: left;
	padding: 0 1%;
	width: 48%;
}

#pictureCommentList {
	float: right;
	width: 50%;
}

/*#pictureCommentList .commentsOrder	{ float: left; margin-bottom: 5px;}
#pictureCommentList .navigationBar	{ float: right; margin-bottom: 5px;}*/
#pictureComments h4					{ margin: 0;}



@media screen and (max-width:480px) {
	SELECT,INPUT { /*controls in fieldset should not trigger "scroll"*/
		max-width: 270px;
	}
}

div.token-input-dropdown{
	color:black;
}

ul.token-input-list{
	width:auto!important;
}

#albumActionsSwitcher {
	display: none;
}

@media screen and (max-width:640px) {
	#albumActionsSwitcher {
		display: block;
		width: 42px;
		padding-top: 2px;
		text-align: right;
		float: right;
	}

	#albumActionsSwitcher + .categoryActions {
		display: none;
		position: absolute;
		z-index: 1;
		background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['dropdowns']['backgroundColor'];?>
;
		padding: 10px 5px 5px;
		box-shadow: 2px 2px 5px gray;
		opacity: 0.95;
		text-align: left;
		min-width: 180px;
	}

	#albumActionsSwitcher + .categoryActions LI{
		display: block;
	}

	#albumActionsSwitcher + .categoryActions .pwg-button{
		display: block;
	}

	#albumActionsSwitcher + .categoryActions .pwg-button-text{
		display: inline;
		margin-left: 5px;
		text-transform: capitalize;
	}
}

.mcs-side-results {
  display: flex;
  flex-direction: row;
  gap: 5px;
  }

.mcs-side-results > div {
  background: #fafafa;
  box-shadow: 0px 2px #00000024;
  position: relative;
  padding: 4px 10px;
  border-radius: 5px;
  font-weight: 600;
  display: flex;
  align-items: center;
  cursor: pointer;
  margin-right: 15px;
  color: #777;
  width: fit-content;
}

.mcs-side-results > div:hover {
  background: #eee;
  color: #777;
}

.mcs-side-results > div:active {
  transform: translateY(2px);
  box-shadow: none;
}

.mcs-side-results > div p{
  margin: 0 0 0 10px;
  white-space: nowrap;
  font-size: 15px;
}

.mcs-side-results .mcs-side-badge {
  border-radius: 25px;
  font-weight: 700;
  color: #fafafa;
  margin-left: 5px;
  padding: 2px 5px!important;
  font-size: 10px;
  background: #777;
}

.mcs-side-results.search-in-set-button p {
  margin:0;
}

.mcs-side-results.search-in-set-button a {
  color:#777;
  font-weight:600;
}

.mcs-side-results.search-in-set-button a::before {
  margin-right:10px;
}

.mcs-side-results.search-in-set-button a:hover {
  color:#777;
  font-weight:600;
  text-decoration: none;
}

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['searchResultItem'])) {?>
.search-result-item {
  background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['searchResultItem']['backgroundColor'];?>
;
  color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['searchResultItem']['color'];?>
;
}
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['skin']->value['formAlbumSelector']['backgroundColor'])) {?>
.linkedAlbumPopInContainer {
  background-color: <?php echo $_smarty_tpl->tpl_vars['skin']->value['formAlbumSelector']['backgroundColor'];?>
;
}
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['current']->value['formats'])) {?>
#downloadSwitchLink::after,
<?php }?>
#derivativeSwitchLink::after,
#sortOrderLink::after,
#cmdRelatedTags::after{
  display: inline-block;
  margin-left: .255em;
  vertical-align: .255em;
  content: "";
  border-top: .3em solid;
  border-right: .3em solid transparent;
  border-bottom: 0;
  border-left: .3em solid transparent;
}


.action-buttons{
  display:flex;
  align-items:start;
  flex-wrap:wrap;
  margin-bottom: 20px;
  padding:0 15px;
}

h3.related-tags-title{
  margin:4px 0;
  margin-right:10px;
  font-weight:400;
}

span.related-tags{
  padding:4px 12px;
  margin:3px;
  border-radius:15px;
  background-color:#f5f5f5
}

span.related-tags a{
  font-weight:700;
  color:#787878;
  text-decoration:none;
}

span.related-tags:hover{
  background-color:#e5e5e5;
}

span.related-tags .tag-counter{
  display: inline-block;
  margin-left:9px;
  color:#ACACAC;
  font-weight:700;
}

#relatedTagsBox.switchBox A {
  padding:unset;
  display:block;
}

#selected-tags-container{
  margin:0 15px;
  display: flex;
  flex-wrap: wrap;
}

#selected-tags-container .selected-related-tag {
  background-color: #FCEAD2;
  border:1px solid #FF7700;
  color:#ff7700;
  border-radius:15px;
  padding:2px 10px;
  padding-right:5px;
  margin-right:15px;
}

#selected-tags-container .selected-related-tag.unique-tag{
  padding:2px 10px;
}

#selected-tags-container .selected-related-tag a{
  font-weight: 700;
  font-style: Bold;
  font-size: 12px;
  color:#ff7700;
  }

#selected-tags-container .selected-related-tag a.selected-related-tag-remove:hover{
  text-decoration:none;
  color:#000;
}

.related-tag-condition{
  border-radius:5px;
  margin:2px 5px 0 15px;
  font-weight:900;
  font-size:20px;
  padding:0 5px;
  color:#777777;
}

#breadcrumb{
  display:flex;
  align-items: baseline;
}

@media (max-width: 600px) {
  #breadcrumb{
    flex-direction:column;
  }
}<?php }
}
