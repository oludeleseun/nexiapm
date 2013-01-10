<?php /* Smarty version 2.6.19, created on 2012-08-29 16:09:19
         compiled from tasklist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'tasklist.tpl', 21, false),array('modifier', 'nl2br', 'tasklist.tpl', 147, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-project.tpl", 'smarty_include_vars' => array('taskstab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
<div id="content-left-in">
<div class="tasks">

	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($this->_tpl_vars['mode'] == 'edited'): ?>
			<span class="info_in_yellow"><img src="templates/standard/img/symbols/tasklist.png" alt=""/><?php echo $this->_config[0]['vars']['tasklistwasedited']; ?>
</span>
		<?php endif; ?>
	</div>
	
	<?php echo '
		<script type = "text/javascript">
			apperar = new Effect.Appear(\'systemmsg\', { duration: 2.0 })
		</script>
	'; ?>


	<div class="breadcrumb">
		<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true)); ?>
</a>
		<a href="managetask.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo $this->_config[0]['vars']['tasklists']; ?>
</a>
	</div>

	<h1 class="second"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['tasklist']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true)); ?>
</h1>

	<div class="statuswrapper">
		<ul>
			<?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?>
				<?php if ($this->_tpl_vars['tasklist']['status'] == 1): ?>
					<li class="link" id="closetoggle"><a class="close" href="managetasklist.php?action=close&amp;tlid=<?php echo $this->_tpl_vars['tasklist']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a></li>
				<?php else: ?>
					<li class="link" id="closetoggle"><a class="closed" href="managetasklist.php?action=open&amp;tlid=<?php echo $this->_tpl_vars['tasklist']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a></li>
				<?php endif; ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
				<li class="link"><a class="edit" href="javascript:void(0);"  id="edit_butn" onclick="blindtoggle('form_edit');toggleClass(this,'edit-active','edit');toggleClass('sm_tasklist','smooth','nosmooth');" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['userpermissions']['tasks']['del']): ?>
				<li class="link"><a class="del" href="javascript:void(0);" onclick="confirmit('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','managetasklist.php?action=del&amp;tlid=<?php echo $this->_tpl_vars['tasklist']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['tasklist']['desc']): ?>
				<li class="link" onclick="blindtoggle('descript');toggleClass('desctoggle','desc_active','desc');"><a class="desc" id="desctoggle" href="#" title="<?php echo $this->_config[0]['vars']['open']; ?>
"><?php echo $this->_config[0]['vars']['description']; ?>
</a></li>
			<?php endif; ?>
			<li><a><?php echo $this->_config[0]['vars']['start']; ?>
: <?php echo $this->_tpl_vars['tasklist']['startstring']; ?>
</a></li>
		</ul>
	</div>
	
		<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
		<div id = "form_edit" class="addmenue" style = "display:none;clear:both;">
			<div class="content-spacer"></div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "edittasklist.tpl", 'smarty_include_vars' => array('showhtml' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	<?php endif; ?>

	<div class="content-spacer"></div>

	<div class="nosmooth" id="sm_tasklist">
		<div id="descript" class="descript" style="display:none;">
			<h2><?php echo $this->_tpl_vars['tasklist']['name']; ?>
</h2>
			<?php echo $this->_tpl_vars['tasklist']['desc']; ?>

			<div class="content-spacer"></div>
		</div>

		<div class="headline">
			<a href="javascript:void(0);" id="block-<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
_toggle" class="win_block" onclick = "toggleBlock('block-<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');"></a>

			<div class="wintools">
				<?php if ($this->_tpl_vars['userpermissions']['tasks']['add']): ?>
				<a class="add" href="javascript:blindtoggle('form_addtask');" id="add_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','butn_link_active','butn_link');toggleClass('sm_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['addtask']; ?>
</span></a>
				<?php endif; ?>
			</div>

			<h2>
				<img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo $this->_config[0]['vars']['newtasks']; ?>
</a>
			</h2>
		</div>

		<div id="acc1" class="block">

				<?php if ($this->_tpl_vars['userpermissions']['tasks']['add']): ?>
			<div id = "form_addtask" class="addmenue" style = "display:none;">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addtask.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		<?php endif; ?>

		<div class="nosmooth" id="sm_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
">
			<table id="acc_1" cellpadding="0" cellspacing="0" border="0">

				<thead>
					<tr>
						<th class="a"></th>
						<th class="b"><?php echo $this->_config[0]['vars']['tasks']; ?>
</th>
						<th class="c"><?php echo $this->_config[0]['vars']['user']; ?>
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

				<?php if ($this->_tpl_vars['tasklist']['tasknum'] > 0): ?>
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
">
						<?php else: ?>
						<tbody class="color-b" id="task_<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
">
						<?php endif; ?>
							<tr <?php if ($this->_tpl_vars['tasks'][$this->_sections['task']['index']]['daysleft'] < 0): ?> class="marker-late"<?php elseif ($this->_tpl_vars['tasks'][$this->_sections['task']['index']]['daysleft'] == 0): ?> class="marker-today"<?php endif; ?>>
								<td><?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?><a class="butn_check" href="javascript:closeElement('task_<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
','managetask.php?action=close&amp;tid=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a><?php endif; ?></td>
								<td>
									<div class="toggle-in">
									<span class="acc-toggle" onclick="javascript:accord_1.activate($$('#acc1 .accordion_toggle')[<?php echo $this->_sections['task']['index']; ?>
]);toggleAccordeon('acc_1',this);"></span>
										<a href="managetask.php?action=showtask&amp;tid=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['project']; ?>
" title="<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['title']; ?>
">
											<?php if ($this->_tpl_vars['tasks'][$this->_sections['task']['index']]['title'] != ""): ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['tasks'][$this->_sections['task']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

											<?php else: ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['tasks'][$this->_sections['task']['index']]['text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

											<?php endif; ?>
										</a>
									</div>
								</td>
								<td><a href="manageuser.php?action=profile&amp;tlid=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['user_id']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['tasks'][$this->_sections['task']['index']]['user'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 23, "...", true) : smarty_modifier_truncate($_tmp, 23, "...", true)); ?>
</a></td>
								<td style="text-align:right"><?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
								<td class="tools">
									<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
									<a class="tool_edit" href="managetask.php?action=editform&amp;tid=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a><?php endif; ?>
									<?php if ($this->_tpl_vars['userpermissions']['tasks']['del']): ?>
									<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'task_<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
\',\'managetask.php?action=del&amp;tid=<?php echo $this->_tpl_vars['tasks'][$this->_sections['task']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
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
				<?php else: ?>
					<tbody class="color-a">
						<tr>
							<td></td>
							<td><?php echo $this->_config[0]['vars']['notasks']; ?>
</td>
							<td></td>
							<td></td>
							<td class="tools"></td>
						</tr>
					</tbody>
				<?php endif; ?>
			</table>

						<?php if ($this->_tpl_vars['tasklist']['donetasknum'] > 0): ?>
				<div id="done_2" class="doneblock">
					
					<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('doneblock_<?php echo $this->_tpl_vars['project']['ID']; ?>
');toggleClass('donebutn_<?php echo $this->_tpl_vars['project']['ID']; ?>
','butn_link_active','butn_link');toggleClass('toggle-done-<?php echo $this->_tpl_vars['project']['ID']; ?>
','acc-toggle','acc-toggle-active');">
						<tr>
							<td class="a"></td>
							<td class="b"><span id="toggle-done-<?php echo $this->_tpl_vars['project']['ID']; ?>
" class="acc-toggle-active"><?php echo $this->_config[0]['vars']['donetasks']; ?>
</span></td>
							<td class="c"></td>
							<td class="days"></td>
							<td class="tools"></td>
						</tr>
					</table>

					<div class="toggleblock">
					
						<table cellpadding="0" cellspacing="0" border="0" id = "done_<?php echo $this->_tpl_vars['project']['ID']; ?>
">
							<?php unset($this->_sections['donetask']);
$this->_sections['donetask']['name'] = 'donetask';
$this->_sections['donetask']['loop'] = is_array($_loop=$this->_tpl_vars['donetasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['donetask']['show'] = true;
$this->_sections['donetask']['max'] = $this->_sections['donetask']['loop'];
$this->_sections['donetask']['step'] = 1;
$this->_sections['donetask']['start'] = $this->_sections['donetask']['step'] > 0 ? 0 : $this->_sections['donetask']['loop']-1;
if ($this->_sections['donetask']['show']) {
    $this->_sections['donetask']['total'] = $this->_sections['donetask']['loop'];
    if ($this->_sections['donetask']['total'] == 0)
        $this->_sections['donetask']['show'] = false;
} else
    $this->_sections['donetask']['total'] = 0;
if ($this->_sections['donetask']['show']):

            for ($this->_sections['donetask']['index'] = $this->_sections['donetask']['start'], $this->_sections['donetask']['iteration'] = 1;
                 $this->_sections['donetask']['iteration'] <= $this->_sections['donetask']['total'];
                 $this->_sections['donetask']['index'] += $this->_sections['donetask']['step'], $this->_sections['donetask']['iteration']++):
$this->_sections['donetask']['rownum'] = $this->_sections['donetask']['iteration'];
$this->_sections['donetask']['index_prev'] = $this->_sections['donetask']['index'] - $this->_sections['donetask']['step'];
$this->_sections['donetask']['index_next'] = $this->_sections['donetask']['index'] + $this->_sections['donetask']['step'];
$this->_sections['donetask']['first']      = ($this->_sections['donetask']['iteration'] == 1);
$this->_sections['donetask']['last']       = ($this->_sections['donetask']['iteration'] == $this->_sections['donetask']['total']);
?>
								<?php if ($this->_sections['donetask']['index'] % 2 == 0): ?>
								<tbody class="color-a" id="task_<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['ID']; ?>
">
								<?php else: ?>
								<tbody class="color-b" id="task_<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['ID']; ?>
">
								<?php endif; ?>
									<tr>
										<td class="a"><?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?><a class="butn_checked" href="javascript:closeElement('task_<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['ID']; ?>
','managetask.php?action=open&amp;tid=<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a><?php endif; ?></td>
										<td class="b">
											<div class="toggle-in">
											<span class="acc-toggle" onclick="javascript:done_2.activate($$('#done_2 .accordion_toggle')[<?php echo $this->_sections['donetask']['index']; ?>
]);toggleAccordeon('done_<?php echo $this->_tpl_vars['project']['ID']; ?>
',this);"></span>
												<a href="managetask.php?action=showtask&amp;tid=<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['project']; ?>
" title="<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['title']; ?>
">
													<?php if ($this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['title'] != ""): ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

													<?php else: ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

													<?php endif; ?>
												</a>
											</div>
										</td>
										<td class="c"><a href="manageuser.php?action=profile&amp;tlid=<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['user_id']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['user'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 23, "...", true) : smarty_modifier_truncate($_tmp, 23, "...", true)); ?>
</a></td>
										<td class="days" style="text-align:right"><?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['daysleft']; ?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
											<a class="tool_edit" href="managetask.php?action=editform&amp;tid=<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a><?php endif; ?>
											<?php if ($this->_tpl_vars['userpermissions']['tasks']['del']): ?>
											<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'task_<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['ID']; ?>
\',\'managetask.php?action=del&amp;tid=<?php echo $this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
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
														<?php echo ((is_array($_tmp=$this->_tpl_vars['donetasks'][$this->_sections['donetask']['index']]['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endfor; endif; ?> 						</table>
						
					</div> 				</div> 			<?php endif; ?> 
		</div> 
				<div class="tablemenue">
			<div class="tablemenue-in">
				<?php if ($this->_tpl_vars['userpermissions']['tasks']['add']): ?>
					<a class="butn_link" href="javascript:blindtoggle('form_addtask');" id="add_butn_<?php echo $this->_tpl_vars['project']['ID']; ?>
" onclick="toggleClass('add_<?php echo $this->_tpl_vars['project']['ID']; ?>
','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_<?php echo $this->_tpl_vars['project']['ID']; ?>
','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addtask']; ?>
</a>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['tasklist']['donetasknum'] > 0): ?>
					<a class="butn_link_active" href="javascript:blindtoggle('doneblock_<?php echo $this->_tpl_vars['project']['ID']; ?>
');" id="donebutn_<?php echo $this->_tpl_vars['project']['ID']; ?>
" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('toggle-done-<?php echo $this->_tpl_vars['project']['ID']; ?>
','acc-toggle','acc-toggle-active');"><?php echo $this->_config[0]['vars']['donetasks']; ?>
</a>
				<?php endif; ?>
			</div>
		</div> 
	</div> </div> 
<div class="content-spacer"></div>

<?php echo '
	<script type = "text/javascript">
		var accord_1 = new accordion(\'acc_1\');
		var done_2 = new accordion(\'done_2\');
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