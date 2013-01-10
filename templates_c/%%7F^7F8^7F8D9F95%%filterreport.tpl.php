<?php /* Smarty version 2.6.19, created on 2012-08-29 13:51:52
         compiled from filterreport.tpl */ ?>
<div class="block_in_wrapper">


			<h2><?php echo $this->_config[0]['vars']['filterreport']; ?>
</h2>

			<form class="main" method="get" action="manageuser.php" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
 >
				<fieldset>
					<div class="row"><label for="start"><?php echo $this->_config[0]['vars']['start']; ?>
:</label><input type="text" name="start" id="start"  onfocus = "dpck.close();" value = "<?php echo $this->_tpl_vars['start']; ?>
" /></div>
	
			<div class="datepick">
				<div id = "datepicker_startfilter" class="picker" style = "display:none;"></div>
			</div>	
	
					<div class="row"><label for="end"><?php echo $this->_config[0]['vars']['end']; ?>
:</label><input type="text" name="end" id="end" onfocus = "dpck2.close();" value = "<?php echo $this->_tpl_vars['end']; ?>
"/></div>


			<div class="datepick">
				<div id = "datepicker_endfilter" class="picker" style = "display:none;"></div>
			</div>
			
			
					<div class = "row"><label for = "fproject"><?php echo $this->_config[0]['vars']['project']; ?>
</label>
						<select name = "project" id = "fproject" >
							<option value = ""><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
							<?php unset($this->_sections['proj']);
$this->_sections['proj']['name'] = 'proj';
$this->_sections['proj']['loop'] = is_array($_loop=$this->_tpl_vars['opros']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['proj']['show'] = true;
$this->_sections['proj']['max'] = $this->_sections['proj']['loop'];
$this->_sections['proj']['step'] = 1;
$this->_sections['proj']['start'] = $this->_sections['proj']['step'] > 0 ? 0 : $this->_sections['proj']['loop']-1;
if ($this->_sections['proj']['show']) {
    $this->_sections['proj']['total'] = $this->_sections['proj']['loop'];
    if ($this->_sections['proj']['total'] == 0)
        $this->_sections['proj']['show'] = false;
} else
    $this->_sections['proj']['total'] = 0;
if ($this->_sections['proj']['show']):

            for ($this->_sections['proj']['index'] = $this->_sections['proj']['start'], $this->_sections['proj']['iteration'] = 1;
                 $this->_sections['proj']['iteration'] <= $this->_sections['proj']['total'];
                 $this->_sections['proj']['index'] += $this->_sections['proj']['step'], $this->_sections['proj']['iteration']++):
$this->_sections['proj']['rownum'] = $this->_sections['proj']['iteration'];
$this->_sections['proj']['index_prev'] = $this->_sections['proj']['index'] - $this->_sections['proj']['step'];
$this->_sections['proj']['index_next'] = $this->_sections['proj']['index'] + $this->_sections['proj']['step'];
$this->_sections['proj']['first']      = ($this->_sections['proj']['iteration'] == 1);
$this->_sections['proj']['last']       = ($this->_sections['proj']['iteration'] == $this->_sections['proj']['total']);
?>
								<option value = "<?php echo $this->_tpl_vars['opros'][$this->_sections['proj']['index']]['ID']; ?>
" <?php if ($this->_tpl_vars['opros'][$this->_sections['proj']['index']]['ID'] == $this->_tpl_vars['fproject']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['opros'][$this->_sections['proj']['index']]['name']; ?>
</option>
							<?php endfor; endif; ?>
						</select>
					</div>
					<input type = "hidden" name = "action" value ="profile" />
					<input type = "hidden" name = "id" value="<?php echo $this->_tpl_vars['user']['ID']; ?>
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
					<button onclick= "javascript:blindtoggle('form_filter');toggleClass('filter_report','filter-active','filter');toggleClass('filter_butn','butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
					</div>
				</fieldset>
			</form>

</div> 