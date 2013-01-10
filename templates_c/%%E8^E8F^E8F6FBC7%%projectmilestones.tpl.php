<?php /* Smarty version 2.6.19, created on 2012-08-29 14:34:15
         compiled from projectmilestones.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'projectmilestones.tpl', 27, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-project.tpl", 'smarty_include_vars' => array('milestab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
	<div id="content-left-in">
		<div class="miles">
			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				<?php if ($this->_tpl_vars['mode'] == 'added'): ?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $this->_config[0]['vars']['milestonewasadded']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'edited'): ?>
					<span class="info_in_yellow"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $this->_config[0]['vars']['milestonewasedited']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'deleted'): ?>
					<span class="info_in_red"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $this->_config[0]['vars']['milestonewasdeleted']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'opened'): ?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $this->_config[0]['vars']['milestonewasopened']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'closed'): ?>
					<span class="info_in_red"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $this->_config[0]['vars']['milestonewasclosed']; ?>
</span>
				<?php endif; ?>
			</div>

			<?php echo '
				<script type = "text/javascript">
					systemMsg(\'systemmsg\');
				</script>
			'; ?>


			<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 45, "...", true) : smarty_modifier_truncate($_tmp, 45, "...", true)); ?>
<span>/ <?php echo $this->_config[0]['vars']['milestones']; ?>
</span></h1>

						<div class="headline">
				<a href="javascript:void(0);" id="milehead_toggle" class="win_block" onclick = "toggleBlock('milehead');"></a>

				<div class="wintools">
					<?php if ($this->_tpl_vars['userpermissions']['milestones']['add']): ?>
						<a class="add" href="javascript:blindtoggle('addstone');" id="add" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn','butn_link_active','butn_link');toggleClass('sm_miles','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['addmilestone']; ?>
</span></a>
					<?php endif; ?>
				</div>

				<h2><img src="./templates/standard/images/symbols/miles.png" alt="" /><?php echo $this->_config[0]['vars']['milestones']; ?>
</h2>
			</div>

			<div class="block" id="milehead">
			
								<?php if ($this->_tpl_vars['userpermissions']['milestones']['add']): ?>
					<div id = "addstone" class="addmenue" style = "display:none;">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addmilestone.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				<?php endif; ?>

				<div class="nosmooth" id="sm_miles">

					<table cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th class="a"></th>
								<th class="b"><?php echo $this->_config[0]['vars']['milestone']; ?>
</th>
								<th class="c"><?php echo $this->_config[0]['vars']['due']; ?>
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
					</table>

										<div id="togglenew" class="toggleblock">
						
						<table id="accordion_miles_new" cellpadding="0" cellspacing="0" border="0" style="clear:both;">
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
								<?php if ($this->_sections['stone']['index'] % 2 == 0): ?>
								<tbody class="color-a" id="miles_<?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['ID']; ?>
">
								<?php else: ?>
								<tbody class="color-b" id="miles_<?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['ID']; ?>
">
								<?php endif; ?>
									<tr<?php if ($this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['daysleft'] == 0): ?> class="marker-today"<?php endif; ?>>
										<td class="a"><?php if ($this->_tpl_vars['userpermissions']['milestones']['close']): ?><a class="butn_check" href="managemilestone.php?action=close&amp;mid=<?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a><?php endif; ?></td>
										<td class="b">
											<div class="toggle-in">
												<span class="acc-toggle" onclick="javascript:accord_miles_new.activate($$('#accordion_miles_new .accordion_toggle')[<?php echo $this->_sections['stone']['index']; ?>
]);toggleAccordeon('done_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
',this);"></span>
												<a href="managemilestone.php?action=showmilestone&amp;msid=<?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</a>
											</div>
										</td>
										<td class="c"><?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['fend']; ?>
</td>
										<td class="days" style="text-align:right"><?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['dayslate']; ?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($this->_tpl_vars['userpermissions']['milestones']['edit']): ?>
												<a class="tool_edit" href="managemilestone.php?action=editform&amp;mid=<?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
											<?php endif; ?>
											<?php if ($this->_tpl_vars['userpermissions']['milestones']['del']): ?>
												<a class="tool_del" href="javascript:confirmit('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','managemilestone.php?action=del&amp;mid=<?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
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
														<?php echo $this->_tpl_vars['milestones'][$this->_sections['stone']['index']]['desc']; ?>

													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endfor; endif; ?>
						</table>
					</div> 
										<?php if ($this->_tpl_vars['countlate'] > 0): ?>
					
						<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('togglelate');toggleClass('togglemileslate','acc-toggle','acc-toggle-active');">
							<tr>
								<td class="a"></td>
								<td class="b"><span id="togglemileslate" class="acc-toggle-active"><?php echo $this->_config[0]['vars']['latestones']; ?>
</span></td>
								<td class="c"></td>
								<td class="days"></td>
								<td class="tools"></td>
							</tr>
						</table>

						<div id="togglelate" class="toggleblock">
							
							<table id="accordion_miles_late" cellpadding="0" cellspacing="0" border="0">
								<?php unset($this->_sections['latestone']);
$this->_sections['latestone']['name'] = 'latestone';
$this->_sections['latestone']['loop'] = is_array($_loop=$this->_tpl_vars['latemilestones']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['latestone']['show'] = true;
$this->_sections['latestone']['max'] = $this->_sections['latestone']['loop'];
$this->_sections['latestone']['step'] = 1;
$this->_sections['latestone']['start'] = $this->_sections['latestone']['step'] > 0 ? 0 : $this->_sections['latestone']['loop']-1;
if ($this->_sections['latestone']['show']) {
    $this->_sections['latestone']['total'] = $this->_sections['latestone']['loop'];
    if ($this->_sections['latestone']['total'] == 0)
        $this->_sections['latestone']['show'] = false;
} else
    $this->_sections['latestone']['total'] = 0;
if ($this->_sections['latestone']['show']):

            for ($this->_sections['latestone']['index'] = $this->_sections['latestone']['start'], $this->_sections['latestone']['iteration'] = 1;
                 $this->_sections['latestone']['iteration'] <= $this->_sections['latestone']['total'];
                 $this->_sections['latestone']['index'] += $this->_sections['latestone']['step'], $this->_sections['latestone']['iteration']++):
$this->_sections['latestone']['rownum'] = $this->_sections['latestone']['iteration'];
$this->_sections['latestone']['index_prev'] = $this->_sections['latestone']['index'] - $this->_sections['latestone']['step'];
$this->_sections['latestone']['index_next'] = $this->_sections['latestone']['index'] + $this->_sections['latestone']['step'];
$this->_sections['latestone']['first']      = ($this->_sections['latestone']['iteration'] == 1);
$this->_sections['latestone']['last']       = ($this->_sections['latestone']['iteration'] == $this->_sections['latestone']['total']);
?>
									<?php if ($this->_sections['latestone']['index'] % 2 == 0): ?>
									<tbody class="color-a" id="miles_late_<?php echo $this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['ID']; ?>
">
									<?php else: ?>
									<tbody class="color-b" id="miles_late_<?php echo $this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['ID']; ?>
">
									<?php endif; ?>

										<tr class="marker-late">
											<td class="a">
												<?php if ($this->_tpl_vars['userpermissions']['milestones']['close']): ?>
													<a class="butn_check" href="managemilestone.php?action=close&amp;mid=<?php echo $this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a>
												<?php endif; ?>
											</td>
											<td class="b">
												<div class="toggle-in">
													<span class="acc-toggle" onclick="javascript:accord_miles_late.activate($$('#accordion_miles_late .accordion_toggle')[<?php echo $this->_sections['latestone']['index']; ?>
]);toggleAccordeon('done_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
',this);"></span>
													<a href="managemilestone.php?action=showmilestone&amp;msid=<?php echo $this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</a>
												</div>
											</td>
											<td class="c"><?php echo $this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['fend']; ?>
</td>
											<td class="days" style="text-align:right">-<?php echo $this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['dayslate']; ?>
&nbsp;&nbsp;</td>
											<td class="tools">
												<?php if ($this->_tpl_vars['userpermissions']['milestones']['edit']): ?>
													<a class="tool_edit" href="managemilestone.php?action=editform&amp;mid=<?php echo $this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
												<?php endif; ?>
												<?php if ($this->_tpl_vars['userpermissions']['milestones']['del']): ?>
													<a class="tool_del" href="javascript:confirmit('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','managemilestone.php?action=del&amp;mid=<?php echo $this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
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
															<?php echo $this->_tpl_vars['latemilestones'][$this->_sections['latestone']['index']]['desc']; ?>

														</div>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								<?php endfor; endif; ?>
							</table>
						
						</div> 					<?php endif; ?> 				
										<div id="doneblock" class="doneblock" style="display: none;">
						
						<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('doneblock');toggleClass('donebutn','butn_link_active','butn_link');toggleClass('togglemilesdone','acc-toggle','acc-toggle-active');">
							<tr>
								<td class="a"></td>
								<td class="b"><span id="togglemilesdone" class="acc-toggle"><?php echo $this->_config[0]['vars']['donemilestones']; ?>
</span></td>
								<td class="c"></td>
								<td class="days"></td>
								<td class="tools"></td>
							</tr>
						</table>

						<div class="toggleblock">
						
							<table id="accordion_miles_done" cellpadding="0" cellspacing="0" border="0">
								<?php unset($this->_sections['stone']);
$this->_sections['stone']['name'] = 'stone';
$this->_sections['stone']['loop'] = is_array($_loop=$this->_tpl_vars['donemilestones']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<tbody class="color-a" id="miles_<?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['ID']; ?>
">
									<?php else: ?>
									<tbody class="color-b" id="miles_<?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['ID']; ?>
">
									<?php endif; ?>
										<?php if (time() > $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['end']): ?>
										<tr class="marker-late">
										<?php else: ?>
										<tr>
										<?php endif; ?>
											<td class="a">
												<?php if ($this->_tpl_vars['userpermissions']['milestones']['close']): ?>
													<a class="butn_checked" href="managemilestone.php?action=open&amp;mid=<?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a>
												<?php endif; ?>
											</td>
											<td class="b">
												<div class="toggle-in">
													<span class="acc-toggle" onclick="javascript:accord_miles_done.activate($$('#accordion_miles_done .accordion_toggle')[<?php echo $this->_sections['stone']['index']; ?>
]);toggleAccordeon('done_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
',this);"></span>
													<a href="managemilestone.php?action=showmilestone&amp;msid=<?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</a>
												</div>
											</td>
											<td class="c"><?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['fend']; ?>
</td>
											<?php if (time() > $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['end']): ?>
												<td class="days" style="text-align:right">-<?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['dayslate']; ?>
&nbsp;&nbsp;</td>
											<?php else: ?>
												<td class="days" style="text-align:right"><?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['dayslate']; ?>
&nbsp;&nbsp;</td>
											<?php endif; ?>
											<td class="tools">
												<?php if ($this->_tpl_vars['userpermissions']['milestones']['edit']): ?>
													<a class="tool_edit" href="managemilestone.php?action=editform&amp;mid=<?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"  title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
													<?php endif; ?>
													<?php if ($this->_tpl_vars['userpermissions']['milestones']['del']): ?>
													<a class="tool_del" href="javascript:confirmit('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','managemilestone.php?action=del&amp;mid=<?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
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
															<?php echo $this->_tpl_vars['donemilestones'][$this->_sections['stone']['index']]['desc']; ?>

														</div>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								<?php endfor; endif; ?>
							</table>
						</div>  					</div> 				</div> 
				<div class="tablemenue">
					<div class="tablemenue-in">
						<?php if ($this->_tpl_vars['userpermissions']['milestones']['add'] > 0): ?>
							<a class="butn_link" href="javascript:blindtoggle('addstone');" id="add_butn" onclick="toggleClass('add','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_miles','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addmilestone']; ?>
</a>
						<?php endif; ?>
						<a class="butn_link" href="javascript:blindtoggle('doneblock');" id="donebutn" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('togglemilesdone','acc-toggle','acc-toggle-active');"><?php echo $this->_config[0]['vars']['donemilestones']; ?>
</a>
					</div>
				</div>
			</div> 
			<?php echo '
				<script type = "text/javascript">
					try{
					var accord_miles_late = new accordion(\'accordion_miles_late\');
					}
					catch(e)
					{}

					try{
					var accord_miles_new = new accordion(\'accordion_miles_new\');
					}
					catch(e)
					{}

					try{
					var accord_miles_done = new accordion(\'accordion_miles_done\');
					}
					catch(e){}
				</script>
			'; ?>


		</div> 		<div class="content-spacer"></div>
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