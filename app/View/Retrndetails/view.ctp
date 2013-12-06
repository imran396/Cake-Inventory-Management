<div class="retrndetails view">
<h2><?php  echo __('Retrndetail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($retrndetail['Retrndetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retrning'); ?></dt>
		<dd>
			<?php echo $this->Html->link($retrndetail['Retrning']['id'], array('controller' => 'retrnings', 'action' => 'view', $retrndetail['Retrning']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sell'); ?></dt>
		<dd>
			<?php echo $this->Html->link($retrndetail['Sell']['id'], array('controller' => 'sells', 'action' => 'view', $retrndetail['Sell']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($retrndetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $retrndetail['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($retrndetail['Retrndetail']['qty']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Retrndetail'), array('action' => 'edit', $retrndetail['Retrndetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Retrndetail'), array('action' => 'delete', $retrndetail['Retrndetail']['id']), null, __('Are you sure you want to delete # %s?', $retrndetail['Retrndetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Retrndetails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retrndetail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retrnings'), array('controller' => 'retrnings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retrning'), array('controller' => 'retrnings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sells'), array('controller' => 'sells', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sell'), array('controller' => 'sells', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
