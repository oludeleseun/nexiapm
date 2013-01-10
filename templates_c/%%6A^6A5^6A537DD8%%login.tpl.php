<?php /* Smarty version 2.6.19, created on 2012-08-29 12:19:43
         compiled from login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'Login','showheader' => 'no','jsload' => 'ajax')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div class="login">
			<div class="login-in">
				<div class="logo-name">
					<h1><a href = "http://3clickconcepts.com" title = "<?php echo $this->_tpl_vars['settings']['name']; ?>
 project management"><img src="./templates/standard/images/logo-a.png" alt="<?php echo $this->_tpl_vars['settings']['name']; ?>
"  /></a></h1>
					<h2><?php echo $this->_tpl_vars['settings']['subtitle']; ?>
</h2>
				</div>

				<form id = "loginform" name = "loginform" method="post" action="manageuser.php?action=login" <?php echo ' onsubmit="return validateCompleteForm(this,\'input_error\');"'; ?>
>
					<fieldset>

					<div class="row">
						<label for="username" class="username"></label>
						<input type="text" class="text" name="username" id="username" required = "1" realname = "<?php echo $this->_config[0]['vars']['name']; ?>
" />
					</div>

					<div class="row">
						<label for="pass" class="pass"></label>
						<input type="password" class="text" name="pass" id="pass" realname = "<?php echo $this->_config[0]['vars']['password']; ?>
" />
					</div>


					<div class="row">
						<label for="stay" class="keep" onclick = "toggleClass(this,'keep','keep-active');"><span><?php echo $this->_config[0]['vars']['stayloggedin']; ?>
</span></label>
						<input type = "checkbox" name = "staylogged" id="stay" value = "1" />
					</div>

					<div class="row">
						<button type="submit" class="loginbutn" title="<?php echo $this->_config[0]['vars']['loginbutton']; ?>
" onfocus="this.blur();"></button>
					</div>
					</fieldset>
				</form>
			</div>

			<?php if ($this->_tpl_vars['loginerror'] == 1): ?>
				<div class="login-alert timetrack">
					<?php echo $this->_config[0]['vars']['loginerror']; ?>
<br /><br />
					<form id = "blaform" name = "resetform" class = "main" method="post" action="manageuser.php?action=loginerror" >
						<div class="row" style="text-align:center;">
							<button  style = "float:none;margin:0 0 0 0;" onclick="$('blaform').submit();" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['resetpassword']; ?>
</button>
						</div>
					</form>
					<div class="clear_both"></div>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>