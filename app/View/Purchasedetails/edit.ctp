<div class="purchasedetails form">
<?php echo $this->Form->create('Purchasedetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Purchasedetail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('purchase_id');
		echo $this->Form->input('brand_id');
		echo $this->Form->input('model');
		echo $this->Form->input('qty');
		echo $this->Form->input('product_id');
		echo $this->Form->input('unitprice');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Purchasedetail.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Purchasedetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Purchasedetails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Purchases'), array('controller' => 'purchases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase'), array('controller' => 'purchases', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
