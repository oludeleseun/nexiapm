<?php /* Smarty version 2.6.19, created on 2012-08-29 16:06:57
         compiled from projecttasks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'projecttasks.tpl', 54, false),array('modifier', 'nl2br', 'projecttasks.tpl', 168, false),)), $this); ?>
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

		<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($this->_tpl_vars['mode'] == 'added'): ?>
			<span class="info_in_green"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasadded']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'edited'): ?>
			<span class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasedited']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'deleted'): ?>
			<span class="info_in_red"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasdeleted']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'opened'): ?>
			<span class="info_in_green"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasopened']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'closed'): ?>
			<span class="info_in_red"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasclosed']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'assigned'): ?>
			<span class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasassigned']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'deassigned'): ?>
			<span class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasdeassigned']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'listadded'): ?>
			<span class="info_in_green"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasadded']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'listclosed'): ?>
			<span class="info_in_red"><img src="templates/standard/images/symbols/tasklist-done.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasclosed']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'listdeleted'): ?>
			<span class="info_in_red"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasdeleted']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'listopened'): ?>
			<span class="info_in_green"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasopened']; ?>
</span>
		<?php endif; ?>

				<span id = "added" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasadded']; ?>
</span>
		<span id = "edited" style = "display:none;" class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasedited']; ?>
</span>
		<span id = "deleted" style = "display:none;" class="info_in_red"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasdeleted']; ?>
</span>
		<span id = "opened" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasopened']; ?>
</span>
		<span id = "closed" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasclosed']; ?>
</span>
		<span id = "assigned" style = "display:none;" class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasassigned']; ?>
</span>
		<span id = "deassigned" style = "display:none;" class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $this->_config[0]['vars']['taskwasdeassigned']; ?>
</span>
		<span id = "listadded" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasadded']; ?>
</span>
        <span id = "listclosed" style = "display:none;" class="info_in_red"><img src="templates/standard/images/symbols/tasklist-done.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasclosed']; ?>
</span>
		<span id = "listdeleted" style = "display:none;" class="info_in_red"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasdeleted']; ?>
</span>
		<span id = "listopened" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasopened']; ?>
</span>
	</div>
	
	<?php echo '
		<script type = "text/javascript">
			systemMsg(\'systemmsg\');
		</script>
	'; ?>

	<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 45, "...", true) : smarty_modifier_truncate($_tmp, 45, "...", true)); ?>
<span>/ <?php echo $this->_config[0]['vars']['tasklists']; ?>
</span></h1>

	<?php if ($this->_tpl_vars['userpermissions']['tasks']['add']): ?>
		<div class="add-main">
			<a id="addtasklists" class="add" href="javascript:blindtoggle('addlist');" onclick="toggleClass(this,'add-active','add');"><span><?php echo $this->_config[0]['vars']['addtasklist']; ?>
</span></a>
		</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['userpermissions']['tasks']['add']): ?> 		<div id = "addlist" class="addmenue" style="display:none;">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addtasklist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	<?php endif; ?> 
		<?php if ($this->_tpl_vars['lists'][0][0]): ?>
		<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['lists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
			<div class="headline">
				<a href="javascript:void(0);" id="block-<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
_toggle" class="win_block" onclick = "toggleBlock('block-<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
');"></a>

				<div class="wintools">
					<?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?>
						<a class="close" href="managetasklist.php?action=close&amp;tlid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['close']; ?>
</span></a>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
						<a class="edit" href="managetasklist.php?action=editform&amp;tlid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['edit']; ?>
</span></a>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['userpermissions']['tasks']['del']): ?>
						<a class="del" href="javascript:confirmit('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','managetasklist.php?action=del&amp;tlid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');"><span><?php echo $this->_config[0]['vars']['delete']; ?>
</span></a>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['userpermissions']['tasks']['add']): ?>
						<a class="add" href="javascript:blindtoggle('form_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
');" id="add_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
','butn_link_active','butn_link');toggleClass('sm_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['addtask']; ?>
</span></a>
					<?php endif; ?>
				</div>

				<h2>
					<a href="managetasklist.php?action=showtasklist&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&amp;tlid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['tasklist']; ?>
 <?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['name']; ?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 70, "...", true) : smarty_modifier_truncate($_tmp, 70, "...", true)); ?>
</a>
				</h2>
			</div>

			<div id="block-<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" class="block">

								<?php if ($this->_tpl_vars['userpermissions']['tasks']['add']): ?>
					<div id = "form_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" class="addmenue" style = "display:none;">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addtask.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				<?php endif; ?>

				<div class="nosmooth" id="sm_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
">
					<table id="acc_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" cellpadding="0" cellspacing="0" border="0">

						<thead>
							<tr>
								<th class="a"></th>
								<th class="b"><?php echo $this->_config[0]['vars']['tasks']; ?>
</th>
								<th class="c"><?php echo $this->_config[0]['vars']['user']; ?>
</th>
								<th class="days" style="text-align:right"><?php echo $this->_config[0]['vars']['daysleft']; ?>
&nbsp;&nbsp;</th>
								<th class="tools"></th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="5"></td>
							</tr>
						</tfoot>

						<?php unset($this->_sections['task']);
$this->_sections['task']['name'] = 'task';
$this->_sections['task']['loop'] = is_array($_loop=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
														<?php if ($this->_sections['task']['index'] % 2 == 0): ?>
							<tbody class="color-a" id="task_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
">
							<?php else: ?>
							<tbody class="color-b" id="task_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
">
							<?php endif; ?>
								<tr <?php if ($this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['daysleft'] < 0): ?> class="marker-late"<?php elseif ($this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['daysleft'] == 0): ?> class="marker-today"<?php endif; ?>>
									<td>
										<?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?>
											<a class="butn_check" href="javascript:closeElement('task_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
','managetask.php?action=close&amp;tid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a>
										<?php endif; ?>
									</td>
									<td>
										<div class="toggle-in">
										<span class="acc-toggle" onclick="javascript:accord_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.activate($$('#acc_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
 .accordion_toggle')[<?php echo $this->_sections['task']['index']; ?>
]);toggleAccordeon('acc_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
',this);"></span>
											<a href="managetask.php?action=showtask&amp;tid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['project']; ?>
" title="<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['title']; ?>
">
												<?php if ($this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['title'] != ""): ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

												<?php else: ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

												<?php endif; ?>
											</a>
										</div>
									</td>
									<td>
										<?php unset($this->_sections['theusers']);
$this->_sections['theusers']['name'] = 'theusers';
$this->_sections['theusers']['loop'] = is_array($_loop=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['theusers']['show'] = true;
$this->_sections['theusers']['max'] = $this->_sections['theusers']['loop'];
$this->_sections['theusers']['step'] = 1;
$this->_sections['theusers']['start'] = $this->_sections['theusers']['step'] > 0 ? 0 : $this->_sections['theusers']['loop']-1;
if ($this->_sections['theusers']['show']) {
    $this->_sections['theusers']['total'] = $this->_sections['theusers']['loop'];
    if ($this->_sections['theusers']['total'] == 0)
        $this->_sections['theusers']['show'] = false;
} else
    $this->_sections['theusers']['total'] = 0;
if ($this->_sections['theusers']['show']):

            for ($this->_sections['theusers']['index'] = $this->_sections['theusers']['start'], $this->_sections['theusers']['iteration'] = 1;
                 $this->_sections['theusers']['iteration'] <= $this->_sections['theusers']['total'];
                 $this->_sections['theusers']['index'] += $this->_sections['theusers']['step'], $this->_sections['theusers']['iteration']++):
$this->_sections['theusers']['rownum'] = $this->_sections['theusers']['iteration'];
$this->_sections['theusers']['index_prev'] = $this->_sections['theusers']['index'] - $this->_sections['theusers']['step'];
$this->_sections['theusers']['index_next'] = $this->_sections['theusers']['index'] + $this->_sections['theusers']['step'];
$this->_sections['theusers']['first']      = ($this->_sections['theusers']['iteration'] == 1);
$this->_sections['theusers']['last']       = ($this->_sections['theusers']['iteration'] == $this->_sections['theusers']['total']);
?>
											<a href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['users'][$this->_sections['theusers']['index']]['ID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['users'][$this->_sections['theusers']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</a> 
										<?php endfor; endif; ?>
									</td>
									<td style="text-align:right"><?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
									<td class="tools">
										<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
										<a class="tool_edit" href="managetask.php?action=editform&amp;tid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a><?php endif; ?>
										<?php if ($this->_tpl_vars['userpermissions']['tasks']['del']): ?>
										<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'task_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
\',\'managetask.php?action=del&amp;tid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
\')');"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a>
										<?php endif; ?>
									</td>
								</tr>

								<tr class="acc">
									<td colspan="5">
										<div class="accordion_toggle"></div>
										<div class="accordion_content">
											<div class="acc-in">
												<div class="message-in">
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['tasks'][$this->_sections['task']['index']]['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
							<?php echo '
								<script type = "text/javascript">
									var accord_'; ?>
<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
<?php echo ' = new accordion(\'block-'; ?>
<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
<?php echo '\');
								</script>
							'; ?>

						<?php endfor; endif; ?>
					</table>

										<div id="doneblock_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" class="doneblock" style="display: none;">
						<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('doneblock_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
');toggleClass('donebutn_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
','butn_link_active','butn_link');toggleClass('toggle-done-<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
','acc-toggle','acc-toggle-active');">

								<tr>
									<td class="a"></td>
									<td class="b"><span id="toggle-done-<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" class="acc-toggle"><?php echo $this->_config[0]['vars']['donetasks']; ?>
</span></td>
									<td class="c"></td>
									<td class="days"></td>
									<td class="tools"></td>
								</tr>

						</table>

						<div class="toggleblock">
							<table cellpadding="0" cellspacing="0" border="0" id = "done_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
">
								<?php unset($this->_sections['oldtask']);
$this->_sections['oldtask']['name'] = 'oldtask';
$this->_sections['oldtask']['loop'] = is_array($_loop=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['oldtask']['show'] = true;
$this->_sections['oldtask']['max'] = $this->_sections['oldtask']['loop'];
$this->_sections['oldtask']['step'] = 1;
$this->_sections['oldtask']['start'] = $this->_sections['oldtask']['step'] > 0 ? 0 : $this->_sections['oldtask']['loop']-1;
if ($this->_sections['oldtask']['show']) {
    $this->_sections['oldtask']['total'] = $this->_sections['oldtask']['loop'];
    if ($this->_sections['oldtask']['total'] == 0)
        $this->_sections['oldtask']['show'] = false;
} else
    $this->_sections['oldtask']['total'] = 0;
if ($this->_sections['oldtask']['show']):

            for ($this->_sections['oldtask']['index'] = $this->_sections['oldtask']['start'], $this->_sections['oldtask']['iteration'] = 1;
                 $this->_sections['oldtask']['iteration'] <= $this->_sections['oldtask']['total'];
                 $this->_sections['oldtask']['index'] += $this->_sections['oldtask']['step'], $this->_sections['oldtask']['iteration']++):
$this->_sections['oldtask']['rownum'] = $this->_sections['oldtask']['iteration'];
$this->_sections['oldtask']['index_prev'] = $this->_sections['oldtask']['index'] - $this->_sections['oldtask']['step'];
$this->_sections['oldtask']['index_next'] = $this->_sections['oldtask']['index'] + $this->_sections['oldtask']['step'];
$this->_sections['oldtask']['first']      = ($this->_sections['oldtask']['iteration'] == 1);
$this->_sections['oldtask']['last']       = ($this->_sections['oldtask']['iteration'] == $this->_sections['oldtask']['total']);
?>

								<?php if ($this->_sections['oldtask']['index'] % 2 == 0): ?>
								<tbody class="color-a" id="task_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
">
								<?php else: ?>
								<tbody class="color-b" id="task_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
">
								<?php endif; ?>


									<tr>
										<td class="a"><?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?><a class="butn_checked" href="javascript:closeElement('task_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
','managetask.php?action=open&amp;tid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a><?php endif; ?></td>
										<td class="b">
											<div class="toggle-in">
											<span class="acc-toggle" onclick="javascript:accord_done_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.activate($$('#done_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
 .accordion_toggle')[<?php echo $this->_sections['oldtask']['index']; ?>
]);toggleAccordeon('done_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
',this);"></span>
												<a href="managetask.php?action=showtask&amp;tid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['project']; ?>
" title="<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['title']; ?>
">
													<?php if ($this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['title'] != ""): ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

													<?php else: ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

													<?php endif; ?>
												</a>
											</div>
										</td>
										<td class="c"><a href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['user'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 23, "...", true) : smarty_modifier_truncate($_tmp, 23, "...", true)); ?>
</a></td>
										<td class="days" style="text-align:right"><?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
												<a class="tool_edit" href="managetask.php?action=editform&amp;tid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
											<?php endif; ?>
											<?php if ($this->_tpl_vars['userpermissions']['tasks']['del']): ?>
												<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'task_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
\',\'managetask.php?action=del&amp;tid=<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
\')');"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a>
											<?php endif; ?>
										</td>
									</tr>

									<tr class="acc">
										<td colspan="5">
											<div class="accordion_toggle"></div>
											<div class="accordion_content">
												<div class="acc-in">
													<div class="message-in">
														<?php echo ((is_array($_tmp=$this->_tpl_vars['lists'][$this->_sections['list']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
								
								<?php echo '
									<script type = "text/javascript">
										var accord_done_'; ?>
<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
<?php echo ' = new accordion(\'done_'; ?>
<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
<?php echo '\');
									</script>
								'; ?>

							<?php endfor; endif; ?> 
						</table>
					</div> 				</div> 			</div> 
			<div class="tablemenue">
				<div class="tablemenue-in">
					<?php if ($this->_tpl_vars['userpermissions']['tasks']['add']): ?>
						<a class="butn_link" href="javascript:blindtoggle('form_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
');" id="add_butn_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" onclick="toggleClass('add_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addtask']; ?>
</a>
					<?php endif; ?>
					<a class="butn_link" href="javascript:blindtoggle('doneblock_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
');" id="donebutn_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('toggle-done-<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
','acc-toggle','acc-toggle-active');"><?php echo $this->_config[0]['vars']['donetasks']; ?>
</a>
				</div>
			</div>
		</div> 		
		<div class="content-spacer"></div>
	<?php endfor; endif; ?> <?php endif; ?> 
<?php if ($this->_tpl_vars['oldlists'][0][0]): ?>  	<div class="headline">
		<a href="javascript:void(0);" id="block-donelists_toggle" class="win_block" onclick = "toggleBlock('block-donelists');"></a>
		<h2>
			<img src="./templates/standard/images/symbols/tasklist-done.png" alt="" /><?php echo $this->_config[0]['vars']['donetasklists']; ?>

		</h2>
	</div>

	<div id="block-donelists" class="block">
		<div class="dones">
			<table id="acc_donelists" cellpadding="0" cellspacing="0" border="0">

				<thead>
					<tr>
						<th class="a"></th>
						<th class="b"><?php echo $this->_config[0]['vars']['tasklist']; ?>
</th>
						<th class="c"></th>
						<th class="days"></th>
						<th class="tools"></th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<td colspan="5"></td>
					</tr>
				</tfoot>

				<?php unset($this->_sections['oldlist']);
$this->_sections['oldlist']['name'] = 'oldlist';
$this->_sections['oldlist']['loop'] = is_array($_loop=$this->_tpl_vars['oldlists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['oldlist']['show'] = true;
$this->_sections['oldlist']['max'] = $this->_sections['oldlist']['loop'];
$this->_sections['oldlist']['step'] = 1;
$this->_sections['oldlist']['start'] = $this->_sections['oldlist']['step'] > 0 ? 0 : $this->_sections['oldlist']['loop']-1;
if ($this->_sections['oldlist']['show']) {
    $this->_sections['oldlist']['total'] = $this->_sections['oldlist']['loop'];
    if ($this->_sections['oldlist']['total'] == 0)
        $this->_sections['oldlist']['show'] = false;
} else
    $this->_sections['oldlist']['total'] = 0;
if ($this->_sections['oldlist']['show']):

            for ($this->_sections['oldlist']['index'] = $this->_sections['oldlist']['start'], $this->_sections['oldlist']['iteration'] = 1;
                 $this->_sections['oldlist']['iteration'] <= $this->_sections['oldlist']['total'];
                 $this->_sections['oldlist']['index'] += $this->_sections['oldlist']['step'], $this->_sections['oldlist']['iteration']++):
$this->_sections['oldlist']['rownum'] = $this->_sections['oldlist']['iteration'];
$this->_sections['oldlist']['index_prev'] = $this->_sections['oldlist']['index'] - $this->_sections['oldlist']['step'];
$this->_sections['oldlist']['index_next'] = $this->_sections['oldlist']['index'] + $this->_sections['oldlist']['step'];
$this->_sections['oldlist']['first']      = ($this->_sections['oldlist']['iteration'] == 1);
$this->_sections['oldlist']['last']       = ($this->_sections['oldlist']['iteration'] == $this->_sections['oldlist']['total']);
?>
										<?php if ($this->_sections['oldlist']['index'] % 2 == 0): ?>
					<tbody class="color-a" id="task_<?php echo $this->_tpl_vars['oldlists'][$this->_sections['oldlist']['index']]['ID']; ?>
">
					<?php else: ?>
					<tbody class="color-b" id="task_<?php echo $this->_tpl_vars['oldlists'][$this->_sections['oldlist']['index']]['ID']; ?>
">
					<?php endif; ?>
						<tr <?php if ($this->_tpl_vars['oldlists'][$this->_sections['oldlist']['index']]['daysleft'] < 0): ?> class="marker-late"<?php elseif ($this->_tpl_vars['oldlists'][$this->_sections['oldlist']['index']]['daysleft'] == 0): ?> class="marker-today"<?php endif; ?>>
							<td><?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?><a class="butn_check" href="managetasklist.php?action=open&amp;tlid=<?php echo $this->_tpl_vars['oldlists'][$this->_sections['oldlist']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a><?php endif; ?></td>
							<td>
								<div class="toggle-in">
								<span class="acc-toggle" onclick="javascript:accord_donelists.activate($$('#block-donelists .accordion_toggle')[<?php echo $this->_sections['oldlist']['index']; ?>
]);toggleAccordeon('acc_<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
',this);"></span>
									<a href="managetasklist.php?action=showtasklist&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&amp;tlid=<?php echo $this->_tpl_vars['oldlists'][$this->_sections['oldlist']['index']]['ID']; ?>
">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['oldlists'][$this->_sections['oldlist']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

									</a>
								</div>
							</td>
							<td></td>
							<td><?php echo $this->_tpl_vars['oldlists'][$this->_sections['oldlist']['index']]['daysleft']; ?>
</td>
							<td class="tools">
								<?php if ($this->_tpl_vars['userpermissions']['tasks']['del']): ?>
								<a class="tool_del" href="managetasklist.php?action=del&amp;tlid=<?php echo $this->_tpl_vars['oldlists'][$this->_sections['oldlist']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a>
								<?php endif; ?>
							</td>
						</tr>

						<tr class="acc">
							<td colspan="5">
								<div class="accordion_toggle"></div>
								<div class="accordion_content">
									<div class="acc-in">
										<div class="message-in">
											<?php echo ((is_array($_tmp=$this->_tpl_vars['oldlists'][$this->_sections['oldlist']['index']]['desc'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

										</div>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				<?php endfor; endif; ?>
			</table>
			
			<div class="tablemenue"></div>
		</div> 	</div> 
	<div class="content-spacer"></div>
	
	<?php echo '
		<script type = "text/javascript">
			var accord_donelists = new accordion(\'block-donelists\');
		</script>
	'; ?>

<?php endif; ?> 
<?php if (! $this->_tpl_vars['lists'][0][0] && ! $this->_tpl_vars['oldlists'][0][0]): ?>
	<tbody class="color-a">
		<tr>
			<td></td>
			<td colspan="3" class="info"><?php echo $this->_config[0]['vars']['notasklists']; ?>
</td>
			<td class="tools"></td>
		</tr>
	</tbody>
<?php endif; ?>

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