{include file="header.tpl" jsload = "ajax" jsload1 = "tinymce" }

{include file="tabsmenue-project.tpl" timetab = "active"}
<div id="content-left">
<div id="content-left-in">
<div class="timetrack">


<div class="breadcrumb">
<a href="managetimetracker.php?action=showproject&amp;id={$project.ID}"><img src="./templates/standard/images/symbols/timetracker.png" alt="" />{#timetracker#}</a>

</div>

<h1 class="second"><img src="./templates/standard/images/symbols/timetracker.png" alt="" />{$track.username} ({$track.hours})</h1>





				<div class="block_in_wrapper">
				<h2>{#edittimetracker#}</h2>


					<form class="main" method="post" action="managetimetracker.php?action=edit&amp;tid={$track.ID}&amp;id={$track.project}" {literal}onsubmit="return validateCompleteForm(this);"{/literal}>
					<fieldset>

                    <div class="row"><label for="ttask">{#task#}:</label>
					<select name="ttask" class="select" id="ttask" >
					<option value = "" {if $track.task < 1}selected = "selected"{/if} >{#noassociatedtask#}</option>
                    {section name=task loop=$tasks}
                    <option value="{$tasks[task].ID}" {if $tasks[task].ID == $track.task}selected = "selected"{/if}>{$tasks[task].name}</option>
                    {/section}
                    </select>
					</div>
					<div class="row"><label for="day">{#day#}:</label><input type="text" class="text" value="{$track.day}" name="day"  id="day" required="1" realname="day" /></div>
					<div class="datepick">
						<div id = "datepicker_day" class="picker" style = "display:none;"></div>
					</div>
					
						<script type="text/javascript">
							theCal = new calendar({$theM},{$theY});
							theCal.dayNames = ["{#monday#}","{#tuesday#}","{#wednesday#}","{#thursday#}","{#friday#}","{#saturday#}","{#sunday#}"];
							theCal.monthNames = ["{#january#}","{#february#}","{#march#}","{#april#}","{#may#}","{#june#}","{#july#}","{#august#}","{#september#}","{#october#}","{#november#}","{#december#}"];
							theCal.relateTo = "day";
							theCal.keepEmpty = true;
							theCal.getDatepicker("datepicker_day");
	   					</script>

                    <div class="row"><label for="started">{#started#}:</label><input type="text" class="text" value="{$track.started}" name="started" id="started" required="1" realname="{#started#}" /></div>
                    <div class="row"><label for="ended">{#ended#}:</label><input type="text" class="text" value="{$track.ended}" name="ended" id="ended" required="1" realname="{#ended#}" /></div>
                    <div class="row"><label for="ended">{#estimatedHours#}:</label><input type="text" class="text" value="{$track.estimatedHours}" name="estimatedHours" id="estimatedHours" required="1" realname="{#estimatedHours#}" /></div>
                    <div class="row"><label for="comment">{#comment#}:</label><textarea name="comment" id="comment"  rows="3" cols="1" >{$track.comment}</textarea></div>


					<div class="row">

                    <input type="hidden" name="tid" value="{$tid}" />
                    <input type="hidden" name="id" value="{$track.project}" />

                        <div class="row-butn-bottom">
                        	<label>&nbsp;</label>
	                        <button type="submit"onfocus="this.blur();">{#send#}</button>
	                       	<button onclick="javascript:history.back();return false;" onfocus="this.blur();">{#cancel#}</button>	                        
                        </div>

					</fieldset>
					</form>


			</div> {*block_in_wrapper end*}





<div class="content-spacer"></div>
</div> {*Timetrack END*}
</div> {*content-left-in END*}

</div> {*Content_left end*}



{include file="sidebar-a.tpl"}
{include file="footer.tpl"}

