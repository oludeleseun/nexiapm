<?php /* Smarty version 2.6.19, created on 2012-08-29 12:19:55
         compiled from rolesadmin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'rolesadmin.tpl', 53, false),)), $this); ?>
	<div class="headline">

				<a href="javascript:void(0);" id="acc-roles_toggle" class="win_block" onclick = "toggleBlock('acc-roles');"></a>


					<div class="wintools">
						<a id = "addrolelink" class="add" href="javascript:blindtoggle('form_addmyroles');" id="add_myroles" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_myroles','butn_link_active','butn_link');toggleClass('sm_myrolls','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['addrole']; ?>
</span></a>
					</div>

				<h2>
					<img src="./templates/standard/images/symbols/userlist.png" alt="" /><?php echo $this->_config[0]['vars']['roles']; ?>

				</h2>
			</div>

			<div class="block" id="acc-roles">

							<div id = "form_addmyroles" class="addmenue" style = "display:none;">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addroles.tpl", 'smarty_include_vars' => array('myroles' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>

				<table cellpadding="0" cellspacing="0" border="0">

					<thead>
						<tr>
							<th class="a"></th>
							<th class="b"><?php echo $this->_config[0]['vars']['name']; ?>
</th>
							<th class="c"></th>
							<th class="tools"></th>
						</tr>
					</thead>

					<tfoot>
						<tr>
							<td colspan="5"></td>
						</tr>
					</tfoot>

					<?php unset($this->_sections['role']);
$this->_sections['role']['name'] = 'role';
$this->_sections['role']['loop'] = is_array($_loop=$this->_tpl_vars['roles']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['role']['show'] = true;
$this->_sections['role']['max'] = $this->_sections['role']['loop'];
$this->_sections['role']['step'] = 1;
$this->_sections['role']['start'] = $this->_sections['role']['step'] > 0 ? 0 : $this->_sections['role']['loop']-1;
if ($this->_sections['role']['show']) {
    $this->_sections['role']['total'] = $this->_sections['role']['loop'];
    if ($this->_sections['role']['total'] == 0)
        $this->_sections['role']['show'] = false;
} else
    $this->_sections['role']['total'] = 0;
if ($this->_sections['role']['show']):

            for ($this->_sections['role']['index'] = $this->_sections['role']['start'], $this->_sections['role']['iteration'] = 1;
                 $this->_sections['role']['iteration'] <= $this->_sections['role']['total'];
                 $this->_sections['role']['index'] += $this->_sections['role']['step'], $this->_sections['role']['iteration']++):
$this->_sections['role']['rownum'] = $this->_sections['role']['iteration'];
$this->_sections['role']['index_prev'] = $this->_sections['role']['index'] - $this->_sections['role']['step'];
$this->_sections['role']['index_next'] = $this->_sections['role']['index'] + $this->_sections['role']['step'];
$this->_sections['role']['first']      = ($this->_sections['role']['iteration'] == 1);
$this->_sections['role']['last']       = ($this->_sections['role']['iteration'] == $this->_sections['role']['total']);
?>

										<?php if ($this->_sections['role']['index'] % 2 == 0): ?>
					<tbody class="color-a" id="role_<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['ID']; ?>
">
					<?php else: ?>
					<tbody class="color-b" id="role_<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['ID']; ?>
">
					<?php endif; ?>
						<tr>
							<td></td>
							<td>
								<div class="toggle-in">
								<span class="acc-toggle" onclick="accord_roles.activate($$('#acc-roles .accordion_toggle')[<?php echo $this->_sections['role']['index']; ?>
]);toggleAccordeon('acc-roles',this);"></span>
									<a href="javascript:accord_roles.activate($$('#acc-roles .accordion_toggle')[<?php echo $this->_sections['role']['index']; ?>
]);toggleAccordeon('acc-roles',this);">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['roles'][$this->_sections['role']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

									</a>
								</div>
							</td>
							<td></td>
							<td class="tools">
							<!--	<a class="tool_edit" href="manageproject.php?action=editform&amp;id=<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
" ></a>-->
								<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'role_<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['ID']; ?>
\',\'manageroles.php?action=delrole&amp;id=<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['ID']; ?>
\')');"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a>
							</td>
						</tr>

					<tr class="acc">
					<td></td>
							<td colspan="4">
								<div class="accordion_toggle"></div>
								<div class="accordion_content">
                                    	<form class="main" method="post" action="manageroles.php?action=editrole&id=<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['ID']; ?>
" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
 >
	<fieldset>
		<div class="clear_both_b"></div>
		<div class = "row">
        <label for = "rolename"><?php echo $this->_config[0]['vars']['name']; ?>
:</label>
        <input type = "text" name = "rolename" id = "rolename" value = "<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['name']; ?>
" />
        </div>

        <div class = "row"><label><?php echo $this->_config[0]['vars']['permissions']; ?>
:</label>

                        <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['projects']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[add]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['projects']['add']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[edit]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['projects']['edit']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[del]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['projects']['del']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_projects[close]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['projects']['close']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['close']; ?>

            </div>

                        <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['milestones']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[add]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['milestones']['add']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[edit]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['milestones']['edit']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[del]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['milestones']['del']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_milestones[close]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['milestones']['close']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['close']; ?>

            </div>

                        <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['tasks']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[add]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['tasks']['add']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[edit]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['tasks']['edit']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[del]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['tasks']['del']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_tasks[close]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['tasks']['close']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['close']; ?>

            </div>

                        <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['messages']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[add]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['messages']['add']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[edit]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['messages']['edit']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[del]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['messages']['del']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_messages[close]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['messages']['close']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['answer']; ?>

            </div>

                        <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['files']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_files[add]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['files']['add']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_files[edit]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['files']['edit']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_files[del]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['files']['del']): ?>checked<?php endif; ?>   /><?php echo $this->_config[0]['vars']['delete']; ?>

            </div>

                        <div class = "row">
            <label></label>
            <label><?php echo $this->_config[0]['vars']['timetracker']; ?>
</label>
            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[read]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['timetracker']['read']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['permissionread']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[add]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['timetracker']['add']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['add']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[edit]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['timetracker']['edit']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['edit']; ?>

            </div>
            <div class = "row">
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_timetracker[del]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['timetracker']['del']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['delete']; ?>

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
            <label></label><input type = "checkbox" class = "checkbox" value = "1" name = "permissions_admin[add]" <?php if ($this->_tpl_vars['roles'][$this->_sections['role']['index']]['admin']['add']): ?>checked<?php endif; ?>  /><?php echo $this->_config[0]['vars']['administration']; ?>

            </div>

        </div>

	    <div class="clear_both_b"></div>

		<div class="row-butn-bottom">
    	<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['edit']; ?>
</button>
		<button onclick="javascript:accord_roles.activate($$('#acc-roles .accordion_toggle')[<?php echo $this->_sections['role']['index']; ?>
]);toggleAccordeon('acc-roles',this);return false;"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
		</div>

	</fieldset>
	</form>
    </div>

							</td>
						</tr>
					</tbody>
					<?php endfor; endif; ?>

				</table>