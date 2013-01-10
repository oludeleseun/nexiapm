<?php /* Smarty version 2.6.19, created on 2012-08-29 14:34:18
         compiled from calbody_project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'calbody_project.tpl', 96, false),)), $this); ?>

<table  id="timeline1" cellpadding="0" cellspacing="1" border="0" class="thecal"">

	<thead class="calhead">
		<tr>
			<th><a class="scroll_left" href = "javascript:changeshow('manageproject.php?action=cal&id=<?php echo $this->_tpl_vars['id']; ?>
&y=<?php echo $this->_tpl_vars['py']; ?>
&m=<?php echo $this->_tpl_vars['pm']; ?>
','thecal','progress');"></a></th>
			<th colspan="5" align="center">
								<?php echo $this->_tpl_vars['mstring']; ?>
 <?php echo $this->_tpl_vars['y']; ?>

			</th>
			<th><a class="scroll_right" href = "javascript:changeshow('manageproject.php?action=cal&id=<?php echo $this->_tpl_vars['id']; ?>
&y=<?php echo $this->_tpl_vars['ny']; ?>
&m=<?php echo $this->_tpl_vars['nm']; ?>
','thecal','progress');"></a></th>
	</tr>
		<tr class="dayhead">
		<th><?php echo $this->_tpl_vars['langfile']['monday']; ?>
</th>
		<th><?php echo $this->_tpl_vars['langfile']['tuesday']; ?>
</th>
		<th><?php echo $this->_tpl_vars['langfile']['wednesday']; ?>
</th>
		<th><?php echo $this->_tpl_vars['langfile']['thursday']; ?>
</th>
		<th><?php echo $this->_tpl_vars['langfile']['friday']; ?>
</th>
		<th><?php echo $this->_tpl_vars['langfile']['saturday']; ?>
</th>
		<th><?php echo $this->_tpl_vars['langfile']['sunday']; ?>
</th>
	</tr>
	</thead>

	<tbody class = "content">

	<?php unset($this->_sections['week']);
$this->_sections['week']['name'] = 'week';
$this->_sections['week']['loop'] = is_array($_loop=$this->_tpl_vars['weeks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['week']['show'] = true;
$this->_sections['week']['max'] = $this->_sections['week']['loop'];
$this->_sections['week']['step'] = 1;
$this->_sections['week']['start'] = $this->_sections['week']['step'] > 0 ? 0 : $this->_sections['week']['loop']-1;
if ($this->_sections['week']['show']) {
    $this->_sections['week']['total'] = $this->_sections['week']['loop'];
    if ($this->_sections['week']['total'] == 0)
        $this->_sections['week']['show'] = false;
} else
    $this->_sections['week']['total'] = 0;
if ($this->_sections['week']['show']):

            for ($this->_sections['week']['index'] = $this->_sections['week']['start'], $this->_sections['week']['iteration'] = 1;
                 $this->_sections['week']['iteration'] <= $this->_sections['week']['total'];
                 $this->_sections['week']['index'] += $this->_sections['week']['step'], $this->_sections['week']['iteration']++):
$this->_sections['week']['rownum'] = $this->_sections['week']['iteration'];
$this->_sections['week']['index_prev'] = $this->_sections['week']['index'] - $this->_sections['week']['step'];
$this->_sections['week']['index_next'] = $this->_sections['week']['index'] + $this->_sections['week']['step'];
$this->_sections['week']['first']      = ($this->_sections['week']['iteration'] == 1);
$this->_sections['week']['last']       = ($this->_sections['week']['iteration'] == $this->_sections['week']['total']);
?>

		<tr valign="top">

				<?php unset($this->_sections['day']);
$this->_sections['day']['name'] = 'day';
$this->_sections['day']['loop'] = is_array($_loop=$this->_tpl_vars['weeks'][$this->_sections['week']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['day']['show'] = true;
$this->_sections['day']['max'] = $this->_sections['day']['loop'];
$this->_sections['day']['step'] = 1;
$this->_sections['day']['start'] = $this->_sections['day']['step'] > 0 ? 0 : $this->_sections['day']['loop']-1;
if ($this->_sections['day']['show']) {
    $this->_sections['day']['total'] = $this->_sections['day']['loop'];
    if ($this->_sections['day']['total'] == 0)
        $this->_sections['day']['show'] = false;
} else
    $this->_sections['day']['total'] = 0;
if ($this->_sections['day']['show']):

            for ($this->_sections['day']['index'] = $this->_sections['day']['start'], $this->_sections['day']['iteration'] = 1;
                 $this->_sections['day']['iteration'] <= $this->_sections['day']['total'];
                 $this->_sections['day']['index'] += $this->_sections['day']['step'], $this->_sections['day']['iteration']++):
$this->_sections['day']['rownum'] = $this->_sections['day']['iteration'];
$this->_sections['day']['index_prev'] = $this->_sections['day']['index'] - $this->_sections['day']['step'];
$this->_sections['day']['index_next'] = $this->_sections['day']['index'] + $this->_sections['day']['step'];
$this->_sections['day']['first']      = ($this->_sections['day']['iteration'] == 1);
$this->_sections['day']['last']       = ($this->_sections['day']['iteration'] == $this->_sections['day']['total']);
?>

						<?php if ($this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['currmonth'] == 1): ?>
								<?php if ($this->_tpl_vars['thism'] == $this->_tpl_vars['m'] && $this->_tpl_vars['thisy'] == $this->_tpl_vars['y'] && $this->_tpl_vars['thisd'] == $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']): ?>
				<td class="today" id = "<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
"><a href = "javascript:void(0)" onclick = "fadeToggle('t<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
');"><?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
</a>
				<?php else: ?>
				<td class="second" id = "<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
"><a href = "javascript:void(0)" onclick = "fadeToggle('t<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
');"><?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
</a>
				<?php endif; ?>
			<?php else: ?>
				<td class="othermonth" id = "<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
"><?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>

			<?php endif; ?>

						<?php if ($this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['currmonth'] == 1): ?>
			<div id = "t<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
" class="calinmenue"  style = "display:none;" onclick="fadeToggle(this);">
			<ul>
			<li class="closewin"><a href="javascript:fadeToggle('t<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
');"><?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
.<?php echo $this->_tpl_vars['m']; ?>
.<?php echo $this->_tpl_vars['y']; ?>
</a></li>
			<li class="link"><a href="managetask.php?action=addform&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&theday=<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
&themonth=<?php echo $this->_tpl_vars['m']; ?>
&theyear=<?php echo $this->_tpl_vars['y']; ?>
"><?php echo $this->_tpl_vars['langfile']['addtask']; ?>
</a></li>
			<li class="link"><a href="managemilestone.php?action=addform&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&theday=<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
&themonth=<?php echo $this->_tpl_vars['m']; ?>
&theyear=<?php echo $this->_tpl_vars['y']; ?>
"><?php echo $this->_tpl_vars['langfile']['addmilestone']; ?>
</a></li>
			</ul>
			</div>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['currmonth'] == 1): ?>

			<div class="calcontent">
									<?php if ($this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milesnum'] > 0): ?>
						<a href = "#miles<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
" id = "mileslink<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
" ><img src = "templates/standard/images/symbols/miles.png" alt = ""></a>
						<div id = "miles<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
" style = "display:none;">
							<div class="modaltitle">
								<img src="./templates/standard/images/symbols/miles.png" alt="" /><?php echo $this->_tpl_vars['langfile']['milestones']; ?>
 <?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
.<?php echo $this->_tpl_vars['m']; ?>
.<?php echo $this->_tpl_vars['y']; ?>

								<a class="winclose" href="javascript:Control.Modal.close();"></a>
							</div>
							<div class="inmodal">
								<div class="miles">
									<div class="block">
									<table class="acc_modal" id="acc_ms_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
" cellpadding="0" cellspacing="0" border="0">
										<colgroup>
											<col class="m_a" />
											<col class="m_b" />
											<col class="m_c" />
										</colgroup>
										<thead>
											<th></th>
											<th><?php echo $this->_tpl_vars['langfile']['milestone']; ?>
</th>
											<th class="tools"><?php echo $this->_tpl_vars['langfile']['daysleft']; ?>
</th>
										</thead>
										<?php unset($this->_sections['stone']);
$this->_sections['stone']['name'] = 'stone';
$this->_sections['stone']['loop'] = is_array($_loop=$this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<?php if ($this->_sections['stone']['index'] % 2 == 0): ?>
											<tbody class="color-a" id="mile_m_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones'][$this->_sections['stone']['index']]['ID']; ?>
">
											<?php else: ?>
											<tbody class="color-b" id="mile_m_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones'][$this->_sections['stone']['index']]['ID']; ?>
">
											<?php endif; ?>
											<tr <?php if ($this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones'][$this->_sections['stone']['index']]['daysleft'] < 0): ?> class="marker-late"<?php elseif ($this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones'][$this->_sections['stone']['index']]['daysleft'] == 0): ?> class="marker-today"<?php endif; ?>>
												<td class="icon"><img src="./templates/standard/images/symbols/miles.png" alt="" /></td>
												<td>
													<div class="toggle-in">
														<span class="acc-toggle" onclick="javascript:accord_ms_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
.activate($$('#acc_ms_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
 .accordion_toggle')[<?php echo $this->_sections['stone']['index']; ?>
]);toggleAccordeon('acc_ms_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
',this);"></span>
														<a href="managemilestone.php?action=showmilestone&amp;msid=<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones'][$this->_sections['stone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones'][$this->_sections['stone']['index']]['project']; ?>
" title="<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones'][$this->_sections['stone']['index']]['title']; ?>
">
															<?php echo ((is_array($_tmp=$this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones'][$this->_sections['stone']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

														</a>
													</div>
												</td>
												<td class="tools"><?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones'][$this->_sections['stone']['index']]['daysleft']; ?>
</td>
											</tr>

											<tr class="acc">
												<td colspan="3">
												<div class="accordion_toggle"></div>
													<div class="accordion_content">
														<div class="content_in">
																<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['milestones'][$this->_sections['stone']['index']]['desc']; ?>

														</div>
													</div>
												</td>
											</tr>
										</tbody>
										<?php endfor; endif; ?>
									</table>
									</div>
								</div>
							</div>
						</div>

						<script type = "text/javascript">
						accord_ms_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
 = new accordion('acc_ms_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
');

						<?php echo '
						new Control.Modal(\'mileslink'; ?>
<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
<?php echo '\',{
						opacity: 0.8,
						position: \'absolute\',
						width: 550,
						fade: true,
						containerClassName: \'milesmodal\',
						overlayClassName: \'milesoverlay\'
						});
						</script>
						'; ?>

					<?php endif; ?>


										<?php if ($this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasksnum'] > 0): ?>
						<a href = "#tasks<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
" id = "tasklink<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
" ><img src = "templates/standard/images/symbols/task.png" alt = ""></a>
						<div id = "tasks<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
" style = "display:none;">
							<div class="modaltitle">
								<img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo $this->_tpl_vars['langfile']['tasklist']; ?>
 <?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
.<?php echo $this->_tpl_vars['m']; ?>
.<?php echo $this->_tpl_vars['y']; ?>

								<a class="winclose" href="javascript:Control.Modal.close();"></a>
							</div>
							<div class="inmodal">
								<div class="tasks">
									<div class="block">

									<table class="acc_modal" id="acc_mb_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
" cellpadding="0" cellspacing="0" border="0">
										<colgroup>
											<col class="m_a" />
											<col class="m_b" />
											<col class="m_c" />
										</colgroup>
										<thead>
											<th></th>
											<th><?php echo $this->_tpl_vars['langfile']['task']; ?>
</th>
											<th class="tools"><?php echo $this->_tpl_vars['langfile']['daysleft']; ?>
</th>
										</thead>
										<?php unset($this->_sections['task']);
$this->_sections['task']['name'] = 'task';
$this->_sections['task']['loop'] = is_array($_loop=$this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<tbody class="color-a" id="task_m_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
">
											<?php else: ?>
											<tbody class="color-b" id="task_m_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
">
											<?php endif; ?>
											<tr <?php if ($this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks'][$this->_sections['task']['index']]['daysleft'] < 0): ?> class="marker-late"<?php elseif ($this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks'][$this->_sections['task']['index']]['daysleft'] == 0): ?> class="marker-today"<?php endif; ?>>
												<td class="icon"><img src="./templates/standard/images/symbols/task.png" alt="" /></td>
												<td>
													<div class="toggle-in">
														<span class="acc-toggle" onclick="javascript:accord_mb_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
.activate($$('#acc_mb_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
 .accordion_toggle')[<?php echo $this->_sections['task']['index']; ?>
]);toggleAccordeon('acc_mb_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
',this);"></span>
														<a href="managetask.php?action=showtask&amp;tid=<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks'][$this->_sections['task']['index']]['project']; ?>
" title="<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks'][$this->_sections['task']['index']]['title']; ?>
">
															<?php echo ((is_array($_tmp=$this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks'][$this->_sections['task']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

														</a>
													</div>
												</td>
												<td class="tools"><?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks'][$this->_sections['task']['index']]['daysleft']; ?>
</td>
											</tr>

											<tr class="acc">
												<td colspan="3">
												<div class="accordion_toggle"></div>
													<div class="accordion_content">
														<div class="content_in">
																<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['tasks'][$this->_sections['task']['index']]['text']; ?>

														</div>
													</div>
												</td>
											</tr>
										</tbody>

										<?php endfor; endif; ?>

									</table>
									</div>
								</div>
							</div>
						</div>
						<!--script here  -->

			</div> 
						<script type = "text/javascript">
						accord_mb_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
 = new accordion('acc_mb_<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
');

						<?php echo '
						new Control.Modal(\'tasklink'; ?>
<?php echo $this->_tpl_vars['weeks'][$this->_sections['week']['index']][$this->_sections['day']['index']]['val']; ?>
<?php echo '\',{
						opacity: 0.8,
						position: \'absolute\',
						width: 550,
						fade: true,
						containerClassName: \'tasksmodal\',
						overlayClassName: \'tasksoverlay\'
						});

						'; ?>

						</script>




					<?php endif; ?> 
			<?php endif; ?>

			</td>


				<?php endfor; endif; ?>
		</tr>

		<?php endfor; endif; ?>

	</tbody>
</table>
<?php echo '
<script type = "text/javascript">
stopWait(\'progress\');
</script>
'; ?>