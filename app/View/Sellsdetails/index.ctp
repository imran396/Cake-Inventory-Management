<div class="sellsdetails index">
	<h2><?php echo __('Sellsdetails'); ?></h2>
	<table class ="table table-hover" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sell_id'); ?></th>

			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($sellsdetails as $sellsdetail): ?>
	<tr>
		<td><?php echo h($sellsdetail['Sellsdetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sellsdetail['Sell']['id'], array('controller' => 'sells', 'action' => 'view', $sellsdetail['Sell']['id'])); ?>
		</td>

		<td><?php echo h($sellsdetail['Sellsdetail']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($sellsdetail['Sellsdetail']['price']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sellsdetail['Sellsdetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sellsdetail['Sellsdetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sellsdetail['Sellsdetail']['id']), null, __('Are you sure you want to delete # %s?', $sellsdetail['Sellsdetail']['id'])); ?>
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