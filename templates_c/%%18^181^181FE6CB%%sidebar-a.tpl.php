<?php /* Smarty version 2.6.19, created on 2012-08-29 06:02:48
         compiled from sidebar-a.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'sidebar-a.tpl', 64, false),)), $this); ?>
<div id="content-right">


		<div class="content-right-in">
			<h2><a id = "searchtoggle" class="win-up" href="javascript:blindtoggle('search');toggleClass('searchtoggle','win-up','win-down');"><?php echo $this->_config[0]['vars']['search']; ?>
</a></h2>
			
			<form id = "search" method = "get" action = "managesearch.php" <?php echo ' onsubmit="return validateStandard(this,\'input_error\');"'; ?>
>
			<fieldset>
				<div class = "row">
					<input type="text" class = "text" id="query" name="query" />
				</div>
			
				<div id="choices"></div>
				<input type = "hidden" name = "action" value = "search" />
				
				<div id="indicator1" style="display:none;"><img src="templates/standard/images/symbols/indicator_arrows.gif" alt="<?php echo $this->_config[0]['vars']['searching']; ?>
" /></div>
				
				<button type="submit" title="<?php echo $this->_config[0]['vars']['gosearch']; ?>
"></button>
			</fieldset>

			</form>
	</div>
		
	
			

		
	<?php if ($this->_tpl_vars['showcloud'] == '1'): ?>
		<?php if ($this->_tpl_vars['cloud'] != ""): ?>
		<div class="content-right-in">	
			<h2><a id="tagcloudtoggle" class="win-up" href="javascript:blindtoggle('tagcloud');toggleClass('tagcloudtoggle','win-up','win-down');"><?php echo $this->_config[0]['vars']['tags']; ?>
</a></h2>
			<div id = "tagcloud" class="cloud">
				<?php echo $this->_tpl_vars['cloud']; ?>

			</div>
		</div>		
		<?php endif; ?>
	<?php endif; ?>
		
		<?php if ($this->_tpl_vars['openProjects'][0]['ID'] > 0): ?>
		<div class="content-right-in">
			<h2><a id="quickfindertoggle" class="win-up" href="javascript:blindtoggle('quickfinder');toggleClass('quickfindertoggle','win-up','win-down');"><?php echo $this->_config[0]['vars']['project']; ?>
</a></h2>
			<div id = "quickfinder">
				<form>
					<select onchange="window.location='manageproject.php?action=showproject&id='+this.value;">
						<option><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
						<?php unset($this->_sections['drop']);
$this->_sections['drop']['name'] = 'drop';
$this->_sections['drop']['loop'] = is_array($_loop=$this->_tpl_vars['openProjects']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['drop']['show'] = true;
$this->_sections['drop']['max'] = $this->_sections['drop']['loop'];
$this->_sections['drop']['step'] = 1;
$this->_sections['drop']['start'] = $this->_sections['drop']['step'] > 0 ? 0 : $this->_sections['drop']['loop']-1;
if ($this->_sections['drop']['show']) {
    $this->_sections['drop']['total'] = $this->_sections['drop']['loop'];
    if ($this->_sections['drop']['total'] == 0)
        $this->_sections['drop']['show'] = false;
} else
    $this->_sections['drop']['total'] = 0;
if ($this->_sections['drop']['show']):

            for ($this->_sections['drop']['index'] = $this->_sections['drop']['start'], $this->_sections['drop']['iteration'] = 1;
                 $this->_sections['drop']['iteration'] <= $this->_sections['drop']['total'];
                 $this->_sections['drop']['index'] += $this->_sections['drop']['step'], $this->_sections['drop']['iteration']++):
$this->_sections['drop']['rownum'] = $this->_sections['drop']['iteration'];
$this->_sections['drop']['index_prev'] = $this->_sections['drop']['index'] - $this->_sections['drop']['step'];
$this->_sections['drop']['index_next'] = $this->_sections['drop']['index'] + $this->_sections['drop']['step'];
$this->_sections['drop']['first']      = ($this->_sections['drop']['iteration'] == 1);
$this->_sections['drop']['last']       = ($this->_sections['drop']['iteration'] == $this->_sections['drop']['total']);
?>
							<option value="<?php echo $this->_tpl_vars['openProjects'][$this->_sections['drop']['index']]['ID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['openProjects'][$this->_sections['drop']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 28, "...", true) : smarty_modifier_truncate($_tmp, 28, "...", true)); ?>
</option>
						<?php endfor; endif; ?>
					</select>
				</form>
			</div>
		</div>
	<?php endif; ?>
	
		<div class="content-right-in">		
			<h2><a id="onlinelisttoggle" class="win-up" href="javascript:blindtoggle('onlinelist');toggleClass('onlinelisttoggle','win-up','win-down');"><?php echo $this->_config[0]['vars']['usersonline']; ?>
</a></h2>

			<div id="onlinelist">
				<?php echo $this->_tpl_vars['cloud']; ?>

			</div>
	</div>	


		<?php echo '
			  <script type = "text/javascript">
			  new Ajax.Autocompleter(\'query\', \'choices\', \'managesearch.php?action=ajaxsearch\', {paramName:\'query\',minChars: 2,indicator: \'indicator1\'});
				 var on = new Ajax.PeriodicalUpdater("onlinelist","manageuser.php?action=onlinelist",{method:\'get\',evalScripts:true,frequency:35});
	
	
			</script>
		'; ?>


</div>