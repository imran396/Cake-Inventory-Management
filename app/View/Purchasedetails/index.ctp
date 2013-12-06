<div class="purchasedetails index">
	<h2><?php echo __('Purchasedetails'); ?></h2>

	<table class ="table table-hover" cellpadding="0" cellspacing="0">
        <tr>
			<th><?php echo $this->Paginator->sort('brand_id'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('unitprice'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($purchasedetails as $purchasedetail): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($purchasedetail['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $purchasedetail['Brand']['id'])); ?>
		</td>
		<td><?php echo h($purchasedetail['Purchasedetail']['model']); ?>&nbsp;</td>
		<td><?php echo h($purchasedetail['Purchasedetail']['qty']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($purchasedetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $purchasedetail['Product']['id'])); ?>
		</td>
		<td><?php echo h($purchasedetail['Purchasedetail']['unitprice']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Add Serials'), array('controller'=>'productserials','action' => 'index', $purchasedetail['Purchasedetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $purchasedetail['Purchasedetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $purchasedetail['Purchasedetail']['id']), null, __('Are you sure you want to delete # %s?', $purchasedetail['Purchasedetail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
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

	<?php echo $this->Html->link(__('Add New'), array('action' => 'add',$this->params['pass'][0])); ?>
</div>