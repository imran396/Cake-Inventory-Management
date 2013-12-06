<div class="retrnings form">
<?php echo $this->Form->create('Retrning'); ?>
	<fieldset>
		<legend><?php echo __('Edit Retrning'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Retrning.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Retrning.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Retrnings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Retrndetails'), array('controller' => 'retrndetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retrndetail'), array('controller' => 'retrndetails', 'action' => 'add')); ?> </li>
	</ul>
</div>
