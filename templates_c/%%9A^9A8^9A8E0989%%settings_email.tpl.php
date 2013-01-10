<?php /* Smarty version 2.6.19, created on 2012-08-29 06:02:48
         compiled from settings_email.tpl */ ?>
				<div id="email">
				<div class="block_in_wrapper">

					<form class="main" method="post" action="admin.php?action=editmailsets" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
>
					<fieldset>

					<div class="row">
						<label for="mailstatus"><?php echo $this->_config[0]['vars']['status']; ?>
:</label>
						<select name="mailstatus" id="mailstatus" >
						<?php if ($this->_tpl_vars['settings']['mailnotify'] == 1): ?>
						<option value = "1" selected>on</option>
						<option value = "0">off</option>
						<?php else: ?>
						<option value = "1">on</option>
						<option value = "0" selected>off</option>
						<?php endif; ?>
						</select>
					</div>

					<div class="row"><label for="mailfrommail"><?php echo $this->_config[0]['vars']['mailfrommail']; ?>
:</label><input type="text" class="text" name="mailfrommail" id="mailfrommail" value = "<?php echo $this->_tpl_vars['settings']['mailfrom']; ?>
" /></div>
					<div class="row"><label for="mailfromname"><?php echo $this->_config[0]['vars']['mailfromname']; ?>
:</label><input type="text" class="text" name="mailfromname" id="mailfromname" value = "<?php echo $this->_tpl_vars['settings']['mailfromname']; ?>
" /></div>

					<div class="row"><label for="mailmethod"><?php echo $this->_config[0]['vars']['mailmethod']; ?>
:</label><select name="mailmethod" id="mailmethod" >
					<?php if ($this->_tpl_vars['settings']['mailmethod'] == 'mail'): ?>
					<option value = "mail" selected>PHP mail()</option>
					<option value = "smtp">SMTP</option>
					<?php else: ?>
					<option value = "mail">PHP mail()</option>
					<option value = "smtp" selected>SMTP</option>
					<?php endif; ?>
					</select>
					</div>


					<div class="row"><label for="server"><?php echo $this->_config[0]['vars']['mailserver']; ?>
:</label><input type="text" class="text" name="server" id="server" value = "<?php echo $this->_tpl_vars['settings']['mailhost']; ?>
" /></div>
					<div class="row"><label for="mailuser"><?php echo $this->_config[0]['vars']['mailusername']; ?>
:</label><input type="text" class="text" name="mailuser" id="mailuser" value = "<?php echo $this->_tpl_vars['settings']['mailuser']; ?>
" autocomplete = "off" /></div>
					<div class="row"><label for="mailpass"><?php echo $this->_config[0]['vars']['mailpass']; ?>
:</label><input type="password" class="text" name="mailpass" id="mailpass" value = "<?php echo $this->_tpl_vars['settings']['mailpass']; ?>
" autocomplete = "off" /></div>


					<div class="row-butn-bottom">
						<label>&nbsp;</label>
						<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['send']; ?>
</button>
					</div>


					</fieldset>
					</form>

				</div> 				</div> 