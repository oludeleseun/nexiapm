{include file="header.tpl" jsload = "ajax"  jsload1 = "tinymce"}
{include file="tabsmenue-admin.tpl" companytab = "active"}

<div id="content-left">
	<div id="content-left-in">
		<div class="projects">

			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				{if $mode == "edited"}
					<span class="info_in_yellow"><img src="templates/standard/images/symbols/company-settings.png" alt=""/>{#companywasedited#}</span>
				{elseif $mode == "deleted"}
					<span class="info_in_red"><img src="templates/standard/images/symbols/company-settings.png" alt=""/>{#companywasdeleted#}</span>
				{elseif $mode == "added"}
					<span class="info_in_green"><img src="templates/standard/images/symbols/company-settings.png" alt=""/>{#companywasadded#}</span>
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
						{include file="addcompanyform.tpl" myprojects="1"}
					</div>

					<div class="nosmooth" id="sm_myprojects">
				
						<table cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<th class="a"></th>
									<th class="b">{#companyname#}</th>
									<th class="c">{#website#}</th>
									<th class="days" style="text-align:right">{#companylocation#}&nbsp;&nbsp;</th>
									<th class="tools"></th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<td colspan="5"></td>
								</tr>
							</tfoot>

							{section name=opro loop=$opros}

								{*Color-Mix*}
								{if $smarty.section.opro.index % 2 == 0}
								<tbody class="color-a" id="proj_{$opros[opro].ID}">
								{else}
								<tbody class="color-b" id="proj_{$opros[opro].ID}">
								{/if}
									<tr {if $opros[opro].daysleft < 0 && $opros[opro].daysleft != ""} class="marker-late"{elseif $opros[opro].daysleft == "0"} class="marker-today"{/if}>
										<td>
											<!-- used to be a thick -->
										</td>
										<td>
											<div class="toggle-in">
												<span class="acc-toggle" onclick="javascript:accord_projects.activate($$('#acc-projects .accordion_toggle')[{$smarty.section.opro.index}]);toggleAccordeon('acc-projects',this);"></span>
												<a href="#" title="{$opros[opro].name}">
													{$opros[opro].name|truncate:30:"...":true}
												</a>
											</div>
										</td>
										<td>
											<span>{$opros[opro].website}</span>
										</td>
										<td style="text-align:right">{$opros[opro].state}, {$opros[opro].country}&nbsp;&nbsp;</td>
										<td class="tools">
											{if $userpermissions.admin}
												<a class="tool_edit" href="managecompany.php?action=editform&amp;id={$opros[opro].ID}" title="{#edit#}"></a>
											{/if}
											{if $userpermissions.admin}
												<a class="tool_del" href="javascript:confirmfunction('{#confirmdel#}','deleteElement(\'proj_{$opros[opro].ID}\',\'managecompany.php?action=del&id={$opros[opro].ID}\')');"  title="{#delete#}"></a>
											{/if}
										</td>
									</tr>

									<tr class="acc">
										<td colspan="5">
											<div class="accordion_toggle"></div>
											<div class="accordion_content">
												<div class="acc-in">
													<p class="tags-miles">
														<strong>{#rcnumber#}: </strong>{$opros[opro].rcnumber}
                                                        <br /><strong>{#shortname#}: </strong>{$opros[opro].shortname}
													</p>                                                  
                                                    
                                                    <p class="tags-miles">
														<strong>{#companyaddress#}:</strong>
													</p>
                                                    {$opros[opro].address1} {$opros[opro].address2}
                                                    <br /><strong>{#rcnumber#}:</strong>{$opros[opro].rcnumber}
                                                    
                                                    <p class="tags-miles">
														<strong>{#companycontact#}:</strong>
													</p>
                                                    <b>{#phone#}:</b>{$opros[opro].phone} {$opros[opro].phone2} 
                                                    <b>{#email#}</b>: {$opros[opro].email}
													

												</div>
											</div>
										</td>
									</tr>
								</tbody>
							{/section}
						</table> {*Projects End*}

					</div> {*smooth end*}

					<div class="tablemenue">
						<div class="tablemenue-in">
							{if $userpermissions.admin}
								<a class="butn_link" href="javascript:blindtoggle('form_addmyproject');" id="add_butn_myprojects" onclick="toggleClass('add_myprojects','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');">{#addcompany#}</a>
							{/if}
						</div>
					</div>
				</div> {*block END*} {*Doneprojects End*}

			{literal}
				<script type = "text/javascript">
					var accord_projects = new accordion('acc-projects');
					var accord_oldprojects = new accordion('acc-oldprojects');
				</script>
			{/literal}

			<div class="content-spacer"></div>

		</div> {*Projects END*}
	</div> {*content-left-in END*}
</div> {*content-left END*}

{include file="sidebar-a.tpl"}
{include file="footer.tpl"}