<?php /* Smarty version 2.6.19, created on 2012-08-29 06:02:47
         compiled from editsettings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-admin.tpl", 'smarty_include_vars' => array('settingstab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content-left">
<div id="content-left-in">
<div class="neutral">
	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($this->_tpl_vars['mode'] == 'edited'): ?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/system-settings.png" alt=""/><?php echo $this->_config[0]['vars']['settingsedited']; ?>
</span>
        <?php elseif ($this->_tpl_vars['mode'] == 'imported'): ?>
        <span class="info_in_green"><img src="templates/standard/images/symbols/basecamp.png" alt=""/><?php echo $this->_config[0]['vars']['importsuccess']; ?>
</span>

		<?php endif; ?>

		</div>

	<?php echo '
	<script type = "text/javascript">
	systemMsg(\'systemmsg\');
	 </script>
	'; ?>

<h1><?php echo $this->_config[0]['vars']['administration']; ?>
<span>/ <?php echo $this->_config[0]['vars']['systemadministration']; ?>
</span></h1>

			<div class="headline">
				<a href="javascript:void(0);" id="block_system_toggle" class="win_block" onclick = "toggleBlock('block_system');"></a>
				<h2>
					<img src="./templates/standard/images/symbols/system-settings.png" alt="" /><?php echo $this->_config[0]['vars']['systemadministration']; ?>
</a>
				</h2>
			</div>

			<div id="block_system" class="block">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "settings_system.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


				<div class="tablemenue"></div>
			</div> 
<div class="content-spacer"></div>

			<div class="headline">
				<a href="javascript:void(0);" id="block_import_toggle" class="win_block" onclick = "toggleBlock('block_import');"></a>
				<h2>
					<img src="./templates/standard/images/symbols/basecamp.png" alt="" /><?php echo $this->_config[0]['vars']['import']; ?>
</a>
				</h2>
			</div>

			<div id="block_import" class="block">
				<div class="block_in_wrapper">
					<form class="main" method="post" action="manageimport.php?action=basecamp" enctype="multipart/form-data" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
>
					<fieldset>

					<div class="row">
						<label for="file"><?php echo $this->_config[0]['vars']['file']; ?>
:</label>
						<div class="fileinput" >
								<input type="file" class="file" name="importfile" id="importfile"  realname="<?php echo $this->_config[0]['vars']['file']; ?>
" size="19" onchange = "file.value = this.value;" />
								<table class = "faux" cellpadding="0" cellspacing="0" border="0" style="padding:0;margin:0;border:none;">
									<tr>
									<td><input type="text" class="text-file" name = "userfile1" id="file" required="1" realname="<?php echo $this->_config[0]['vars']['file']; ?>
"></td>
									<td class="choose"><button class="inner" onclick="return false;"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</button></td>
									</tr>
								</table>
						</div>
					</div>

					<div class="row-butn-bottom">
						<label>&nbsp;</label>
						<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['send']; ?>
</button>
					</div>


					</fieldset>
					</form>
				</div>

				<div class="tablemenue"></div>
			</div> 
<div class="content-spacer"></div>

			<div class="headline">
				<a href="javascript:void(0);" id="block_email_toggle" class="win_block" onclick = "toggleBlock('block_email');"></a>
				<h2>
					<img src="./templates/standard/images/symbols/msgs.png" alt="" /><?php echo $this->_config[0]['vars']['email']; ?>
</a>
				</h2>
			</div>

			<div id="block_email" class="block">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "settings_email.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


				<div class="tablemenue"></div>
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