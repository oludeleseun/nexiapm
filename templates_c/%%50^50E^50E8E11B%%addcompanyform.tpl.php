<?php /* Smarty version 2.6.19, created on 2012-08-29 13:43:08
         compiled from addcompanyform.tpl */ ?>
<div class="block_in_wrapper">
	<form class="main" method="post" action="managecompany.php?action=addcompany" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
>
		<fieldset>

			<div class="row">
				<label for="name"><?php echo $this->_config[0]['vars']['companyname']; ?>
:</label>
				<input type="text" name="name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['companyname']; ?>
" />
			</div>
            <div class="row">
				<label for="name"><?php echo $this->_config[0]['vars']['shortname']; ?>
:</label>
				<input type="text" name="shortname" id="shortname" required="1" realname="<?php echo $this->_config[0]['vars']['shortname']; ?>
"  />
			</div>
            <div class="row">
				<label for="name"><?php echo $this->_config[0]['vars']['rcnumber']; ?>
:</label>
				<input type="text" name="rcnumber" id="rcnumber" required="1" realname="<?php echo $this->_config[0]['vars']['rcnumber']; ?>
" />
			</div>
			<div class="row">
				<label for="company"><?php echo $this->_config[0]['vars']['email']; ?>
:</label>
				<input type="text" name="email" id="email" realname="<?php echo $this->_config[0]['vars']['email']; ?>
" />
			</div>
            <div class="row">
				<label for="company"><?php echo $this->_config[0]['vars']['phone']; ?>
:</label>
				<input type="text" name="phone" id="phone" realname="<?php echo $this->_config[0]['vars']['phone']; ?>
" />
			</div>
            <div class="row">
				<label for="company"><?php echo $this->_config[0]['vars']['phone2']; ?>
:</label>
				<input type="text" name="phone2" id="phone2" realname="<?php echo $this->_config[0]['vars']['phone2']; ?>
" />
			</div>
			<div class="row">
				<label for="email"><?php echo $this->_config[0]['vars']['website']; ?>
:</label>
				<input type="text" name="website" id="website" realname="<?php echo $this->_config[0]['vars']['website']; ?>
" />
			</div>
			<div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['address1']; ?>
:</label>
				<input type="text" name="address1" id="address1" required="1" realname="<?php echo $this->_config[0]['vars']['address1']; ?>
" />
			</div>
            <div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['address2']; ?>
:</label>
				<input type="text" name="address2" id="address2" required="1" realname="<?php echo $this->_config[0]['vars']['address2']; ?>
" />
			</div>
            <div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['state']; ?>
:</label>
				<input type="text" name="state" id="state" required="1" realname="<?php echo $this->_config[0]['vars']['state']; ?>
" />
			</div>
            <div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['country']; ?>
:</label>
				<input type="text" name="country" id="country" required="1" realname="<?php echo $this->_config[0]['vars']['country']; ?>
" />
			</div>
            <div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['companylogo']; ?>
:</label>
				<input type="text" name="companylogo" id="companylogo" required="1" realname="<?php echo $this->_config[0]['vars']['companylogo']; ?>
" />
			</div>
			
			<div class="clear_both_b"></div>
			
			<div class="row">
				<label>&nbsp;</label>
				<div class="butn">
					<button type="submit"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
				</div>
				<a href = "javascript:blindtoggle('form_addmyproject');" class="butn_link"><span><?php echo $this->_config[0]['vars']['cancel']; ?>
</span></a>
			</div>

		</fieldset>
	</form>
</div> 