<div class="retrndetails form">
<?php echo $this->Form->create('Retrndetail'); ?>
	<fieldset>
		<legend><?php echo __('Add Retrndetail'); ?></legend>
	<?php
		echo $this->Form->input('retrning_id');
		echo $this->Form->input('sell_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('qty');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Retrndetails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Retrnings'), array('controller' => 'retrnings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retrning'), array('controller' => 'retrnings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sells'), array('controller' => 'sells', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sell'), array('controller' => 'sells', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
