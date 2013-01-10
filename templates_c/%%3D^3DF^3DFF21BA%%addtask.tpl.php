<?php /* Smarty version 2.6.19, created on 2012-08-29 16:08:20
         compiled from addtask.tpl */ ?>
<div class="block_in_wrapper">

	<h2><?php echo $this->_config[0]['vars']['addtask']; ?>
</h2>
	<form name = "addtaskform<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" id = "addtaskform<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" class="main" method="post" action="managetask.php?action=add&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"  <?php echo 'onsubmit="return validateCompleteForm(this,\'input_error\');'; ?>
">
	<fieldset>

	<div class="row"><label for="title"><?php echo $this->_config[0]['vars']['title']; ?>
:</label><input type="text" class="text" name="title" id="title"  realname = "<?php echo $this->_config[0]['vars']['title']; ?>
" required = "1"  /></div>
	<div class="row"><label for="text"><?php echo $this->_config[0]['vars']['text']; ?>
:</label><div class="editor"><textarea name="text" id="text" rows="3" cols="1" ></textarea></div></div>
	<div class="row"><label for="end<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
"><?php echo $this->_config[0]['vars']['due']; ?>
:</label><input type="text" class="text" name="end" realname="<?php echo $this->_config[0]['vars']['due']; ?>
"  id="end<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" required = "1" /></div>


	<div class="datepick">
		<div id = "datepicker_task<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" class="picker" style = "display:none;"></div>
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
.relateTo = "end<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
";
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.dateFormat = "<?php echo $this->_tpl_vars['settings']['dateformat']; ?>
";
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.getDatepicker("datepicker_task<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
");
	</script>

	<div class="row">
		<label for="assigned" ><?php echo $this->_config[0]['vars']['assignto']; ?>
:</label>
		<select name="assigned[]" multiple="multiple" style = "height:80px;" id="assigned" required = "1" exclude = "-1" realname = "<?php echo $this->_config[0]['vars']['assignto']; ?>
" >
			<option value="-1"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
			<?php unset($this->_sections['user']);
$this->_sections['user']['name'] = 'user';
$this->_sections['user']['loop'] = is_array($_loop=$this->_tpl_vars['assignable_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['user']['show'] = true;
$this->_sections['user']['max'] = $this->_sections['user']['loop'];
$this->_sections['user']['step'] = 1;
$this->_sections['user']['start'] = $this->_sections['user']['step'] > 0 ? 0 : $this->_sections['user']['loop']-1;
if ($this->_sections['user']['show']) {
    $this->_sections['user']['total'] = $this->_sections['user']['loop'];
    if ($this->_sections['user']['total'] == 0)
        $this->_sections['user']['show'] = false;
} else
    $this->_sections['user']['total'] = 0;
if ($this->_sections['user']['show']):

            for ($this->_sections['user']['index'] = $this->_sections['user']['start'], $this->_sections['user']['iteration'] = 1;
                 $this->_sections['user']['iteration'] <= $this->_sections['user']['total'];
                 $this->_sections['user']['index'] += $this->_sections['user']['step'], $this->_sections['user']['iteration']++):
$this->_sections['user']['rownum'] = $this->_sections['user']['iteration'];
$this->_sections['user']['index_prev'] = $this->_sections['user']['index'] - $this->_sections['user']['step'];
$this->_sections['user']['index_next'] = $this->_sections['user']['index'] + $this->_sections['user']['step'];
$this->_sections['user']['first']      = ($this->_sections['user']['iteration'] == 1);
$this->_sections['user']['last']       = ($this->_sections['user']['iteration'] == $this->_sections['user']['total']);
?>
				<option value="<?php echo $this->_tpl_vars['assignable_users'][$this->_sections['user']['index']]['ID']; ?>
" <?php if ($this->_tpl_vars['assignable_users'][$this->_sections['user']['index']]['ID'] == $this->_tpl_vars['userid']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['assignable_users'][$this->_sections['user']['index']]['name']; ?>
</option>
			<?php endfor; endif; ?>
		</select>
	</div>

	<?php if ($this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID'] != ""): ?>
	<input type="hidden" value="<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" name="tasklist" />
	<?php else: ?>
	<input type="hidden" value="<?php echo $this->_tpl_vars['tasklist']['ID']; ?>
" name="tasklist" />
	<?php endif; ?>

	<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type = "submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
		<button onclick="blindtoggle('form_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
');toggleClass('add_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
','add-active','add');toggleClass('add_butn_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
','butn_link_active','butn_link');toggleClass('sm_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
	</div>

	</fieldset>
	</form>

</div> 