<div class="sellsdetails form">
<?php echo $this->Form->create('Sellsdetail'); ?>
	<fieldset>
		<legend><?php echo __('Add Sellsdetail'); ?></legend>
	<?php
		echo $this->Form->input('sell_id');
		echo $this->Form->input('purchase_product_id');
		echo $this->Form->input('quantity');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
