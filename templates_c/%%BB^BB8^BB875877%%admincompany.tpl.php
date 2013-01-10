<?php /* Smarty version 2.6.19, created on 2012-08-29 13:50:18
         compiled from admincompany.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'admincompany.tpl', 79, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-admin.tpl", 'smarty_include_vars' => array('companytab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
	<div id="content-left-in">
		<div class="projects">

			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				<?php if ($this->_tpl_vars['mode'] == 'edited'): ?>
					<span class="info_in_yellow"><img src="templates/standard/images/symbols/company-settings.png" alt=""/><?php echo $this->_config[0]['vars']['companywasedited']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'deleted'): ?>
					<span class="info_in_red"><img src="templates/standard/images/symbols/company-settings.png" alt=""/><?php echo $this->_config[0]['vars']['companywasdeleted']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'added'): ?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/company-settings.png" alt=""/><?php echo $this->_config[0]['vars']['companywasadded']; ?>
</span>
				<?php endif; ?>
			</div>

			<?php echo '
				<script type = "text/javascript">
					systemMsg(\'systemmsg\');
				</script>
			'; ?>


			<h1><?php echo $this->_config[0]['vars']['administration']; ?>
<span>/ <?php echo $this->_config[0]['vars']['companymanagement']; ?>
</span></h1>

			<div class="headline">
				<a href="javascript:void(0);" id="acc-projects_toggle" class="win_none" onclick = "toggleBlock('acc-projects');"></a>
					<?php if ($this->_tpl_vars['userpermissions']['admin']): ?>
						<div class="wintools">
							<a class="add" href="javascript:blindtoggle('form_addmyproject');" id="add_myprojects" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['addcompany']; ?>
</span></a>
						</div>
					<?php endif; ?>

					<h2>
						<img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo $this->_config[0]['vars']['openprojects']; ?>

					</h2>
				</div>

				<div class="block" id="acc-projects"> 					<div id = "form_addmyproject" class="addmenue" style = "display:none;">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addcompanyform.tpl", 'smarty_include_vars' => array('myprojects' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>

					<div class="nosmooth" id="sm_myprojects">
				
						<table cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th class="a"></th>
									<th class="b"><?php echo $this->_config[0]['vars']['companyname']; ?>
</th>
									<th class="c"><?php echo $this->_config[0]['vars']['website']; ?>
</th>
									<th class="days" style="text-align:right"><?php echo $this->_config[0]['vars']['companylocation']; ?>
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
											<!-- used to be a thick -->
										</td>
										<td>
											<div class="toggle-in">
												<span class="acc-toggle" onclick="javascript:accord_projects.activate($$('#acc-projects .accordion_toggle')[<?php echo $this->_sections['opro']['index']; ?>
]);toggleAccordeon('acc-projects',this);"></span>
												<a href="#" title="<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['name']; ?>
">
													<?php echo ((is_array($_tmp=$this->_tpl_vars['opros'][$this->_sections['opro']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

												</a>
											</div>
										</td>
										<td>
											<span><?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['website']; ?>
</span>
										</td>
										<td style="text-align:right"><?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['state']; ?>
, <?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['country']; ?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($this->_tpl_vars['userpermissions']['admin']): ?>
												<a class="tool_edit" href="managecompany.php?action=editform&amp;id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
											<?php endif; ?>
											<?php if ($this->_tpl_vars['userpermissions']['admin']): ?>
												<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'proj_<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
\',\'managecompany.php?action=del&id=<?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['ID']; ?>
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
													<p class="tags-miles">
														<strong><?php echo $this->_config[0]['vars']['rcnumber']; ?>
: </strong><?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['rcnumber']; ?>

                                                        <br /><strong><?php echo $this->_config[0]['vars']['shortname']; ?>
: </strong><?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['shortname']; ?>

													</p>                                                  
                                                    
                                                    <p class="tags-miles">
														<strong><?php echo $this->_config[0]['vars']['companyaddress']; ?>
:</strong>
													</p>
                                                    <?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['address1']; ?>
 <?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['address2']; ?>

                                                    <br /><strong><?php echo $this->_config[0]['vars']['rcnumber']; ?>
:</strong><?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['rcnumber']; ?>

                                                    
                                                    <p class="tags-miles">
														<strong><?php echo $this->_config[0]['vars']['companycontact']; ?>
:</strong>
													</p>
                                                    <b><?php echo $this->_config[0]['vars']['phone']; ?>
:</b><?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['phone']; ?>
 <?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['phone2']; ?>
 
                                                    <b><?php echo $this->_config[0]['vars']['email']; ?>
</b>: <?php echo $this->_tpl_vars['opros'][$this->_sections['opro']['index']]['email']; ?>

													

												</div>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endfor; endif; ?>
						</table> 
					</div> 
					<div class="tablemenue">
						<div class="tablemenue-in">
							<?php if ($this->_tpl_vars['userpermissions']['admin']): ?>
								<a class="butn_link" href="javascript:blindtoggle('form_addmyproject');" id="add_butn_myprojects" onclick="toggleClass('add_myprojects','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addcompany']; ?>
</a>
							<?php endif; ?>
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