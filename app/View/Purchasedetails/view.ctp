<div class="purchasedetails view">
<h2><?php  echo __('Purchasedetail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($purchasedetail['Purchasedetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchasedetail['Purchase']['id'], array('controller' => 'purchases', 'action' => 'view', $purchasedetail['Purchase']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchasedetail['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $purchasedetail['Brand']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($purchasedetail['Purchasedetail']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($purchasedetail['Purchasedetail']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchasedetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $purchasedetail['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unitprice'); ?></dt>
		<dd>
			<?php echo h($purchasedetail['Purchasedetail']['unitprice']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Purchasedetail'), array('action' => 'edit', $purchasedetail['Purchasedetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Purchasedetail'), array('action' => 'delete', $purchasedetail['Purchasedetail']['id']), null, __('Are you sure you want to delete # %s?', $purchasedetail['Purchasedetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchasedetails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchasedetail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchases'), array('controller' => 'purchases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase'), array('controller' => 'purchases', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
