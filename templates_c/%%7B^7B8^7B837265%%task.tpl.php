<?php /* Smarty version 2.6.19, created on 2012-08-29 16:21:55
         compiled from task.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'task.tpl', 13, false),)), $this); ?>
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
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true)); ?>
</a>
<a href="managetask.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo $this->_config[0]['vars']['tasklists']; ?>
</a>
<a href="managetasklist.php?action=showtasklist&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&tlid=<?php echo $this->_tpl_vars['task']['liste']; ?>
" title="<?php echo $this->_config[0]['vars']['tasklist']; ?>
 / <?php echo $this->_tpl_vars['task']['list']; ?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['task']['list'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, "...", true) : smarty_modifier_truncate($_tmp, 50, "...", true)); ?>
</a>
<span>&nbsp;/...</span>
</div>

<h1 class="second"><img src="./templates/standard/images/symbols/task.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['task']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true)); ?>
</h1>

	<div class="statuswrapper">
			<ul>
				<?php if ($this->_tpl_vars['userpermissions']['tasks']['close']): ?>
				<li class="link" id = "closetoggle">
				<?php if ($this->_tpl_vars['task']['status'] == 1): ?>
				<a class="close" href="javascript:closeElement('closetoggle','managetask.php?action=close&amp;tid=<?php echo $this->_tpl_vars['task']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a></li>
				<?php else: ?>
				<a class="close" href="javascript:closeElement('closetoggle','managetask.php?action=open&amp;tid=<?php echo $this->_tpl_vars['task']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a></li>
				<?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
				<li class="link"><a class="edit" href="javascript:void(0);"  id="edit_butn" onclick="blindtoggle('form_edit');toggleClass(this,'edit-active','edit');toggleClass('sm_task','smooth','nosmooth');" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a></li>
				<!--<li class="link"><a class="del" href="javascript:void(0);" onclick = "confirmit('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','managetask.php?action=del&amp;tid=<?php echo $this->_tpl_vars['task']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&redir=managetask.php?action=showproject&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a></li> -->
				<?php endif; ?>

				<!--
				<li class="link" onclick="blindtoggle('descript');toggleClass('desctoggle','desc_active','desc');"><a class="desc_active" id="desctoggle" href="javascript:void(0);" title="<?php echo $this->_config[0]['vars']['open']; ?>
"><?php echo $this->_config[0]['vars']['description']; ?>
</a></li>
				-->

				<li><a><?php echo $this->_config[0]['vars']['user']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['task']['user'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a></li>

				<li><a><?php echo $this->_config[0]['vars']['end']; ?>
: <?php echo $this->_tpl_vars['task']['endstring']; ?>
</a></li>
			</ul>
	</div>



						<?php if ($this->_tpl_vars['userpermissions']['tasks']['edit']): ?>
				<div id = "form_edit" class="addmenue" style = "display:none;clear:both;">
					<div class="content-spacer"></div>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "edittask.tpl", 'smarty_include_vars' => array('showhtml' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
			<?php endif; ?>

<div class="content-spacer"></div>

	<div class="nosmooth" id="sm_task">
		<div id="descript" class="descript">
			<h2><?php echo $this->_config[0]['vars']['task']; ?>
</h2>
			<?php echo $this->_tpl_vars['task']['text']; ?>

			<div class="content-spacer"></div>
		</div>
	</div>



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