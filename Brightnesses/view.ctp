<div class="Brightnesses view">
<h2><?php echo __('Brightness'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($brightness['Brightness']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brightness'); ?></dt>
		<dd>
			<?php echo h($brightness['Brightness']['brightness']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Brightness'), array('action' => 'edit', $brightness['Brightness']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Brightness'), array('action' => 'delete', $brightness['Brightness']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $brightness['Brightness']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Brightnesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brightness'), array('action' => 'add')); ?> </li>
	</ul>
</div>
