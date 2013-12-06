<div class="openingbalances view">
<h2><?php  echo __('Openingbalance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($openingbalance['Openingbalance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($openingbalance['Product']['name'], array('controller' => 'products', 'action' => 'view', $openingbalance['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($openingbalance['Openingbalance']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Srerialno'); ?></dt>
		<dd>
			<?php echo h($openingbalance['Openingbalance']['srerialno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchaserate'); ?></dt>
		<dd>
			<?php echo h($openingbalance['Openingbalance']['purchaserate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salesrate'); ?></dt>
		<dd>
			<?php echo h($openingbalance['Openingbalance']['salesrate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Openingbalance'), array('action' => 'edit', $openingbalance['Openingbalance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Openingbalance'), array('action' => 'delete', $openingbalance['Openingbalance']['id']), null, __('Are you sure you want to delete # %s?', $openingbalance['Openingbalance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Openingbalances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Openingbalance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
