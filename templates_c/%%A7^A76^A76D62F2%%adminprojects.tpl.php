<?php /* Smarty version 2.6.19, created on 2012-08-29 14:32:48
         compiled from adminprojects.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'adminprojects.tpl', 81, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-admin.tpl", 'smarty_include_vars' => array('projecttab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
	<div id="content-left-in">
		<div class="projects">

			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				<?php if ($this->_tpl_vars['mode'] == 'assigned'): ?>
					<span class="info_in_yellow"><img src="templates/standard/images/symbols/system-settings.png" alt=""/><?php echo $this->_config[0]['vars']['settingsedited']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'deassigned'): ?>
					<span class="info_in_red"><img src="templates/standard/images/symbols/user-icon-male.png" alt=""/><?php echo $this->_config[0]['vars']['userwasdeassigned']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'added'): ?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/projects.png" alt=""/><?php echo $this->_config[0]['vars']['projectwasadded']; ?>
</span>
				<?php endif; ?>
			</div>

			<?php echo '
				<script type = "text/javascript">
					systemMsg(\'systemmsg\');
				</script>
			'; ?>


			<h1><?php echo $this->_config[0]['vars']['administration']; ?>
<span>/ <?php echo $this->_config[0]['vars']['projectadministration']; ?>
</span></h1>

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

				<div class="block" id="acc-projects"> 					<div id = "form_addmyproject" class="addmenue" style = "display:none;">
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

							<?php unset($this->_sections['opro']);
$this->_sections['opro']['name'] = 'opro';
$this->_sections['opro']['loop'] = is_array($_loop=$this->_tpl_vars['opros']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['opro']['show'] = true;
$this->_sections['opro']['max'] = $this->_sections['opro']['loop'];
$this->_sections['opro']['step'] = 1;
$this->_sections['opro']['start'] = $this->_sections['opro']['step'] > 0 ? 0 : $this->_sections['opro']['loop']-1;
if ($this->_sections['opro']['show']) {
    $this->_sections['opro']['total'] = $this->_sections['opro']['loop'];
    if ($this->_sections['opro']['total'] == 0)
        $this->_sections['opro']['show'] = false;
} else
    $this->_sections['opro']['total'] = 0;
if ($this->_sections['opro']['show']):

            for ($this->_sections['opro']['index'] = $this->_sections['opro']['start'], $this->_sections['opro']['iteration'] = 1;
                 $this->_sections['opro']['iteration'] <= $this->_sections['opro']['total'];
                 $this->_sections['opro']['index'] += $this->_sections['opro']['step'], $this->_sections['opro']['iteration']++):
$this->_sections['opro']['rownum'] = $this->_sections['opro']['iteration'];
$this->_sections['opro']['index_prev'] = $this->_sections['opro']['index'] - $this->_sections['opro']['step'];
$this->_sections['opro']['index_next'] = $this->_sections['opro']['index'] + $this->_sections['opro']['step'];
$this->_sections['opro']['first']      = ($this->_sections['opro']['iteration'] == 1);
$this->_sections['opro']['last']       = ($this->_sections['opro']['iteration'] == $this->_sections['opro']['total']);
?>

																<?php if ($this->_sections['opro']['index'] % 2 == 0): ?>
								<tbody class="color-a" id="proj_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
">
								<?php else: ?>
								<tbody class="color-b" id="proj_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
">
								<?php endif; ?>
									<tr <?php if ($this->_tpl_vars['opros'][$this->_sections['opro']['index']]['daysleft'] < 0 && $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['daysleft'] != ""): ?> class="marker-late"<?php elseif ($this->_tpl_vars['opros'][$this->_sections['opro']['index']]['daysleft'] == '0'): ?> class="marker-today"<?php endif; ?>>
										<td>
											<?php if ($this->_tpl_vars['userpermissions']['projects']['del']): ?>
												<a class="butn_check" href="javascript:closeElement('proj_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
','manageproject.php?action=close&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a>
											<?php endif; ?>
										</td>
										<td>
											<div class="toggle-in">
												<span class="acc-toggle" onclick="javascript:accord_projects.activate($$('#acc-projects .accordion_toggle')[<?php echo $this->_sections['opro']['index']; ?>
]);toggleAccordeon('acc-projects',this);"></span>
												<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['name']; ?>
">
													<?php echo ((is_array($_tmp=$this->_tpl_vars['opros'][$this->_sections['opro']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

												</a>
											</div>
										</td>
										<td>
											<div class="statusbar_b">
												<div class="complete" id = "completed" style="width:<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['done']; ?>
%;"></div>
											</div>
											<span><?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['done']; ?>
%</span>
										</td>
										<td style="text-align:right"><?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($this->_tpl_vars['userpermissions']['projects']['edit']): ?>
												<a class="tool_edit" href="manageproject.php?action=editform&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
											<?php endif; ?>
											<?php if ($this->_tpl_vars['userpermissions']['projects']['del']): ?>
												<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'proj_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
\',\'manageproject.php?action=del&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
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
													<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['desc']; ?>

                                                    
                                                    <p class="tags-miles">
														<strong><?php echo $this->_config[0]['vars']['service']; ?>
:</strong>
													</p>
                                                    <?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['service']; ?>

                                                    
													<p class="tags-miles">
														<strong><?php echo $this->_config[0]['vars']['user']; ?>
:</strong>
													</p>

													<div class="inwrapper">
														<ul>
															<?php unset($this->_sections['member']);
$this->_sections['member']['name'] = 'member';
$this->_sections['member']['loop'] = is_array($_loop=$this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
																<li>
																	<div class="itemwrapper" id="iw_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['ID']; ?>
">
																	
																		<table cellpadding="0" cellspacing="0" border="0">
																			<tr>
																				<td class="leftmen" valign="top">
																					<div class="inmenue">
																						<?php if ($this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['avatar'] != ""): ?>
																							<a class="more" href="javascript:fadeToggle('info_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['ID']; ?>
');"></a>
																						<?php endif; ?>
																					</div>
																				</td>
																				<td class="thumb">
																					<a href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['name']; ?>
">
																						<?php if ($this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['gender'] == 'f'): ?>
																							<img src = "./templates/standard/images/symbols/user-icon-female.png" alt="" />
																						<?php else: ?>
																							<img src = "./templates/standard/images/symbols/user-icon-male.png" alt="" />
																						<?php endif; ?>
																					</a>
																				</td>
																				<td class="rightmen" valign="top">
																					<div class="inmenue">
																						<a class="del" href="manageproject.php?action=deassign&amp;user=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
&amp;redir=admin.php?action=projects" title="<?php echo $this->_config[0]['vars']['deassignuser']; ?>
" onclick="fadeToggle('iw_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['ID']; ?>
');"></a>
																						<a class="edit" href="admin.php?action=editform&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edituser']; ?>
"></a>
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td colspan="3">
																					<span class="name"><a href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
</a></span>
																				</td>
																			<tr/>
																		</table>

																		<?php if ($this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['avatar'] != ""): ?>
																			<div class="moreinfo" id="info_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['ID']; ?>
" style="display:none">
																				<img src = "thumb.php?pic=files/<?php echo $this->_tpl_vars['cl_config']; ?>
/avatar/<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['avatar']; ?>
&amp;width=82" alt="" onclick="fadeToggle('info_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['ID']; ?>
');" />
																				<span class="name"><a href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['ID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['opros'][$this->_sections['opro']['index']]['members'][$this->_sections['member']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
</a></span>
																			</div>
																		<?php endif; ?>
																	</div> 																	
																</li>
															<?php endfor; endif; ?>
														</ul>
													</div> 													
													<p class="tags-miles"> 														<strong><?php echo $this->_config[0]['vars']['adduser']; ?>
:</strong>
													</p>
													<div class = "inwrapper">
														<form  class = "main" method="post" action="manageproject.php?action=assign&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
&redir=admin.php?action=projects&mode=useradded" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
>
															<fieldset>

																<div class="row">
																	<label for="addtheuser"><?php echo $this->_config[0]['vars']['user']; ?>
</label>
																	<select name = "user" id="addtheuser" >
																		<option value = ""><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
																		<?php unset($this->_sections['usr']);
$this->_sections['usr']['name'] = 'usr';
$this->_sections['usr']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['usr']['show'] = true;
$this->_sections['usr']['max'] = $this->_sections['usr']['loop'];
$this->_sections['usr']['step'] = 1;
$this->_sections['usr']['start'] = $this->_sections['usr']['step'] > 0 ? 0 : $this->_sections['usr']['loop']-1;
if ($this->_sections['usr']['show']) {
    $this->_sections['usr']['total'] = $this->_sections['usr']['loop'];
    if ($this->_sections['usr']['total'] == 0)
        $this->_sections['usr']['show'] = false;
} else
    $this->_sections['usr']['total'] = 0;
if ($this->_sections['usr']['show']):

            for ($this->_sections['usr']['index'] = $this->_sections['usr']['start'], $this->_sections['usr']['iteration'] = 1;
                 $this->_sections['usr']['iteration'] <= $this->_sections['usr']['total'];
                 $this->_sections['usr']['index'] += $this->_sections['usr']['step'], $this->_sections['usr']['iteration']++):
$this->_sections['usr']['rownum'] = $this->_sections['usr']['iteration'];
$this->_sections['usr']['index_prev'] = $this->_sections['usr']['index'] - $this->_sections['usr']['step'];
$this->_sections['usr']['index_next'] = $this->_sections['usr']['index'] + $this->_sections['usr']['step'];
$this->_sections['usr']['first']      = ($this->_sections['usr']['iteration'] == 1);
$this->_sections['usr']['last']       = ($this->_sections['usr']['iteration'] == $this->_sections['usr']['total']);
?>
																		<option value = "<?php echo $this->_tpl_vars['users'][$this->_sections['usr']['index']]['ID']; ?>
"><?php echo $this->_tpl_vars['users'][$this->_sections['usr']['index']]['name']; ?>
</option>
																		<?php endfor; endif; ?>
																	</select>
																</div>

																<div class="row-butn-bottom">
																	<label>&nbsp;</label>
																	<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
																	<button onclick="blindtoggle('form_member');toggleClass('addmember','add-active','add');toggleClass('add_butn_member','butn_link_active','butn_link');toggleClass('sm_member','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
																</div>
															</fieldset>
														</form>
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
									<td class="days"></td>
									<td class="tools"></td>
								</tr>
							</table>

					
							<div class="toggleblock">
							
								<table cellpadding="0" cellspacing="0" border="0" id="acc-oldprojects">
									<?php unset($this->_sections['clopro']);
$this->_sections['clopro']['name'] = 'clopro';
$this->_sections['clopro']['loop'] = is_array($_loop=$this->_tpl_vars['clopros']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<tbody class="color-a" id="proj_<?php echo $this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['ID']; ?>
">
										<?php else: ?>
										<tbody class="color-b" id="proj_<?php echo $this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['ID']; ?>
">
										<?php endif; ?>
											<tr>
												<td class="a"><?php if ($this->_tpl_vars['userpermissions']['projects']['add']): ?><a class="butn_checked" href="manageproject.php?action=open&amp;id=<?php echo $this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a><?php endif; ?></td>
												<td class="b">
													<div class="toggle-in">
													<span class="acc-toggle" onclick="javascript:accord_oldprojects.activate($$('#acc-oldprojects .accordion_toggle')[<?php echo $this->_sections['clopro']['index']; ?>
]);toggleAccordeon('acc-oldprojects',this);"></span>
														<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['name']; ?>
">
															<?php echo ((is_array($_tmp=$this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

														</a>
													</div>
												</td>
												<td class="c">
													<div class="statusbar_b">
														<div class="complete" id = "completed" style="width:<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['done']; ?>
%;"></div>
													</div>
													<span><?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['done']; ?>
%</span>
												</td>
												<td class="days" style="text-align:right"><?php echo $this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
												<td class="tools">
													<?php if ($this->_tpl_vars['userpermissions']['projects']['edit']): ?>
													<a class="tool_edit" href="manageproject.php?action=editform&amp;id=<?php echo $this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
													<?php endif; ?>
													<?php if ($this->_tpl_vars['userpermissions']['projects']['del']): ?>
														<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'proj_<?php echo $this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['ID']; ?>
\',\'manageproject.php?action=del&amp;id=<?php echo $this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['ID']; ?>
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
															<?php echo $this->_tpl_vars['clopros'][$this->_sections['clopro']['index']]['desc']; ?>


														</div>
													</div>
												</td>
											</tr>
										</tbody>
									<?php endfor; endif; ?>
								</table>
								
							</div> 						</div> 					</div> 
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

		</div> 	</div> </div> 
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