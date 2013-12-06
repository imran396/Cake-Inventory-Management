<div class="productserials form">
<?php echo $this->Form->create('Productserial'); ?>
	<fieldset>
		<legend><?php echo __('Edit Productserial'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('serial_no');
		echo $this->Form->input('purchase_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
