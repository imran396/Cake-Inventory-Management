<div class="retrnings index">
	<h2><?php echo __('Retrnings'); ?></h2>
	<table class ="table table-hover" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($retrnings as $retrning): ?>
	<tr>
		<td><?php echo h($retrning['Retrning']['id']); ?>&nbsp;</td>
		<td><?php echo h($retrning['Retrning']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $retrning['Retrning']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $retrning['Retrning']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $retrning['Retrning']['id']), null, __('Are you sure you want to delete # %s?', $retrning['Retrning']['id'])); ?>
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