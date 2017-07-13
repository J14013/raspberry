<div class="brightnesses form">
<?php echo $this->Form->create('Brightness');?>
	<fieldset>
		<legend><?php __('Edit Brightness'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lm');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Brightness.lm')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Brightness.lm'))); ?></li>
		<li><?php echo $this->Html->link(__('List Brightnesses', true), array('action' => 'index'));?></li>
	</ul>
</div>