<?php /* Smarty version 2.6.19, created on 2012-08-29 14:34:18
         compiled from project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'project.tpl', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','stage' => 'project','jsload1' => 'tinymce')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-project.tpl", 'smarty_include_vars' => array('projecttab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content-left">
<div id="content-left-in">
<div class="projects">


	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($this->_tpl_vars['mode'] == 'edited'): ?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/projects.png" alt=""/><?php echo $this->_config[0]['vars']['projectwasedited']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'timeadded'): ?>
		<span class="info_in_green"><img src="templates/standard/images/symbols/timetracker.png" alt=""/><?php echo $this->_config[0]['vars']['timetrackeradded']; ?>
</span>
		<?php endif; ?>
	</div>
	<?php echo '
	<script type = "text/javascript">
		systemMsg(\'systemmsg\');
	 </script>
	'; ?>


<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['project']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 45, "...", true) : smarty_modifier_truncate($_tmp, 45, "...", true)); ?>
<span>/ <?php echo $this->_config[0]['vars']['overview']; ?>
</span></h1>

	<div class="statuswrapper">
			<ul>
				<?php if ($this->_tpl_vars['userpermissions']['projects']['close']): ?>
			        <?php if ($this->_tpl_vars['project']['status'] == 1): ?>
					    <li class="link" id = "closetoggle"><a class="close" href="javascript:closeElement('closetoggle','manageproject.php?action=close&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['close']; ?>
"></a></li>
					<?php else: ?>
					<li class="link" id = "closetoggle"><a class="closed" href="manageproject.php?action=open&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a></li>
				    <?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['userpermissions']['projects']['edit']): ?>
				<li class="link"><a class="edit" href="javascript:void(0);"  id="edit_butn" onclick="blindtoggle('form_edit');toggleClass(this,'edit-active','edit');toggleClass('sm_project','smooth','nosmooth');toggleClass('sm_project_desc','smooth','nosmooth');" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a></li>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['project']['desc']): ?>
				<li class="link" onclick="blindtoggle('descript');toggleClass('desctoggle','desc_active','desc');"><a class="desc" id="desctoggle" href="#" title="<?php echo $this->_config[0]['vars']['open']; ?>
"><?php echo $this->_config[0]['vars']['description']; ?>
</a></li>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['userpermissions']['projects']['del']): ?>
				<?php if ($this->_tpl_vars['project']['budget']): ?>
				<li><a><?php echo $this->_config[0]['vars']['budget']; ?>
: <?php echo $this->_tpl_vars['project']['budget']; ?>
</a></li>
				<?php endif; ?><?php endif; ?>
				
				<?php if ($this->_tpl_vars['project']['daysleft'] != "" || $this->_tpl_vars['project']['daysleft'] == '0'): ?>
					<li <?php if ($this->_tpl_vars['project']['daysleft'] < 0): ?>class="red"<?php elseif ($this->_tpl_vars['project']['daysleft'] == '0'): ?>class="green"<?php endif; ?>><a><?php echo $this->_tpl_vars['project']['daysleft']; ?>
 <?php echo $this->_config[0]['vars']['daysleft']; ?>
</a></li>
				<?php endif; ?>
			</ul>

			<div class="status">
				<?php echo $this->_tpl_vars['done']; ?>
%
				<div class="statusbar"><div class="complete" id = "completed" style="width:0%;"></div></div>
			</div>
	</div>

						<?php if ($this->_tpl_vars['userpermissions']['projects']['edit']): ?>
				<div id = "form_edit" class="addmenue" style = "display:none;clear:both;">
					<div class="content-spacer"></div>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "editform.tpl", 'smarty_include_vars' => array('showhtml' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
			<?php endif; ?>

<div class="nosmooth" id="sm_project_desc">
		<div id="descript" class="descript" style="display:none;">
		<div class="content-spacer"></div>
			<?php echo $this->_tpl_vars['project']['desc']; ?>

		</div>
</div>

</div> <div class="content-spacer"></div>

<div class="nosmooth" id="sm_project">


<div class="miles" >
			<div class="headline">
				<a href="javascript:void(0);" id="milehead_toggle" class="win_block" onclick = "toggleBlock('milehead');"></a>

				<div class="wintools">
					<!-- <div class="export-main">
						<a class="export"><span><?php echo $this->_config[0]['vars']['export']; ?>
</span></a>
						<div class="export-in"  style="width:23px;left: -23px;"> 							<a class="ical" href="managetask.php?action=ical"><span><?php echo $this->_config[0]['vars']['icalexport']; ?>
</span></a>
						</div>
					</div>-->
					<div class = "progress" id = "progress" style = "display:none;">
						<img src = "templates/standard/images/symbols/loader-cal.gif" />
					</div>
				</div>


				<h2>
					<img src="./templates/standard/images/symbols/miles.png" alt="" /><?php echo $this->_config[0]['vars']['calendar']; ?>

				</h2>

			</div>


			<div class="block" id="milehead" style = "<?php echo $this->_tpl_vars['tmilestyle']; ?>
">
				<div id = "thecal" class="bigcal"></div>
			</div> </div>	<div class="content-spacer"></div>




<?php if ($this->_tpl_vars['userpermissions']['timetracker']['add']): ?>
<div class="timetrack">
	<div class="headline">
		<a href="javascript:void(0);" id="trackerhead_toggle" class="win_block" onclick = "toggleBlock('trackerhead');"></a>

		<!-- Export-block
		<div class="wintools">
			<div class="export-main">
				<a class="export"><span><?php echo $this->_config[0]['vars']['export']; ?>
</span></a>
				<div class="export-in"  style="width:23px;left: -23px;"> 					<a class="ical" href="managetask.php?action=ical"><span><?php echo $this->_config[0]['vars']['icalexport']; ?>
</span></a>
				</div>
			</div>
		</div>
		-->

		<h2>
			<a href="managetimetracker.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['timetracker']; ?>
"><img src="./templates/standard/images/symbols/timetracker.png" alt="" /><?php echo $this->_config[0]['vars']['timetracker']; ?>
</a>
		</h2>
	</div>

	<div class="block" id="trackerhead" style = "<?php echo $this->_tpl_vars['trackerstyle']; ?>
">
		<div id = "trackerform" class="addmenue">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addtimetracker.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		<div class="tablemenue"></div>
	</div> </div> 
<div class="content-spacer"></div>
<?php endif; ?>


<div class="neutral">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "log.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>


</div> 

<?php echo '
	<script type = "text/javascript">
	changeshow(\'manageproject.php?action=cal&id='; ?>
<?php echo $this->_tpl_vars['project']['ID']; ?>
<?php echo '\',\'thecal\',\'progress\');
	</script>
'; ?>


</div> </div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar-a.tpl", 'smarty_include_vars' => array('showcloud' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
	<script type = "text/javascript">
		Event.observe(window,"load",function()
		{
			new Effect.Morph(\'completed\', {
				style: \'width:'; ?>
<?php echo $this->_tpl_vars['done']; ?>
<?php echo '%\',
				duration: 4.0
			});
		});
	</script>
'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>