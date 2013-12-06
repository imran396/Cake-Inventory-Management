<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('model');
		echo $this->Form->input('brand_id');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
