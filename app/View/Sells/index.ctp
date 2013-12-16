<div class="sells index">
	<h2><?php echo __('Sells'); ?></h2>
	<table class ="table table-hover table-bordered" cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('invoice_no'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('paid'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($sells as $sell): ?>
	<tr>

		<td><?php echo h($sell['Sell']['invoice_no']); ?>&nbsp;</td>
		<td><?php echo h($sell['Sell']['date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sell['Company']['name'], array('controller' => 'companies', 'action' => 'view', $sell['Company']['id'])); ?>
		</td>
		<td><?php echo h($sell['Sell']['amount']); ?>&nbsp;</td>
		<td><?php echo h($sell['Sell']['paid']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Invoice'), array('action' => 'view', $sell['Sell']['id']),array('class'=>'badge')); ?>
			<?php echo $this->Html->link(__('Add Payments'), array('controller'=>'payments','action' => 'add', $sell['Sell']['id']),array('class'=>'badge')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sell['Sell']['id']),array('class'=>'badge')); ?>
	</tr>
<?php endforeach; ?>
	</table>


	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<?php echo $this->Html->link(__('Add New'), array('action' => 'add')); ?>
</div>