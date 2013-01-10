<?php /* Smarty version 2.6.19, created on 2012-08-29 16:06:21
         compiled from editform.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'editform.tpl', 12, false),)), $this); ?>
<?php if ($this->_tpl_vars['showhtml'] != 'no'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-project.tpl", 'smarty_include_vars' => array('projecttab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content-left">
<div id="content-left-in">
<div class="projects">

<div class="breadcrumb">
<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['project']['name']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['project']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, "...", true) : smarty_modifier_truncate($_tmp, 50, "...", true)); ?>
</a>
<span>&nbsp;/...</span>
</div>

<h1 class="second"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo $this->_tpl_vars['project']['name']; ?>
</h1>

<?php endif; ?>

<div class="block_in_wrapper">

	<h2><?php echo $this->_config[0]['vars']['editproject']; ?>
</h2>

	<form class="main" method="post" action="manageproject.php?action=edit&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" <?php echo 'onsubmit="return validateCompleteForm(this,\'input_error\');"'; ?>
>
	<fieldset>

	<div class="row"><label for="name"><?php echo $this->_config[0]['vars']['name']; ?>
:</label><input type="text" class="text" name="name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['name']; ?>
" value = "<?php echo $this->_tpl_vars['project']['name']; ?>
" /></div>
    
    <div class="row">
    	<label for="budget"><?php echo $this->_config[0]['vars']['service']; ?>
:</label><input type="text" class="text" name="service" id="service" required="0" realname="<?php echo $this->_config[0]['vars']['service']; ?>
" value = "<?php echo $this->_tpl_vars['project']['service']; ?>
" />
    </div>
    
    <div class="row">
        <label><?php echo $this->_config[0]['vars']['company']; ?>
:</label>
        <select name = "company" realname = "<?php echo $this->_config[0]['vars']['company']; ?>
" required="1" exclude = "-1" id = "company">
            <option value="-1" selected="selected"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
            <?php unset($this->_sections['company']);
$this->_sections['company']['name'] = 'company';
$this->_sections['company']['loop'] = is_array($_loop=$this->_tpl_vars['companies']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['company']['show'] = true;
$this->_sections['company']['max'] = $this->_sections['company']['loop'];
$this->_sections['company']['step'] = 1;
$this->_sections['company']['start'] = $this->_sections['company']['step'] > 0 ? 0 : $this->_sections['company']['loop']-1;
if ($this->_sections['company']['show']) {
    $this->_sections['company']['total'] = $this->_sections['company']['loop'];
    if ($this->_sections['company']['total'] == 0)
        $this->_sections['company']['show'] = false;
} else
    $this->_sections['company']['total'] = 0;
if ($this->_sections['company']['show']):

            for ($this->_sections['company']['index'] = $this->_sections['company']['start'], $this->_sections['company']['iteration'] = 1;
                 $this->_sections['company']['iteration'] <= $this->_sections['company']['total'];
                 $this->_sections['company']['index'] += $this->_sections['company']['step'], $this->_sections['company']['iteration']++):
$this->_sections['company']['rownum'] = $this->_sections['company']['iteration'];
$this->_sections['company']['index_prev'] = $this->_sections['company']['index'] - $this->_sections['company']['step'];
$this->_sections['company']['index_next'] = $this->_sections['company']['index'] + $this->_sections['company']['step'];
$this->_sections['company']['first']      = ($this->_sections['company']['iteration'] == 1);
$this->_sections['company']['last']       = ($this->_sections['company']['iteration'] == $this->_sections['company']['total']);
?>
                <option value = "<?php echo $this->_tpl_vars['companies'][$this->_sections['company']['index']]['ID']; ?>
" id="role<?php echo $this->_tpl_vars['companies'][$this->_sections['company']['index']]['ID']; ?>
" <?php if ($this->_tpl_vars['companies'][$this->_sections['company']['index']]['ID'] == $this->_tpl_vars['project']['company']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['companies'][$this->_sections['company']['index']]['name']; ?>
</option>
            <?php endfor; endif; ?>
        </select>
    </div>
    
	<div class="row"><label for="desc"><?php echo $this->_config[0]['vars']['description']; ?>
:</label><div class="editor"><textarea name="desc" id="desc"  rows="3" cols="1"><?php echo $this->_tpl_vars['project']['desc']; ?>
</textarea></div></div>
	<div class="row"><label for="budget"><?php echo $this->_config[0]['vars']['budget']; ?>
:</label><input type="text" class="text" name="budget" id="budget" required="0" realname="<?php echo $this->_config[0]['vars']['budget']; ?>
" value = "<?php echo $this->_tpl_vars['project']['budget']; ?>
" /></div>

	<div class="row">
		<label for="end"><?php echo $this->_config[0]['vars']['due']; ?>
:</label><input type="text" class="text" value="<?php echo $this->_tpl_vars['project']['endstring']; ?>
" name="end"  id="end"  <?php if ($this->_tpl_vars['project']['end'] == 0): ?>disabled = "disabled"<?php endif; ?> realname="<?php echo $this->_config[0]['vars']['due']; ?>
" />
		<br /><br />
		<label for="neverdue"></label><input type = "checkbox" class = "checkbox" value = "neverdue" name = "neverdue" id = "neverdue" <?php if ($this->_tpl_vars['project']['end'] == 0): ?>checked = "checked" onclick = "$('end').enable();"<?php else: ?>onclick = "$('end').value='';$('end').disabled='disabled';"<?php endif; ?>><label for = "neverdue"><?php echo $this->_config[0]['vars']['neverdue']; ?>
</label>
	</div>


	<div class="datepick">
		<div id = "datepicker_project" class="picker" style = "display:none;"></div>
	</div>

	<script type="text/javascript">
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
 = new calendar(<?php echo $this->_tpl_vars['theM']; ?>
,<?php echo $this->_tpl_vars['theY']; ?>
);
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.dayNames = ["<?php echo $this->_config[0]['vars']['monday']; ?>
","<?php echo $this->_config[0]['vars']['tuesday']; ?>
","<?php echo $this->_config[0]['vars']['wednesday']; ?>
","<?php echo $this->_config[0]['vars']['thursday']; ?>
","<?php echo $this->_config[0]['vars']['friday']; ?>
","<?php echo $this->_config[0]['vars']['saturday']; ?>
","<?php echo $this->_config[0]['vars']['sunday']; ?>
"];
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.monthNames = ["<?php echo $this->_config[0]['vars']['january']; ?>
","<?php echo $this->_config[0]['vars']['february']; ?>
","<?php echo $this->_config[0]['vars']['march']; ?>
","<?php echo $this->_config[0]['vars']['april']; ?>
","<?php echo $this->_config[0]['vars']['may']; ?>
","<?php echo $this->_config[0]['vars']['june']; ?>
","<?php echo $this->_config[0]['vars']['july']; ?>
","<?php echo $this->_config[0]['vars']['august']; ?>
","<?php echo $this->_config[0]['vars']['september']; ?>
","<?php echo $this->_config[0]['vars']['october']; ?>
","<?php echo $this->_config[0]['vars']['november']; ?>
","<?php echo $this->_config[0]['vars']['december']; ?>
"];
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.relateTo = "end";
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.getDatepicker("datepicker_project");
	</script>


	<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['send']; ?>
</button>
		<button onclick="blindtoggle('form_edit');toggleClass('edit_butn','edit-active','edit');toggleClass('sm_project','smooth','nosmooth');toggleClass('sm_project_desc','smooth','nosmooth');return false;" onfocus="this.blur();" <?php if ($this->_tpl_vars['showhtml'] != 'no'): ?> style="display:none;"<?php endif; ?>><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
	</div>

	</fieldset>
	</form>

</div> 


<?php if ($this->_tpl_vars['showhtml'] != 'no'): ?>
	<div class="content-spacer"></div>
	</div> 	</div> 	</div> 
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar-a.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>