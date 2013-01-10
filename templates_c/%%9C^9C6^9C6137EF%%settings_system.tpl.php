<?php /* Smarty version 2.6.19, created on 2012-08-29 06:02:47
         compiled from settings_system.tpl */ ?>

<div class="block_in_wrapper">

	<form class="main" method="post" action="admin.php?action=editsets" enctype="multipart/form-data" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
>
		<fieldset>

			<div class="row">
				<label for = "name"><?php echo $this->_config[0]['vars']['name']; ?>
:</label>
				<input type = "text" class="text" value = "<?php echo $this->_tpl_vars['settings']['name']; ?>
" name = "name" id="name" required = "1" realname = "<?php echo $this->_config[0]['vars']['name']; ?>
" />
			</div>

			<div class="row">
				<label for = "subtitle"><?php echo $this->_config[0]['vars']['subtitle']; ?>
:</label>
				<input type="text" class="text" value="<?php echo $this->_tpl_vars['settings']['subtitle']; ?>
" name="subtitle" id="subtitle" />
			</div>

			<div class="row">
				<label for = "locale"><?php echo $this->_config[0]['vars']['locale']; ?>
:</label>
				<select name = "locale" id="locale" required="1" realname = "<?php echo $this->_config[0]['vars']['locale']; ?>
">
					<?php unset($this->_sections['lang']);
