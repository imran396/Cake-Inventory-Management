<div class="sells view">
<h2><?php  echo __('Sell'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sell['Sell']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice No'); ?></dt>
		<dd>
			<?php echo h($sell['Sell']['invoice_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($sell['Sell']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sell['Company']['name'], array('controller' => 'companies', 'action' => 'view', $sell['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($sell['Sell']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paid'); ?></dt>
		<dd>
			<?php echo h($sell['Sell']['paid']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sell'), array('action' => 'edit', $sell['Sell']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sell'), array('action' => 'delete', $sell['Sell']['id']), null, __('Are you sure you want to delete # %s?', $sell['Sell']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sells'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sell'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retrndetails'), array('controller' => 'retrndetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retrndetail'), array('controller' => 'retrndetails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sellsdetails'), array('controller' => 'sellsdetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sellsdetail'), array('controller' => 'sellsdetails', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Retrndetails'); ?></h3>
	<?php if (!empty($sell['Retrndetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Retrning Id'); ?></th>
		<th><?php echo __('Sell Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sell['Retrndetail'] as $retrndetail): ?>
		<tr>
			<td><?php echo $retrndetail['id']; ?></td>
			<td><?php echo $retrndetail['retrning_id']; ?></td>
			<td><?php echo $retrndetail['sell_id']; ?></td>
			<td><?php echo $retrndetail['product_id']; ?></td>
			<td><?php echo $retrndetail['qty']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'retrndetails', 'action' => 'view', $retrndetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'retrndetails', 'action' => 'edit', $retrndetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'retrndetails', 'action' => 'delete', $retrndetail['id']), null, __('Are you sure you want to delete # %s?', $retrndetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Retrndetail'), array('controller' => 'retrndetails', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sellsdetails'); ?></h3>
	<?php if (!empty($sell['Sellsdetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sell Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Unitprice'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sell['Sellsdetail'] as $sellsdetail): ?>
		<tr>
			<td><?php echo $sellsdetail['id']; ?></td>
			<td><?php echo $sellsdetail['sell_id']; ?></td>
			<td><?php echo $sellsdetail['product_id']; ?></td>
			<td><?php echo $sellsdetail['qty']; ?></td>
			<td><?php echo $sellsdetail['unitprice']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sellsdetails', 'action' => 'view', $sellsdetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sellsdetails', 'action' => 'edit', $sellsdetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sellsdetails', 'action' => 'delete', $sellsdetail['id']), null, __('Are you sure you want to delete # %s?', $sellsdetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sellsdetail'), array('controller' => 'sellsdetails', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
