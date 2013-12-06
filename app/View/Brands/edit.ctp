<div class="brands form">
<?php echo $this->Form->create('Brand'); ?>
	<fieldset>
		<legend><?php echo __('Edit Brand'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
