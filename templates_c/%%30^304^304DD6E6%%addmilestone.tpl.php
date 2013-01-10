<?php /* Smarty version 2.6.19, created on 2012-08-29 14:34:15
         compiled from addmilestone.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'addmilestone.tpl', 11, false),)), $this); ?>
<?php if ($this->_tpl_vars['showhtml'] == 'yes'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce')));
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
				<a href="managemilestone.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true)); ?>
</a>
			</div>


			<h1><?php echo $this->_config[0]['vars']['addmilestone']; ?>
</h1>

			<?php endif; ?>
			<div class="block_in_wrapper">
			<h2><?php echo $this->_config[0]['vars']['addmilestone']; ?>
</h2>

				<form class="main" method="post" action="managemilestone.php?action=add&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" <?php echo ' onsubmit="return validateCompleteForm(this);"'; ?>
 >
					<fieldset>
						<div class="row">
							<label for="name"><?php echo $this->_config[0]['vars']['name']; ?>
:</label><input type="text" class="text" name="name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['name']; ?>
" />
						</div>
						
						<div class = "row">
							<label for="desc"><?php echo $this->_config[0]['vars']['description']; ?>
:</label><textarea name="desc" id="desc" realname="<?php echo $this->_config[0]['vars']['description']; ?>
" rows="3" cols="1" ></textarea>
						</div>

						<div class="row">
							<label for="end"><?php echo $this->_config[0]['vars']['due']; ?>
:</label>
							<input type="text" class="text" name="end"  id="end" required="1" realname="<?php echo $this->_config[0]['vars']['due']; ?>
" <?php if ($this->_tpl_vars['day'] && $this->_tpl_vars['month'] && $this->_tpl_vars['year']): ?> value = "<?php echo $this->_tpl_vars['day']; ?>
.<?php echo $this->_tpl_vars['month']; ?>
.<?php echo $this->_tpl_vars['year']; ?>
" <?php endif; ?> />
						</div>


						<div class="datepick">
							<div id = "datepicker_miles" class="picker" style = "display:none;"></div>
						</div>

						<script type="text/javascript">
							theCal = new calendar(<?php echo $this->_tpl_vars['theM']; ?>
,<?php echo $this->_tpl_vars['theY']; ?>
);
							theCal.dayNames = ["<?php echo $this->_config[0]['vars']['monday']; ?>
","<?php echo $this->_config[0]['vars']['tuesday']; ?>
","<?php echo $this->_config[0]['vars']['wednesday']; ?>
","<?php echo $this->_config[0]['vars']['thursday']; ?>
","<?php echo $this->_config[0]['vars']['friday']; ?>
","<?php echo $this->_config[0]['vars']['saturday']; ?>
","<?php echo $this->_config[0]['vars']['sunday']; ?>
"];
							theCal.monthNames = ["<?php echo $this->_config[0]['vars']['january']; ?>
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
							theCal.relateTo = "end";
							theCal.dateFormat = "<?php echo $this->_tpl_vars['settings']['dateformat']; ?>
";
							theCal.getDatepicker("datepicker_miles");
						</script>

						<div class="row-butn-bottom">
						<label>&nbsp;</label>
						<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
						<button onclick="blindtoggle('addstone');toggleClass('add','add-active','add');toggleClass('add_butn','butn_link_active','butn_link');toggleClass('sm_miles','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
						</div>

					</fieldset>
				</form>

			</div> 
			<?php if ($this->_tpl_vars['showhtml'] == 'yes'): ?>
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

<?php endif; ?>