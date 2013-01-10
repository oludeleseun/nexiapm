<?php /* Smarty version 2.6.19, created on 2012-08-29 16:34:30
         compiled from projectfiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'projectfiles.tpl', 32, false),array('function', 'paginate_prev', 'projectfiles.tpl', 92, false),array('function', 'paginate_middle', 'projectfiles.tpl', 92, false),array('function', 'paginate_next', 'projectfiles.tpl', 92, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload3' => 'lightbox')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-project.tpl", 'smarty_include_vars' => array('filestab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
	<div id="content-left-in">
		<div class="files">

			<div class="infowin_left">
				<span id = "deleted" style = "display:none;" class="info_in_red"><img src="templates/standard/images/symbols/files.png" alt=""/><?php echo $this->_config[0]['vars']['filewasdeleted']; ?>
</span>
			</div>

			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				<?php if ($this->_tpl_vars['mode'] == 'added'): ?>
				<span class="info_in_green"><img src="templates/standard/images/symbols/files.png" alt=""/><?php echo $this->_config[0]['vars']['filewasadded']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'edited'): ?>
				<span class="info_in_yellow"><img src="templates/standard/images/symbols/files.png" alt=""/><?php echo $this->_config[0]['vars']['filewasedited']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'folderadded'): ?>
				<span class="info_in_green"><img src="templates/standard/images/symbols/folder-root.png" alt=""/><?php echo $this->_config[0]['vars']['folderwasadded']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'folderedited'): ?>
				<span class="info_in_yellow"><img src="templates/standard/images/symbols/folder-root.png" alt=""/><?php echo $this->_config[0]['vars']['folderwasedited']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'folderdel'): ?>
				<span class="info_in_red"><img src="templates/standard/images/symbols/folder-root.png" alt=""/><?php echo $this->_config[0]['vars']['folderwasdeleted']; ?>
</span>
				<?php endif; ?>
			</div>
			
			<?php echo '
				<script type = "text/javascript">
					systemMsg(\'systemmsg\');
				</script>
			'; ?>


			<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 45, "...", true) : smarty_modifier_truncate($_tmp, 45, "...", true)); ?>
<span>/ <?php echo $this->_config[0]['vars']['files']; ?>
</span></h1>

			<div class="headline">
				<a href="javascript:void(0);" id="block_files_toggle" class="win_block" onclick = "toggleBlock('block_files');"></a>

				<div class="wintools">
					<div class="addmen">
						<div class="export-main">
							<a class="export"><span><?php echo $this->_config[0]['vars']['addbutton']; ?>
</span></a>
							<div class="export-in"  style="width:54px;left: -54px;"> 								<?php if ($this->_tpl_vars['userpermissions']['files']['add']): ?>
								<a class="addfile" href="javascript:blindtoggle('form_file');" id="addfile" onclick="toggleClass(this,'addfile-active','addfile');toggleClass('add_file_butn','butn_link_active','butn_link');toggleClass('sm_files','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['addfile']; ?>
</span></a>
								<a class="addfolder" href="javascript:blindtoggle('form_folder');" id="addfolder" onclick="toggleClass(this,'addfolder-active','addfolder');toggleClass('add_folder_butn','butn_link_active','butn_link');toggleClass('sm_files','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['addfolder']; ?>
</span></a>	<?php endif; ?>
							</div>
						</div>
					</div>
				</div>

				<h2>
					<img src="./templates/standard/images/symbols/folder-root.png" alt="" /><span id = "dirname"><?php echo $this->_config[0]['vars']['rootdir']; ?>
</span>
				</h2>
			</div>

			<div id="block_files" class="blockwrapper">
								<?php if ($this->_tpl_vars['userpermissions']['files']['add']): ?>
					<div id = "form_folder" class="addmenue" style = "display:none;">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addfolder.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				<?php endif; ?>

								<?php if ($this->_tpl_vars['userpermissions']['files']['add']): ?>
					<div id = "form_file" class="addmenue" style = "display:none;">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addfileform.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				<?php endif; ?>

				<div class="nosmooth" id="sm_files">
					<div class="contenttitle">
						<div class="contenttitle_menue">
							<a id = "dirUp" class="dir_up_butn" href="javascript:change('manageajax.php?action=fileview&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&folder=0','filescontent');" title="<?php echo $this->_config[0]['vars']['parent']; ?>
"></a>
						</div>
						<div class="contenttitle_in">
							<a href="manageajax.php?action=fileview&id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&folder=<?php echo $this->_tpl_vars['folders'][$this->_sections['fold']['index']]['ID']; ?>
"></a>
						</div>
					</div>
					<div class="content_in_wrapper">
						<div class="content_in_wrapper_in">

														<div id = "filescontent" class="inwrapper" >
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "fileview.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						</div> 					</div> 					<div class="staterow">
						<div class="staterowin">
							<span id = "filenum"><?php echo $this->_tpl_vars['filenum']; ?>
</span> <?php echo $this->_config[0]['vars']['files']; ?>

						</div>
						<div class="staterowin_right"><span ><?php echo $this->_tpl_vars['langfile']['page']; ?>
 <?php echo smarty_function_paginate_prev(array(), $this);?>
 <?php echo smarty_function_paginate_middle(array(), $this);?>
 <?php echo smarty_function_paginate_next(array(), $this);?>
</span></div>
					</div>
				</div> 			
				<div class="tablemenue">
					<div class="tablemenue-in">
						<?php if ($this->_tpl_vars['userpermissions']['files']['add']): ?>
						<a class="butn_link" href="javascript:blindtoggle('form_file');" id="add_file_butn" onclick="toggleClass('addfile','addfile-active','addfile');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_files','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addfile']; ?>
</a>
						<a class="butn_link" href="javascript:blindtoggle('form_folder');" id="add_folder_butn" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('addfolder','addfolder-active','addfolder');toggleClass('sm_files','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addfolder']; ?>
</a>
						<?php endif; ?>
					</div>
				</div>
			</div> 
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