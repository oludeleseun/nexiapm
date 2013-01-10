<?php /* Smarty version 2.6.19, created on 2012-08-29 16:34:30
         compiled from addfileform.tpl */ ?>
<div class="block_in_wrapper">

	<h2><?php echo $this->_config[0]['vars']['addfile']; ?>
</h2>
	<?php echo $this->_config[0]['vars']['maxsize']; ?>
: <?php echo $this->_tpl_vars['postmax']; ?>
<br/><br/>
	<form class="main" action="managefile.php?action=upload&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" method="post" enctype="multipart/form-data" <?php echo ' onsubmit="return validateCompleteForm(this,\'input_error\');"'; ?>
>
	<fieldset>
		<div class="row">
			<label for = "numfiles"><?php echo $this->_config[0]['vars']['count']; ?>
:</label>
			<select name = "numfiles" id = "numfiles" onchange = "make_inputs(this.value);">
				<option value = "1" selected="selected">1</option>
				<option value = "2">2</option>
				<option value = "3">3</option>
				<option value = "4">4</option>
				<option value = "5">5</option>
				<option value = "6">6</option>
				<option value = "7">7</option>
				<option value = "8">8</option>
				<option value = "9">9</option>
				<option value = "10">10</option>
			</select>
		</div>

		<div class = "row">
			<label for = "upfolder"><?php echo $this->_config[0]['vars']['folder']; ?>
:</label>
			<select name = "upfolder" id = "upfolder">
			<option value = ""><?php echo $this->_config[0]['vars']['rootdir']; ?>
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

		<div id = "inputs">
			<div class="row"><label for = "title"><?php echo $this->_config[0]['vars']['title']; ?>
:</label><input type = "text" name = "userfile1-title" id="title" /></div>
				<div class="row"><label for="file"><?php echo $this->_config[0]['vars']['file']; ?>
:</label>
					<div class="fileinput" >
						<input type="file" class="file" name="userfile1" id="filer"  realname="<?php echo $this->_config[0]['vars']['file']; ?>
" size="19" onchange = "file.value = this.value;" />
						<table class = "faux" cellpadding="0" cellspacing="0" border="0" style="padding:0;margin:0;border:none;">
							<tr>
								<td><input type="text" class="text-file" name="userfile1" id="file" required="1" realname="<?php echo $this->_config[0]['vars']['file']; ?>
"></td>
								<td class="choose"><button class="inner" onclick="return false;"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</button></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<label for = "tags"><?php echo $this->_config[0]['vars']['tags']; ?>
:</label><input type = "text" name = "userfile1-tags" id="tags" />
				</div>
			</div>

			<div class="row">
				<label for = "desc"><?php echo $this->_config[0]['vars']['description']; ?>
:</label><textarea name="desc" id="desc" rows="3" cols="1"></textarea>
			</div>

			<div class = "row">
				<label><?php echo $this->_config[0]['vars']['visibility']; ?>
:</label>
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

			<div class = "row">
				<label><?php echo $this->_config[0]['vars']['notify']; ?>
:</label>
				<select name = "sendto[]" multiple style = "height:100px;">
					<option value = "" disabled style = "color:black;font-weight:bold;"><?php echo $this->_config[0]['vars']['general']; ?>
</option>
					<option value = "all" selected><?php echo $this->_config[0]['vars']['all']; ?>
</option>
					<option value = "none" ><?php echo $this->_config[0]['vars']['none']; ?>
</option>
					<option value = "" disabled style = "color:black;font-weight:bold;"><?php echo $this->_config[0]['vars']['members']; ?>
</option>
					<?php unset($this->_sections['member']);
$this->_sections['member']['name'] = 'member';
$this->_sections['member']['loop'] = is_array($_loop=$this->_tpl_vars['members']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['member']['show'] = true;
$this->_sections['member']['max'] = $this->_sections['member']['loop'];
$this->_sections['member']['step'] = 1;
$this->_sections['member']['start'] = $this->_sections['member']['step'] > 0 ? 0 : $this->_sections['member']['loop']-1;
if ($this->_sections['member']['show']) {
    $this->_sections['member']['total'] = $this->_sections['member']['loop'];
    if ($this->_sections['member']['total'] == 0)
        $this->_sections['member']['show'] = false;
} else
    $this->_sections['member']['total'] = 0;
if ($this->_sections['member']['show']):

            for ($this->_sections['member']['index'] = $this->_sections['member']['start'], $this->_sections['member']['iteration'] = 1;
                 $this->_sections['member']['iteration'] <= $this->_sections['member']['total'];
                 $this->_sections['member']['index'] += $this->_sections['member']['step'], $this->_sections['member']['iteration']++):
$this->_sections['member']['rownum'] = $this->_sections['member']['iteration'];
$this->_sections['member']['index_prev'] = $this->_sections['member']['index'] - $this->_sections['member']['step'];
$this->_sections['member']['index_next'] = $this->_sections['member']['index'] + $this->_sections['member']['step'];
$this->_sections['member']['first']      = ($this->_sections['member']['iteration'] == 1);
$this->_sections['member']['last']       = ($this->_sections['member']['iteration'] == $this->_sections['member']['total']);
?>
						<option value = "<?php echo $this->_tpl_vars['members'][$this->_sections['member']['index']]['ID']; ?>
" ><?php echo $this->_tpl_vars['members'][$this->_sections['member']['index']]['name']; ?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>



	<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<img id = "fakeprogress" src = "templates/standard/images/symbols/ajax-loader.gif" alt = "fakeprogress" style = "display:none;" />

		<div id = "filesubmit" >
			<button type="submit" onclick = "$('filesubmit').hide();$('fakeprogress').show();" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
			<button type="reset" onclick="blindtoggle('form_file');toggleClass('addfile','addfile-active','addfile');toggleClass('add_file_butn','butn_link_active','butn_link');toggleClass('sm_files','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
		</div>
	</div>


	</fieldset>
	</form>

</div> 