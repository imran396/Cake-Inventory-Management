<div class="companies view">
<h2><?php  echo __('Company'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($company['Company']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($company['Company']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($company['Company']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchases'), array('controller' => 'purchases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase'), array('controller' => 'purchases', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sells'), array('controller' => 'sells', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sell'), array('controller' => 'sells', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Purchases'); ?></h3>
	<?php if (!empty($company['Purchase'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Invoice No'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Paid'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Paymentmode'); ?></th>
		<th><?php echo __('Check No'); ?></th>
		<th><?php echo __('Bank Name'); ?></th>
		<th><?php echo __('Branch Name'); ?></th>
		<th><?php echo __('Billdate'); ?></th>
		<th><?php echo __('Purchaseby'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Purchase'] as $purchase): ?>
		<tr>
			<td><?php echo $purchase['id']; ?></td>
			<td><?php echo $purchase['invoice_no']; ?></td>
			<td><?php echo $purchase['company_id']; ?></td>
			<td><?php echo $purchase['paid']; ?></td>
			<td><?php echo $purchase['date']; ?></td>
			<td><?php echo $purchase['paymentmode']; ?></td>
			<td><?php echo $purchase['check_no']; ?></td>
			<td><?php echo $purchase['bank_name']; ?></td>
			<td><?php echo $purchase['branch_name']; ?></td>
			<td><?php echo $purchase['billdate']; ?></td>
			<td><?php echo $purchase['purchaseby']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'purchases', 'action' => 'view', $purchase['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'purchases', 'action' => 'edit', $purchase['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'purchases', 'action' => 'delete', $purchase['id']), null, __('Are you sure you want to delete # %s?', $purchase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Purchase'), array('controller' => 'purchases', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sells'); ?></h3>
	<?php if (!empty($company['Sell'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Invoice No'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Paid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Sell'] as $sell): ?>
		<tr>
			<td><?php echo $sell['id']; ?></td>
			<td><?php echo $sell['invoice_no']; ?></td>
			<td><?php echo $sell['date']; ?></td>
			<td><?php echo $sell['company_id']; ?></td>
			<td><?php echo $sell['amount']; ?></td>
			<td><?php echo $sell['paid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sells', 'action' => 'view', $sell['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sells', 'action' => 'edit', $sell['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sells', 'action' => 'delete', $sell['id']), null, __('Are you sure you want to delete # %s?', $sell['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sell'), array('controller' => 'sells', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
