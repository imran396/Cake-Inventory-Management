<div class="purchasedetails index">
      <input id="searchProducts" type="search" name="search">
      <input  onclick="searchproducts();"  type="button" value="search">
	<table class ="table table-hover" cellpadding="0" cellspacing="0">

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
			<?php echo $this->Html->link(__('Sells'), array('controller'=>'productserials','action' => 'index', $purchasedetail['Purchasedetail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<script>

</script>