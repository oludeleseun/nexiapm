{include file="header.tpl" jsload = "ajax"}
{include file="tabsmenue-admin.tpl" usertab = "active"}

<div id="content-left">
<div id="content-left-in">
<div class="user">

	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		{if $mode == "deleted"}
		<span class="info_in_red"><img src="templates/standard/images/symbols/userlist.png" alt=""/>{#userwasdeleted#}</span>
		{elseif $mode == "added"}
		<span class="info_in_green"><img src="templates/standard/images/symbols/userlist.png" alt=""/>{#userwasadded#}</span>
		{elseif $mode == "roleadded"}
		<span class="info_in_green"><img src="templates/standard/images/symbols/userlist.png" alt=""/>{#roleadded#}</span>
		{elseif $mode == "roleedited"}
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/userlist.png" alt=""/>{#roleedited#}</span>
		{elseif $mode == "edited"}
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/userlist.png" alt=""/>{#userwasedited#}</span>
        {elseif $mode == "de-assigned"}
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/userlist.png" alt=""/>{#permissionswereedited#}</span>
		{/if}
	</div>
	{literal}
	<script type = "text/javascript">
	systemMsg('systemmsg');
	 </script>
	{/literal}

<h1>{#administration#}<span>/ {#useradministration#}</span></h1>

	<div class="headline">
				<a href="javascript:void(0);" id="block_files_toggle" class="win_block" onclick = "toggleBlock('block_files');"></a>

				<div class="wintools">
					{if $userpermissions.admin.add}
					<a class="add" href="javascript:blindtoggle('form_member');" id="addmember" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_member','butn_link_active','butn_link');toggleClass('sm_member','smooth','nosmooth');"><span>{#adduser#}</span></a>
					{/if}
				</div>

				<h2>
					<img src="./templates/standard/images/symbols/userlist.png" alt="" />{#useradministration#}
				</h2>

			</div>

			<div id="block_files" class="blockwrapper block">
				{*Add User*}
				{if $userpermissions.admin.add}
					<div id = "form_member" class="addmenue" style = "display:none;">
						{include file="adduserform.tpl" }
					</div>
				{/if}

				<div class="nosmooth" id="sm_member">
					<div class="contenttitle">
						<div class="contenttitle_menue">
							{*place for tool under ne title-icon*}
						</div>
						<div class="contenttitle_in">
							{*place for header-informations*}
						</div>
					</div>
					<div class="content_in_wrapper">
					<div class="content_in_wrapper_in">


						<div class="inwrapper">
						<div class="nosmooth" id="sm_myprojects">
						<table cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th class="a"></th>
									<th class="b">{#name#}</th>
									<th class="c">{#designation#}</th>
									<th class="days" style="text-align:right">{#email#}&nbsp;&nbsp;</th>
									<th class="tools"></th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<td colspan="5"></td>
								</tr>
							</tfoot>

							{section name=user loop=$users}

								{*Color-Mix*}
								{if $smarty.section.user.index % 2 == 0}
								<tbody class="color-a" id="proj_{$users[user].ID}">
								{else}
								<tbody class="color-b" id="proj_{$users[user].ID}">
								{/if}
									<tr>
										<td>
											<!-- used to be a thick -->
										</td>
										<td>
                                            <a href="manageuser.php?action=profile&id={$users[user].ID}">
                                            {$users[user].name|truncate:30:"...":true}
                                            </a>											
										</td>
										<td>
											<span>{$users[user].designation}</span>
										</td>
										<td style="text-align:right">{$users[user].email}&nbsp;&nbsp;</td>
										<td class="tools">
											{if $users[user].ID != $userid}
                                                <a class="tool_edit" href="admin.php?action=editform&amp;id={$users[user].ID}" title="{#edit#}"></a>
                                                <a class="tool_del" href="javascript:confirmit('{#confirmdel#}','admin.php?action=deleteuserform&amp;id={$users[user].ID}');" title="{#delete#}"></a>
                                            {else}
                                                <a class="tool_edit" href="admin.php?action=editform&amp;id={$users[user].ID}" title="{#edit#}"></a>
                                            {/if}
										</td>
									</tr>
								</tbody>
							{/section}
						</table> {*Projects End*}
						</div>
						</div> {*inwrapper End*}



			</div> {*content_in_wrapper_in End*}

			</div> {*content_in_wrapper End*}


			<div class="staterow">
				<div class="staterowin">
					{*place for whatever*}

				</div>
					<div class="staterowin_right"> <span >{$langfile.page} {paginate_prev} {paginate_middle} {paginate_next}</span></div>
			</div>


			</div> {*nosmooth End*}
			<div class="tablemenue">
					<div class="tablemenue-in">
						{if $userpermissions.admin.add}
						<a class="butn_link" href="javascript:blindtoggle('form_member');" id="add_butn_member" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('addmember','add-active','add');toggleClass('sm_member','smooth','nosmooth');">{#adduser#}</a>
						{/if}
					</div>
			</div>
			</div> {*block_files End*}

	<div class="content-spacer"></div>

{* Rollen *}
{include file = "rolesadmin.tpl"}
{*Roles End*}

				<div class="tablemenue">
					<div class="tablemenue-in">
						{if $userpermissions.admin.add}
						<a class="butn_link" href="javascript:blindtoggle('form_addmyroles');" id="add_butn_myprojects" onclick="toggleClass('addrolelink','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');">{#addrole#}</a>
						{/if}


					</div>
				</div>

		</div> {*block END*}

{literal}
	<script type = "text/javascript">
		var accord_roles = new accordion('acc-roles');
	</script>
	{/literal}

<div class="content-spacer"></div>

</div> {*User END*}
</div> {*content-left-in END*}

</div> {*Content_left end*}

{include file="sidebar-a.tpl"}
{include file="footer.tpl"}