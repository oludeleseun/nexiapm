<?php /* Smarty version 2.6.19, created on 2012-08-29 16:34:33
         compiled from projectmessages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'projectmessages.tpl', 29, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce','jsload3' => 'lightbox')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-project.tpl", 'smarty_include_vars' => array('msgstab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
	<div id="content-left-in">
		<div class="msgs">

			<div class = "infowin_left">
				<span id = "deleted" style = "display:none;" class="info_in_red"><img src="templates/standard/images/symbols/msgs.png" alt=""/><?php echo $this->_config[0]['vars']['messagewasdeleted']; ?>
</span>
			</div>

			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				<?php if ($this->_tpl_vars['mode'] == 'added'): ?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/msgs.png" alt=""/><?php echo $this->_config[0]['vars']['messagewasadded']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'edited'): ?>
					<span class="info_in_yellow"><img src="templates/standard/images/symbols/msgs.png" alt=""/><?php echo $this->_config[0]['vars']['messagewasedited']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'replied'): ?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/msgs.png" alt=""/><?php echo $this->_config[0]['vars']['replywasadded']; ?>
</span>
				<?php endif; ?>
			</div>
			
			<?php echo '
				<script type = "text/javascript">
					systemMsg(\'systemmsg\');
				</script>
			'; ?>



			<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 45, "...", true) : smarty_modifier_truncate($_tmp, 45, "...", true)); ?>
<span>/ <?php echo $this->_config[0]['vars']['messages']; ?>
</span></h1>

			<div class="headline">
				<a href="javascript:void(0);" id="block_msgs_toggle" class="win_block" onclick = "toggleBlock('block_msgs');"></a>

				<div class="wintools">
					<div class="export-main">
						<a class="export"><span><?php echo $this->_config[0]['vars']['export']; ?>
</span></a>
						<div class="export-in"  style="width:46px;left: -46px;"> 							<a class="pdf" href="managemessage.php?action=export-project&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['pdfexport']; ?>
</span></a>
							<a class="rss" href="managerss.php?action=mymsgs-rss&amp;user=<?php echo $this->_tpl_vars['userid']; ?>
"><span><?php echo $this->_config[0]['vars']['rssfeed']; ?>
</span></a>
						</div>
					</div>

					<?php if ($this->_tpl_vars['userpermissions']['messages']['add']): ?>
						<a class="add" href="javascript:blindtoggle('addmsg<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');" id="add" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn','butn_link_active','butn_link');toggleClass('sm_msgs','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['addmessage']; ?>
</span></a>
					<?php endif; ?>
				</div>

				<h2>
					<img src="./templates/standard/images/symbols/msgs.png" alt="" /><?php echo $this->_config[0]['vars']['messages']; ?>

				</h2>
			</div>

			<div id="block_msgs" class="block" >

								<div id = "addmsg" class="addmenue" style = "display:none;">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addmessageform.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>

				<div class="nosmooth" id="sm_msgs">

					<table id="acc_msgs" cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th class="a"></th>
								<th class="b"><?php echo $this->_config[0]['vars']['message']; ?>
</th>
								<th class="ce" style="text-align:right"><?php echo $this->_config[0]['vars']['replies']; ?>
&nbsp;&nbsp;</th>
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
						<tbody class="color-a" id="msgs_<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
">
						<?php else: ?>
						<tbody class="color-b" id="msgs_<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
">
						<?php endif; ?>
							<tr>
								<td>
									<?php if ($this->_tpl_vars['userpermissions']['messages']['close']): ?><a class="butn_reply" href="managemessage.php?action=replyform&amp;mid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['answer']; ?>
"></a><?php endif; ?>
								</td>
								<td>
									<div class="toggle-in">
									<span class="acc-toggle" onclick="javascript:accord_messages.activate($$('#block_msgs .accordion_toggle')[<?php echo $this->_sections['message']['index']; ?>
]);toggleAccordeon('accord_messages',this);"></span>
										<a href="managemessage.php?action=showmessage&amp;mid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['title']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['messages'][$this->_sections['message']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 35, "...", true) : smarty_modifier_truncate($_tmp, 35, "...", true)); ?>
</a>
									</div>
								</td>
								<td style="text-align:right">
									<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['replies'] > 0): ?>
										<a href = "managemessage.php?action=showmessage&amp;mid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
#replies"><?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['replies']; ?>
</a>
									<?php else: ?>
										<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['replies']; ?>

									<?php endif; ?>
									&nbsp;
								</td>
								<td><a href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['user']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['messages'][$this->_sections['message']['index']]['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></td>
								<td><?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['postdate']; ?>
</td>
								<td class="tools">
									<?php if ($this->_tpl_vars['userpermissions']['messages']['edit']): ?>
										<a class="tool_edit" href="managemessage.php?action=editform&amp;mid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['userpermissions']['messages']['del']): ?>
										<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'msgs_<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
\',\'managemessage.php?action=del&amp;mid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
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
													<div class="avatar"><img src = "thumb.php?pic=templates/standard/images/no-avatar-female.jpg&amp;width=80;" alt="" /></div>
												<?php else: ?>
													<div class="avatar"><img src = "thumb.php?pic=templates/standard/images/no-avatar-male.jpg&amp;width=80;" alt="" /></div>
												<?php endif; ?>
											<?php endif; ?>
											<div class="message">
												<div class="message-in">
													<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['text']; ?>

												</div>

																								<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['tagnum'] > 1 || $this->_tpl_vars['messages'][$this->_sections['message']['index']]['milestones'][0] != ""): ?>
													<div class="content-spacer-b"></div>

																										<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['milestones'][0] != ""): ?>
														<p>
															<strong><?php echo $this->_config[0]['vars']['milestone']; ?>
:</strong>
															<a href = "managemilestone.php?action=showmilestone&amp;msid=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['milestones']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
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
															<li id="fli_<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
">
																<div class="itemwrapper">
																	<table cellpadding="0" cellspacing="0" border="0">
																		<tr>
																			<td class="leftmen" valign="top">
																				<div class="inmenue"></div>
																			</td>
																			<td class="thumb">
																				<a href = "<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['datei']; ?>
"<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[img<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
]" <?php elseif ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
]"<?php endif; ?> title="<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['name']; ?>
">
																					<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?>
																					<img src = "thumb.php?pic=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['datei']; ?>
&amp;width=32" alt="" />
																					<?php else: ?>
																					<img src = "templates/standard/images/files/<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['type']; ?>
.png" alt="" />
																					<?php endif; ?>
																				</a>
																			</td>
																			<td class="rightmen" valign="top">
																				<div class="inmenue">
																				<?php if ($this->_tpl_vars['userpermissions']['files']['del']): ?>
																					<a class="del" href="javascript:confirmfunction('<?php echo $this->_tpl_vars['langfile']['confirmdel']; ?>
','deleteElement(\'fli_<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
\',\'managefile.php?action=delete&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&file=<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
\')');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a><?php endif; ?>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td colspan="3"><span class="name"><a href = "<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['datei']; ?>
"<?php if ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[img<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
]" <?php elseif ($this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['ID']; ?>
]"<?php endif; ?> title="<?php echo $this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
</a></span>	</td>
																		<tr/>
																	</table>

																</div> 															</li>
															<?php endfor; endif; ?>
														</ul>
													</div> 													<div style="clear:both"></div>
												<?php endif; ?>

											</div> 										</div>
									</div>
								</td>
							</tr>
						</tbody>
						<?php endfor; endif; ?>

						</table>
					</div> 
					<div class="tablemenue">
						<div class="tablemenue-in">
							<?php if ($this->_tpl_vars['userpermissions']['messages']['add']): ?>
							<a class="butn_link" href="javascript:blindtoggle('addmsg');"  id="add_butn" onclick="toggleClass('add','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_msgs','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addmessage']; ?>
</a>
							<?php endif; ?>
						</div>
					</div>
				</div> 			<div class="content-spacer"></div>

		</div> 	</div> </div> 
<?php echo '
	<script type = "text/javascript">
		var accord_messages = new accordion(\'block_msgs\');
	</script>
'; ?>


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