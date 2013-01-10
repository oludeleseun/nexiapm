<?php /* Smarty version 2.6.19, created on 2013-01-09 14:53:19
         compiled from mytasks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'mytasks.tpl', 58, false),array('modifier', 'nl2br', 'mytasks.tpl', 132, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-desk.tpl", 'smarty_include_vars' => array('taskstab' => 'active')));
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
	    <?php elseif ($this->_tpl_vars['mode'] == 'listclosed'): ?>
	    <span class="info_in_red"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasclosed']; ?>
</span>
	    <?php elseif ($this->_tpl_vars['mode'] == 'listdeleted'): ?>
	    <span class="info_in_red"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasdeleted']; ?>
</span>
	    <?php endif; ?>
	</div>
	<?php echo '
	<script type = "text/javascript">
	apperar = new Effect.Appear(\'\'systemmsg\'\', { duration: 2.0 })
	 </script>
	'; ?>



	<h1><?php echo $this->_config[0]['vars']['mytasks']; ?>
</h1>

	<div class="export-main">
		<a class="export"><span><?php echo $this->_config[0]['vars']['export']; ?>
</span></a>
		<div class="export-in"  style="width:46px;left: -46px;"> 			<a class="ical" href="managetask.php?action=ical"><span><?php echo $this->_config[0]['vars']['icalexport']; ?>
</span></a>
			<a class="rss" href="managerss.php?action=rss-tasks&user=<?php echo $this->_tpl_vars['userid']; ?>
"><span><?php echo $this->_config[0]['vars']['rssfeed']; ?>
</span></a>
		</div>
	</div>

	<?php unset($this->_sections['project']);
$this->_sections['project']['name'] = 'project';
$this->_sections['project']['loop'] = is_array($_loop=$this->_tpl_vars['myprojects']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<?php if ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasknum']): ?>
			<div class="headline">
				<a href="javascript:void(0);" id="block-<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
_toggle" class="win_block" onclick = "toggleBlock('block-<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');"></a>

				<div class="wintools">
					<?php if ($this->_tpl_vars['userpermissions']['tasks']['add']): ?>
					<a class="add" href="javascript:blindtoggle('form_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');" id="add_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','butn_link_active','butn_link');toggleClass('sm_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['addtask']; ?>
</span></a>
					<?php endif; ?>
				</div>

				<h2>
					<a href="managetask.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['name']; ?>
 / <?php echo $this->_config[0]['vars']['mytasks']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 80, "...", true) : smarty_modifier_truncate($_tmp, 80, "...", true)); ?>
</a>
				</h2>
			</div>

			<div id="block-<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" class="block">

						<?php if ($this->_tpl_vars['userpermissions']['tasks']['add'] > 0): ?>
				<div id = "form_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" class="addmenue" style = "display:none;">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addmytask.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
			<?php endif; ?>

			<div class="nosmooth" id="sm_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
">
				<table id="acc_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" cellpadding="0" cellspacing="0" border="0">

					<thead>
						<tr>
							<th class="a"></th>
							<th class="b"><a href = "managetask.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
"><?php echo $this->_config[0]['vars']['tasks']; ?>
</a></th>
							<th class="c"><?php echo $this->_config[0]['vars']['tasklist']; ?>
</th>
							<th class="d" style="text-align:right"><?php echo $this->_config[0]['vars']['daysleft']; ?>
&nbsp;&nbsp;</th>
							<th class="tools"></th>
						</tr>
					</thead>

					<tfoot>
						<tr>
							<td colspan="5"></td>
						</tr>
					</tfoot>

					<?php if ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasknum'] > 0): ?>

					<?php unset($this->_sections['task']);
$this->_sections['task']['name'] = 'task';
$this->_sections['task']['loop'] = is_array($_loop=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<tbody class="color-a" id="task_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
">
					<?php else: ?>
					<tbody class="color-b" id="task_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
">
					<?php endif; ?>
						<tr <?php if ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['daysleft'] < 0): ?> class="marker-late"<?php elseif ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['daysleft'] == 0): ?> class="marker-today"<?php endif; ?>>
							<td><?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?><a class="butn_check" href="javascript:closeElement('task_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
','managetask.php?action=close&amp;tid=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a><?php endif; ?></td>
							<td>
								<div class="toggle-in">
								<span class="acc-toggle" onclick="javascript:accord_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
.activate($$('#acc_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
 .accordion_toggle')[<?php echo $this->_sections['task']['index']; ?>
]);toggleAccordeon('acc_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
',this);"></span>
									<a href="managetask.php?action=showtask&amp;tid=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['project']; ?>
" title="<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['title']; ?>
">
										<?php if ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['title'] != ""): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

										<?php else: ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

										<?php endif; ?>
									</a>
								</div>
							</td>
							<td><a href="managetasklist.php?action=showtasklist&amp;&amp;tlid=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['liste']; ?>
&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['list'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 23, "...", true) : smarty_modifier_truncate($_tmp, 23, "...", true)); ?>
</a></td>
							<td style="text-align:right"><?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
							<td class="tools">
								<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
								<a class="tool_edit" href="managetask.php?action=editform&amp;tid=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['userpermissions']['tasks']['del']): ?>
								<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'task_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
\',\'managetask.php?action=del&amp;tid=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
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
											<?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['tasks'][$this->_sections['task']['index']]['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

										</div>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
					<?php endfor; endif; ?>



					<?php else: ?>
					<tbody class="color-a">
						<tr>
						<td></td>
						<td><?php echo $this->_config[0]['vars']['notasks']; ?>
</td>
						<td></td>
						<td></td>
						<td class="tools"></td>
						</tr>
					</tbody>
					<?php endif; ?>

				</table>


								<div id="doneblock_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" class="doneblock" style="display: none;">
				<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('doneblock_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');toggleClass('donebutn_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','butn_link_active','butn_link');toggleClass('toggle-done-<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','acc-toggle','acc-toggle-active');">

						<tr>
							<td class="a"></td>
							<td class="b"><span id="toggle-done-<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" class="acc-toggle"><?php echo $this->_config[0]['vars']['donetasks']; ?>
</span></td>
							<td class="c"></td>
							<td class="d"></td>
							<td class="tools"></td>
						</tr>

				</table>

				<div class="toggleblock">
					<table cellpadding="0" cellspacing="0" border="0" id = "done_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
">
						<?php unset($this->_sections['oldtask']);
$this->_sections['oldtask']['name'] = 'oldtask';
$this->_sections['oldtask']['loop'] = is_array($_loop=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<tbody class="color-a" id="task_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
">
						<?php else: ?>
						<tbody class="color-b" id="task_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
">
						<?php endif; ?>


							<tr>
								<td class="a"><?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?><a class="butn_checked" href="javascript:closeElement('task_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
','managetask.php?action=open&amp;tid=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a><?php endif; ?></td>
								<td class="b">
									<div class="toggle-in">
									<span class="acc-toggle" onclick="javascript:done_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
.activate($$('#done_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
 .accordion_toggle')[<?php echo $this->_sections['oldtask']['index']; ?>
]);toggleAccordeon('done_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
',this);"></span>
										<a href="managetask.php?action=showtask&amp;tid=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['project']; ?>
" title="<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['title']; ?>
">
											<?php if ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['title'] != ""): ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

											<?php else: ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

											<?php endif; ?>
										</a>
									</div>
								</td>
								<td class="c"><a href="managetasklist.php?action=showtasklist&amp;&amp;tlid=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['liste']; ?>
&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['list'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 23, "...", true) : smarty_modifier_truncate($_tmp, 23, "...", true)); ?>
</a></td>
								<td class="d" style="text-align:right"><?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
								<td class="tools">
									<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
									<a class="tool_edit" href="managetask.php?action=editform&amp;tid=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['userpermissions']['tasks']['del']): ?>
									<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'task_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
\',\'managetask.php?action=del&amp;tid=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
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
												<?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['oldtasks'][$this->_sections['oldtask']['index']]['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>

						<?php endfor; endif; ?>

						
					</table>
				</div> 				</div> 
		</div> 

								<div class="tablemenue">
					<div class="tablemenue-in">
						<?php if ($this->_tpl_vars['userpermissions']['tasks']['add']): ?>
						<a class="butn_link" href="javascript:blindtoggle('form_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');" id="add_butn_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" onclick="toggleClass('add_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addtask']; ?>
</a>
						<?php endif; ?>
						<a class="butn_link" href="javascript:blindtoggle('doneblock_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');" id="donebutn_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('toggle-done-<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','acc-toggle','acc-toggle-active');"><?php echo $this->_config[0]['vars']['donetasks']; ?>
</a>
					</div>
				</div>
				

		</div> 

	<div class="content-spacer"></div>

		<?php echo '
		<script type = "text/javascript">
		var accord_'; ?>
<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
<?php echo ' = new accordion(\'\'acc_'; ?>
<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
<?php echo '\'\');
		var done_'; ?>
<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
<?php echo ' = new accordion(\'\'done_'; ?>
<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
<?php echo '\'\');
		</script>
		'; ?>


			<?php endif; ?>
		<?php endfor; endif; ?>

			<?php if ($this->_tpl_vars['tasknum'] < 1): ?>
			<b><?php echo $this->_config[0]['vars']['notasks']; ?>
</b>
			<div class="content-spacer"></div>
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