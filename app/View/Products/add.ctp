<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('category_id');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Openingbalances'), array('controller' => 'openingbalances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Openingbalance'), array('controller' => 'openingbalances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productserials'), array('controller' => 'productserials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productserial'), array('controller' => 'productserials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Puchasedetails'), array('controller' => 'puchasedetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Puchasedetail'), array('controller' => 'puchasedetails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retrndetails'), array('controller' => 'retrndetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retrndetail'), array('controller' => 'retrndetails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sellsdetails'), array('controller' => 'sellsdetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sellsdetail'), array('controller' => 'sellsdetails', 'action' => 'add')); ?> </li>
	</ul>
</div>
