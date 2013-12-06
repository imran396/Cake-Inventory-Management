<div class="purchasedetails index">

	<table id='example' class ="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
        <tr>
			<th><?php echo $this->Paginator->sort('brand_id'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('unitprice'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
        </thead>
        <tbody>
	<?php

	foreach ($purchasedetails as $purchasedetail): ?>
        <?php $rand = $this->Inventory->generateRandomString(); ?>
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
          <a onclick="openSellsForm('<?php echo $rand;?>','<?php echo $purchasedetail['Purchasedetail']['id'];?>','<?php echo $purchasedetail['Purchasedetail']['qty']; ?>','<?php echo $purchasedetail['Purchasedetail']['unitprice'];?>','<?php echo $purchasedetail['Product']['name'];?>',<?php echo $sellId ?>);" >Sells</a>

	   </td>
	</tr>
<?php endforeach; ?>
	</table>
    </tbody>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').dataTable( {
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>"
    } );
} );

</script>