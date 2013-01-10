<?php /* Smarty version 2.6.19, created on 2012-08-29 16:32:52
         compiled from myprojects.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'myprojects.tpl', 93, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-desk.tpl", 'smarty_include_vars' => array('projectstab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
<div id="content-left-in">
<div class="projects">

	<?php if ($this->_tpl_vars['newproject'] == 1): ?>
	<?php echo $this->_config[0]['vars']['projectwasadded']; ?>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['editproject'] == 1): ?>
	<?php echo $this->_config[0]['vars']['projectwasedited']; ?>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['delproject'] == 1): ?>
	<?php echo $this->_config[0]['vars']['projectwasdeleted']; ?>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['openproject'] == 1): ?>
	<?php echo $this->_config[0]['vars']['projectwasopened']; ?>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['closeproject'] == 1): ?>
	<?php echo $this->_config[0]['vars']['projectwasclosed']; ?>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['assignproject'] == 1): ?>
	<?php echo $this->_config[0]['vars']['projectwasassigned']; ?>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['deassignproject'] == 1): ?>
	<?php echo $this->_config[0]['vars']['projectwasdeassigned']; ?>

	<?php endif; ?>

<h1><?php echo $this->_config[0]['vars']['myprojects']; ?>
</h1>




			<div class="headline">
				<a href="javascript:void(0);" id="acc-projects_toggle" class="win_none" onclick = "toggleBlock('acc-projects');"></a>

					<?php if ($this->_tpl_vars['userpermissions']['projects']['add']): ?>
					<div class="wintools">
						<a class="add" href="javascript:blindtoggle('form_addmyproject');" id="add_myprojects" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['addproject']; ?>
</span></a>
					</div>
					<?php endif; ?>

				<h2>
					<img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo $this->_config[0]['vars']['openprojects']; ?>

				</h2>
			</div>

			<div class="block" id="acc-projects">

							<div id = "form_addmyproject" class="addmenue" style = "display:none;">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addproject.tpl", 'smarty_include_vars' => array('myprojects' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>

			<div class="nosmooth" id="sm_myprojects">
				<table cellpadding="0" cellspacing="0" border="0">

					<thead>
						<tr>
							<th class="a"></th>
							<th class="b"><?php echo $this->_config[0]['vars']['project']; ?>
</th>
							<th class="c"><?php echo $this->_config[0]['vars']['done']; ?>
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
">
					<?php else: ?>
					<tbody class="color-b" id="proj_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
">
					<?php endif; ?>
						<tr <?php if ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['daysleft'] < 0): ?> class="marker-late"<?php elseif ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['daysleft'] == 0): ?> class="marker-today"<?php endif; ?>>
							<td><?php if ($this->_tpl_vars['userpermissions']['projects']['add']): ?><a class="butn_check" href="javascript:closeElement('proj_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','manageproject.php?action=close&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a><?php endif; ?></td>
							<td>
								<div class="toggle-in">
								<span class="acc-toggle" onclick="javascript:accord_projects.activate($$('#acc-projects .accordion_toggle')[<?php echo $this->_sections['project']['index']; ?>
]);toggleAccordeon('acc-projects',this);"></span>
									<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['name']; ?>
">
										<?php if ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['name'] != ""): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

										<?php else: ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['desc'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

										<?php endif; ?>
									</a>
								</div>
							</td>
							<td><div class="statusbar_b"><div class="complete" id = "completed" style="width:<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['done']; ?>
%;"></div></div><span><?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['done']; ?>
%</span></td>
							<td style="text-align:right"><?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
							<td class="tools">
							     <?php if ($this->_tpl_vars['userpermissions']['projects']['edit']): ?>
								<a class="tool_edit" href="manageproject.php?action=editform&amp;id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
								<?php endif; ?>
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




				<div id="doneblock" class="doneblock" style="display: none;">
				<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('doneblock');toggleClass('donebutn','butn_link_active','butn_link');toggleClass('toggle-done','acc-toggle','acc-toggle-active');">

						<tr>
							<td class="a"></td>
							<td class="b"><span id="toggle-done" class="acc-toggle"><?php echo $this->_config[0]['vars']['closedprojects']; ?>
</span></td>
							<td class="c"></td>
							<td class="d"></td>
							<td class="tools"></td>
						</tr>

				</table>


				<div class="toggleblock">
					<table cellpadding="0" cellspacing="0" border="0" id="acc-oldprojects">
					<?php unset($this->_sections['clopro']);
$this->_sections['clopro']['name'] = 'clopro';
$this->_sections['clopro']['loop'] = is_array($_loop=$this->_tpl_vars['oldprojects']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['clopro']['show'] = true;
$this->_sections['clopro']['max'] = $this->_sections['clopro']['loop'];
$this->_sections['clopro']['step'] = 1;
$this->_sections['clopro']['start'] = $this->_sections['clopro']['step'] > 0 ? 0 : $this->_sections['clopro']['loop']-1;
if ($this->_sections['clopro']['show']) {
    $this->_sections['clopro']['total'] = $this->_sections['clopro']['loop'];
    if ($this->_sections['clopro']['total'] == 0)
        $this->_sections['clopro']['show'] = false;
} else
    $this->_sections['clopro']['total'] = 0;
if ($this->_sections['clopro']['show']):

            for ($this->_sections['clopro']['index'] = $this->_sections['clopro']['start'], $this->_sections['clopro']['iteration'] = 1;
                 $this->_sections['clopro']['iteration'] <= $this->_sections['clopro']['total'];
                 $this->_sections['clopro']['index'] += $this->_sections['clopro']['step'], $this->_sections['clopro']['iteration']++):
$this->_sections['clopro']['rownum'] = $this->_sections['clopro']['iteration'];
$this->_sections['clopro']['index_prev'] = $this->_sections['clopro']['index'] - $this->_sections['clopro']['step'];
$this->_sections['clopro']['index_next'] = $this->_sections['clopro']['index'] + $this->_sections['clopro']['step'];
$this->_sections['clopro']['first']      = ($this->_sections['clopro']['iteration'] == 1);
$this->_sections['clopro']['last']       = ($this->_sections['clopro']['iteration'] == $this->_sections['clopro']['total']);
?>

										<?php if ($this->_sections['clopro']['index'] % 2 == 0): ?>
					<tbody class="color-a" id="proj_<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
">
					<?php else: ?>
					<tbody class="color-b" id="proj_<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
">
					<?php endif; ?>
						<tr>
							<td class="a"><?php if ($this->_tpl_vars['userpermissions']['projects']['add']): ?><a class="butn_checked" href="manageproject.php?action=open&amp;id=<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a><?php endif; ?></td>
							<td class="b">
								<div class="toggle-in">
								<span class="acc-toggle" onclick="javascript:accord_oldprojects.activate($$('#acc-oldprojects .accordion_toggle')[<?php echo $this->_sections['clopro']['index']; ?>
]);toggleAccordeon('acc-oldprojects',this);"></span>
									<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['name']; ?>
">
										<?php if ($this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['name'] != ""): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

										<?php else: ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['desc'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

										<?php endif; ?>
									</a>
								</div>
							</td>
							<td class="c"></td>
							<td class="d" style="text-align:right"><?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
							<td class="tools">
								<?php if ($this->_tpl_vars['userpermissions']['projects']['edit']): ?>
								<a class="tool_edit" href="manageproject.php?action=editform&amp;id=<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['userpermissions']['projects']['del']): ?>
								<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'proj_<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
\',\'manageproject.php?action=del&amp;id=<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
\')');"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
" ></a>
								<?php endif; ?>
							</td>
						</tr>

						<tr class="acc">
							<td colspan="5">
								<div class="accordion_toggle"></div>
								<div class="accordion_content">
									<div class="acc-in">
										<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['desc']; ?>

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
						<?php if ($this->_tpl_vars['userpermissions']['projects']['add']): ?>
						<a class="butn_link" href="javascript:blindtoggle('form_addmyproject');" id="add_butn_myprojects" onclick="toggleClass('add_myprojects','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addproject']; ?>
</a>
						<?php endif; ?>

						<a class="butn_link" href="javascript:blindtoggle('doneblock');" id="donebutn" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('toggle-done','acc-toggle','acc-toggle-active');"><?php echo $this->_config[0]['vars']['closedprojects']; ?>
</a>

					</div>
				</div>

		</div> 




<?php echo '
	<script type = "text/javascript">
		var accord_projects = new accordion(\'acc-projects\');
		var accord_oldprojects = new accordion(\'acc-oldprojects\');
	</script>
'; ?>



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