<div class="retrndetails index">
	<h2><?php echo __('Retrndetails'); ?></h2>
	<table class ="table table-hover" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('retrning_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sell_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($retrndetails as $retrndetail): ?>
	<tr>
		<td><?php echo h($retrndetail['Retrndetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($retrndetail['Retrning']['id'], array('controller' => 'retrnings', 'action' => 'view', $retrndetail['Retrning']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($retrndetail['Sell']['id'], array('controller' => 'sells', 'action' => 'view', $retrndetail['Sell']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($retrndetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $retrndetail['Product']['id'])); ?>
		</td>
		<td><?php echo h($retrndetail['Retrndetail']['qty']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $retrndetail['Retrndetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $retrndetail['Retrndetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $retrndetail['Retrndetail']['id']), null, __('Are you sure you want to delete # %s?', $retrndetail['Retrndetail']['id'])); ?>
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
     <?php endif;?>
</div>
<div class="actions">
	<?php echo $this->Html->link(__('Add New'), array('action' => 'add')); ?>
</div>
