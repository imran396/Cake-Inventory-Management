<div class="productserials index">
	<h2><?php echo __('Productserials'); ?></h2>
    <p>Please Select a Serial Range</p>
    <?php echo $this->Form->create('Productserial',array('controller'=>'productserials','action'=>'add')); ?>
     Start: <input type="text" value="" name="start">
     End: <input type="text" value="" name="end">
     <input type="text" value="<?php echo $id;?>"name="product_id">
     <?php echo $this->Form->end(__('Generate')); ?>
	<table class ="table table-hover" cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('serial_no'); ?></th>

			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($productserials as $productserial): ?>
	<tr>

		<td><?php echo h($productserial['Productserial']['serial_no']); ?>&nbsp;</td>


		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productserial['Productserial']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productserial['Productserial']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productserial['Productserial']['id']), null, __('Are you sure you want to delete # %s?', $productserial['Productserial']['id'])); ?>
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