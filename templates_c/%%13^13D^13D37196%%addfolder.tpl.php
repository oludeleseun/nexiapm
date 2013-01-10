<?php /* Smarty version 2.6.19, created on 2012-08-29 16:34:30
         compiled from addfolder.tpl */ ?>
<div class="block_in_wrapper">
	<h2><?php echo $this->_config[0]['vars']['addfolder']; ?>
</h2>
	
	<form class="main" action="managefile.php?action=addfolder&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" method="post" <?php echo ' onsubmit="return validateCompleteForm(this,\'input_error\');"'; ?>
>
		<fieldset>
			<div class = "row">
				<label for = "folderparent"><?php echo $this->_config[0]['vars']['parent']; ?>
:</label>
				<select name = "folderparent" id = "folderparent">
				<option value = "0"><?php echo $this->_config[0]['vars']['rootdir']; ?>
</option>
				<?php unset($this->_sections['fold']);
$this->_sections['fold']['name'] = 'fold';
$this->_sections['fold']['loop'] = is_array($_loop=$this->_tpl_vars['allfolders']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fold']['show'] = true;
$this->_sections['fold']['max'] = $this->_sections['fold']['loop'];
$this->_sections['fold']['step'] = 1;
$this->_sections['fold']['start'] = $this->_sections['fold']['step'] > 0 ? 0 : $this->_sections['fold']['loop']-1;
if ($this->_sections['fold']['show']) {
    $this->_sections['fold']['total'] = $this->_sections['fold']['loop'];
    if ($this->_sections['fold']['total'] == 0)
        $this->_sections['fold']['show'] = false;
} else
    $this->_sections['fold']['total'] = 0;
if ($this->_sections['fold']['show']):

            for ($this->_sections['fold']['index'] = $this->_sections['fold']['start'], $this->_sections['fold']['iteration'] = 1;
                 $this->_sections['fold']['iteration'] <= $this->_sections['fold']['total'];
                 $this->_sections['fold']['index'] += $this->_sections['fold']['step'], $this->_sections['fold']['iteration']++):
$this->_sections['fold']['rownum'] = $this->_sections['fold']['iteration'];
$this->_sections['fold']['index_prev'] = $this->_sections['fold']['index'] - $this->_sections['fold']['step'];
$this->_sections['fold']['index_next'] = $this->_sections['fold']['index'] + $this->_sections['fold']['step'];
$this->_sections['fold']['first']      = ($this->_sections['fold']['iteration'] == 1);
$this->_sections['fold']['last']       = ($this->_sections['fold']['iteration'] == $this->_sections['fold']['total']);
?>
					<option value = "<?php echo $this->_tpl_vars['allfolders'][$this->_sections['fold']['index']]['ID']; ?>
">/<?php echo $this->_tpl_vars['allfolders'][$this->_sections['fold']['index']]['name']; ?>
</option>
				<?php endfor; endif; ?>
				</select>
			</div>
			
			<div class="row">
			<label for = "foldertitle"><?php echo $this->_config[0]['vars']['title']; ?>
:</label><input type = "text" class="text" name = "foldertitle" id="foldertitle" />
			</div>
			
			<div class="row">
			<label for = "folderdesc"><?php echo $this->_config[0]['vars']['description']; ?>
:</label><input type = "text" class="text" name = "folderdesc" id="folderdesc" />
			</div>
			
			<div class = "row">
				<label><?php echo $this->_config[0]['vars']['visibility']; ?>
:</label>:
				<select name = "visible[]" multiple style = "height:80px;">
					<option value = "" selected><?php echo $this->_config[0]['vars']['all']; ?>
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
" ><?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['name']; ?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
				<button onclick="blindtoggle('form_folder');toggleClass('addfolder','addfolder-active','addfolder');toggleClass('add_folder_butn','butn_link_active','butn_link');toggleClass('sm_files','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
			</div>

		</fieldset>
	</form>
</div> 