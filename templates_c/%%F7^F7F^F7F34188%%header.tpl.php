<?php /* Smarty version 2.6.19, created on 2012-08-29 06:02:47
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'header.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "lng.conf",'section' => 'strings','scope' => 'global'), $this);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $this->_tpl_vars['title']; ?>
 @ <?php echo $this->_tpl_vars['settings']['name']; ?>
</title>
<link rel="shortcut icon" href="templates/standard/images/favicon.ico" type="image/x-icon" />
<?php if ($this->_tpl_vars['stage'] != 'project' && $this->_tpl_vars['loggedin']): ?>
<link rel="search" type="application/opensearchdescription+xml" title="<?php echo $this->_tpl_vars['settings']['name']; ?>
 <?php echo $this->_config[0]['vars']['search']; ?>
" href="manageajax.php?action=addfx-all" />
<?php elseif ($this->_tpl_vars['stage'] == 'project' && $this->_tpl_vars['loggedin']): ?>
<link rel="search" type="application/opensearchdescription+xml" title="<?php echo $this->_tpl_vars['project']['name']; ?>
 <?php echo $this->_config[0]['vars']['search']; ?>
" href="manageajax.php?action=addfx-project&amp;project=<?php echo $this->_tpl_vars['project']['ID']; ?>
" />
<?php endif; ?>
<?php if ($this->_tpl_vars['loggedin']): ?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $this->_config[0]['vars']['mymessages']; ?>
" href="managerss.php?action=mymsgs-rss&amp;user=<?php echo $this->_tpl_vars['userid']; ?>
" />
<link rel="alternate" type="application/rss+xml" title="<?php echo $this->_config[0]['vars']['mytasks']; ?>
" href="managerss.php?action=rss-tasks&amp;user=<?php echo $this->_tpl_vars['userid']; ?>
" />
<?php endif; ?>
<?php if ($this->_tpl_vars['jsload'] == 'ajax'): ?>
<?php echo '

<script type = "text/javascript">
//endcolor for close element flashing
closeEndcolor = \'#377814\';
//endcolor for delete element flashing
deleteEndcolor = \'#c62424\';
</script>
<script type = "text/javascript" src = "include/js/prototype.php" ></script>
<script type = "text/javascript" src = "include/js/ajax.php" ></script>
<script type = "text/javascript" src="include/js/jsval.php"></script>
<script type="text/javascript" src="include/js/chat.js"></script>
     <script type = "text/javascript">
        function _jsVal_Language() {
            this.err_enter = "'; ?>
<?php echo $this->_config[0]['vars']['wrongfield']; ?>
<?php echo '";
            this.err_form = "'; ?>
<?php echo $this->_config[0]['vars']['wrongfields']; ?>
<?php echo '";
            this.err_select = "'; ?>
<?php echo $this->_config[0]['vars']['wrongselect']; ?>
<?php echo '";
        }
</script>

<script type="text/javascript" src="include/js/mycalendar.js"></script>
'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['jsload2'] == 'chat'): ?>
<?php echo '
<script type="text/javascript">
window.onunload = quitchat;

</script>
'; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['jsload3'] == 'lightbox'): ?>
<link rel="stylesheet" href="templates/standard/css/lytebox.css" type="text/css"  />
<script type="text/javascript" src="include/js/lytebox.php"></script>
<?php endif; ?>
<link rel="stylesheet" type="text/css" href="templates/standard/css/style_main.php"/>

<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="templates/standard/css/style_iefix.css"/>
<![endif]-->

<?php if ($this->_tpl_vars['jsload1'] == 'tinymce'): ?>
<?php echo '
<script type="text/javascript" src="include/js/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">
//	theme_advanced_statusbar_location : "bottom",
tinyMCE.init({
	mode : "textareas",
	theme : "advanced",
	language: "'; ?>
<?php echo $this->_tpl_vars['locale']; ?>
<?php echo '",
	width: "55%",
	height: "220px",
	plugins : "inlinepopups,style,advimage,advlink,xhtmlxtras,safari,template",
	theme_advanced_buttons1 : "bold,italic,underline,|,fontsizeselect,|,bullist,numlist,|,link,unlink,image,|,forecolor,",
	theme_advanced_buttons2 : "",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_path : false,
	theme_advanced_resizing : true,
	theme_advanced_resizing_use_cookie : false,
	theme_advanced_resizing_max_width : "55%",
	extended_valid_elements : "a[name|href|target|title],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|name],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]",
	force_br_newlines : true,
	cleanup: true,
	cleanup_on_startup: true,
	force_p_newlines : false,
	convert_newlines_to_brs : false,
	forced_root_block : false,
	external_image_list_url: \'manageajax.php?action=jsonfiles&id='; ?>
<?php echo $this->_tpl_vars['project']['ID']; ?>
<?php echo '\'

});

</script>
'; ?>

<?php endif; ?>
</head>
<body >

<div id = "jslog" style = "color:red;position:absolute;top:70%;right:5%;width:300px;"></div>

<?php if ($this->_tpl_vars['showheader'] != 'no'): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_main.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>