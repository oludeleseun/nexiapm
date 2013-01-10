<?php /* Smarty version 2.6.19, created on 2013-01-09 14:53:20
         compiled from addmytask.tpl */ ?>
<div class="block_in_wrapper">


	<h2><?php echo $this->_config[0]['vars']['addtask']; ?>
</h2>
	<form class="main" method="post" action="managetask.php?action=add&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
"  <?php echo 'onsubmit="return validateCompleteForm(this,\'\'input_error\'\');'; ?>
">
	<fieldset>

	<div class="row"><label for="title"><?php echo $this->_config[0]['vars']['title']; ?>
:</label><input type="text" class="text" name="title" id="title" realname = "<?php echo $this->_config[0]['vars']['title']; ?>
" required = "1"  /></div>
	<div class="row"><label for="text"><?php echo $this->_config[0]['vars']['text']; ?>
:</label><div class="editor"><textarea name="text" id="text" rows="3" cols="1" ></textarea></div></div>
	<div class="row"><label for="end<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
"><?php echo $this->_config[0]['vars']['end']; ?>
:</label><input type="text" class="text" name="end" realname="<?php echo $this->_config[0]['vars']['due']; ?>
"  id="end<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" required = "1" /></div>
	
	<div class="datepick">
		<div id = "datepicker_task<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" class="picker" style = "display:none;"></div>
	</div>

	<script type="text/javascript">
	  	theCal = new calendar(<?php echo $this->_tpl_vars['theM']; ?>
,<?php echo $this->_tpl_vars['theY']; ?>
);
		theCal.dayNames = ["<?php echo $this->_config[0]['vars']['monday']; ?>
","<?php echo $this->_config[0]['vars']['tuesday']; ?>
","<?php echo $this->_config[0]['vars']['wednesday']; ?>
","<?php echo $this->_config[0]['vars']['thursday']; ?>
","<?php echo $this->_config[0]['vars']['friday']; ?>
","<?php echo $this->_config[0]['vars']['saturday']; ?>
","<?php echo $this->_config[0]['vars']['sunday']; ?>
"];
		theCal.monthNames = ["<?php echo $this->_config[0]['vars']['january']; ?>
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
		theCal.relateTo = "end<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
";
		theCal.getDatepicker("datepicker_task<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
");
	</script>

    <div class="row"><label for="tasklist"><?php echo $this->_config[0]['vars']['tasklist']; ?>
:</label>
	    <select name="tasklist" id="tasklist" required = "1" exclude = "-1" realname = "<?php echo $this->_config[0]['vars']['tasklist']; ?>
">
	    <option value="-1" selected="selected"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
	    <?php unset($this->_sections['tasklist']);
$this->_sections['tasklist']['name'] = 'tasklist';
$this->_sections['tasklist']['loop'] = is_array($_loop=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['lists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tasklist']['show'] = true;
$this->_sections['tasklist']['max'] = $this->_sections['tasklist']['loop'];
$this->_sections['tasklist']['step'] = 1;
$this->_sections['tasklist']['start'] = $this->_sections['tasklist']['step'] > 0 ? 0 : $this->_sections['tasklist']['loop']-1;
if ($this->_sections['tasklist']['show']) {
    $this->_sections['tasklist']['total'] = $this->_sections['tasklist']['loop'];
    if ($this->_sections['tasklist']['total'] == 0)
        $this->_sections['tasklist']['show'] = false;
} else
    $this->_sections['tasklist']['total'] = 0;
if ($this->_sections['tasklist']['show']):

            for ($this->_sections['tasklist']['index'] = $this->_sections['tasklist']['start'], $this->_sections['tasklist']['iteration'] = 1;
                 $this->_sections['tasklist']['iteration'] <= $this->_sections['tasklist']['total'];
                 $this->_sections['tasklist']['index'] += $this->_sections['tasklist']['step'], $this->_sections['tasklist']['iteration']++):
$this->_sections['tasklist']['rownum'] = $this->_sections['tasklist']['iteration'];
$this->_sections['tasklist']['index_prev'] = $this->_sections['tasklist']['index'] - $this->_sections['tasklist']['step'];
$this->_sections['tasklist']['index_next'] = $this->_sections['tasklist']['index'] + $this->_sections['tasklist']['step'];
$this->_sections['tasklist']['first']      = ($this->_sections['tasklist']['iteration'] == 1);
$this->_sections['tasklist']['last']       = ($this->_sections['tasklist']['iteration'] == $this->_sections['tasklist']['total']);
?>
	    <option value="<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['lists'][$this->_sections['tasklist']['index']]['ID']; ?>
"><?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['lists'][$this->_sections['tasklist']['index']]['name']; ?>
</option>
	    <?php endfor; endif; ?>
	    </select>
    </div>

    <input type="hidden" value="<?php echo $this->_tpl_vars['userid']; ?>
" name="assigned" />

	<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
		<button onclick="blindtoggle('form_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');toggleClass('add_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','add-active','add');toggleClass('add_butn_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','butn_link_active','butn_link');toggleClass('sm_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
	</div>

	</fieldset>
	</form>

</div> 