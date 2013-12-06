<div class="sellsdetails view">
<h2><?php  echo __('Sellsdetail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sellsdetail['Sellsdetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sell'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sellsdetail['Sell']['id'], array('controller' => 'sells', 'action' => 'view', $sellsdetail['Sell']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sellsdetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $sellsdetail['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($sellsdetail['Sellsdetail']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unitprice'); ?></dt>
		<dd>
			<?php echo h($sellsdetail['Sellsdetail']['unitprice']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sellsdetail'), array('action' => 'edit', $sellsdetail['Sellsdetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sellsdetail'), array('action' => 'delete', $sellsdetail['Sellsdetail']['id']), null, __('Are you sure you want to delete # %s?', $sellsdetail['Sellsdetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sellsdetails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sellsdetail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sells'), array('controller' => 'sells', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sell'), array('controller' => 'sells', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
