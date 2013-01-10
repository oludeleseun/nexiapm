<?php /* Smarty version 2.6.19, created on 2012-08-29 16:07:24
         compiled from tracker_project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'tracker_project.tpl', 24, false),array('function', 'paginate_prev', 'tracker_project.tpl', 147, false),array('function', 'paginate_middle', 'tracker_project.tpl', 147, false),array('function', 'paginate_next', 'tracker_project.tpl', 147, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-project.tpl", 'smarty_include_vars' => array('timetab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
<div id="content-left-in">
<div class="timetrack">

	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($this->_tpl_vars['mode'] == 'added'): ?>
			<span class="info_in_green"><img src="templates/standard/images/symbols/timetracker.png" alt=""/><?php echo $this->_config[0]['vars']['timetracker']; ?>
 <?php echo $this->_config[0]['vars']['was']; ?>
 <?php echo $this->_config[0]['vars']['added']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'edited'): ?>
			<span class="info_in_yellow"><img src="templates/standard/images/symbols/timetracker.png" alt=""/><?php echo $this->_config[0]['vars']['timetracker']; ?>
 <?php echo $this->_config[0]['vars']['was']; ?>
 <?php echo $this->_config[0]['vars']['edited']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'deleted'): ?>
			<span class="info_in_red"><img src="templates/standard/images/symbols/timetracker.png" alt=""/><?php echo $this->_config[0]['vars']['timetracker']; ?>
 <?php echo $this->_config[0]['vars']['was']; ?>
 <?php echo $this->_config[0]['vars']['deleted']; ?>
</span>
		<?php endif; ?>
	</div>
	
	<?php echo '
		<script type = "text/javascript">
			systemMsg(\'systemmsg\');
		</script>
	'; ?>


	<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 45, "...", true) : smarty_modifier_truncate($_tmp, 45, "...", true)); ?>
<span>/ <?php echo $this->_config[0]['vars']['timetracker']; ?>
</span></h1>

	<div class="timetrack">
		<div class="headline">
			<a href="javascript:void(0);" id="acc-tracker_toggle" class="win_block" onclick = "toggleBlock('acc-tracker');"></a>

			<div class="wintools">
				<div class="export-main">
					<a class="export"><span><?php echo $this->_config[0]['vars']['export']; ?>
</span></a>
					<div class="export-in"  style="width:46px;left: -46px;"> 						<a class="pdf" href="managetimetracker.php?action=projectpdf&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
<?php if ($this->_tpl_vars['start'] != "" && $this->_tpl_vars['end'] != ""): ?>&amp;start=<?php echo $this->_tpl_vars['start']; ?>
&amp;end=<?php echo $this->_tpl_vars['end']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['usr'] > 0): ?>&amp;usr=<?php echo $this->_tpl_vars['usr']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['task'] > 0): ?>&amp;task=<?php echo $this->_tpl_vars['task']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['fproject'] > 0): ?>&amp;project=<?php echo $this->_tpl_vars['fproject']; ?>
<?php endif; ?>"><span><?php echo $this->_config[0]['vars']['pdfexport']; ?>
</span></a>
						<a class="excel" href="managetimetracker.php?action=projectxls&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
<?php if ($this->_tpl_vars['start'] != "" && $this->_tpl_vars['end'] != ""): ?>&amp;start=<?php echo $this->_tpl_vars['start']; ?>
&amp;end=<?php echo $this->_tpl_vars['end']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['usr'] > 0): ?>&amp;usr=<?php echo $this->_tpl_vars['usr']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['task'] > 0): ?>&amp;task=<?php echo $this->_tpl_vars['task']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['fproject'] > 0): ?>&amp;project=<?php echo $this->_tpl_vars['fproject']; ?>
<?php endif; ?>"><span><?php echo $this->_config[0]['vars']['excelexport']; ?>
</span></a>
					</div>
				</div>

				<div class="toolwrapper">
					<a class="filter" href="javascript:blindtoggle('filter');" id="filter_report" onclick="toggleClass(this,'filter-active','filter');toggleClass('filter_butn','butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['filterreport']; ?>
</span></a>
				</div>
			</div>

			<h2>
				<img src="./templates/standard/images/symbols/timetracker.png" alt="" /><?php echo $this->_config[0]['vars']['report']; ?>

			</h2>
		</div>

		<div class="block" id="acc-tracker">

		<div id = "filter" class="addmenue" style = "display:none;"> 			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "filtertracker.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div> 
		<div class="nosmooth" id="sm_report">
		
			<table cellpadding="0" cellspacing="0" border="0">
				<thead>
					<tr>
						<th class="a"></th>
						<th class="b"><?php echo $this->_config[0]['vars']['user']; ?>
</th>
						<th class="cf"><?php echo $this->_config[0]['vars']['day']; ?>
</th>
						<th class="cf"><?php echo $this->_config[0]['vars']['started']; ?>
</th>
						<th class="cf"><?php echo $this->_config[0]['vars']['ended']; ?>
</th>
						<th class="e" style="text-align:right"><?php echo $this->_config[0]['vars']['hours']; ?>
&nbsp;&nbsp;</th>
						<th class="tools"></th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<td colspan="6"></td>
					</tr>
				</tfoot>

				<?php unset($this->_sections['track']);
$this->_sections['track']['name'] = 'track';
$this->_sections['track']['loop'] = is_array($_loop=$this->_tpl_vars['tracker']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['track']['show'] = true;
$this->_sections['track']['max'] = $this->_sections['track']['loop'];
$this->_sections['track']['step'] = 1;
$this->_sections['track']['start'] = $this->_sections['track']['step'] > 0 ? 0 : $this->_sections['track']['loop']-1;
if ($this->_sections['track']['show']) {
    $this->_sections['track']['total'] = $this->_sections['track']['loop'];
    if ($this->_sections['track']['total'] == 0)
        $this->_sections['track']['show'] = false;
} else
    $this->_sections['track']['total'] = 0;
if ($this->_sections['track']['show']):

            for ($this->_sections['track']['index'] = $this->_sections['track']['start'], $this->_sections['track']['iteration'] = 1;
                 $this->_sections['track']['iteration'] <= $this->_sections['track']['total'];
                 $this->_sections['track']['index'] += $this->_sections['track']['step'], $this->_sections['track']['iteration']++):
$this->_sections['track']['rownum'] = $this->_sections['track']['iteration'];
$this->_sections['track']['index_prev'] = $this->_sections['track']['index'] - $this->_sections['track']['step'];
$this->_sections['track']['index_next'] = $this->_sections['track']['index'] + $this->_sections['track']['step'];
$this->_sections['track']['first']      = ($this->_sections['track']['iteration'] == 1);
$this->_sections['track']['last']       = ($this->_sections['track']['iteration'] == $this->_sections['track']['total']);
?>

										<?php if ($this->_sections['track']['index'] % 2 == 0): ?>
					<tbody class="color-a" id="track_<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['ID']; ?>
">
					<?php else: ?>
					<tbody class="color-b" id="track_<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['ID']; ?>
">
					<?php endif; ?>
						<tr>
							<td></td>
							<td>
								<div class="toggle-in">
								<span class="acc-toggle" onclick="javascript:accord_tracker.activate($$('#acc-tracker .accordion_toggle')[<?php echo $this->_sections['track']['index']; ?>
]);toggleAccordeon('acc-tracker',this);"></span>
									<a href = "manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['user']; ?>
" title="<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['pname']; ?>
">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['tracker'][$this->_sections['track']['index']]['uname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 16, "...", true) : smarty_modifier_truncate($_tmp, 16, "...", true)); ?>

									</a>
								</div>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['tracker'][$this->_sections['track']['index']]['daystring'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 12, "...", true) : smarty_modifier_truncate($_tmp, 12, "...", true)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['tracker'][$this->_sections['track']['index']]['startstring'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 12, "...", true) : smarty_modifier_truncate($_tmp, 12, "...", true)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['tracker'][$this->_sections['track']['index']]['endstring'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 12, "...", true) : smarty_modifier_truncate($_tmp, 12, "...", true)); ?>
</td>
							<td style="text-align:right"><?php echo ((is_array($_tmp=$this->_tpl_vars['tracker'][$this->_sections['track']['index']]['hours'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 12, "...", true) : smarty_modifier_truncate($_tmp, 12, "...", true)); ?>
&nbsp;&nbsp;</td>
							<td class="tools">
								<?php if ($this->_tpl_vars['userpermissions']['timetracker']['edit']): ?>
									<a class="tool_edit" href="managetimetracker.php?action=editform&amp;tid=<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['userpermissions']['timetracker']['del']): ?>
									<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'track_<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['ID']; ?>
\',\'managetimetracker.php?action=del&amp;tid=<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
\')');"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a>
								<?php endif; ?>
							</td>
						</tr>

						<tr class="acc">
							<td colspan="7">
								<div class="accordion_toggle"></div>
								<div class="accordion_content">
									<div class="acc-in">
										<?php if ($this->_tpl_vars['tracker'][$this->_sections['track']['index']]['comment'] != ""): ?>
											<strong><?php echo $this->_config[0]['vars']['comment']; ?>
:</strong><br /><?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['comment']; ?>

										<?php endif; ?>
                                        <p class="tags-miles">
                                        <?php if ($this->_tpl_vars['tracker'][$this->_sections['track']['index']]['estimatedHours'] != ""): ?>
											<strong><?php echo $this->_config[0]['vars']['estimatedHours']; ?>
:</strong> <?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['estimatedHours']; ?>

										<?php endif; ?>
                                        </p>
										<?php if ($this->_tpl_vars['tracker'][$this->_sections['track']['index']]['task'] > 0): ?>
											<p class="tags-miles">
											<strong><?php echo $this->_config[0]['vars']['task']; ?>
:</strong><br />
											<a href = "managetask.php?action=showtask&amp;tid=<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['task']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['tname']; ?>
</a>
											</p>
										<?php endif; ?>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				<?php endfor; endif; ?>

				<tbody class="tableend">
					<tr>
						<td></td>
						<td colspan="4"><strong><?php echo $this->_config[0]['vars']['totalhours']; ?>
:</strong></td>
						<td style="text-align:right"><strong><?php echo $this->_tpl_vars['totaltime']; ?>
</strong>&nbsp;&nbsp;</td>
						<td class="tools"></td>
					</tr>
				</tbody>
				<tbody class="paging">
					<tr>
						<td></td>
						<td colspan="5">
							<div id="paging">
								<?php echo smarty_function_paginate_prev(array(), $this);?>
 <?php echo smarty_function_paginate_middle(array(), $this);?>
 <?php echo smarty_function_paginate_next(array(), $this);?>

							</div>
						</td>
						<td class="tools"></td>
					</tr>
				</tbody>
			</table>
		</div> 
		<div class="tablemenue">
			<div class="tablemenue-in">
				<a class="butn_link" href="javascript:blindtoggle('filter');" id="filter_butn" onclick="toggleClass('filter_report','filter-active','filter');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['filterreport']; ?>
</a>
			</div>
		</div>
	</div> 	
</div> 
<div class="content-spacer"></div>
		
<?php echo '
	<script type = "text/javascript">
		var accord_tracker = new accordion(\'acc-tracker\');
	</script>
'; ?>


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