$this->_sections['lang']['name'] = 'lang';
$this->_sections['lang']['loop'] = is_array($_loop=$this->_tpl_vars['languages_fin']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['lang']['show'] = true;
$this->_sections['lang']['max'] = $this->_sections['lang']['loop'];
$this->_sections['lang']['step'] = 1;
$this->_sections['lang']['start'] = $this->_sections['lang']['step'] > 0 ? 0 : $this->_sections['lang']['loop']-1;
if ($this->_sections['lang']['show']) {
    $this->_sections['lang']['total'] = $this->_sections['lang']['loop'];
    if ($this->_sections['lang']['total'] == 0)
        $this->_sections['lang']['show'] = false;
} else
    $this->_sections['lang']['total'] = 0;
if ($this->_sections['lang']['show']):

            for ($this->_sections['lang']['index'] = $this->_sections['lang']['start'], $this->_sections['lang']['iteration'] = 1;
                 $this->_sections['lang']['iteration'] <= $this->_sections['lang']['total'];
                 $this->_sections['lang']['index'] += $this->_sections['lang']['step'], $this->_sections['lang']['iteration']++):
$this->_sections['lang']['rownum'] = $this->_sections['lang']['iteration'];
$this->_sections['lang']['index_prev'] = $this->_sections['lang']['index'] - $this->_sections['lang']['step'];
$this->_sections['lang']['index_next'] = $this->_sections['lang']['index'] + $this->_sections['lang']['step'];
$this->_sections['lang']['first']      = ($this->_sections['lang']['iteration'] == 1);
$this->_sections['lang']['last']       = ($this->_sections['lang']['iteration'] == $this->_sections['lang']['total']);
?>
						<option value = "<?php echo $this->_tpl_vars['languages_fin'][$this->_sections['lang']['index']]['val']; ?>
" <?php if ($this->_tpl_vars['languages_fin'][$this->_sections['lang']['index']]['val'] == $this->_tpl_vars['settings']['locale']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['languages_fin'][$this->_sections['lang']['index']]['str']; ?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="row">
				<label for="timezone"><?php echo $this->_config[0]['vars']['timezone']; ?>
:</label>
				<select name="timezone" id="timezone" required="1" realname="<?php echo $this->_config[0]['vars']['timezone']; ?>
">
					<?php unset($this->_sections['timezone']);
$this->_sections['timezone']['name'] = 'timezone';
$this->_sections['timezone']['loop'] = is_array($_loop=$this->_tpl_vars['timezones']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['timezone']['show'] = true;
$this->_sections['timezone']['max'] = $this->_sections['timezone']['loop'];
$this->_sections['timezone']['step'] = 1;
$this->_sections['timezone']['start'] = $this->_sections['timezone']['step'] > 0 ? 0 : $this->_sections['timezone']['loop']-1;
if ($this->_sections['timezone']['show']) {
    $this->_sections['timezone']['total'] = $this->_sections['timezone']['loop'];
    if ($this->_sections['timezone']['total'] == 0)
        $this->_sections['timezone']['show'] = false;
} else
    $this->_sections['timezone']['total'] = 0;
if ($this->_sections['timezone']['show']):

            for ($this->_sections['timezone']['index'] = $this->_sections['timezone']['start'], $this->_sections['timezone']['iteration'] = 1;
                 $this->_sections['timezone']['iteration'] <= $this->_sections['timezone']['total'];
                 $this->_sections['timezone']['index'] += $this->_sections['timezone']['step'], $this->_sections['timezone']['iteration']++):
$this->_sections['timezone']['rownum'] = $this->_sections['timezone']['iteration'];
$this->_sections['timezone']['index_prev'] = $this->_sections['timezone']['index'] - $this->_sections['timezone']['step'];
$this->_sections['timezone']['index_next'] = $this->_sections['timezone']['index'] + $this->_sections['timezone']['step'];
$this->_sections['timezone']['first']      = ($this->_sections['timezone']['iteration'] == 1);
$this->_sections['timezone']['last']       = ($this->_sections['timezone']['iteration'] == $this->_sections['timezone']['total']);
?>
						<option value="<?php echo $this->_tpl_vars['timezones'][$this->_sections['timezone']['index']]; ?>
" <?php if ($this->_tpl_vars['timezones'][$this->_sections['timezone']['index']] == $this->_tpl_vars['settings']['timezone']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['timezones'][$this->_sections['timezone']['index']]; ?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="row">
				<label for="dateformat"><?php echo $this->_config[0]['vars']['rssuser']; ?>
:</label>
				<input type = "text" name = "rssuser" id = "rssuser" value = "<?php echo $this->_tpl_vars['settings']['rssuser']; ?>
" autocomplete = "off"/>
			</div>

			<div class="row">
				<label for="dateformat"><?php echo $this->_config[0]['vars']['rsspass']; ?>
:</label>
				<input type = "password" name = "rsspass" id = "rsspass" value = "<?php echo $this->_tpl_vars['settings']['rsspass']; ?>
" autocomplete = "off" />
			</div>

			<div class="row">
				<label for="dateformat"><?php echo $this->_config[0]['vars']['dateformat']; ?>
:</label>
				<select name = "dateformat" id = "dateformat">
					<option value = "<?php echo $this->_tpl_vars['settings']['dateformat']; ?>
" selected><?php echo $this->_tpl_vars['settings']['dateformat']; ?>
</option>
					<option value = "d.m.Y">d.m.Y</option>
					<option value = "d.m.y">d.m.y</option>
					<option value = "m/d/Y">m/d/Y</option>
					<option value = "m/d/y">m/d/y</option>
				</select>
			</div>

			<div class="row">
				<label for = "template"><?php echo $this->_config[0]['vars']['template']; ?>
:</label>
				<select name="template" id="template" required = "1" realname = "<?php echo $this->_config[0]['vars']['template']; ?>
" >
					<?php unset($this->_sections['tem']);
$this->_sections['tem']['name'] = 'tem';
$this->_sections['tem']['loop'] = is_array($_loop=$this->_tpl_vars['templates']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tem']['show'] = true;
$this->_sections['tem']['max'] = $this->_sections['tem']['loop'];
$this->_sections['tem']['step'] = 1;
$this->_sections['tem']['start'] = $this->_sections['tem']['step'] > 0 ? 0 : $this->_sections['tem']['loop']-1;
if ($this->_sections['tem']['show']) {
    $this->_sections['tem']['total'] = $this->_sections['tem']['loop'];
    if ($this->_sections['tem']['total'] == 0)
        $this->_sections['tem']['show'] = false;
} else
    $this->_sections['tem']['total'] = 0;
if ($this->_sections['tem']['show']):

            for ($this->_sections['tem']['index'] = $this->_sections['tem']['start'], $this->_sections['tem']['iteration'] = 1;
                 $this->_sections['tem']['iteration'] <= $this->_sections['tem']['total'];
                 $this->_sections['tem']['index'] += $this->_sections['tem']['step'], $this->_sections['tem']['iteration']++):
$this->_sections['tem']['rownum'] = $this->_sections['tem']['iteration'];
$this->_sections['tem']['index_prev'] = $this->_sections['tem']['index'] - $this->_sections['tem']['step'];
$this->_sections['tem']['index_next'] = $this->_sections['tem']['index'] + $this->_sections['tem']['step'];
$this->_sections['tem']['first']      = ($this->_sections['tem']['iteration'] == 1);
$this->_sections['tem']['last']       = ($this->_sections['tem']['iteration'] == $this->_sections['tem']['total']);
?>
						<option value="<?php echo $this->_tpl_vars['templates'][$this->_sections['tem']['index']]; ?>
" <?php if ($this->_tpl_vars['settings']['template'] == $this->_tpl_vars['templates'][$this->_sections['tem']['index']]): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['templates'][$this->_sections['tem']['index']]; ?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>


			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['send']; ?>
</button>
			</div>

		</fieldset>
	</form>

</div> 