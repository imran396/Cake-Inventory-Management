<div class="purchasedetails form">
<?php echo $this->Form->create('Purchasedetail'); ?>
	<fieldset>
		<legend><?php echo __('Add Purchasedetail'); ?></legend>
	<?php
		echo $this->Form->hidden('purchase_id',array('type'=>'text','value'=>$id));
		echo $this->Form->input('brand_id');
		echo $this->Form->input('model');
		echo $this->Form->input('qty');
		echo $this->Form->input('product_id');
		echo $this->Form->input('unitprice');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

