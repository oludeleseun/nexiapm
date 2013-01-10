<?php /* Smarty version 2.6.19, created on 2012-08-29 12:19:49
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'index.tpl', 80, false),array('modifier', 'nl2br', 'index.tpl', 213, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce','jsload3' => 'lightbox','stage' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-desk.tpl", 'smarty_include_vars' => array('desktab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
	<div id="content-left-in">

				<div class="infowin_left" style = "display:none;" id = "systemmsg">
			<?php if ($this->_tpl_vars['mode'] == 'projectadded'): ?>
				<span class="info_in_green"><img src="templates/standard/images/symbols/projects.png" alt=""/><?php echo $this->_config[0]['vars']['projectwasadded']; ?>
</span>
			<?php endif; ?>

						<span id = "closed" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/projects.png" alt=""/><?php echo $this->_config[0]['vars']['projectwasclosed']; ?>
</span>
			<span id = "deleted" style = "display:none;" class="info_in_red"><img src="templates/standard/images/symbols/projects.png" alt=""/><?php echo $this->_config[0]['vars']['projectwasdeleted']; ?>
</span>
		</div>

		<?php echo '
			<script type = "text/javascript">
				systemMsg(\'systemmsg\');
			</script>
		'; ?>


		<h1><?php echo $this->_config[0]['vars']['desktop']; ?>
</h1>

				<?php if ($this->_tpl_vars['projectnum'] > 0): ?>
			<div class="projects">
				<div class="headline">
					<a href="javascript:void(0);" id="projecthead_toggle" class="<?php echo $this->_tpl_vars['projectbar']; ?>
" onclick = "toggleBlock('projecthead');"></a>
						<?php if ($this->_tpl_vars['userpermissions']['projects']['add']): ?>
							<div class="wintools">
								<a class="add" href="javascript:blindtoggle('form_addmyproject');" id="add_myprojects" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');"><span><?php echo $this->_config[0]['vars']['addproject']; ?>
</span></a>
							</div>
						<?php endif; ?>
					<h2>
						<a href="myprojects.php" title="<?php echo $this->_config[0]['vars']['myprojects']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo $this->_config[0]['vars']['myprojects']; ?>
</a>
					</h2>
				</div>

				<div class="block" id="projecthead" style = "<?php echo $this->_tpl_vars['projectstyle']; ?>
">					<div id = "form_addmyproject" class="addmenue" style = "display:none;">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addproject.tpl", 'smarty_include_vars' => array('myprojects' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
					
					<table id = "desktopprojects" cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th class="a"></th>
								<th class="b" style="cursor:pointer;" onclick = "sortBlock('desktopprojects','');"><?php echo $this->_config[0]['vars']['project']; ?>
</th>
								<th class="c" style="cursor:pointer" onclick = "sortBlock('desktopprojects','done');"><?php echo $this->_config[0]['vars']['done']; ?>
</th>
								<th class="d" style="text-align:right" onclick = "sortBlock('desktopprojects','daysleft');"><?php echo $this->_config[0]['vars']['daysleft']; ?>
&nbsp;&nbsp;</th>
								<th class="tools"></th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="5"></td>
							</tr>
						</tfoot>

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
														<?php if ($this->_sections['project']['index'] % 2 == 0): ?>
							<tbody class="color-a" id="proj_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" rel = "<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
,<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['name']; ?>
,<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['daysleft']; ?>
,0,0,<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['done']; ?>
">
							<?php else: ?>
							<tbody class="color-b" id="proj_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" rel = "<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
,<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['name']; ?>
,<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['daysleft']; ?>
,0,0,<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['done']; ?>
">
							<?php endif; ?>
								<tr <?php if ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['daysleft'] < 0 && $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['daysleft'] != ""): ?> class="marker-late"<?php elseif ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['daysleft'] == '0'): ?> class="marker-today"<?php endif; ?>>
									<td>
										<?php if ($this->_tpl_vars['userpermissions']['projects']['close']): ?>
											<a class="butn_check" href="javascript:closeElement('proj_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','manageproject.php?action=close&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a>
										<?php endif; ?>
									</td>
									<td>
										<div class="toggle-in">
											<span id = "desktopprojectstoggle<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" class="acc-toggle" onclick="javascript:accord_projects.activate($$('#projecthead .accordion_toggle')[<?php echo $this->_sections['project']['index']; ?>
]);toggleAccordeon('projecthead',this);"></span>
											<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['name']; ?>
">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 35, "...", true) : smarty_modifier_truncate($_tmp, 35, "...", true)); ?>

											</a>
										</div>
									</td>
									<td>
										<div class="statusbar_b">
											<div class="complete" id = "completed" style="width:<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['done']; ?>
%;"></div>
										</div>
										<span><?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['done']; ?>
%</span>
									</td>
									<td style="text-align:right"><?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
									<td class="tools">
										<?php if ($this->_tpl_vars['userpermissions']['projects']['edit']): ?>
											<a class="tool_edit" href="manageproject.php?action=editform&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
" ></a><?php endif; ?>
										<?php if ($this->_tpl_vars['userpermissions']['projects']['del']): ?>
											<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'proj_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
\',\'manageproject.php?action=del&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
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
													<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['desc']; ?>

												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						<?php endfor; endif; ?>
					</table>

					<div class="tablemenue">
						<div class="tablemenue-in">
							<?php if ($this->_tpl_vars['userpermissions']['projects']['add']): ?>
								<a class="butn_link" href="javascript:blindtoggle('form_addmyproject');" id="add_butn_myprojects" onclick="toggleClass('add_myprojects','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addproject']; ?>
</a>
							<?php endif; ?>
						</div>
					</div>
				</div> 			</div> 			<div class="content-spacer"></div>
		<?php endif; ?>
				<?php if ($this->_tpl_vars['tasknum'] > 0): ?>
			<div class="tasks">
				<div class="headline">
					<a href="javascript:void(0);" id="taskhead_toggle" class="<?php echo $this->_tpl_vars['taskbar']; ?>
" onclick = "toggleBlock('taskhead');"></a>

					<div class="wintools">
						<div class="export-main">
							<a class="export"><span><?php echo $this->_config[0]['vars']['export']; ?>
</span></a>
							<div class="export-in"  style="width:46px;left: -46px;"> 								<a class="rss" href="managerss.php?action=rss-tasks&user=<?php echo $this->_tpl_vars['userid']; ?>
"><span><?php echo $this->_config[0]['vars']['rssfeed']; ?>
</span></a>
								<a class="ical" href="managetask.php?action=ical"><span><?php echo $this->_config[0]['vars']['icalexport']; ?>
</span></a>
							</div>
						</div>
					</div>

					<h2>
						<a href="mytasks.php" title="<?php echo $this->_config[0]['vars']['mytasks']; ?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo $this->_config[0]['vars']['mytasks']; ?>
</a>
					</h2>
				</div>

				<div class="block" id="taskhead" style = "<?php echo $this->_tpl_vars['taskstyle']; ?>
">
				
					<table id = "desktoptasks" cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th class="a"></th>
								<th class="b" style="cursor:pointer;" onclick = "sortBlock('desktoptasks','');"><?php echo $this->_config[0]['vars']['task']; ?>
</th>
								<th class="c" style="cursor:pointer;" onclick = "sortBlock('desktoptasks','project');"><?php echo $this->_config[0]['vars']['project']; ?>
</th>
								<th class="d" style="cursor:pointer;text-align:right" onclick = "sortBlock('desktoptasks','daysleft');"><?php echo $this->_config[0]['vars']['daysleft']; ?>
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
$this->_sections['task']['loop'] = is_array($_loop=$this->_tpl_vars['tasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<tbody class="color-a" id="task_<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
" rel = "<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
,<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['title']; ?>
,<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['daysleft']; ?>
,<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['pname']; ?>
">
							<?php else: ?>
							<tbody class="color-b" id="task_<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
" rel = "<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
,<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['title']; ?>
,<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['daysleft']; ?>
,<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['pname']; ?>
">
							<?php endif; ?>
								<tr <?php if ($this->_tpl_vars['tasks'][$this->_sections['task']['index']]['daysleft'] < 0): ?> class="marker-late"<?php elseif ($this->_tpl_vars['tasks'][$this->_sections['task']['index']]['daysleft'] == 0): ?> class="marker-today"<?php endif; ?>>
									<td>
										<?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?>
											<a class="butn_check" href="javascript:closeElement('task_<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
','managetask.php?action=close&amp;tid=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['project']; ?>
');" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a>
										<?php endif; ?>
									</td>
									<td>
										<div class="toggle-in">
											<span id = "desktoptaskstoggle<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
" class="acc-toggle" onclick="javascript:accord_tasks.activate($$('#taskhead .accordion_toggle')[<?php echo $this->_sections['task']['index']; ?>
]);toggleAccordeon('taskhead',this);"></span>
											<a href="managetask.php?action=showtask&amp;id=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['project']; ?>
&amp;tid=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['title']; ?>
">
											<?php if ($this->_tpl_vars['tasks'][$this->_sections['task']['index']]['title'] != ""): ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['tasks'][$this->_sections['task']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 35, "...", true) : smarty_modifier_truncate($_tmp, 35, "...", true)); ?>

											<?php else: ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['tasks'][$this->_sections['task']['index']]['text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 35, "...", true) : smarty_modifier_truncate($_tmp, 35, "...", true)); ?>

											<?php endif; ?>
											</a>
										</div>
									</td>
									<td>
										<a href = "managetask.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['project']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['tasks'][$this->_sections['task']['index']]['pname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</a>
									</td>
									<td style="text-align:right"><?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
									<td class="tools">
										<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
											<a class="tool_edit" href="managetask.php?action=editform&amp;tid=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['project']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
										<?php endif; ?>
										<?php if ($this->_tpl_vars['userpermissions']['tasks']['del']): ?>
											<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'task_<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
\',\'managetask.php?action=del&amp;tid=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['project']; ?>
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
													<?php echo ((is_array($_tmp=$this->_tpl_vars['tasks'][$this->_sections['task']['index']]['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						<?php endfor; endif; ?>
					</table>

					<div class="tablemenue"></div>
				</div> 			</div> 			<div class="content-spacer"></div>
		<?php endif; ?>
				<div class="miles">
			<div class="headline">
				<a href="javascript:void(0);" id="mileshead_toggle" class="<?php echo $this->_tpl_vars['milebar']; ?>
" onclick = "toggleBlock('mileshead');"></a>

				<div class="wintools">
					<div class = "progress" id = "progress" style = "display:none;">
						<img src = "templates/standard/images/symbols/loader-cal.gif" />
					</div>
				</div>

				<h2>
					<img src="./templates/standard/images/symbols/miles.png" alt="" /><?php echo $this->_config[0]['vars']['calendar']; ?>

				</h2>
			</div>

			<div class="block" id="mileshead" style = "<?php echo $this->_tpl_vars['tmilestyle']; ?>
">
				<div id = "thecal" class="bigcal"></div>
			</div> 		</div>			<div class="content-spacer"></div>
				<?php if ($this->_tpl_vars['msgnum'] > 0): ?>
			<div class="msgs">
				<div class="headline">
					<a href="javascript:void(0);" id="activityhead_toggle" class="<?php echo $this->_tpl_vars['actbar']; ?>
" onclick = "toggleBlock('activityhead');"></a>

					<div class="wintools">
						<div class="export-main">
							<a class="export"><span><?php echo $this->_config[0]['vars']['export']; ?>
</span></a>
							<div class="export-in"  style="width:46px;left: -46px;"> 								<a class="rss" href="managerss.php?action=mymsgs-rss&amp;user=<?php echo $this->_tpl_vars['userid']; ?>
"><span><?php echo $this->_config[0]['vars']['rssfeed']; ?>
</span></a>
								<a class="pdf" href="managemessage.php?action=mymsgs-pdf&amp;id=<?php echo $this->_tpl_vars['userid']; ?>
"><span><?php echo $this->_config[0]['vars']['pdfexport']; ?>
</span></a>
							</div>
						</div>
					</div>

					<h2>
						<a href="managemessage.php?action=mymsgs" title="<?php echo $this->_config[0]['vars']['mymessages']; ?>
"><img src="./templates/standard/images/symbols/msgs.png" alt="" /><?php echo $this->_config[0]['vars']['mymessages']; ?>
</a>
					</h2>
				</div>

				<div class="block" id="activityhead" style = "<?php echo $this->_tpl_vars['actstyle']; ?>
">
					<table id = "desktopmessages" cellpadding="0" cellspacing="0" border="0">

						<thead>
							<tr>
								<th class="a"></th>
								<th class="b"><?php echo $this->_config[0]['vars']['message']; ?>
</th>
								<th class="ce"><?php echo $this->_config[0]['vars']['project']; ?>
</th>
								<th class="de"><?php echo $this->_config[0]['vars']['by']; ?>
</th>
								<th class="e"><?php echo $this->_config[0]['vars']['on']; ?>
</th>
								<th class="tools"></th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="6"></td>
							</tr>
						</tfoot>

						<?php unset($this->_sections['message']);
$this->_sections['message']['name'] = 'message';
$this->_sections['message']['loop'] = is_array($_loop=$this->_tpl_vars['messages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['message']['show'] = true;
$this->_sections['message']['max'] = $this->_sections['message']['loop'];
$this->_sections['message']['step'] = 1;
$this->_sections['message']['start'] = $this->_sections['message']['step'] > 0 ? 0 : $this->_sections['message']['loop']-1;
if ($this->_sections['message']['show']) {
    $this->_sections['message']['total'] = $this->_sections['message']['loop'];
    if ($this->_sections['message']['total'] == 0)
        $this->_sections['message']['show'] = false;
} else
    $this->_sections['message']['total'] = 0;
if ($this->_sections['message']['show']):

            for ($this->_sections['message']['index'] = $this->_sections['message']['start'], $this->_sections['message']['iteration'] = 1;
                 $this->_sections['message']['iteration'] <= $this->_sections['message']['total'];
                 $this->_sections['message']['index'] += $this->_sections['message']['step'], $this->_sections['message']['iteration']++):
$this->_sections['message']['rownum'] = $this->_sections['message']['iteration'];
$this->_sections['message']['index_prev'] = $this->_sections['message']['index'] - $this->_sections['message']['step'];
$this->_sections['message']['index_next'] = $this->_sections['message']['index'] + $this->_sections['message']['step'];
$this->_sections['message']['first']      = ($this->_sections['message']['iteration'] == 1);
$this->_sections['message']['last']       = ($this->_sections['message']['iteration'] == $this->_sections['message']['total']);
?>
														<?php if ($this->_sections['message']['index'] % 2 == 0): ?>
							<tbody class="color-a" id="messages_<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
">
							<?php else: ?>
							<tbody class="color-b" id="messages_<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
">
							<?php endif; ?>
								<tr>
									<td>
										<?php if ($this->_tpl_vars['userpermissions']['messages']['close']): ?>
											<a class="butn_reply" href="managemessage.php?action=replyform&amp;mid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['project']; ?>
" title="<?php echo $this->_config[0]['vars']['answer']; ?>
"></a>
										<?php endif; ?>
									</td>
									<td>
										<div class="toggle-in">
											<span class="acc-toggle" onclick="javascript:accord_msgs.activate($$('#activityhead .accordion_toggle')[<?php echo $this->_sections['message']['index']; ?>
]);toggleAccordeon('activityhead',this);"></span>
											<a href="managemessage.php?action=showmessage&amp;mid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['project']; ?>
" title="<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['title']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['messages'][$this->_sections['message']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 35, "...", true) : smarty_modifier_truncate($_tmp, 35, "...", true)); ?>
</a>
										</div>
									</td>
									<td>
										<a href = "managemessage.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['project']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['messages'][$this->_sections['message']['index']]['pname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a>
									</td>
									<td>
										<a href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['user']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['messages'][$this->_sections['message']['index']]['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a>
									</td>
									<td><?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['postdate']; ?>
</td>
									<td class="tools">
										<?php if ($this->_tpl_vars['userpermissions']['messages']['edit']): ?>
											<a class="tool_edit" href="managemessage.php?action=editform&amp;mid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['project']; ?>
&amp;redir=index.php" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
										<?php endif; ?>
										<?php if ($this->_tpl_vars['userpermissions']['messages']['del']): ?>
											<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'messages_<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
\',\'managemessage.php?action=del&amp;mid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['project']; ?>
\')');"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a>
										<?php endif; ?>
									</td>
								</tr>

								<tr class="acc">
									<td colspan="6">
										<div class="accordion_toggle"></div>
										<div class="accordion_content">
											<div class="acc-in">
												<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['avatar'] != ""): ?>
													<div class="avatar"><img src = "thumb.php?width=80&amp;height=80&amp;pic=files/<?php echo $this->_tpl_vars['cl_config']; ?>
/avatar/<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['avatar']; ?>
" alt="" /></div>
												<?php else: ?>
													<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['gender'] == 'f'): ?>
														<div class="avatar"><img src = "thumb.php?width=80&amp;height=80&amp;pic=templates/standard/images/no-avatar-female.jpg" alt="" /></div>
													<?php else: ?>
														<div class="avatar"><img src = "thumb.php?width=80&amp;height=80&amp;pic=templates/standard/images/no-avatar-male.jpg" alt="" /></div>
													<?php endif; ?>
												<?php endif; ?>
												<div class="message">
													<div class="message-in">
														<?php echo ((is_array($_tmp=$this->_tpl_vars['messages'][$this->_sections['message']['index']]['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

													</div>

																										<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['tagnum'] > 1 || $this->_tpl_vars['messages'][$this->_sections['message']['index']]['milestones'][0] != ""): ?>
														<div class="content-spacer-b"></div>

																												<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['milestones'][0] != ""): ?>
															<p>
																<strong><?php echo $this->_config[0]['vars']['milestone']; ?>
:</strong>
																<a href = "managemilestone.php?action=showmilestone&amp;msid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['milestones']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['project']; ?>
"><?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['milestones']['name']; ?>
</a>
															</p>
														<?php endif; ?>

																												<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['tagnum'] > 1): ?>
															<p>
																<strong><?php echo $this->_config[0]['vars']['tags']; ?>
:</strong>
																<?php unset($this->_sections['tag']);
$this->_sections['tag']['name'] = 'tag';
$this->_sections['tag']['loop'] = is_array($_loop=$this->_tpl_vars['messages'][$this->_sections['message']['index']]['tagsarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tag']['show'] = true;
$this->_sections['tag']['max'] = $this->_sections['tag']['loop'];
$this->_sections['tag']['step'] = 1;
$this->_sections['tag']['start'] = $this->_sections['tag']['step'] > 0 ? 0 : $this->_sections['tag']['loop']-1;
if ($this->_sections['tag']['show']) {
    $this->_sections['tag']['total'] = $this->_sections['tag']['loop'];
    if ($this->_sections['tag']['total'] == 0)
        $this->_sections['tag']['show'] = false;
} else
    $this->_sections['tag']['total'] = 0;
if ($this->_sections['tag']['show']):

            for ($this->_sections['tag']['index'] = $this->_sections['tag']['start'], $this->_sections['tag']['iteration'] = 1;
                 $this->_sections['tag']['iteration'] <= $this->_sections['tag']['total'];
                 $this->_sections['tag']['index'] += $this->_sections['tag']['step'], $this->_sections['tag']['iteration']++):
$this->_sections['tag']['rownum'] = $this->_sections['tag']['iteration'];
$this->_sections['tag']['index_prev'] = $this->_sections['tag']['index'] - $this->_sections['tag']['step'];
$this->_sections['tag']['index_next'] = $this->_sections['tag']['index'] + $this->_sections['tag']['step'];
$this->_sections['tag']['first']      = ($this->_sections['tag']['iteration'] == 1);
$this->_sections['tag']['last']       = ($this->_sections['tag']['iteration'] == $this->_sections['tag']['total']);
?>
																	<a href = "managetags.php?action=gettag&tag=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['tagsarr'][$this->_sections['tag']['index']]; ?>
&amp;id=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['project']; ?>
"><?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['tagsarr'][$this->_sections['tag']['index']]; ?>
</a>,
																<?php endfor; endif; ?>
															</p>
														<?php endif; ?>
													<?php endif; ?>

																										<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][0][0] > 0): ?>
														<p class="tags-miles">
															<strong><?php echo $this->_config[0]['vars']['files']; ?>
:</strong>
														</p>

														<div class="inwrapper">
															<ul>
																<?php unset($this->_sections['file']);
$this->_sections['file']['name'] = 'file';
$this->_sections['file']['loop'] = is_array($_loop=$this->_tpl_vars['messages'][$this->_sections['message']['index']]['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file']['show'] = true;
$this->_sections['file']['max'] = $this->_sections['file']['loop'];
$this->_sections['file']['step'] = 1;
$this->_sections['file']['start'] = $this->_sections['file']['step'] > 0 ? 0 : $this->_sections['file']['loop']-1;
if ($this->_sections['file']['show']) {
    $this->_sections['file']['total'] = $this->_sections['file']['loop'];
    if ($this->_sections['file']['total'] == 0)
        $this->_sections['file']['show'] = false;
} else
    $this->_sections['file']['total'] = 0;
if ($this->_sections['file']['show']):

            for ($this->_sections['file']['index'] = $this->_sections['file']['start'], $this->_sections['file']['iteration'] = 1;
                 $this->_sections['file']['iteration'] <= $this->_sections['file']['total'];
                 $this->_sections['file']['index'] += $this->_sections['file']['step'], $this->_sections['file']['iteration']++):
$this->_sections['file']['rownum'] = $this->_sections['file']['iteration'];
$this->_sections['file']['index_prev'] = $this->_sections['file']['index'] - $this->_sections['file']['step'];
$this->_sections['file']['index_next'] = $this->_sections['file']['index'] + $this->_sections['file']['step'];
$this->_sections['file']['first']      = ($this->_sections['file']['iteration'] == 1);
$this->_sections['file']['last']       = ($this->_sections['file']['iteration'] == $this->_sections['file']['total']);
?>
																	<li>
																		<div class="itemwrapper" id="iw_<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
">

																			<table cellpadding="0" cellspacing="0" border="0">
																				<tr>
																					<td class="leftmen" valign="top">
																						<div class="inmenue"></div>
																					</td>
																					<td class="thumb">
																						<a href = "<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['datei']; ?>
" <?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[]" <?php elseif ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text]" <?php endif; ?> title="<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['name']; ?>
">
																							<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?>
																								<img src = "thumb.php?pic=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['datei']; ?>
&amp;width=32" alt="<?php echo $this->_tpl_vars['ordner'][$this->_sections['file']['index']]['name']; ?>
" />
																								<?php else: ?>
																								<img src = "templates/standard/images/files/<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['type']; ?>
.png" alt="<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['name']; ?>
" />
																							<?php endif; ?>
																						</a>
																					</td>
																					<td class="rightmen" valign="top">
																						<div class="inmenue">
																							<a class="del" href="managefile.php?action=delete&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
&amp;file=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['delete']; ?>
" onclick="fadeToggle('iw_<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
');"></a>
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td colspan="3"><span class="name">
																						<a href = "<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['datei']; ?>
" <?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[]" <?php elseif ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text]" <?php endif; ?> title="<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
</a></span>
																					</td>
																				<tr/>
																			</table>

																		</div> 																	</li>
																<?php endfor; endif; ?>
															</ul>
														</div> 														<div style="clear:both"></div>
													<?php endif; ?>
												</div> 
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						<?php endfor; endif; ?>
					</table>

					<div class="tablemenue"></div>
				</div> 			</div> 			<div class="content-spacer"></div>
		<?php endif; ?>

		<?php echo '
			<script type = "text/javascript">
			try{
			var accord_projects = new accordion(\'projecthead\');
			}
			catch(e)
			{}
			try{
			var accord_tasks = new accordion(\'taskhead\');
			}
			catch(e)
			{}
			try{
			var accord_msgs = new accordion(\'activityhead\');
			}
			catch(e)
			{}
			changeshow(\'manageajax.php?action=newcal\',\'thecal\',\'progress\');
			</script>
		'; ?>


	</div> </div> 
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