<?php /* Smarty version 2.6.19, created on 2012-08-29 13:51:52
         compiled from tabsmenue-user.tpl */ ?>
<div class="tabswrapper">
	<ul class="tabs">
		<?php if ($this->_tpl_vars['user']['gender'] == 'f'): ?>
			<?php if ($this->_tpl_vars['userid'] == $this->_tpl_vars['user']['ID']): ?>
				<li class="user-female"><a <?php if ($this->_tpl_vars['usertab'] == 'active'): ?>class="active"<?php endif; ?> href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['userid']; ?>
"><span><?php echo $this->_config[0]['vars']['myaccount']; ?>
</span></a></li>
			<?php else: ?>
				<li class="user-female"><a <?php if ($this->_tpl_vars['usertab'] == 'active'): ?>class="active"<?php endif; ?> href=""></a></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['userpermissions']['admin']['add'] && $this->_tpl_vars['userid'] != $this->_tpl_vars['user']['ID']): ?>
				<li class="edit-male"><a <?php if ($this->_tpl_vars['edittab'] == 'active'): ?>class="active"<?php endif; ?> href="admin.php?action=editform&amp;id=<?php echo $this->_tpl_vars['user']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['edit']; ?>
</span></a></li>
			<?php elseif ($this->_tpl_vars['userid'] == $this->_tpl_vars['user']['ID']): ?>
				<li class="edit-male"><a <?php if ($this->_tpl_vars['edittab'] == 'active'): ?>class="active"<?php endif; ?> href="manageuser.php?action=editform&amp;id=<?php echo $this->_tpl_vars['user']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['edit']; ?>
</span></a></li>
			<?php endif; ?>

		<?php else: ?>
			<?php if ($this->_tpl_vars['userid'] == $this->_tpl_vars['user']['ID']): ?>
				<li class="user-male"><a <?php if ($this->_tpl_vars['usertab'] == 'active'): ?>class="active"<?php endif; ?> href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['userid']; ?>
"><span><?php echo $this->_config[0]['vars']['myaccount']; ?>
</span></a></li>
			<?php else: ?>
				<li class="user-male"><a <?php if ($this->_tpl_vars['usertab'] == 'active'): ?>class="active"<?php endif; ?> href=""></a></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['userpermissions']['admin']['add'] && $this->_tpl_vars['userid'] != $this->_tpl_vars['user']['ID']): ?>
				<li class="edit-male"><a <?php if ($this->_tpl_vars['edittab'] == 'active'): ?>class="active"<?php endif; ?> href="admin.php?action=editform&amp;id=<?php echo $this->_tpl_vars['user']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['edit']; ?>
</span></a></li>
			<?php elseif ($this->_tpl_vars['userid'] == $this->_tpl_vars['user']['ID']): ?>
				<li class="edit-male"><a <?php if ($this->_tpl_vars['edittab'] == 'active'): ?>class="active"<?php endif; ?> href="manageuser.php?action=editform&amp;id=<?php echo $this->_tpl_vars['user']['ID']; ?>
"><span><?php echo $this->_config[0]['vars']['edit']; ?>
</span></a></li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
</div>