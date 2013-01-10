{include file="header.tpl" jsload = "ajax"  jsload1 = "tinymce"}
{include file="tabsmenue-admin.tpl" companytab = "active"}

<div id="content-left">
	<div id="content-left-in">
		<div class="projects">

			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				{if $mode == "assigned"}
					<span class="info_in_yellow"><img src="templates/standard/images/symbols/system-settings.png" alt=""/>{#settingsedited#}</span>
				{elseif $mode == "deleted"}
					<span class="info_in_red"><img src="templates/standard/images/symbols/user-icon-male.png" alt=""/>{#companywasdeleted#}</span>
				{elseif $mode == "added"}
					<span class="info_in_green"><img src="templates/standard/images/symbols/projects.png" alt=""/>{#companywasadded#}</span>
				{/if}
			</div>

			{literal}
				<script type = "text/javascript">
					systemMsg('systemmsg');
				</script>
			{/literal}

			<h1>{#administration#}<span>/ {#companymanagement#}</span></h1>

			<div class="headline">
				<a href="javascript:void(0);" id="acc-projects_toggle" class="win_none" onclick = "toggleBlock('acc-projects');"></a>
					{if $userpermissions.admin}
						<div class="wintools">
							<a class="add" href="javascript:blindtoggle('form_addmyproject');" id="add_myprojects" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><span>{#addcompany#}</span></a>
						</div>
					{/if}

					<h2>
						<img src="./templates/standard/images/symbols/projects.png" alt="" />{#openprojects#}
					</h2>
				</div>

				<div class="block" id="acc-projects"> {*Add Project*}
					<div id = "form_addmyproject" class="addmenue" style = "display:none;">
						{include file="editcompanyform.tpl" myprojects="1"}
					</div>


					
				</div> {*block END*} {*Doneprojects End*}

			{literal}
				<script type = "text/javascript">
					//var accord_projects = new accordion('acc-projects');
					//var accord_oldprojects = new accordion('acc-oldprojects');
				</script>
			{/literal}

			<div class="content-spacer"></div>

		</div> {*Projects END*}
	</div> {*content-left-in END*}
</div> {*content-left END*}

{include file="sidebar-a.tpl"}
{include file="footer.tpl"}