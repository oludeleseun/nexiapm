{if $showhtml != "no"}
{include file="header.tpl"  jsload = "ajax" jsload1 = "tinymce"}



{include file="tabsmenue-admin.tpl" companytab = "active"}
<div id="content-left">
<div id="content-left-in">
<div class="projects">

<div class="breadcrumb">
<a href="managecompany.php?action=addform&amp;id={$project.ID}" title="{$project.name}"><img src="./templates/standard/images/symbols/projects.png" alt="" />{$company.name|truncate:50:"...":true}</a>
<span>&nbsp;/...</span>
</div>

<h1 class="second"><img src="./templates/standard/images/symbols/projects.png" alt="" />{$company.name}</h1>

{/if}

<div class="block_in_wrapper">

	<h2>{#editcompany#}</h2>

	<form class="main" method="post" action="managecompany.php?action=edit&id={$company.ID}" {literal}onsubmit="return validateCompleteForm(this);"{/literal} enctype="multipart/form-data" >
		<fieldset>

			<div class="row">
				<label for="name">{#companyname#}:</label>
				<input type="text" name="name" id="name" required="1" realname="{#companyname#}" value = "{$company.name}" />
			</div>
            <div class="row">
				<label for="name">{#shortname#}:</label>
				<input type="text" name="shortname" id="shortname" required="1" realname="{#shortname#}" value = "{$company.shortname}" />
			</div>
            <div class="row">
				<label for="name">{#rcnumber#}:</label>
				<input type="text" name="rcnumber" id="rcnumber" required="1" realname="{#rcnumber#}" value = "{$company.rcnumber}" />
			</div>
			<div class="row">
				<label for="company">{#email#}:</label>
				<input type="text" name="email" id="email" realname="{#email#}" value = "{$company.email}" />
			</div>
            <div class="row">
				<label for="company">{#phone#}:</label>
				<input type="text" name="phone" id="phone" realname="{#phone#}" value = "{$company.phone}" />
			</div>
            <div class="row">
				<label for="company">{#phone2#}:</label>
				<input type="text" name="phone2" id="phone2" realname="{#phone2#}" value = "{$company.phone2}" />
			</div>
			<div class="row">
				<label for="email">{#website#}:</label>
				<input type="text" name="website" id="website" realname="{#website#}" value = "{$company.website}" />
			</div>
			<div class="row">
				<label for="pass">{#address1#}:</label>
				<input type="text" name="address1" id="address1" required="1" realname="{#address1#}" value = "{$company.address1}" />
			</div>
            <div class="row">
				<label for="pass">{#address2#}:</label>
				<input type="text" name="address2" id="address2" required="1" realname="{#address2#}" value = "{$company.address2}" />
			</div>
            <div class="row">
				<label for="pass">{#state#}:</label>
				<input type="text" name="state" id="state" required="1" realname="{#state#}" value = "{$company.state}" />
			</div>
            <div class="row">
				<label for="pass">{#country#}:</label>
				<input type="text" name="country" id="country" required="1" realname="{#country#}" value = "{$company.country}" />
			</div>
            <div class="row">
                <label for="userfile">{#companylogo#}:</label>
                <div class="fileinput" >
                    <input type="file" class="file" name = "userfile" id="userfile"  realname="{#companylogo#}" size="19" />
                    <table class = "faux" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td><input type="text" class="text-file" name = "thefile" id="thefile"></td>
                            <td class="choose"><button class="inner" onclick="return false;">{#chooseone#}</button></td>
                        </tr>
                    </table>
                </div>
            </div>
			
			<div class="clear_both_b"></div>
			
			<div class="row">
				<label>&nbsp;</label>
				<div class="butn">
					<button type="submit">{#send#}</button>
				</div>
				<a href = "managecompany.php?action=addform" class="butn_link"><span>{#cancel#}</span></a>
			</div>

		</fieldset>
	</form>

</div> {*block_in_wrapper end*}



{if $showhtml != "no"}
	<div class="content-spacer"></div>
	</div> {*Projects END*}
	</div> {*content-left-in END*}
	</div> {*content-left END*}

	{include file="sidebar-a.tpl"}
	{include file="footer.tpl"}
{/if}