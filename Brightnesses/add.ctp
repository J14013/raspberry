<div class="brightnesses form">
<?php echo $this->Form->create('Brightness');?>
	<fieldset>
		<legend><?php __('Add Brightness'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Brightnesses', true), array('action' => 'index'));?></li>
	</ul>
</div>