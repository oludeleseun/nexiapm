<?php /* Smarty version 2.6.19, created on 2012-08-29 06:02:47
         compiled from header_main.tpl */ ?>
<div id="sitebody">

	<div id="header-wrapper">
		<div id="header">
			<div class="header-in">

				<div class="left">
					<div class="logo">
						<h1>
							<a href="index.php" title="<?php echo $this->_config[0]['vars']['desktop']; ?>
"><img src="./templates/standard/images/logo-b.png" alt="" /></a>
							<span class="title"><?php echo $this->_tpl_vars['settings']['name']; ?>
<span class="subtitle"><?php if ($this->_tpl_vars['settings']['subtitle']): ?>/ <?php echo $this->_tpl_vars['settings']['subtitle']; ?>
 <?php endif; ?></span></span>
						</h1>
					</div>

				</div> 
				<div class="right">
					<?php if ($this->_tpl_vars['loggedin'] == 1): ?>
						<ul id="mainmenue">
							<li class="desktop"><a class = "<?php echo $this->_tpl_vars['mainclasses']['desktop']; ?>
" href="index.php"><span><?php echo $this->_config[0]['vars']['desktop']; ?>
</span></a></li>

							<?php if ($this->_tpl_vars['usergender'] == 'f'): ?>
							<li class="profil-female"><a class = "<?php echo $this->_tpl_vars['mainclasses']['profil']; ?>
" href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['userid']; ?>
"><span><?php echo $this->_config[0]['vars']['myaccount']; ?>
</span></a></li>
							<?php else: ?>
							<li class="profil-male"><a class = "<?php echo $this->_tpl_vars['mainclasses']['profil']; ?>
" href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['userid']; ?>
"><span><?php echo $this->_config[0]['vars']['myaccount']; ?>
</span></a></li>
							<?php endif; ?>

							 <?php if ($this->_tpl_vars['userpermissions']['admin']['add']): ?>
							<li class="admin"><a class = "<?php echo $this->_tpl_vars['mainclasses']['admin']; ?>
" href="admin.php?action=projects"><span><?php echo $this->_config[0]['vars']['administration']; ?>
</span><span class="submenarrow"></span></a>
								<div class="submen">
									<ul>
										<li class="project-settings"><a class="<?php echo $this->_tpl_vars['classes']['overview']; ?>
" href="admin.php?action=projects"><span><?php echo $this->_config[0]['vars']['projectadministration']; ?>
</span></a></li>
                                        <li class="company-settings"><a class="<?php echo $this->_tpl_vars['classes']['overview']; ?>
" href="managecompany.php?action=addform"><span><?php echo $this->_config[0]['vars']['companyadministration']; ?>
</span></a></li>
										<li class="user-settings"><a class="<?php echo $this->_tpl_vars['classes']['users']; ?>
" href="admin.php?action=users"><span><?php echo $this->_config[0]['vars']['useradministration']; ?>
</span></a></li>
										<li class="system-settings"><a class="<?php echo $this->_tpl_vars['classes']['system']; ?>
" href="admin.php?action=system"><span><?php echo $this->_config[0]['vars']['systemadministration']; ?>
</span></a></li>
									</ul>
								</div>
							</li>
							<?php endif; ?>


							<li class="logout"><a href="manageuser.php?action=logout"><span><?php echo $this->_config[0]['vars']['logout']; ?>
</span></a></li>
						</ul>
					<?php endif; ?>
				</div> <!-- Right End -->



			</div> <!-- Header-In End -->
		</div> <!-- Header End -->
	</div> <!-- Header-Wrapper End -->


	<div id="contentwrapper">
