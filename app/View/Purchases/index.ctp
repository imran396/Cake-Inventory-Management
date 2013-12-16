<script>

function productserials(i){

$.post(" <?php echo $this->Html->url(array('controller'=>'purchasedetails','action'=>'productlist'),true);?> ",
   {purchaseId: i},
    function(data){
        $('#purchaseproductslist').html(data);
        $('#purchaseproductslist').modal()
    });
}
</script>
<div id="purchaseproductslist"></div>


<div class="purchases index">
	<h2><?php echo __('Purchases'); ?></h2>
	<table class ="table table-hover table-bordered " cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('invoice_no'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('paid'); ?></th>
			<th><?php echo $this->Paginator->sort('purchaseby'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($purchases as $purchase): ?>
	<tr>

		<td><?php echo h($purchase['Purchase']['invoice_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($purchase['Company']['name'], array('controller' => 'companies', 'action' => 'view', $purchase['Company']['id'])); ?>
		</td>
		<td><?php echo h($purchase['Purchase']['paid']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['purchaseby']); ?>&nbsp;</td>
		<td class="actions">
		    <?php echo $this->Html->link(__('Invoice'), array('action' => 'view', $purchase['Purchase']['id']),array('class'=>'badge')); ?>
			<?php echo $this->Html->link(__('Products'), array('controller'=>'purchasedetails', $purchase['Purchase']['id']),array('class'=>'badge')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $purchase['Purchase']['id']),array('class'=>'badge')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $purchase['Purchase']['id']),array('class'=>'badge'), __('Are you sure you want to delete # %s?', $purchase['Purchase']['id'])); ?>

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

	<?php echo $this->Html->link(__('<i class="icon-plus icon-white"></i>Add New'), array('action' => 'add'),array('escape'=>false,'class'=>'btn btn-primary')); ?>
</div>