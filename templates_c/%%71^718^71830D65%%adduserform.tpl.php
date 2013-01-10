<?php /* Smarty version 2.6.19, created on 2012-08-29 14:49:01
         compiled from adduserform.tpl */ ?>
<div class="block_in_wrapper">
	<form class="main" method="post" action="admin.php?action=adduser" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
>
		<fieldset>

			<div class="row">
				<label for="name"><?php echo $this->_config[0]['vars']['name']; ?>
:</label>
				<input type="text" name="name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['name']; ?>
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
"><?php echo $this->_tpl_vars['companies'][$this->_sections['company']['index']]['name']; ?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>
            <div class="row">
				<label for="designation"><?php echo $this->_config[0]['vars']['designation']; ?>
:</label>
				<input type="text" name="designation" id="desgination" required="1" realname="<?php echo $this->_config[0]['vars']['designation']; ?>
" />
			</div>
            <div class="row">
				<label for="gradelevel"><?php echo $this->_config[0]['vars']['gradelevel']; ?>
:</label>
				<input type="text" name="gradelevel" id="gradelevel" required="1" realname="<?php echo $this->_config[0]['vars']['gradelevel']; ?>
" />
			</div>
            <div class="row">
				<label for="employmentdate"><?php echo $this->_config[0]['vars']['employmentdate']; ?>
:</label>
				<input type="text" name="employmentdate" id="employmentdate" required="1" realname="<?php echo $this->_config[0]['vars']['employmentdate']; ?>
" />
			</div>
            <div class="row">
				<label for="dob"><?php echo $this->_config[0]['vars']['dob']; ?>
:</label>
				<input type="text" name="dob" id="dob" required="1" realname="<?php echo $this->_config[0]['vars']['dob']; ?>
" regexp="<?php echo '\\d{2}.\\d{2}.\\d{4}'; ?>
" />
			</div>
            <div class="datepick">
				<div id = "add_user" class="picker" style = "display:none;"></div>
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
			theCal.relateTo = "dob";
			theCal.dateFormat = "<?php echo $this->_tpl_vars['settings']['dateformat']; ?>
";
			theCal.getDatepicker("add_user");
		</script>
			<div class="row">
				<label for="email"><?php echo $this->_config[0]['vars']['email']; ?>
:</label>
				<input type="text" name="email" id="email" realname="<?php echo $this->_config[0]['vars']['email']; ?>
" />
			</div>
			<div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['password']; ?>
:</label>
				<input type="text" name="pass" id="pass" required="1" realname="<?php echo $this->_config[0]['vars']['password']; ?>
" />
			</div>
			<div class = "row">
				<label id = "rate"><?php echo $this->_config[0]['vars']['rate']; ?>
:</label>
				<input type = "text" name = "rate" id = "rate" />
			</div>

			<?php if ($this->_tpl_vars['projects']): ?> 				<div class="clear_both_b"></div>
				
				<div class="row">
					<label><?php echo $this->_config[0]['vars']['projects']; ?>
:</label>
					<div style="float:left;">
						<?php unset($this->_sections['project']);
