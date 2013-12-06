<div class="products view">
<h2><?php  echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($product['Product']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Openingbalances'); ?></h3>
	<?php if (!empty($product['Openingbalance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Srerialno'); ?></th>
		<th><?php echo __('Purchaserate'); ?></th>
		<th><?php echo __('Salesrate'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Openingbalance'] as $openingbalance): ?>
		<tr>
			<td><?php echo $openingbalance['id']; ?></td>
			<td><?php echo $openingbalance['product_id']; ?></td>
			<td><?php echo $openingbalance['qty']; ?></td>
			<td><?php echo $openingbalance['srerialno']; ?></td>
			<td><?php echo $openingbalance['purchaserate']; ?></td>
			<td><?php echo $openingbalance['salesrate']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'openingbalances', 'action' => 'view', $openingbalance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'openingbalances', 'action' => 'edit', $openingbalance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'openingbalances', 'action' => 'delete', $openingbalance['id']), null, __('Are you sure you want to delete # %s?', $openingbalance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Openingbalance'), array('controller' => 'openingbalances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Productserials'); ?></h3>
	<?php if (!empty($product['Productserial'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Serial No'); ?></th>
		<th><?php echo __('Purchase Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Productserial'] as $productserial): ?>
		<tr>
			<td><?php echo $productserial['id']; ?></td>
			<td><?php echo $productserial['product_id']; ?></td>
			<td><?php echo $productserial['serial_no']; ?></td>
			<td><?php echo $productserial['purchase_id']; ?></td>
			<td><?php echo $productserial['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productserials', 'action' => 'view', $productserial['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productserials', 'action' => 'edit', $productserial['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productserials', 'action' => 'delete', $productserial['id']), null, __('Are you sure you want to delete # %s?', $productserial['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Productserial'), array('controller' => 'productserials', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Puchasedetails'); ?></h3>
	<?php if (!empty($product['Puchasedetail'])): ?>
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
		foreach ($product['Puchasedetail'] as $puchasedetail): ?>
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
<div class="related">
	<h3><?php echo __('Related Retrndetails'); ?></h3>
	<?php if (!empty($product['Retrndetail'])): ?>
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
		foreach ($product['Retrndetail'] as $retrndetail): ?>
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
	<?php if (!empty($product['Sellsdetail'])): ?>
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
		foreach ($product['Sellsdetail'] as $sellsdetail): ?>
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
