<div class="productserials form">
<?php echo $this->Form->create('Productserial'); ?>
	<fieldset>
		<legend><?php echo __('Edit Productserial'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id',array('type'=>'text','value'=>$productId));
		echo $this->Form->input('serial_no');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