$this->_sections['project']['name'] = 'project';
$this->_sections['project']['loop'] = is_array($_loop=$this->_tpl_vars['projects']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['project']['show'] = true;
$this->_sections['project']['max'] = $this->_sections['project']['loop'];
$this->_sections['project']['step'] = 1;
$this->_sections['project']['start'] = $this->_sections['project']['step'] > 0 ? 0 : $this->_sections['project']['loop']-1;
if ($this->_sections['project']['show']) {
    $this->_sections['project']['total'] = $this->_sections['project']['loop'];
    if ($this->_sections['project']['total'] == 0)
        $this->_sections['project']['show'] = false;
} else
    $this->_sections['project']['total'] = 0;
if ($this->_sections['project']['show']):

            for ($this->_sections['project']['index'] = $this->_sections['project']['start'], $this->_sections['project']['iteration'] = 1;
                 $this->_sections['project']['iteration'] <= $this->_sections['project']['total'];
                 $this->_sections['project']['index'] += $this->_sections['project']['step'], $this->_sections['project']['iteration']++):
$this->_sections['project']['rownum'] = $this->_sections['project']['iteration'];
$this->_sections['project']['index_prev'] = $this->_sections['project']['index'] - $this->_sections['project']['step'];
$this->_sections['project']['index_next'] = $this->_sections['project']['index'] + $this->_sections['project']['step'];
$this->_sections['project']['first']      = ($this->_sections['project']['iteration'] == 1);
$this->_sections['project']['last']       = ($this->_sections['project']['iteration'] == $this->_sections['project']['total']);
?>
							<div class="row">
								<input type="checkbox" class="checkbox" value="<?php echo $this->_tpl_vars['projects'][$this->_sections['project']['index']]['ID']; ?>
" name="assignto[]" id="<?php echo $this->_tpl_vars['projects'][$this->_sections['project']['index']]['ID']; ?>
" /><label for="<?php echo $this->_tpl_vars['projects'][$this->_sections['project']['index']]['ID']; ?>
" style="width:210px;"><?php echo $this->_tpl_vars['projects'][$this->_sections['project']['index']]['name']; ?>
</label>
							</div>
						<?php endfor; endif; ?>
					</div>
				</div>
				
				<div class="clear_both_b"></div>
			<?php endif; ?>
			
			<div class="row">
				<label><?php echo $this->_config[0]['vars']['role']; ?>
:</label>
				<select name = "role" realname = "<?php echo $this->_config[0]['vars']['role']; ?>
" required="1" exclude = "-1" id = "roleselect">
					<option value="-1" selected="selected"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
					<?php unset($this->_sections['role']);
$this->_sections['role']['name'] = 'role';
$this->_sections['role']['loop'] = is_array($_loop=$this->_tpl_vars['roles']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['role']['show'] = true;
$this->_sections['role']['max'] = $this->_sections['role']['loop'];
$this->_sections['role']['step'] = 1;
$this->_sections['role']['start'] = $this->_sections['role']['step'] > 0 ? 0 : $this->_sections['role']['loop']-1;
if ($this->_sections['role']['show']) {
    $this->_sections['role']['total'] = $this->_sections['role']['loop'];
    if ($this->_sections['role']['total'] == 0)
        $this->_sections['role']['show'] = false;
} else
    $this->_sections['role']['total'] = 0;
if ($this->_sections['role']['show']):

            for ($this->_sections['role']['index'] = $this->_sections['role']['start'], $this->_sections['role']['iteration'] = 1;
                 $this->_sections['role']['iteration'] <= $this->_sections['role']['total'];
                 $this->_sections['role']['index'] += $this->_sections['role']['step'], $this->_sections['role']['iteration']++):
$this->_sections['role']['rownum'] = $this->_sections['role']['iteration'];
$this->_sections['role']['index_prev'] = $this->_sections['role']['index'] - $this->_sections['role']['step'];
$this->_sections['role']['index_next'] = $this->_sections['role']['index'] + $this->_sections['role']['step'];
$this->_sections['role']['first']      = ($this->_sections['role']['iteration'] == 1);
$this->_sections['role']['last']       = ($this->_sections['role']['iteration'] == $this->_sections['role']['total']);
?>
						<option value = "<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['ID']; ?>
" id="role<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['ID']; ?>
"><?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['name']; ?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>
			
			<div class="clear_both_b"></div>
			
			<div class="row">
				<label>&nbsp;</label>
				<div class="butn">
					<button type="submit"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
				</div>
				<a href = "javascript:blindtoggle('form_member');" class="butn_link"><span><?php echo $this->_config[0]['vars']['cancel']; ?>
</span></a>
			</div>

		</fieldset>
	</form>
</div> 