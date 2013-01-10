<?php /* Smarty version 2.6.19, created on 2012-08-29 16:21:55
         compiled from edittask.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'edittask.tpl', 10, false),)), $this); ?>
<?php if ($this->_tpl_vars['showhtml'] != 'no'): ?>
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

<div class="breadcrumb">
<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['projectname']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a>
<a href="managetask.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo $this->_config[0]['vars']['tasklists']; ?>
</a>
<a href="managetasklist.php?action=showtasklist&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&tlid=<?php echo $this->_tpl_vars['task']['liste']; ?>
" title="<?php echo $this->_config[0]['vars']['tasklist']; ?>
 / <?php echo $this->_tpl_vars['task']['list']; ?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['task']['list'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a>
<a href="managetask.php?action=showtask&amp;tid=<?php echo $this->_tpl_vars['task']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['task']; ?>
 / <?php echo $this->_tpl_vars['task']['title']; ?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['task']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, "...", true) : smarty_modifier_truncate($_tmp, 50, "...", true)); ?>
</a>
<span>&nbsp;/...</span>
</div>

<h1 class="second"><img src="./templates/standard/images/symbols/task.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['task']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</h1>


<?php endif; ?>
				<div class="block_in_wrapper">


				<h2><?php echo $this->_config[0]['vars']['edittask']; ?>
</h2>


					<form class="main" method="post" action="managetask.php?action=edit&amp;tid=<?php echo $this->_tpl_vars['task']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['pid']; ?>
" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
>
					<fieldset>

					<div class="row"><label for="title"><?php echo $this->_config[0]['vars']['title']; ?>
:</label><input type="text" class="text" value="<?php echo $this->_tpl_vars['task']['title']; ?>
" name="title" id="title" realname="<?php echo $this->_config[0]['vars']['title']; ?>
" required="1" /></div>
					<div class="row"><label for="text"><?php echo $this->_config[0]['vars']['text']; ?>
:</label><div class="editor"><textarea name="text" id="text"   rows="3" cols="0" ><?php echo $this->_tpl_vars['task']['text']; ?>
</textarea></div></div>
					<div class="row"><label for="end"><?php echo $this->_config[0]['vars']['end']; ?>
:</label><input type="text" class="text" value="<?php echo $this->_tpl_vars['task']['endstring']; ?>
" name="end"  id="end"  /></div>

					<div class="datepick">
						<div id = "datepicker_task" class="picker" style = "display:none;"></div>
					</div>

					<script type="text/javascript">
					  	theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
 = new calendar(<?php echo $this->_tpl_vars['theM']; ?>
,<?php echo $this->_tpl_vars['theY']; ?>
);
						theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.dayNames = ["<?php echo $this->_config[0]['vars']['monday']; ?>
","<?php echo $this->_config[0]['vars']['tuesday']; ?>
","<?php echo $this->_config[0]['vars']['wednesday']; ?>
","<?php echo $this->_config[0]['vars']['thursday']; ?>
","<?php echo $this->_config[0]['vars']['friday']; ?>
","<?php echo $this->_config[0]['vars']['saturday']; ?>
","<?php echo $this->_config[0]['vars']['sunday']; ?>
"];
						theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.monthNames = ["<?php echo $this->_config[0]['vars']['january']; ?>
","<?php echo $this->_config[0]['vars']['february']; ?>
","<?php echo $this->_config[0]['vars']['march']; ?>
","<?php echo $this->_config[0]['vars']['april']; ?>
","<?php echo $this->_config[0]['vars']['may']; ?>
","<?php echo $this->_config[0]['vars']['june']; ?>
","<?php echo $this->_config[0]['vars']['july']; ?>
","<?php echo $this->_config[0]['vars']['august']; ?>
","<?php echo $this->_config[0]['vars']['september']; ?>
","<?php echo $this->_config[0]['vars']['october']; ?>
","<?php echo $this->_config[0]['vars']['november']; ?>
","<?php echo $this->_config[0]['vars']['december']; ?>
"];
						theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.relateTo = "end";
						theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.getDatepicker("datepicker_task");
					</script>

					<div class="row"><label for="tasklist"><?php echo $this->_config[0]['vars']['tasklist']; ?>
:</label>
						<select name="tasklist" class="select" id="tasklist" required="1" realname="<?php echo $this->_config[0]['vars']['tasklist']; ?>
">
						<?php unset($this->_sections['tasklist']);
$this->_sections['tasklist']['name'] = 'tasklist';
$this->_sections['tasklist']['loop'] = is_array($_loop=$this->_tpl_vars['tasklists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tasklist']['show'] = true;
$this->_sections['tasklist']['max'] = $this->_sections['tasklist']['loop'];
$this->_sections['tasklist']['step'] = 1;
$this->_sections['tasklist']['start'] = $this->_sections['tasklist']['step'] > 0 ? 0 : $this->_sections['tasklist']['loop']-1;
if ($this->_sections['tasklist']['show']) {
    $this->_sections['tasklist']['total'] = $this->_sections['tasklist']['loop'];
    if ($this->_sections['tasklist']['total'] == 0)
        $this->_sections['tasklist']['show'] = false;
} else
    $this->_sections['tasklist']['total'] = 0;
if ($this->_sections['tasklist']['show']):

            for ($this->_sections['tasklist']['index'] = $this->_sections['tasklist']['start'], $this->_sections['tasklist']['iteration'] = 1;
                 $this->_sections['tasklist']['iteration'] <= $this->_sections['tasklist']['total'];
                 $this->_sections['tasklist']['index'] += $this->_sections['tasklist']['step'], $this->_sections['tasklist']['iteration']++):
$this->_sections['tasklist']['rownum'] = $this->_sections['tasklist']['iteration'];
$this->_sections['tasklist']['index_prev'] = $this->_sections['tasklist']['index'] - $this->_sections['tasklist']['step'];
$this->_sections['tasklist']['index_next'] = $this->_sections['tasklist']['index'] + $this->_sections['tasklist']['step'];
$this->_sections['tasklist']['first']      = ($this->_sections['tasklist']['iteration'] == 1);
$this->_sections['tasklist']['last']       = ($this->_sections['tasklist']['iteration'] == $this->_sections['tasklist']['total']);
?>
						<option value="<?php echo $this->_tpl_vars['tasklists'][$this->_sections['tasklist']['index']]['ID']; ?>
" <?php if ($this->_tpl_vars['task']['listid'] == $this->_tpl_vars['tasklists'][$this->_sections['tasklist']['index']]['ID']): ?>selected = "selected"<?php endif; ?>><?php echo $this->_tpl_vars['tasklists'][$this->_sections['tasklist']['index']]['name']; ?>
</option>
						<?php endfor; endif; ?></select>
					</div>

                                        <div class="row">
                                                <label for="assigned" ><?php echo $this->_config[0]['vars']['assignto']; ?>
:</label>
                                                <select name = "assigned[]" multiple="multiple" style = "height:80px;" id="assigned" required = "1" exclude = "-1" realname = "<?php echo $this->_config[0]['vars']['assignto']; ?>
">
                                                        <option value="-1"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
                                                        <?php unset($this->_sections['member']);
$this->_sections['member']['name'] = 'member';
$this->_sections['member']['loop'] = is_array($_loop=$this->_tpl_vars['members']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                                <option value="<?php echo $this->_tpl_vars['members'][$this->_sections['member']['index']]['ID']; ?>
" <?php if (in_array ( $this->_tpl_vars['members'][$this->_sections['member']['index']]['ID'] , $this->_tpl_vars['task']['users'] )): ?>selected = "selected"<?php endif; ?>><?php echo $this->_tpl_vars['members'][$this->_sections['member']['index']]['name']; ?>
</option>
                                                        <?php endfor; endif; ?>
                                                </select>
                                        </div>

					<div class="row-butn-bottom">
						<label>&nbsp;</label>
						<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['send']; ?>
</button>
						<button onclick="blindtoggle('form_edit');toggleClass('edit_butn','edit-active','edit');toggleClass('sm_task','smooth','nosmooth');return false;" onfocus="this.blur();" <?php if ($this->_tpl_vars['showhtml'] != 'no'): ?> style="display:none;"<?php endif; ?>><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
					</div>


					</fieldset>
					</form>

			</div> 

<?php if ($this->_tpl_vars['showhtml'] != 'no'): ?>
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
<?php endif; ?>