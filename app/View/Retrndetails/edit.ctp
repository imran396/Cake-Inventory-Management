<div class="retrndetails form">
<?php echo $this->Form->create('Retrndetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Retrndetail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('retrning_id');
		echo $this->Form->input('sell_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('qty');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
