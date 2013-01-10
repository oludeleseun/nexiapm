<?php /* Smarty version 2.6.19, created on 2012-08-29 12:19:56
         compiled from addroles.tpl */ ?>
<div class="block_in_wrapper">
<h2><?php echo $this->_config[0]['vars']['addrole']; ?>
</h2>

	<form class="main" method="post" action="manageroles.php?action=addrole" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
 >
	<fieldset>
		<div class="row"><label for="name"><?php echo $this->_config[0]['vars']['name']; ?>
:</label><input type="text" class="text" name="name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['name']; ?>
" /></div>
		<!--
		<div class="row"><label for="desc"><?php echo $this->_config[0]['vars']['description']; ?>
:</label><div class="editor"><textarea name="desc" id="desc"  rows="3" cols="1" ></textarea></div></div>
        -->
		<div class="clear_both_b"></div>
        <div class = "row"><label><?php echo $this->_config[0]['vars']['permissions']; ?>
:</label>

            <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['projects']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[add]" /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[edit]" /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[del]" /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[close]" /><?php echo $this->_config[0]['vars']['close']; ?>

            </div>

            <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['milestones']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[add]" /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[edit]" /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[del]" /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[close]" /><?php echo $this->_config[0]['vars']['close']; ?>

            </div>

            <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['tasks']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[add]" /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[edit]" /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[del]" /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[close]" /><?php echo $this->_config[0]['vars']['close']; ?>

            </div>

            <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['messages']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[add]" /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[edit]" /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[del]" /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[close]" /><?php echo $this->_config[0]['vars']['answer']; ?>

            </div>

            <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['files']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_files[add]" /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_files[edit]" /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_files[del]" /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>

            <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['timetracker']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[read]" /><?php echo $this->_config[0]['vars']['permissionread']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[add]" /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[edit]" /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[del]" /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>

            <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['chat']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_chat[add]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['chat']['add']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['chat']; ?>

            </div>

            <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['admin']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_admin[add]" /><?php echo $this->_config[0]['vars']['administration']; ?>

            </div>

        </div>

	    <div class="clear_both_b"></div>

		<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
		<?php if ($this->_tpl_vars['myprojects'] == '1'): ?>
		<button onclick="blindtoggle('form_addmyroles');toggleClass('add_myprojects','add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
		<?php else: ?>
		<button onclick="blindtoggle('form_addmyroles');toggleClass('addrolelink','add-active','add');return false;"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
		<?php endif; ?>
		</div>


	</fieldset>
	</form>

</div> 