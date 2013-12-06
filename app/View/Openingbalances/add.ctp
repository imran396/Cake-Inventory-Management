<div class="openingbalances form">
<?php echo $this->Form->create('Openingbalance'); ?>
	<fieldset>
		<legend><?php echo __('Add Openingbalance'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('qty');
		echo $this->Form->input('srerialno');
		echo $this->Form->input('purchaserate');
		echo $this->Form->input('salesrate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Openingbalances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
