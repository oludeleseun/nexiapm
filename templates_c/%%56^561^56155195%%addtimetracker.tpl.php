<?php /* Smarty version 2.6.19, created on 2012-08-29 14:34:18
         compiled from addtimetracker.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'addtimetracker.tpl', 57, false),)), $this); ?>
<div class="block_in_wrapper">

	<form class="main" id = "trackeradd" method = "post" action = "managetimetracker.php?action=add" <?php echo 'onsubmit="return validateCompleteForm(this,\'input_error\');'; ?>
">
	<fieldset>



	  <input type = "hidden" name = "project" value = "<?php echo $this->_tpl_vars['project']['ID']; ?>
" />

	 	<div class = "row">
	  		<label for = "ttday"><?php echo $this->_config[0]['vars']['day']; ?>
:</label>
	  		<input type = "text" class="text" style="width:80px;margin:0 6px 0 0;" id = "ttday" name = "ttday" realname = "<?php echo $this->_config[0]['vars']['date']; ?>
" />
		</div>

		<div class="datepick">
				<div id = "datepicker_addtt" class="picker" style = "display:none;"></div>
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
		theCal.relateTo = "ttday";
		theCal.keepEmpty = false;
		theCal.dateFormat = "<?php echo $this->_tpl_vars['settings']['dateformat']; ?>
";
		theCal.getDatepicker("datepicker_addtt");
        </script>

	  	<div class = "row">
	  		<label for = "started"><?php echo $this->_config[0]['vars']['started']; ?>
:</label>
	  		<input type = "text" class="text" style="width:80px;margin:0 6px 0 0;" id = "started" name = "started" required = "1" regexp="^([01]?\d|2[0123]):[012345]\d$" realname = "<?php echo $this->_config[0]['vars']['started']; ?>
 (Format: hh:mm)" />

	  		<button onclick="getnow('started');return false;" onfocus="this.blur();" title = "<?php echo $this->_config[0]['vars']['inserttime']; ?>
">hh:mm</button>
		</div>

	  	<div class = "row">
	  		<label for = "ended"><?php echo $this->_config[0]['vars']['ended']; ?>
:</label>
			<input  type = "text" class="text" style="width:80px;margin:0 6px 0 0;" id = "ended" name = "ended"  required = "1" regexp="^([01]?\d|2[0123]):[012345]\d$" realname = "<?php echo $this->_config[0]['vars']['ended']; ?>
 (Format: hh:mm)" / >

			<button onclick="getnow('ended');return false;" onfocus="this.blur();" title = "<?php echo $this->_config[0]['vars']['inserttime']; ?>
">hh:mm</button>
		</div>
        
        <div class= "row"><label for="ended"><?php echo $this->_config[0]['vars']['estimatedHours']; ?>
:</label><input type="text" class="text" name="estimatedHours" id="estimatedHours" required="1" realname="<?php echo $this->_config[0]['vars']['estimatedHours']; ?>
" /></div>

	  	<div class = "row">
	  		<label for ="trackcomm"><?php echo $this->_config[0]['vars']['comment']; ?>
:</label>
	  		<textarea name = "comment" id = "trackcomm" ></textarea>
	  	</div>

	  	<div class = "row">
			<label for = "ttask"><?php echo $this->_config[0]['vars']['task']; ?>
:</label>
			<select name = "ttask" id = "ttask" >
		  	<option value = "0" ><?php echo $this->_config[0]['vars']['chooseone']; ?>
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
"><?php echo $this->_tpl_vars['ptasks'][$this->_sections['task']['index']]['title']; ?>
</option>
		  		<?php else: ?>
		  		<option value = "<?php echo $this->_tpl_vars['ptasks'][$this->_sections['task']['index']]['ID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ptasks'][$this->_sections['task']['index']]['text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</option>
				<?php endif; ?>
			<?php endfor; endif; ?>
	  	</select>
	  	</div>



		<div class="row-butn-bottom">
			<label>&nbsp;</label>
			<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
		</div>

	</fieldset>
	</form>

</div> 