<?php /* Smarty version 2.6.19, created on 2012-08-29 16:06:57
         compiled from addtasklist.tpl */ ?>
<div class = "block_in_wrapper">
	<h2><?php echo $this->_config[0]['vars']['addtasklist']; ?>
</h2>
	<form class="main" method="post" action="managetasklist.php?action=add&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" <?php echo ' onsubmit="return validateCompleteForm(this);"'; ?>
 >
	<fieldset>
			<div class="row"><label for="name"><?php echo $this->_config[0]['vars']['name']; ?>
:</label><input type="text" class="text" name="name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['name']; ?>
" /></div>
			<div class="row"><label for="desc"><?php echo $this->_config[0]['vars']['description']; ?>
:</label><div class="editor"><textarea name="desc" id="desc"  rows="3" cols="1" ></textarea></div></div>
	
	
			<div class="row">
				<label for="milestone"><?php echo $this->_config[0]['vars']['milestone']; ?>
: </label>
				<select name="milestone" id="milestone" >
				<option value="0" selected="selected"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
				<?php unset($this->_sections['stone']);
$this->_sections['stone']['name'] = 'stone';
$this->_sections['stone']['loop'] = is_array($_loop=$this->_tpl_vars['milestones']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['stone']['show'] = true;
$this->_sections['stone']['max'] = $this->_sections['stone']['loop'];
$this->_sections['stone']['step'] = 1;
$this->_sections['stone']['start'] = $this->_sections['stone']['step'] > 0 ? 0 : $this->_sections['stone']['loop']-1;
if ($this->_sections['stone']['show']) {
    $this->_sections['stone']['total'] = $this->_sections['stone']['loop'];
    if ($this->_sections['stone']['total'] == 0)
        $this->_sections['stone']['show'] = false;
} else
    $this->_sections['stone']['total'] = 0;
if ($this->_sections['stone']['show']):

            for ($this->_sections['stone']['index'] = $this->_sections['stone']['start'], $this->_sections['stone']['iteration'] = 1;
                 $this->_sections['stone']['iteration'] <= $this->_sections['stone']['total'];
                 $this->_sections['stone']['index'] += $this->_sections['stone']['step'], $this->_sections['stone']['iteration']++):
$this->_sections['stone']['rownum'] = $this->_sections['stone']['iteration'];
$this->_sections['stone']['index_prev'] = $this->_sections['stone']['index'] - $this->_sections['stone']['step'];
$this->_sections['stone']['index_next'] = $this->_sections['stone']['index'] + $this->_sections['stone']['step'];
$this->_sections['stone']['first']      = ($this->_sections['stone']['iteration'] == 1);
$this->_sections['stone']['last']       = ($this->_sections['stone']['iteration'] == $this->_sections['stone']['total']);
?>
					<option value="<?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['ID']; ?>
"><?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['name']; ?>
</option>
				<?php endfor; endif; ?>
				</select>
			</div>
	
			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
				<button onclick="blindtoggle('addlist');toggleClass('addtasklists','add','add-active');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
			</div>

	</fieldset>
</form>
</div>
<div class="content-spacer"></div>