<?php /* Smarty version 2.6.19, created on 2012-08-29 16:09:15
         compiled from edittasklist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'edittasklist.tpl', 11, false),)), $this); ?>
<?php if ($this->_tpl_vars['showhtml'] != 'no'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-project.tpl", 'smarty_include_vars' => array('taskstab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content-left">
<div id="content-left-in">
<div class="tasks">


<div class="breadcrumb">
<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['projectname']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a>
<a href="managetask.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo $this->_config[0]['vars']['tasklists']; ?>
</a>
<a href="managetasklist.php?action=showtasklist&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&amp;tlid=<?php echo $this->_tpl_vars['tasklist']['ID']; ?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['tasklist']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 55, "...", true) : smarty_modifier_truncate($_tmp, 55, "...", true)); ?>
</a>
</div>

<h1 class="second"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['tasklist']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</h1>

<?php endif; ?>

			<div class="block_in_wrapper">

			<h2><?php echo $this->_config[0]['vars']['edittasklist']; ?>
</h2>

			
					<form class="main" method="post" action="managetasklist.php?action=edit&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&amp;tlid=<?php echo $this->_tpl_vars['tasklist']['ID']; ?>
" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
>
					<fieldset>

						<div class="row"><label for="name"><?php echo $this->_config[0]['vars']['name']; ?>
:</label><input type="text" value="<?php echo $this->_tpl_vars['tasklist']['name']; ?>
" name="name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['name']; ?>
" /></div>
						<div class="row"><label for="desc"><?php echo $this->_config[0]['vars']['description']; ?>
:</label><div class="editor"><textarea name="desc" id="desc"  rows="3" cols="1" ><?php echo $this->_tpl_vars['tasklist']['desc']; ?>
</textarea></div></div>

						<div class="row">
						<label for="milestone"><?php echo $this->_config[0]['vars']['milestone']; ?>
:</label>
						<select name="milestone" id="milestone" >
							<option value="0"><?php echo $this->_config[0]['vars']['chooseone']; ?>
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
" <?php if ($this->_tpl_vars['tasklist']['milestone'] == $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['ID']): ?>selected = "selected"<?php endif; ?>><?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['name']; ?>
</option>
							<?php endfor; endif; ?>
							</select>
						</div>


					<div class="row-butn-bottom">
						<label>&nbsp;</label>
						<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['send']; ?>
</button>
						<button onclick="blindtoggle('form_edit');toggleClass('edit_butn','edit-active','edit');toggleClass('sm_tasklist','smooth','nosmooth');return false;" onfocus="this.blur();" <?php if ($this->_tpl_vars['showhtml'] != 'no'): ?> style="display:none;"<?php endif; ?>><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
					</div>

					</fieldset>
					</form>

			</div> 			
			
<?php if ($this->_tpl_vars['showhtml'] != 'no'): ?>
<div class="content-spacer"></div>
</div> </div> </div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar-a.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>