<div class="productserials view">
<h2><?php  echo __('Productserial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productserial['Productserial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productserial['Product']['name'], array('controller' => 'products', 'action' => 'view', $productserial['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial No'); ?></dt>
		<dd>
			<?php echo h($productserial['Productserial']['serial_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productserial['Purchase']['id'], array('controller' => 'purchases', 'action' => 'view', $productserial['Purchase']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($productserial['Productserial']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Productserial'), array('action' => 'edit', $productserial['Productserial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Productserial'), array('action' => 'delete', $productserial['Productserial']['id']), null, __('Are you sure you want to delete # %s?', $productserial['Productserial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productserials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productserial'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchases'), array('controller' => 'purchases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase'), array('controller' => 'purchases', 'action' => 'add')); ?> </li>
	</ul>
</div>
