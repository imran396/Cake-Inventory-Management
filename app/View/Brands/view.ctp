<div class="brands view">
<h2><?php  echo __('Brand'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($brand['Brand']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($brand['Brand']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Brand'), array('action' => 'edit', $brand['Brand']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Brand'), array('action' => 'delete', $brand['Brand']['id']), null, __('Are you sure you want to delete # %s?', $brand['Brand']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Puchasedetails'), array('controller' => 'puchasedetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Puchasedetail'), array('controller' => 'puchasedetails', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Puchasedetails'); ?></h3>
	<?php if (!empty($brand['Puchasedetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Purchase Id'); ?></th>
		<th><?php echo __('Brand Id'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Serialno'); ?></th>
		<th><?php echo __('Optionvalue Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Unitprice'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($brand['Puchasedetail'] as $puchasedetail): ?>
		<tr>
			<td><?php echo $puchasedetail['id']; ?></td>
			<td><?php echo $puchasedetail['purchase_id']; ?></td>
			<td><?php echo $puchasedetail['brand_id']; ?></td>
			<td><?php echo $puchasedetail['model']; ?></td>
			<td><?php echo $puchasedetail['qty']; ?></td>
			<td><?php echo $puchasedetail['serialno']; ?></td>
			<td><?php echo $puchasedetail['optionvalue_id']; ?></td>
			<td><?php echo $puchasedetail['product_id']; ?></td>
			<td><?php echo $puchasedetail['unitprice']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'puchasedetails', 'action' => 'view', $puchasedetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'puchasedetails', 'action' => 'edit', $puchasedetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'puchasedetails', 'action' => 'delete', $puchasedetail['id']), null, __('Are you sure you want to delete # %s?', $puchasedetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Puchasedetail'), array('controller' => 'puchasedetails', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
