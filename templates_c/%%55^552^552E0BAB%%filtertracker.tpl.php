<?php /* Smarty version 2.6.19, created on 2012-08-29 16:07:25
         compiled from filtertracker.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'filtertracker.tpl', 43, false),)), $this); ?>
<div class="block_in_wrapper">
<h2><?php echo $this->_config[0]['vars']['filterreport']; ?>
</h2>

	<form class="main" method="post" action="managetimetracker.php?action=showproject&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
 >
	<fieldset>
		<div class="row"><label for="start"><?php echo $this->_config[0]['vars']['start']; ?>
:</label><input type="text" class="text" name="start" id="start"  realname="<?php echo $this->_config[0]['vars']['start']; ?>
" onfocus = "dpck.close();" value = "<?php echo $this->_tpl_vars['start']; ?>
" /></div>

			<div class="datepick">
				<div id = "datepicker_startfilter" class="picker" style = "display:none;"></div>
			</div>

		<div class="row"><label for="end"><?php echo $this->_config[0]['vars']['end']; ?>
:</label><input type="text" class="text" name="end" id="end"  realname="<?php echo $this->_config[0]['vars']['end']; ?>
" onfocus = "dpck2.close();" value = "<?php echo $this->_tpl_vars['end']; ?>
"/></div>

			<div class="datepick">
				<div id = "datepicker_endfilter" class="picker" style = "display:none;"></div>
			</div>

	<?php if ($this->_tpl_vars['userpermissions']['admin']['add']): ?>

		<div class="row">
			<label for="usr"><?php echo $this->_config[0]['vars']['user']; ?>
:</label>
			<select name="usr" id="usr"  realname="<?php echo $this->_config[0]['vars']['user']; ?>
">
				<option value = ""><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
				<?php unset($this->_sections['usi']);
$this->_sections['usi']['name'] = 'usi';
$this->_sections['usi']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['usi']['show'] = true;
$this->_sections['usi']['max'] = $this->_sections['usi']['loop'];
$this->_sections['usi']['step'] = 1;
$this->_sections['usi']['start'] = $this->_sections['usi']['step'] > 0 ? 0 : $this->_sections['usi']['loop']-1;
if ($this->_sections['usi']['show']) {
    $this->_sections['usi']['total'] = $this->_sections['usi']['loop'];
    if ($this->_sections['usi']['total'] == 0)
        $this->_sections['usi']['show'] = false;
} else
    $this->_sections['usi']['total'] = 0;
if ($this->_sections['usi']['show']):

            for ($this->_sections['usi']['index'] = $this->_sections['usi']['start'], $this->_sections['usi']['iteration'] = 1;
                 $this->_sections['usi']['iteration'] <= $this->_sections['usi']['total'];
                 $this->_sections['usi']['index'] += $this->_sections['usi']['step'], $this->_sections['usi']['iteration']++):
$this->_sections['usi']['rownum'] = $this->_sections['usi']['iteration'];
$this->_sections['usi']['index_prev'] = $this->_sections['usi']['index'] - $this->_sections['usi']['step'];
$this->_sections['usi']['index_next'] = $this->_sections['usi']['index'] + $this->_sections['usi']['step'];
$this->_sections['usi']['first']      = ($this->_sections['usi']['iteration'] == 1);
$this->_sections['usi']['last']       = ($this->_sections['usi']['iteration'] == $this->_sections['usi']['total']);
?>
				<option value = "<?php echo $this->_tpl_vars['users'][$this->_sections['usi']['index']]['ID']; ?>
" <?php if ($this->_tpl_vars['users'][$this->_sections['usi']['index']]['ID'] == $this->_tpl_vars['usr']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['users'][$this->_sections['usi']['index']]['name']; ?>
</option>
				<?php endfor; endif; ?>
			</select>
		</div>

	<?php else: ?>
			<input type = "hidden" name="usr" id="usr" value = "<?php echo $this->_tpl_vars['usr']; ?>
" />

	<?php endif; ?>

		<div class = "row">
			<label for = "ttask"><?php echo $this->_config[0]['vars']['task']; ?>
:</label>
			<select name = "task[]" id = "ttask"  multiple style = "height:80px;" >
		  		<option value = "" ><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
			  	<?php unset($this->_sections['task']);
$this->_sections['task']['name'] = 'task';
$this->_sections['task']['loop'] = is_array($_loop=$this->_tpl_vars['ptasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['task']['show'] = true;
$this->_sections['task']['max'] = $this->_sections['task']['loop'];
$this->_sections['task']['step'] = 1;
$this->_sections['task']['start'] = $this->_sections['task']['step'] > 0 ? 0 : $this->_sections['task']['loop']-1;
if ($this->_sections['task']['show']) {
    $this->_sections['task']['total'] = $this->_sections['task']['loop'];
    if ($this->_sections['task']['total'] == 0)
        $this->_sections['task']['show'] = false;
} else
    $this->_sections['task']['total'] = 0;
if ($this->_sections['task']['show']):

            for ($this->_sections['task']['index'] = $this->_sections['task']['start'], $this->_sections['task']['iteration'] = 1;
                 $this->_sections['task']['iteration'] <= $this->_sections['task']['total'];
                 $this->_sections['task']['index'] += $this->_sections['task']['step'], $this->_sections['task']['iteration']++):
$this->_sections['task']['rownum'] = $this->_sections['task']['iteration'];
$this->_sections['task']['index_prev'] = $this->_sections['task']['index'] - $this->_sections['task']['step'];
$this->_sections['task']['index_next'] = $this->_sections['task']['index'] + $this->_sections['task']['step'];
$this->_sections['task']['first']      = ($this->_sections['task']['iteration'] == 1);
$this->_sections['task']['last']       = ($this->_sections['task']['iteration'] == $this->_sections['task']['total']);
?>
			  		<?php if ($this->_tpl_vars['ptasks'][$this->_sections['task']['index']]['title'] != ""): ?>
			  		<option value = "<?php echo $this->_tpl_vars['ptasks'][$this->_sections['task']['index']]['ID']; ?>
" <?php if ($this->_tpl_vars['ptasks'][$this->_sections['task']['index']]['ID'] == $this->_tpl_vars['task']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['ptasks'][$this->_sections['task']['index']]['title']; ?>
</option>
			  		<?php else: ?>
			  		<option value = "<?php echo $this->_tpl_vars['ptasks'][$this->_sections['task']['index']]['ID']; ?>
" <?php if ($this->_tpl_vars['ptasks'][$this->_sections['task']['index']]['ID'] == $this->_tpl_vars['task']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['ptasks'][$this->_sections['task']['index']]['text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</option>
					<?php endif; ?>
				<?php endfor; endif; ?>
		  	</select>
		</div>

		<input type = "hidden" name = "action" value ="showproject" />
		<input type = "hidden" name = "id" value="<?php echo $this->_tpl_vars['project']['ID']; ?>
" />

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
			theCal.relateTo = "start";
			theCal.keepEmpty = true;
			theCal.getDatepicker("datepicker_startfilter");
	        </script>
			<script type="text/javascript">
			theCal2 = new calendar(<?php echo $this->_tpl_vars['theM']; ?>
,<?php echo $this->_tpl_vars['theY']; ?>
);
			theCal2.dayNames = ["<?php echo $this->_config[0]['vars']['monday']; ?>
","<?php echo $this->_config[0]['vars']['tuesday']; ?>
","<?php echo $this->_config[0]['vars']['wednesday']; ?>
","<?php echo $this->_config[0]['vars']['thursday']; ?>
","<?php echo $this->_config[0]['vars']['friday']; ?>
","<?php echo $this->_config[0]['vars']['saturday']; ?>
","<?php echo $this->_config[0]['vars']['sunday']; ?>
"];
			theCal2.monthNames = ["<?php echo $this->_config[0]['vars']['january']; ?>
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
			theCal2.relateTo = "end";
			theCal2.keepEmpty = true;
			theCal2.getDatepicker("datepicker_endfilter");
        </script>


		<div class="row-butn-bottom">
			<label>&nbsp;</label>
			<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['filter']; ?>
</button>
			<button onclick= "javascript:blindtoggle('filter');toggleClass('filter_report','filter-active','filter');toggleClass('filter_butn','butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
		</div>


	</fieldset>
	</form>

</div> 