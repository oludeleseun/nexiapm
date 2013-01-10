<?php /* Smarty version 2.6.19, created on 2012-08-29 15:51:35
         compiled from edituserform.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-user.tpl", 'smarty_include_vars' => array('edittab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content-left">
<div id="content-left-in">
<div class="user">

<h1><?php echo $this->_config[0]['vars']['edituser']; ?>
<span>/ <?php echo $this->_tpl_vars['user']['name']; ?>
</span></h1>

<div class="userwrapper">
<form class="main" method="post" action="manageuser.php?action=edit" enctype="multipart/form-data" <?php echo 'onsubmit="return validateCompleteForm(this,\'input_error\');"'; ?>
>
<fieldset>


<table cellpadding="0" cellspacing="0" border="0">
<tr>
	<td class="avatarcell" valign="top">

	<?php if ($this->_tpl_vars['user']['avatar'] != ""): ?>
	<a href="#avatarbig" id="ausloeser">
		<div class="avatar-profile"><img src = "thumb.php?pic=files/<?php echo $this->_tpl_vars['cl_config']; ?>
/avatar/<?php echo $this->_tpl_vars['user']['avatar']; ?>
&amp;width=122;" alt="" /></div>
	</a>
	<?php else: ?>
		<?php if ($this->_tpl_vars['user']['gender'] == 'f'): ?>
		<div class="avatar-profile"><img src = "thumb.php?pic=templates/standard/images/no-avatar-female.jpg&amp;width=122;" alt="" /></div>
		<?php else: ?>
		<div class="avatar-profile"><img src = "thumb.php?pic=templates/standard/images/no-avatar-male.jpg&amp;width=122;" alt="" /></div>
		<?php endif; ?>
	<?php endif; ?>


	<div id="avatarbig" style="display:none;">
		<a href="javascript:Control.Modal.close();"><img src = "thumb.php?pic=files/<?php echo $this->_tpl_vars['cl_config']; ?>
/avatar/<?php echo $this->_tpl_vars['user']['avatar']; ?>
&amp;width=480&amp;height=480;" alt="" /></a>
	</div>

</td><td>

	<div class="message">
		<div class="block">
			<table cellpadding="0" cellspacing="0" border="0">

				<colgroup>
					<col class="a" />
					<col class="b" />
				</colgroup>

				<thead><tr><th colspan="2"></th></tr></thead>
				<tfoot><tr><td colspan="2"></td></tr></tfoot>

				<tbody class="color-a">
					<tr>
						<td><label for = "name"><?php echo $this->_config[0]['vars']['user']; ?>
:</label></td>
						<td class="right"><input type = "text" class="text" value = "<?php echo $this->_tpl_vars['user']['name']; ?>
" name = "name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['name']; ?>
" tabindex="1" /></td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td><label for = "avatar"><?php echo $this->_config[0]['vars']['avatar']; ?>
:</label></td>
						<td class="right">
							<div class="fileinput" >
								<input type="file" class="file" name = "userfile" id="avatar"  realname="<?php echo $this->_config[0]['vars']['file']; ?>
" size="19" onchange = "file_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
.value = this.value;"  tabindex="2" />
								<table class = "faux" cellpadding="0" cellspacing="0" border="0">
									<tr>
									<td><input type="text" class="text-file" name = "file-$myprojects[project].ID" id="file_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
"></td>
									<td class="choose"><button class="inner" onclick="return false;"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</button></td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>

				<tbody class="color-a">
					<tr>
						<td></td>
						<td class="right"></td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td><label for = "company"><?php echo $this->_config[0]['vars']['company']; ?>
:</label></td>
						<td class="right">
							<select name = "company" realname = "<?php echo $this->_config[0]['vars']['company']; ?>
" required="1" exclude = "-1" id = "company">
                                <option value="-1" selected="selected"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
                                <?php unset($this->_sections['company']);
$this->_sections['company']['name'] = 'company';
$this->_sections['company']['loop'] = is_array($_loop=$this->_tpl_vars['companies']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['company']['show'] = true;
$this->_sections['company']['max'] = $this->_sections['company']['loop'];
$this->_sections['company']['step'] = 1;
$this->_sections['company']['start'] = $this->_sections['company']['step'] > 0 ? 0 : $this->_sections['company']['loop']-1;
if ($this->_sections['company']['show']) {
    $this->_sections['company']['total'] = $this->_sections['company']['loop'];
    if ($this->_sections['company']['total'] == 0)
        $this->_sections['company']['show'] = false;
} else
    $this->_sections['company']['total'] = 0;
if ($this->_sections['company']['show']):

            for ($this->_sections['company']['index'] = $this->_sections['company']['start'], $this->_sections['company']['iteration'] = 1;
                 $this->_sections['company']['iteration'] <= $this->_sections['company']['total'];
                 $this->_sections['company']['index'] += $this->_sections['company']['step'], $this->_sections['company']['iteration']++):
$this->_sections['company']['rownum'] = $this->_sections['company']['iteration'];
$this->_sections['company']['index_prev'] = $this->_sections['company']['index'] - $this->_sections['company']['step'];
$this->_sections['company']['index_next'] = $this->_sections['company']['index'] + $this->_sections['company']['step'];
$this->_sections['company']['first']      = ($this->_sections['company']['iteration'] == 1);
$this->_sections['company']['last']       = ($this->_sections['company']['iteration'] == $this->_sections['company']['total']);
?>
                                    <option value = "<?php echo $this->_tpl_vars['companies'][$this->_sections['company']['index']]['ID']; ?>
" id="role<?php echo $this->_tpl_vars['companies'][$this->_sections['company']['index']]['ID']; ?>
" <?php if ($this->_tpl_vars['companies'][$this->_sections['company']['index']]['ID'] == $this->_tpl_vars['user']['company']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['companies'][$this->_sections['company']['index']]['name']; ?>
</option>
                                <?php endfor; endif; ?>
                            </select>
						</td>
					</tr>
				</tbody>
                
                <tbody class="color-b">
					<tr>
						<td><label for = "company"><?php echo $this->_config[0]['vars']['designation']; ?>
:</label></td>
						<td class="right">
							<input type = "text" name = "designation" id = "designation" value = "<?php echo $this->_tpl_vars['user']['designation']; ?>
" />
						</td>
					</tr>
				</tbody>
                
                <tbody class="color-b">
					<tr>
						<td><label for = "company"><?php echo $this->_config[0]['vars']['gradelevel']; ?>
:</label></td>
						<td class="right">
							<input type = "text" name = "gradelevel" id = "gradelevel" value = "<?php echo $this->_tpl_vars['user']['gradelevel']; ?>
" />
						</td>
					</tr>
				</tbody>

				<tbody class="color-a">
					<tr>
						<td><label for="email"><?php echo $this->_config[0]['vars']['email']; ?>
:</label></td>
						<td class="right"><input type = "text class="text" value = "<?php echo $this->_tpl_vars['user']['email']; ?>
" name = "email" id="email" <?php echo 'regexp="EMAIL"'; ?>
 required="1" realname ="<?php echo $this->_config[0]['vars']['email']; ?>
"  /></td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td><label for="web"><?php echo $this->_config[0]['vars']['url']; ?>
:</label></td>
						<td class="right"><input type = "text" class="text" name = "web" id = "web" realname = "<?php echo $this->_config[0]['vars']['url']; ?>
" value = "<?php echo $this->_tpl_vars['user']['url']; ?>
" /></td>
					</tr>
				</tbody>

				<tbody class="color-a">
					<tr>
						<td><label for="tel1"><?php echo $this->_config[0]['vars']['phone']; ?>
:</label></td>
						<td class="right"><input type = "text" class="text" value = "<?php echo $this->_tpl_vars['user']['tel1']; ?>
" name = "tel1" id="tel1"  /></td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td><label for="tel2"><?php echo $this->_config[0]['vars']['cellphone']; ?>
:</label></td>
						<td class="right"><input type = "text" class="text" value = "<?php echo $this->_tpl_vars['user']['tel2']; ?>
" name = "tel2" id="tel2"  /></td>
					</tr>
				</tbody>

				<tbody class="color-a">
					<tr>
						<td></td>
						<td class="right"></td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td><label for="address1"><?php echo $this->_config[0]['vars']['address']; ?>
:</label></td>
						<td class="right"><input type = "text" value = "<?php echo $this->_tpl_vars['user']['adress']; ?>
" name = "address1" id="address1"  /></td>
					</tr>
				</tbody>

				<tbody class="color-a">
					<tr>
						<td><label for="zip"><?php echo $this->_config[0]['vars']['zip']; ?>
:</label></td>
						<td class="right"><input type = "text" name = "zip" id = "zip" realname = "<?php echo $this->_config[0]['vars']['zip']; ?>
" value = "<?php echo $this->_tpl_vars['user']['zip']; ?>
" /></td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td><label for="address2"><?php echo $this->_config[0]['vars']['city']; ?>
:</label></td>
						<td class="right"><input type = "text" class="text" value = "<?php echo $this->_tpl_vars['user']['adress2']; ?>
" name = "address2" id="address2"  /></td>
					</tr>
				</tbody>

				<tbody class="color-a">
					<tr>
						<td><label for="country"><?php echo $this->_config[0]['vars']['country']; ?>
:</label></td>
						<td class="right"><input type = "text" class="text" value = "<?php echo $this->_tpl_vars['user']['country']; ?>
" name = "country" id="country"  />	</td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td><label for="state"><?php echo $this->_config[0]['vars']['state']; ?>
:</label></td>
						<td class="right"><input type = "text" class="text" value = "<?php echo $this->_tpl_vars['user']['state']; ?>
" name = "state" id="state"  /></td>
					</tr>
				</tbody>

				<tbody class="color-a">
					<tr>
						<td></td>
						<td class="right"></td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td><label for="gender"><?php echo $this->_config[0]['vars']['gender']; ?>
:</label></td>
						<td class="right">
						<select name = "gender" id = "gender" realname = "<?php echo $this->_config[0]['vars']['gender']; ?>
" />
							<?php if ($this->_tpl_vars['user']['gender'] == ""): ?>
							<option value = "" selected><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
							<?php endif; ?>
							<option <?php if ($this->_tpl_vars['user']['gender'] == 'm'): ?>selected="selected"<?php endif; ?> value = "m"><?php echo $this->_config[0]['vars']['male']; ?>
</option>
							<option <?php if ($this->_tpl_vars['user']['gender'] == 'f'): ?>selected="selected"<?php endif; ?> value = "f"><?php echo $this->_config[0]['vars']['female']; ?>
</option>
						</select>
						</td>
					</tr>
				</tbody>
                
                <tbody class="color-a">
                    <tr>
                        <td><label for="dob"><?php echo $this->_config[0]['vars']['dob']; ?>
:</label></td>
                        <td class="right"><input type = "text" class="text" value = "<?php echo $this->_tpl_vars['user']['dob']; ?>
" name = "dob" id="dob"  />
                    </td>
                    </tr>
                </tbody>
                
                <tbody class="color-b">
                    <tr>
                        <td><label for="employmentdate"><?php echo $this->_config[0]['vars']['employmentdate']; ?>
:</label></td>
                        <td class="right"><input type = "text" class="text" value = "<?php echo $this->_tpl_vars['user']['employmentdate']; ?>
" name = "employmentdate" id="employmentdate" />
                    </td>
                    </tr>
                </tbody>
                
                <tbody class="color-a">
                    <tr>
                        <td><label for="disengagementdate"><?php echo $this->_config[0]['vars']['disengagementdate']; ?>
:</label></td>
                        <td class="right"><input type = "text" class="text" value = "<?php echo $this->_tpl_vars['user']['disengagementdate']; ?>
" name = "disengagementdate" id="disengagementdate" /></td>
                    </tr>
                </tbody>
                
                <tbody class="color-b">
                    <tr>
                        <td><label for="exammonitor"><?php echo $this->_config[0]['vars']['exammonitor']; ?>
:</label></td>
                        <td class="right"><input type = "text" class="text" value = "<?php echo $this->_tpl_vars['user']['exammonitor']; ?>
" name = "exammonitor" id="exammonitor" /></td>
                    </tr>
                </tbody>
                                                
                <tbody class="color-a">
					<tr>
						<td></td>
						<td class="right"></td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td><label for="locale"><?php echo $this->_config[0]['vars']['locale']; ?>
:</label></td>
						<td class="right">
							<select name = "locale"  id="locale">
							<option value = "" <?php if ($this->_tpl_vars['user']['locale'] == ""): ?>selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['systemdefault']; ?>
</option>
							<?php unset($this->_sections['lang']);
$this->_sections['lang']['name'] = 'lang';
$this->_sections['lang']['loop'] = is_array($_loop=$this->_tpl_vars['languages_fin']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['lang']['show'] = true;
$this->_sections['lang']['max'] = $this->_sections['lang']['loop'];
$this->_sections['lang']['step'] = 1;
$this->_sections['lang']['start'] = $this->_sections['lang']['step'] > 0 ? 0 : $this->_sections['lang']['loop']-1;
if ($this->_sections['lang']['show']) {
    $this->_sections['lang']['total'] = $this->_sections['lang']['loop'];
    if ($this->_sections['lang']['total'] == 0)
        $this->_sections['lang']['show'] = false;
} else
    $this->_sections['lang']['total'] = 0;
if ($this->_sections['lang']['show']):

            for ($this->_sections['lang']['index'] = $this->_sections['lang']['start'], $this->_sections['lang']['iteration'] = 1;
                 $this->_sections['lang']['iteration'] <= $this->_sections['lang']['total'];
                 $this->_sections['lang']['index'] += $this->_sections['lang']['step'], $this->_sections['lang']['iteration']++):
$this->_sections['lang']['rownum'] = $this->_sections['lang']['iteration'];
$this->_sections['lang']['index_prev'] = $this->_sections['lang']['index'] - $this->_sections['lang']['step'];
$this->_sections['lang']['index_next'] = $this->_sections['lang']['index'] + $this->_sections['lang']['step'];
$this->_sections['lang']['first']      = ($this->_sections['lang']['iteration'] == 1);
$this->_sections['lang']['last']       = ($this->_sections['lang']['iteration'] == $this->_sections['lang']['total']);
?>
							<option value = "<?php echo $this->_tpl_vars['languages_fin'][$this->_sections['lang']['index']]['val']; ?>
" <?php if ($this->_tpl_vars['languages_fin'][$this->_sections['lang']['index']]['val'] == $this->_tpl_vars['user']['locale']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['languages_fin'][$this->_sections['lang']['index']]['str']; ?>
</option>
							<?php endfor; endif; ?>
							</select>
						</td>
					</tr>
				</tbody>

				<input type = "hidden" name = "admin" value = "<?php echo $this->_tpl_vars['user']['admin']; ?>
" />

				<tbody class="color-a">
					<tr>
						<td><label for="oldpass"><?php echo $this->_config[0]['vars']['oldpass']; ?>
:</label></td>
						<td class="right"><input type = "password" class="text" name = "oldpass" id = "oldpass" autocomplete="off" /></td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td><label for="newpass"><?php echo $this->_config[0]['vars']['newpass']; ?>
:</label></td>
						<td class="right"><input type = "password" name = "newpass" id = "newpass" autocomplete="off" /></td>
					</tr>
				</tbody>

				<tbody class="color-a">
					<tr>
						<td><label for="repeatpass"><?php echo $this->_config[0]['vars']['repeatpass']; ?>
:</label></td>
						<td class="right"><input type = "password" name = "repeatpass" id = "repeatpass" autocomplete="off" /></td>
					</tr>
				</tbody>

				<tbody class="color-b">
					<tr>
						<td></td>
						<td class="right">
							<button type="submit" onfocus="this.blur()"><?php echo $this->_config[0]['vars']['send']; ?>
</button>
						</td>
					</tr>
				</tbody>

			</table>


		</div> 	</div> 
</td>
</tr>
</table>

</fieldset>
</form>

<?php echo '
		<script type = "text/javascript">
			new Control.Modal(\'ausloeser\',{
			opacity: 0.8,
			position: \'absolute\',
			width: 480,
			height: 480,
			fade:true,
			containerClassName: \'pics\',
			overlayClassName: \'useroverlay\'
	      }); 
	      
	    </script>
'; ?>

</div> 
<div class="content-spacer"></div>

</div> </div> </div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar-a.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>