<div class="sellsproductserials form">
<?php echo $this->Form->create('Sellsproductserial'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sellsproductserial'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sellsdetail_id');
		echo $this->Form->input('serial');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sellsproductserial.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sellsproductserial.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sellsproductserials'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sellsdetails'), array('controller' => 'sellsdetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sellsdetail'), array('controller' => 'sellsdetails', 'action' => 'add')); ?> </li>
	</ul>
</div>
