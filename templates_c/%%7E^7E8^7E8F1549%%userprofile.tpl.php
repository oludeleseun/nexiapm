<?php /* Smarty version 2.6.19, created on 2012-08-29 13:51:52
         compiled from userprofile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'userprofile.tpl', 187, false),array('function', 'paginate_prev', 'userprofile.tpl', 408, false),array('function', 'paginate_middle', 'userprofile.tpl', 408, false),array('function', 'paginate_next', 'userprofile.tpl', 408, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-user.tpl", 'smarty_include_vars' => array('usertab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
	<div id="content-left-in">
		<div class="user">

			<h1><?php echo $this->_config[0]['vars']['userprofile']; ?>
<span>/ <?php echo $this->_tpl_vars['user']['name']; ?>
</span></h1>

			<div class="export-main">
				<a class="export"><span><?php echo $this->_config[0]['vars']['export']; ?>
</span></a>
				<div class="export-in"  style="width:32px;left: -32px;"> 					<?php if ($this->_tpl_vars['user']['gender'] == 'f'): ?>
						<a class="vcardfemale" href="manageuser.php?action=vcard&amp;id=<?php echo $this->_tpl_vars['user']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['vcardexport']; ?>
</span></a>
					<?php else: ?>
						<a class="vcardmale" href="manageuser.php?action=vcard&amp;id=<?php echo $this->_tpl_vars['user']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['vcardexport']; ?>
</span></a>
					<?php endif; ?>
				</div>
			</div>

			<div class="userwrapper">
				
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td class="avatarcell" valign="top">
							<?php if ($this->_tpl_vars['user']['avatar'] != ""): ?>
								<a href="#avatarbig" id="ausloeser">
									<div class="avatar-profile"><img src = "thumb.php?pic=files/<?php echo $this->_tpl_vars['cl_config']; ?>
/avatar/<?php echo $this->_tpl_vars['user']['avatar']; ?>
&amp;width=122;" alt="" /></div>
								</a>
							<?php else: ?>
								<?php if ($this->_tpl_vars['user']['gender'] == 'f'): ?>
									<div class="avatar-profile"><img src = "thumb.php?pic=templates/standard/images/no-avatar-female.jpg&amp;width=122;" alt="" /></div>
								<?php else: ?>
									<div class="avatar-profile">
										<img src = "thumb.php?pic=templates/standard/images/no-avatar-male.jpg&amp;width=122;" alt="" />
									</div>
								<?php endif; ?>
							<?php endif; ?>
							<div id="avatarbig" style="display:none;">
								<a href="javascript:Control.Modal.close();"><img src = "thumb.php?pic=files/<?php echo $this->_tpl_vars['cl_config']; ?>
/avatar/<?php echo $this->_tpl_vars['user']['avatar']; ?>
&amp;width=480&amp;height=480;" alt="" /></a>
							</div>
						</td>
						<td>
							<div class="message">
								<div class="block">
								
									<table cellpadding="0" cellspacing="0" border="0">
										<colgroup>
											<col class="a" />
											<col class="b" />
										</colgroup>

										<thead><tr><th colspan="2"></th></tr></thead>
										<tfoot><tr><td colspan="2"></td></tr></tfoot>

										<tbody class="color-b">
											<tr>
												<td><strong><?php echo $this->_config[0]['vars']['company']; ?>
:</strong></td>
												<td class="right"><?php if ($this->_tpl_vars['user']['company']): ?><?php echo $this->_tpl_vars['user']['company']; ?>
<?php endif; ?></td>
											</tr>
										</tbody>

										<tbody class="color-a">
											<tr>
												<td><strong><?php echo $this->_config[0]['vars']['email']; ?>
:</strong></td>
												<td class="right"><a href = "mailto:<?php echo $this->_tpl_vars['user']['email']; ?>
"><?php echo $this->_tpl_vars['user']['email']; ?>
</a></td>
											</tr>
										</tbody>

										<tbody class="color-b">
											<tr>
												<td><strong><?php echo $this->_config[0]['vars']['url']; ?>
:</strong></td>
												<td class="right"><a href="<?php echo $this->_tpl_vars['user']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['user']['url']; ?>
</a></td>
											</tr>
										</tbody>

										<tbody class="color-a">
											<tr>
												<td><strong><?php echo $this->_config[0]['vars']['phone']; ?>
:</strong></td>
												<td class="right"><?php echo $this->_tpl_vars['user']['tel1']; ?>
</td>
											</tr>
										</tbody>

										<tbody class="color-b">
											<tr>
												<td><strong><?php echo $this->_config[0]['vars']['cellphone']; ?>
:</strong></td>
												<td class="right"><?php echo $this->_tpl_vars['user']['tel2']; ?>
</td>
											</tr>
										</tbody>

										<tbody class="color-a">
											<tr>
												<td><strong><?php echo $this->_config[0]['vars']['address']; ?>
:</strong></td>
												<td class="right"><?php echo $this->_tpl_vars['user']['adress']; ?>
</td>
											</tr>
										</tbody>

										<tbody class="color-b">
											<tr>
												<td><strong><?php echo $this->_config[0]['vars']['zip']; ?>
 / <?php echo $this->_config[0]['vars']['city']; ?>
:</strong></td>
												<td class="right"><?php echo $this->_tpl_vars['user']['zip']; ?>
<?php if ($this->_tpl_vars['user']['zip'] && $this->_tpl_vars['user']['adress2']): ?> <?php endif; ?><?php echo $this->_tpl_vars['user']['adress2']; ?>
 </td>
											</tr>
										</tbody>

										<tbody class="color-a">
											<tr>
												<?php if ($this->_tpl_vars['user']['state'] == ""): ?>
													<td><strong><?php echo $this->_config[0]['vars']['country']; ?>
:</strong></td>
													<td class="right"><?php echo $this->_tpl_vars['user']['country']; ?>
</td>
												<?php elseif ($this->_tpl_vars['user']['country'] == ""): ?>
													<td><strong><?php echo $this->_config[0]['vars']['state']; ?>
:</strong></td>
													<td class="right"><?php echo $this->_tpl_vars['user']['state']; ?>
</td>
												<?php else: ?>
													<td><strong><?php echo $this->_config[0]['vars']['country']; ?>
 (<?php echo $this->_config[0]['vars']['state']; ?>
):</strong></td>
													<td class="right"><?php echo $this->_tpl_vars['user']['country']; ?>
 (<?php echo $this->_tpl_vars['user']['state']; ?>
)</td>
												<?php endif; ?>
											</tr>
										</tbody>

										<tbody class="color-b">
											<tr>
												<td><strong><?php echo $this->_config[0]['vars']['tags']; ?>
:</strong></td>
												<td class="right">
													<?php unset($this->_sections['tag']);
$this->_sections['tag']['name'] = 'tag';
$this->_sections['tag']['loop'] = is_array($_loop=$this->_tpl_vars['user']['tagsarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
														<a href = "managetags.php?action=gettag&tag=<?php echo $this->_tpl_vars['user']['tagsarr'][$this->_sections['tag']['index']]; ?>
&amp;id=0"><?php echo $this->_tpl_vars['user']['tagsarr'][$this->_sections['tag']['index']]; ?>
</a>
													<?php endfor; endif; ?>
												</td>
											</tr>
										</tbody>
									</table>

								</div> 							</div> 						</td>
					</tr>
				</table>
			</div> 		</div> 		<div class="content-spacer"></div>

		<?php if ($this->_tpl_vars['userpermissions']['admin']['add']): ?><?php if ($this->_tpl_vars['opros']): ?>			<div class="projects">
				<div class="headline">
					<a href="javascript:void(0);" id="projecthead_toggle" class="win_block" onclick = "toggleBlock('projecthead');"></a>

					<h2>
						<a href="myprojects.php" title="<?php echo $this->_config[0]['vars']['myprojects']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo $this->_config[0]['vars']['projects']; ?>
</a>
					</h2>
				</div>

				<div class="block" id="projecthead" style = "<?php echo $this->_tpl_vars['projectstyle']; ?>
">
					
					<table cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th class="a"></th>
								<th class="b"><?php echo $this->_config[0]['vars']['project']; ?>
</th>
								<th class="c"></th>
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
								<tr <?php if ($this->_tpl_vars['opros'][$this->_sections['opro']['index']]['daysleft'] < 0): ?> class="marker-late"<?php elseif ($this->_tpl_vars['opros'][$this->_sections['opro']['index']]['daysleft'] == 0): ?> class="marker-today"<?php endif; ?>>
									<td>
										<?php if ($this->_tpl_vars['adminstate'] > 4): ?>
											<a class="butn_check" href="javascript:closeElement('proj_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
','manageproject.php?action=close&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a>
										<?php endif; ?>
									</td>
									<td>
										<div class="toggle-in">
											<span class="acc-toggle" onclick="javascript:accord_projects.activate($$('#projecthead .accordion_toggle')[<?php echo $this->_sections['opro']['index']; ?>
]);toggleAccordeon('projecthead',this);"></span>
											<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['name']; ?>
">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['opros'][$this->_sections['opro']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

											</a>
										</div>
									</td>
									<td></td>
									<td style="text-align:right"><?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
									<td class="tools">
										<a class="tool_edit" href="manageproject.php?action=editform&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
" <?php if (! $this->_tpl_vars['userpermissions']['projects']['edit']): ?>style="visibility:hidden;" <?php endif; ?>></a>
										<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'proj_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
\',\'manageproject.php?action=del&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
\')');"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
" <?php if (! $this->_tpl_vars['userpermissions']['projects']['del']): ?>style="visibility:hidden;" <?php endif; ?>></a>
									</td>
								</tr>

								<tr class="acc">
									<td colspan="5">
										<div class="accordion_toggle"></div>
										<div class="accordion_content">
											<div class="acc-in">
												<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['desc']; ?>

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
																		<div class="moreinfo-wrapper">
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
																		</div>
																	<?php endif; ?>
																</div> 																
															</li>
														<?php endfor; endif; ?>
													</ul>
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

			<?php echo '
				<script type = "text/javascript">
					var accord_projects = new accordion(\'projecthead\');
					new Control.Modal(\'ausloeser\',{
					opacity: 0.8,
					position: \'absolute\',
					width: 480,
					height: 480,
					fade:true,
					containerClassName: \'pics\',
					overlayClassName: \'useroverlay\'
					});
				</script>
			'; ?>

		<?php endif; ?><?php endif; ?> 
		<?php if ($this->_tpl_vars['userpermissions']['admin']['add'] || $this->_tpl_vars['userid'] == $this->_tpl_vars['user']['ID']): ?><?php if ($this->_tpl_vars['tracker']): ?> 			<div class="timetrack">
				<div class="headline">
					<a href="javascript:void(0);" id="acc-tracker_toggle" class="win_block" onclick = "toggleBlock('acc-tracker');"></a>
					<div class="wintools">
						<div class="export-main">
							<a class="export"><span><?php echo $this->_config[0]['vars']['export']; ?>
</span></a>
							<div class="export-in"  style="width:46px;left: -46px;"> 								<a class="pdf" href="managetimetracker.php?action=userpdf&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
<?php if ($this->_tpl_vars['start'] != "" && $this->_tpl_vars['end'] != ""): ?>&amp;start=<?php echo $this->_tpl_vars['start']; ?>
&amp;end=<?php echo $this->_tpl_vars['end']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['usr'] > 0): ?>&amp;usr=<?php echo $this->_tpl_vars['usr']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['task'] > 0): ?>&amp;task=<?php echo $this->_tpl_vars['task']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['fproject'] > 0): ?>&amp;project=<?php echo $this->_tpl_vars['fproject']; ?>
<?php endif; ?>"><span><?php echo $this->_config[0]['vars']['pdfexport']; ?>
</span></a>
								<a class="excel" href="managetimetracker.php?action=userxls&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
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
							<a class="filter" href="javascript:blindtoggle('form_filter');" id="filter_report" onclick="toggleClass(this,'filter-active','filter');toggleClass('filter_butn','butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['filterreport']; ?>
</span></a>
						</div>
					</div>

					<h2>
						<img src="./templates/standard/images/symbols/timetracker.png" alt="" /><?php echo $this->_config[0]['vars']['report']; ?>

					</h2>
				</div>

				<div class="block" id="acc-tracker"> 					<div id = "form_filter" class="addmenue" style = "display:none;">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "filterreport.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>

					<div class="nosmooth" id="sm_report">
					
						<table cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th class="a"></th>
									<th class="b"><?php echo $this->_config[0]['vars']['project']; ?>
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
												<a href = "managetimetracker.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['project']; ?>
" title="<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['pname']; ?>
">
													<?php echo ((is_array($_tmp=$this->_tpl_vars['tracker'][$this->_sections['track']['index']]['pname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

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
&amp;id=<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['project']; ?>
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
													<?php if ($this->_tpl_vars['tracker'][$this->_sections['track']['index']]['task'] > 0): ?>
														<p class="tags-miles">
															<strong><?php echo $this->_config[0]['vars']['task']; ?>
:</strong><br />
															<a href = "managetask.php?action=showtask&amp;tid=<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['task']; ?>
&amp;id=<?php echo $this->_tpl_vars['tracker'][$this->_sections['track']['index']]['project']; ?>
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
							<a class="butn_link" href="javascript:blindtoggle('form_filter');" id="filter_butn" onclick="toggleClass('filter_report','filter-active','filter');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['filterreport']; ?>
</a>
						</div>
					</div>
				</div> 			</div> 		<?php endif; ?><?php endif; ?>
		<div class="content-spacer"></div>
		
		<?php echo '
			<script type = "text/javascript">
				var accord_tracker = new accordion(\'acc-tracker\');
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