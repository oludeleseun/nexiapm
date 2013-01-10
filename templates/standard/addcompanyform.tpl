<div class="block_in_wrapper">
	<form class="main" method="post" action="managecompany.php?action=addcompany" {literal}onsubmit="return validateCompleteForm(this);"{/literal}>
		<fieldset>

			<div class="row">
				<label for="name">{#companyname#}:</label>
				<input type="text" name="name" id="name" required="1" realname="{#companyname#}" />
			</div>
            <div class="row">
				<label for="name">{#shortname#}:</label>
				<input type="text" name="shortname" id="shortname" required="1" realname="{#shortname#}"  />
			</div>
            <div class="row">
				<label for="name">{#rcnumber#}:</label>
				<input type="text" name="rcnumber" id="rcnumber" required="1" realname="{#rcnumber#}" />
			</div>
			<div class="row">
				<label for="company">{#email#}:</label>
				<input type="text" name="email" id="email" realname="{#email#}" />
			</div>
            <div class="row">
				<label for="company">{#phone#}:</label>
				<input type="text" name="phone" id="phone" realname="{#phone#}" />
			</div>
            <div class="row">
				<label for="company">{#phone2#}:</label>
				<input type="text" name="phone2" id="phone2" realname="{#phone2#}" />
			</div>
			<div class="row">
				<label for="email">{#website#}:</label>
				<input type="text" name="website" id="website" realname="{#website#}" />
			</div>
			<div class="row">
				<label for="pass">{#address1#}:</label>
				<input type="text" name="address1" id="address1" required="1" realname="{#address1#}" />
			</div>
            <div class="row">
				<label for="pass">{#address2#}:</label>
				<input type="text" name="address2" id="address2" required="1" realname="{#address2#}" />
			</div>
            <div class="row">
				<label for="pass">{#state#}:</label>
				<input type="text" name="state" id="state" required="1" realname="{#state#}" />
			</div>
            <div class="row">
				<label for="pass">{#country#}:</label>
				<input type="text" name="country" id="country" required="1" realname="{#country#}" />
			</div>
            <div class="row">
				<label for="pass">{#companylogo#}:</label>
				<input type="text" name="companylogo" id="companylogo" required="1" realname="{#companylogo#}" />
			</div>
			
			<div class="clear_both_b"></div>
			
			<div class="row">
				<label>&nbsp;</label>
				<div class="butn">
					<button type="submit">{#addbutton#}</button>
				</div>
				<a href = "javascript:blindtoggle('form_addmyproject');" class="butn_link"><span>{#cancel#}</span></a>
			</div>

		</fieldset>
	</form>
</div> {*block_in_wrapper end*}