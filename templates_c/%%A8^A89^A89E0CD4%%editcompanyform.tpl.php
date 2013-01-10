<?php /* Smarty version 2.6.19, created on 2012-08-29 13:42:07
         compiled from editcompanyform.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'editcompanyform.tpl', 12, false),)), $this); ?>
<?php if ($this->_tpl_vars['showhtml'] != 'no'): ?>
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

<div class="breadcrumb">
<a href="managecompany.php?action=addform&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['project']['name']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['company']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, "...", true) : smarty_modifier_truncate($_tmp, 50, "...", true)); ?>
</a>
<span>&nbsp;/...</span>
</div>

<h1 class="second"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo $this->_tpl_vars['company']['name']; ?>
</h1>

<?php endif; ?>

<div class="block_in_wrapper">

	<h2><?php echo $this->_config[0]['vars']['editcompany']; ?>
</h2>

	<form class="main" method="post" action="managecompany.php?action=edit&id=<?php echo $this->_tpl_vars['company']['ID']; ?>
" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
 enctype="multipart/form-data" >
		<fieldset>

			<div class="row">
				<label for="name"><?php echo $this->_config[0]['vars']['companyname']; ?>
:</label>
				<input type="text" name="name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['companyname']; ?>
" value = "<?php echo $this->_tpl_vars['company']['name']; ?>
" />
			</div>
            <div class="row">
				<label for="name"><?php echo $this->_config[0]['vars']['shortname']; ?>
:</label>
				<input type="text" name="shortname" id="shortname" required="1" realname="<?php echo $this->_config[0]['vars']['shortname']; ?>
" value = "<?php echo $this->_tpl_vars['company']['shortname']; ?>
" />
			</div>
            <div class="row">
				<label for="name"><?php echo $this->_config[0]['vars']['rcnumber']; ?>
:</label>
				<input type="text" name="rcnumber" id="rcnumber" required="1" realname="<?php echo $this->_config[0]['vars']['rcnumber']; ?>
" value = "<?php echo $this->_tpl_vars['company']['rcnumber']; ?>
" />
			</div>
			<div class="row">
				<label for="company"><?php echo $this->_config[0]['vars']['email']; ?>
:</label>
				<input type="text" name="email" id="email" realname="<?php echo $this->_config[0]['vars']['email']; ?>
" value = "<?php echo $this->_tpl_vars['company']['email']; ?>
" />
			</div>
            <div class="row">
				<label for="company"><?php echo $this->_config[0]['vars']['phone']; ?>
:</label>
				<input type="text" name="phone" id="phone" realname="<?php echo $this->_config[0]['vars']['phone']; ?>
" value = "<?php echo $this->_tpl_vars['company']['phone']; ?>
" />
			</div>
            <div class="row">
				<label for="company"><?php echo $this->_config[0]['vars']['phone2']; ?>
:</label>
				<input type="text" name="phone2" id="phone2" realname="<?php echo $this->_config[0]['vars']['phone2']; ?>
" value = "<?php echo $this->_tpl_vars['company']['phone2']; ?>
" />
			</div>
			<div class="row">
				<label for="email"><?php echo $this->_config[0]['vars']['website']; ?>
:</label>
				<input type="text" name="website" id="website" realname="<?php echo $this->_config[0]['vars']['website']; ?>
" value = "<?php echo $this->_tpl_vars['company']['website']; ?>
" />
			</div>
			<div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['address1']; ?>
:</label>
				<input type="text" name="address1" id="address1" required="1" realname="<?php echo $this->_config[0]['vars']['address1']; ?>
" value = "<?php echo $this->_tpl_vars['company']['address1']; ?>
" />
			</div>
            <div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['address2']; ?>
:</label>
				<input type="text" name="address2" id="address2" required="1" realname="<?php echo $this->_config[0]['vars']['address2']; ?>
" value = "<?php echo $this->_tpl_vars['company']['address2']; ?>
" />
			</div>
            <div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['state']; ?>
:</label>
				<input type="text" name="state" id="state" required="1" realname="<?php echo $this->_config[0]['vars']['state']; ?>
" value = "<?php echo $this->_tpl_vars['company']['state']; ?>
" />
			</div>
            <div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['country']; ?>
:</label>
				<input type="text" name="country" id="country" required="1" realname="<?php echo $this->_config[0]['vars']['country']; ?>
" value = "<?php echo $this->_tpl_vars['company']['country']; ?>
" />
			</div>
            <div class="row">
                <label for="userfile"><?php echo $this->_config[0]['vars']['companylogo']; ?>
:</label>
                <div class="fileinput" >
                    <input type="file" class="file" name = "userfile" id="userfile"  realname="<?php echo $this->_config[0]['vars']['companylogo']; ?>
" size="19" />
                    <table class = "faux" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td><input type="text" class="text-file" name = "thefile" id="thefile"></td>
                            <td class="choose"><button class="inner" onclick="return false;"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</button></td>
                        </tr>
                    </table>
                </div>
            </div>
			
			<div class="clear_both_b"></div>
			
			<div class="row">
				<label>&nbsp;</label>
				<div class="butn">
					<button type="submit"><?php echo $this->_config[0]['vars']['send']; ?>
</button>
				</div>
				<a href = "managecompany.php?action=addform" class="butn_link"><span><?php echo $this->_config[0]['vars']['cancel']; ?>
</span></a>
			</div>

		</fieldset>
	</form>

</div> 


<?php if ($this->_tpl_vars['showhtml'] != 'no'): ?>
	<div class="content-spacer"></div>
	</div> 	</div> 	</div> 
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