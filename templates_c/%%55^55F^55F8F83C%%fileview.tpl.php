<?php /* Smarty version 2.6.19, created on 2012-08-29 16:34:30
         compiled from fileview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'fileview.tpl', 31, false),)), $this); ?>
<ul>
	<?php unset($this->_sections['fold']);
$this->_sections['fold']['name'] = 'fold';
$this->_sections['fold']['loop'] = is_array($_loop=$this->_tpl_vars['folders']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fold']['show'] = true;
$this->_sections['fold']['max'] = $this->_sections['fold']['loop'];
$this->_sections['fold']['step'] = 1;
$this->_sections['fold']['start'] = $this->_sections['fold']['step'] > 0 ? 0 : $this->_sections['fold']['loop']-1;
if ($this->_sections['fold']['show']) {
    $this->_sections['fold']['total'] = $this->_sections['fold']['loop'];
    if ($this->_sections['fold']['total'] == 0)
        $this->_sections['fold']['show'] = false;
} else
    $this->_sections['fold']['total'] = 0;
if ($this->_sections['fold']['show']):

            for ($this->_sections['fold']['index'] = $this->_sections['fold']['start'], $this->_sections['fold']['iteration'] = 1;
                 $this->_sections['fold']['iteration'] <= $this->_sections['fold']['total'];
                 $this->_sections['fold']['index'] += $this->_sections['fold']['step'], $this->_sections['fold']['iteration']++):
$this->_sections['fold']['rownum'] = $this->_sections['fold']['iteration'];
$this->_sections['fold']['index_prev'] = $this->_sections['fold']['index'] - $this->_sections['fold']['step'];
$this->_sections['fold']['index_next'] = $this->_sections['fold']['index'] + $this->_sections['fold']['step'];
$this->_sections['fold']['first']      = ($this->_sections['fold']['iteration'] == 1);
$this->_sections['fold']['last']       = ($this->_sections['fold']['iteration'] == $this->_sections['fold']['total']);
?>
		<li id = "fdli_<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
">
			<div class="itemwrapper" id="iw_<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
">

				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td class="leftmen" valign="top">
							<div class="inmenue">
								<a class="export" href="managefile.php?action=folderexport&file=<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['export']; ?>
"></a>
							</div>
						</td>
						<td class="thumb">
							<a href = "javascript:change('manageajax.php?action=fileview&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&folder=<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
','filescontent');">
								<img src="./templates/standard/images/symbols/folder-sub.png" alt="" />
							</a>
						</td>
						<td class="rightmen" valign="top">
							<div class="inmenue">
							<?php if ($this->_tpl_vars['userpermissions']['files']['del']): ?>
							<a class="del" href="javascript:confirmfunction('<?php echo $this->_tpl_vars['langfile']['confirmdel']; ?>
','deleteElement(\'fdli_<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
\',\'managefile.php?action=delfolder&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&amp;folder=<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
&ajax=1\')');fadeToggle('fdli_<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
" onclick=""></a>
							<?php endif; ?>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<span class="name">
								<a href = "javascript:change('manageajax.php?action=fileview&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&folder=<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
','filescontent');"<?php if ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[img<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['messages'][$this->_sections['message']['index']]['ID']; ?>
]" <?php elseif ($this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['messages'][$this->_sections['message']['index']]['ID']; ?>
]"<?php endif; ?> title="<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['messages'][$this->_sections['message']['index']]['files'][$this->_sections['file']['index']]['name']; ?>
">
									<?php if ($this->_tpl_vars['folders'][$this->_sections['fold']['index']]['name'] != ""): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['folders'][$this->_sections['fold']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 13, "...", true) : smarty_modifier_truncate($_tmp, 13, "...", true)); ?>

									<?php else: ?>
									<?php echo $this->_config[0]['vars']['folder']; ?>

									<?php endif; ?>
								</a>
							</span>
						</td>
					<tr/>
				</table>

			</div> 		</li>
	<?php endfor; endif; ?> 
	<?php unset($this->_sections['file']);
$this->_sections['file']['name'] = 'file';
$this->_sections['file']['loop'] = is_array($_loop=$this->_tpl_vars['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<li id = "fli_<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['ID']; ?>
">
			<div class="itemwrapper" id="iw_<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['ID']; ?>
">

				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td class="leftmen" valign="top">
							<div class="inmenue"></div>
						</td>
						<td class="thumb">
							<a href = "<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['datei']; ?>
" <?php if ($this->_tpl_vars['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[]" <?php elseif ($this->_tpl_vars['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text]" rev="width: 650px; height: 500px;"<?php endif; ?>>
								<?php if ($this->_tpl_vars['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?>
								<img src = "thumb.php?pic=<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['datei']; ?>
&amp;width=32" alt="<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['name']; ?>
" />
								<?php else: ?>
								<img src = "templates/standard/images/files/<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['type']; ?>
.png" alt="<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['name']; ?>
" />
								<?php endif; ?>
							</a>
						</td>
						<td class="rightmen" valign="top">
							<div class="inmenue">
								<?php if ($this->_tpl_vars['userpermissions']['files']['del']): ?>
								<a class="del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'fli_<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['ID']; ?>
\',\'managefile.php?action=delete&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&amp;file=<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['ID']; ?>
\')');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['userpermissions']['files']['edit']): ?>
								<a class="edit" href="managefile.php?action=editform&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&amp;file=<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['editfile']; ?>
"></a>
								<?php endif; ?>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<span class="name">
								<a href = "<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['datei']; ?>
"<?php if ($this->_tpl_vars['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[img<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['ID']; ?>
]" <?php elseif ($this->_tpl_vars['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['ID']; ?>
]"<?php endif; ?> title="<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['name']; ?>
" onmousedown = "change('managefile.php?action=makeseen&file=<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['ID']; ?>
&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
','jslog');">
									<?php if ($this->_tpl_vars['files'][$this->_sections['file']['index']]['title'] != ""): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['files'][$this->_sections['file']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14, "...", true) : smarty_modifier_truncate($_tmp, 14, "...", true)); ?>

									<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['files'][$this->_sections['file']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14, "...", true) : smarty_modifier_truncate($_tmp, 14, "...", true)); ?>

									<?php endif; ?>
								</a>
							</span>
						</td>
					<tr/>
				</table>

			</div> 		</li>
		<?php echo '
			<script type = "text/javascript">
				new Draggable(\''; ?>
fli_<?php echo $this->_tpl_vars['files'][$this->_sections['file']['index']]['ID']; ?>
<?php echo '\',{revert:true});
			</script>
		'; ?>

	<?php endfor; endif; ?> </ul>

<?php unset($this->_sections['fold']);
$this->_sections['fold']['name'] = 'fold';
$this->_sections['fold']['loop'] = is_array($_loop=$this->_tpl_vars['folders']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fold']['show'] = true;
$this->_sections['fold']['max'] = $this->_sections['fold']['loop'];
$this->_sections['fold']['step'] = 1;
$this->_sections['fold']['start'] = $this->_sections['fold']['step'] > 0 ? 0 : $this->_sections['fold']['loop']-1;
if ($this->_sections['fold']['show']) {
    $this->_sections['fold']['total'] = $this->_sections['fold']['loop'];
    if ($this->_sections['fold']['total'] == 0)
        $this->_sections['fold']['show'] = false;
} else
    $this->_sections['fold']['total'] = 0;
if ($this->_sections['fold']['show']):

            for ($this->_sections['fold']['index'] = $this->_sections['fold']['start'], $this->_sections['fold']['iteration'] = 1;
                 $this->_sections['fold']['iteration'] <= $this->_sections['fold']['total'];
                 $this->_sections['fold']['index'] += $this->_sections['fold']['step'], $this->_sections['fold']['iteration']++):
$this->_sections['fold']['rownum'] = $this->_sections['fold']['iteration'];
$this->_sections['fold']['index_prev'] = $this->_sections['fold']['index'] - $this->_sections['fold']['step'];
$this->_sections['fold']['index_next'] = $this->_sections['fold']['index'] + $this->_sections['fold']['step'];
$this->_sections['fold']['first']      = ($this->_sections['fold']['iteration'] == 1);
$this->_sections['fold']['last']       = ($this->_sections['fold']['iteration'] == $this->_sections['fold']['total']);
?>
	<?php echo '
		<script type = "text/javascript">
			try
			{
				Droppables.add(\''; ?>
fdli_<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
<?php echo '\',{
					onDrop: function(element) {
					change(\'managefile.php?action=movefile&id='; ?>
<?php echo $this->_tpl_vars['project']['ID']; ?>
<?php echo '&file=\'+element.id+\'&target='; ?>
<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
<?php echo '\',\'jslog\');
					element.hide();
				}
				});
			}
			catch(e){}
		</script>
	'; ?>

<?php endfor; endif; ?>

<script type = "text/javascript">
	<?php if ($this->_tpl_vars['foldername']): ?>
	$('dirname').innerHTML = '<?php echo $this->_tpl_vars['foldername']; ?>
';
	<?php else: ?>
	$('dirname').innerHTML = '<?php echo $this->_tpl_vars['langfile']['rootdir']; ?>
';
	<?php endif; ?>
	$('filenum').innerHTML = '<?php echo $this->_tpl_vars['filenum']; ?>
';
	new LyteBox();
	$('dirUp').href = "javascript:change('manageajax.php?action=fileview&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&folder=<?php echo $this->_tpl_vars['folderid']; ?>
','filescontent');"
</script>