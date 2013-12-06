<div class="openingbalances index">
	<h2><?php echo __('Openingbalances'); ?></h2>
	<table class ="table table-hover" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('srerialno'); ?></th>
			<th><?php echo $this->Paginator->sort('purchaserate'); ?></th>
			<th><?php echo $this->Paginator->sort('salesrate'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($openingbalances as $openingbalance): ?>
	<tr>
		<td><?php echo h($openingbalance['Openingbalance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($openingbalance['Product']['name'], array('controller' => 'products', 'action' => 'view', $openingbalance['Product']['id'])); ?>
		</td>
		<td><?php echo h($openingbalance['Openingbalance']['qty']); ?>&nbsp;</td>
		<td><?php echo h($openingbalance['Openingbalance']['srerialno']); ?>&nbsp;</td>
		<td><?php echo h($openingbalance['Openingbalance']['purchaserate']); ?>&nbsp;</td>
		<td><?php echo h($openingbalance['Openingbalance']['salesrate']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $openingbalance['Openingbalance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $openingbalance['Openingbalance']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $openingbalance['Openingbalance']['id']), null, __('Are you sure you want to delete # %s?', $openingbalance['Openingbalance']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <?php if($this->paginator->hasPage(2)):?>


	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
     <?php endif; ?>
</div>
<div class="actions">
	<?php echo $this->Html->link(__('Add New'), array('action' => 'add')); ?>
</div>