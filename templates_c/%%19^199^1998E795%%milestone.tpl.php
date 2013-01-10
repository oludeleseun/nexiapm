<?php /* Smarty version 2.6.19, created on 2012-08-29 16:10:53
         compiled from milestone.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'milestone.tpl', 10, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax')));
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


<div class="breadcrumb">
<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true)); ?>
</a>
<a href="managemilestone.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><img src="./templates/standard/images/symbols/miles.png" alt="" /><?php echo $this->_config[0]['vars']['milestones']; ?>
</a>

</div>


<h1 class="second"><img src="./templates/standard/images/symbols/miles.png" alt="" /><?php echo $this->_tpl_vars['milestone']['name']; ?>
</h1>


	<div class="statuswrapper">
			<ul>
				<?php if ($this->_tpl_vars['userpermissions']['milestones']['close']): ?>
					<?php if ($this->_tpl_vars['milestone']['status'] == 1): ?>
						<li class="link"><a class="close" href="managemilestone.php?action=close&amp;mid=<?php echo $this->_tpl_vars['milestone']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a></li>
					<?php endif; ?>
				<?php endif; ?>
					<?php if ($this->_tpl_vars['userpermissions']['milestones']['edit']): ?>
				<li class="link"><a class="edit" href="javascript:void(0);"  id="edit_butn" onclick="blindtoggle('form_edit');toggleClass(this,'edit-active','edit');toggleClass('sm_mile','smooth','nosmooth');" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a></li>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['userpermissions']['milestones']['del']): ?>
				<li class="link"><a class="del" href="javascript:void(0);" onclick = "confirmit('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','managemilestone.php?action=del&amp;mid=<?php echo $this->_tpl_vars['milestone']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a></li>
				<?php endif; ?>

				<!--
				<li class="link" onclick="blindtoggle('descript');toggleClass('desctoggle','desc_active','desc');"><a class="desc_active" id="desctoggle" href="javascript:void(0);" title="<?php echo $this->_config[0]['vars']['open']; ?>
"><?php echo $this->_config[0]['vars']['description']; ?>
</a></li>
				-->

				<li><a><?php echo $this->_config[0]['vars']['start']; ?>
: <?php echo $this->_tpl_vars['milestone']['startstring']; ?>
</a></li>

				<li><a><?php echo $this->_config[0]['vars']['end']; ?>
: <?php echo $this->_tpl_vars['milestone']['endstring']; ?>
</a></li>
			</ul>
	</div>

						<?php if ($this->_tpl_vars['userpermissions']['milestones']['edit']): ?>
				<div id = "form_edit" class="addmenue" style = "display:none;clear:both;">
					<div class="content-spacer"></div>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "editmilestone.tpl", 'smarty_include_vars' => array('showhtml' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
			<?php endif; ?>


<div class="content-spacer"></div>

	<div class="nosmooth" id="sm_mile">
				<div id="descript" class="descript">
			<h2><?php echo $this->_config[0]['vars']['description']; ?>
</h2>
			<?php echo $this->_tpl_vars['milestone']['desc']; ?>

		</div>


			<?php if ($this->_tpl_vars['milestone']['tasks'][0][0]): ?>
		<div class="content-spacer-b"></div>
				<h2><?php echo $this->_config[0]['vars']['tasklists']; ?>
</h2>

						<div class="inwrapper">
							<ul>
							<?php unset($this->_sections['task']);
$this->_sections['task']['name'] = 'task';
$this->_sections['task']['loop'] = is_array($_loop=$this->_tpl_vars['milestone']['tasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<li>
									<div class="itemwrapper">

											<table cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td class="leftmen" valign="top">
														<div class="inmenue">
																<!-- <a class="more" href="javascript:fadeToggle('info_<?php echo $this->_tpl_vars['members'][$this->_sections['member']['index']]['ID']; ?>
');"></a>	-->
														</div>
													</td>
													<td class="thumb">
														<a href="managetasklist.php?action=showtasklist&amp;tlid=<?php echo $this->_tpl_vars['milestone']['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['milestone']['tasks'][$this->_sections['task']['index']]['name']; ?>
">
																<img src = "./templates/standard/images/symbols/tasklist.png" style="width: 32px; height: auto;" alt="" />
														</a>
													</td>
													<td class="rightmen" valign="top">
														<div class="inmenue">
														<!--
															<a class="del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'files_focus<?php echo $this->_tpl_vars['ordner'][$this->_sections['file']['index']]['ID']; ?>
\',\'managefile.php?action=delete&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&amp;file=<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
\')');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
" onclick="fadeToggle('iw_<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
');"></a>
															<a class="edit" href="#" title="<?php echo $this->_config[0]['vars']['editfile']; ?>
"></a>
														-->
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="3">
														<span class="name">
															<a href = "managetasklist.php?action=showtasklist&amp;tlid=<?php echo $this->_tpl_vars['milestone']['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['milestone']['tasks'][$this->_sections['task']['index']]['name']; ?>
">
																<?php if ($this->_tpl_vars['milestone']['tasks'][$this->_sections['task']['index']]['name'] != ""): ?>
																	<?php echo ((is_array($_tmp=$this->_tpl_vars['milestone']['tasks'][$this->_sections['task']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 13, "...", true) : smarty_modifier_truncate($_tmp, 13, "...", true)); ?>

																<?php else: ?>
																	<?php echo $this->_config[0]['vars']['tasklist']; ?>

																<?php endif; ?>
															</a>
														</span>
													</td>
												<tr/>
											</table>

									</div> 								</li>
							<?php endfor; endif; ?> 
							</ul>
						</div> 
				<?php endif; ?>


				<?php if ($this->_tpl_vars['milestone']['messages'][0][0]): ?>
		<div class="content-spacer-b"></div>
				<h2><?php echo $this->_config[0]['vars']['messages']; ?>
</h2>

						<div class="inwrapper">
							<ul>
							<?php unset($this->_sections['msg']);
$this->_sections['msg']['name'] = 'msg';
$this->_sections['msg']['loop'] = is_array($_loop=$this->_tpl_vars['milestone']['messages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['msg']['show'] = true;
$this->_sections['msg']['max'] = $this->_sections['msg']['loop'];
$this->_sections['msg']['step'] = 1;
$this->_sections['msg']['start'] = $this->_sections['msg']['step'] > 0 ? 0 : $this->_sections['msg']['loop']-1;
if ($this->_sections['msg']['show']) {
    $this->_sections['msg']['total'] = $this->_sections['msg']['loop'];
    if ($this->_sections['msg']['total'] == 0)
        $this->_sections['msg']['show'] = false;
} else
    $this->_sections['msg']['total'] = 0;
if ($this->_sections['msg']['show']):

            for ($this->_sections['msg']['index'] = $this->_sections['msg']['start'], $this->_sections['msg']['iteration'] = 1;
                 $this->_sections['msg']['iteration'] <= $this->_sections['msg']['total'];
                 $this->_sections['msg']['index'] += $this->_sections['msg']['step'], $this->_sections['msg']['iteration']++):
$this->_sections['msg']['rownum'] = $this->_sections['msg']['iteration'];
$this->_sections['msg']['index_prev'] = $this->_sections['msg']['index'] - $this->_sections['msg']['step'];
$this->_sections['msg']['index_next'] = $this->_sections['msg']['index'] + $this->_sections['msg']['step'];
$this->_sections['msg']['first']      = ($this->_sections['msg']['iteration'] == 1);
$this->_sections['msg']['last']       = ($this->_sections['msg']['iteration'] == $this->_sections['msg']['total']);
?>
								<li>
									<div class="itemwrapper">

											<table cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td class="leftmen" valign="top">
														<div class="inmenue">
																<!-- <a class="more" href="javascript:fadeToggle('info_<?php echo $this->_tpl_vars['members'][$this->_sections['member']['index']]['ID']; ?>
');"></a>	-->
														</div>
													</td>
													<td class="thumb">
														<a href="managemessage.php?action=showmessage&amp;mid=<?php echo $this->_tpl_vars['milestone']['messages'][$this->_sections['msg']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['milestone']['messages'][$this->_sections['msg']['index']]['title']; ?>
">
																<img src = "./templates/standard/images/symbols/msgs.png" style="width: 32px; height: auto;" alt="" />
														</a>
													</td>
													<td class="rightmen" valign="top">
														<div class="inmenue">
														<!--
															<a class="del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'files_focus<?php echo $this->_tpl_vars['ordner'][$this->_sections['file']['index']]['ID']; ?>
\',\'managefile.php?action=delete&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&amp;file=<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
\')');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
" onclick="fadeToggle('iw_<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
');"></a>
															<a class="edit" href="#" title="<?php echo $this->_config[0]['vars']['editfile']; ?>
"></a>
														-->
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="3">
														<span class="name">
															<a href = "managemessage.php?action=showmessage&amp;mid=<?php echo $this->_tpl_vars['milestone']['messages'][$this->_sections['msg']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['milestone']['messages'][$this->_sections['msg']['index']]['title']; ?>
">
																<?php if ($this->_tpl_vars['milestone']['messages'][$this->_sections['msg']['index']]['title'] != ""): ?>
																	<?php echo ((is_array($_tmp=$this->_tpl_vars['milestone']['messages'][$this->_sections['msg']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 13, "...", true) : smarty_modifier_truncate($_tmp, 13, "...", true)); ?>

																<?php else: ?>
																	<?php echo $this->_config[0]['vars']['message']; ?>

																<?php endif; ?>
															</a>
														</span>
													</td>
												<tr/>
											</table>

									</div> 								</li>
							<?php endfor; endif; ?> 
							</ul>
						</div> 		<?php endif; ?>


	</div> 

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