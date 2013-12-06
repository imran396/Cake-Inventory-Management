<div class="openingbalances form">
<?php echo $this->Form->create('Openingbalance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Openingbalance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('qty');
		echo $this->Form->input('srerialno');
		echo $this->Form->input('purchaserate');
		echo $this->Form->input('salesrate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

