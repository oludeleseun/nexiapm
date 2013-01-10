<?php /* Smarty version 2.6.19, created on 2012-08-29 14:34:18
         compiled from log.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'log.tpl', 72, false),array('function', 'paginate_prev', 'log.tpl', 106, false),array('function', 'paginate_middle', 'log.tpl', 106, false),array('function', 'paginate_next', 'log.tpl', 106, false),)), $this); ?>
<div class="headline">
	<a href="javascript:void(0);" id="loghead_toggle" class="win_block" onclick = "toggleBlock('loghead');"></a>

	<?php if ($this->_tpl_vars['userpermissions']['admin']['add']): ?>
		<div class="wintools">
			<div class="export-main">
				<a class="export"><span><?php echo $this->_config[0]['vars']['export']; ?>
</span></a>
				<div class="export-in"  style="width:46px;left: -46px;"> 					<a class="pdf" href="manageproject.php?action=projectlogpdf&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['pdfexport']; ?>
</span></a>
					<a class="excel" href="manageproject.php?action=projectlogxls&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['excelexport']; ?>
</span></a>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<h2>
		<img src="./templates/standard/images/symbols/activity.png" alt="" /><?php echo $this->_config[0]['vars']['activity']; ?>

	</h2>
</div>


<div class="block" id = "loghead" style = "<?php echo $this->_tpl_vars['logstyle']; ?>
">
	<table class="log" cellpadding="0" cellspacing="0" border="0">

		<thead>
			<tr>
				<th class="a"></th>
				<th class="bc"><?php echo $this->_config[0]['vars']['action']; ?>
</th>
				<th class="d"><?php echo $this->_config[0]['vars']['user']; ?>
</th>
				<th class="tools"></th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<td colspan="5"></td>
			</tr>
		</tfoot>

		<?php unset($this->_sections['logitem']);
$this->_sections['logitem']['name'] = 'logitem';
$this->_sections['logitem']['loop'] = is_array($_loop=$this->_tpl_vars['log']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['logitem']['show'] = true;
$this->_sections['logitem']['max'] = $this->_sections['logitem']['loop'];
$this->_sections['logitem']['step'] = 1;
$this->_sections['logitem']['start'] = $this->_sections['logitem']['step'] > 0 ? 0 : $this->_sections['logitem']['loop']-1;
if ($this->_sections['logitem']['show']) {
    $this->_sections['logitem']['total'] = $this->_sections['logitem']['loop'];
    if ($this->_sections['logitem']['total'] == 0)
        $this->_sections['logitem']['show'] = false;
} else
    $this->_sections['logitem']['total'] = 0;
if ($this->_sections['logitem']['show']):

            for ($this->_sections['logitem']['index'] = $this->_sections['logitem']['start'], $this->_sections['logitem']['iteration'] = 1;
                 $this->_sections['logitem']['iteration'] <= $this->_sections['logitem']['total'];
                 $this->_sections['logitem']['index'] += $this->_sections['logitem']['step'], $this->_sections['logitem']['iteration']++):
$this->_sections['logitem']['rownum'] = $this->_sections['logitem']['iteration'];
$this->_sections['logitem']['index_prev'] = $this->_sections['logitem']['index'] - $this->_sections['logitem']['step'];
$this->_sections['logitem']['index_next'] = $this->_sections['logitem']['index'] + $this->_sections['logitem']['step'];
$this->_sections['logitem']['first']      = ($this->_sections['logitem']['iteration'] == 1);
$this->_sections['logitem']['last']       = ($this->_sections['logitem']['iteration'] == $this->_sections['logitem']['total']);
?>

						<?php if ($this->_sections['logitem']['index'] % 2 == 0): ?>
			<tbody class="color-a" id="log_<?php echo $this->_tpl_vars['log'][$this->_sections['logitem']['index']]['ID']; ?>
">
			<?php else: ?>
			<tbody class="color-b" id="log_<?php echo $this->_tpl_vars['log'][$this->_sections['logitem']['index']]['ID']; ?>
">
			<?php endif; ?>
				<tr>
					<td style="padding:0" class="symbols">
						<?php if ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['type'] == 'tasklist'): ?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/tasklist.png" alt="" />
						<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['type'] == 'user'): ?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/userlist.png" alt="" />
						<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['type'] == 'task'): ?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/task.png" alt="" />
						<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['type'] == 'projekt'): ?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/projects.png" alt="" />
						<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['type'] == 'milestone'): ?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/miles.png" alt="" />
						<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['type'] == 'message'): ?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/msgs.png" alt="" />
						<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['type'] == 'file'): ?>
							<img style="margin:0 0 0 3px;" src = "./templates/standard/images/symbols/files.png" alt="" />
						<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['type'] == 'folder'): ?>
							<img style="margin:0 0 0 3px;" src = "./templates/standard/images/symbols/folder-root.png" alt="" />
						<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['type'] == 'track'): ?>
							<img style="margin:0 0 0 3px;" src = "./templates/standard/images/symbols/timetracker.png" alt="" />
						<?php endif; ?>
					</td>
					<td>
						<div class="toggle-in">
							<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['log'][$this->_sections['logitem']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 55, "...", true) : smarty_modifier_truncate($_tmp, 55, "...", true)); ?>
</strong><br />
							<span class="info"><?php echo $this->_config[0]['vars']['was']; ?>

								<?php if ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['action'] == 1): ?>
									<?php echo $this->_config[0]['vars']['added']; ?>

								<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['action'] == 2): ?>
									<?php echo $this->_config[0]['vars']['edited']; ?>

								<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['action'] == 3): ?>
									<?php echo $this->_config[0]['vars']['deleted']; ?>

								<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['action'] == 4): ?>
									<?php echo $this->_config[0]['vars']['opened']; ?>

								<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['action'] == 5): ?>
									<?php echo $this->_config[0]['vars']['closed']; ?>

								<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['action'] == 6): ?>
									<?php echo $this->_config[0]['vars']['assigned']; ?>

								<?php elseif ($this->_tpl_vars['log'][$this->_sections['logitem']['index']]['action'] == 7): ?>
									<?php echo $this->_config[0]['vars']['deassigned']; ?>

								<?php endif; ?>
								<?php echo $this->_tpl_vars['log'][$this->_sections['logitem']['index']]['datum']; ?>

							</span>
						</div>
					</td>
					<td>
						<a href = "manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['log'][$this->_sections['logitem']['index']]['user']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['log'][$this->_sections['logitem']['index']]['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a>
					</td>
					<td class="tools"></td>
				</tr>
			</tbody>
		<?php endfor; endif; ?>

		<tbody class="paging">
			<tr>
				<td></td>
				<td colspan="2">
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

	<div class="tablemenue"></div>
</div> 
<div class="content-spacer"></div>