<div class="payments form">
<?php echo $this->Form->create('Payment'); ?>
	<fieldset>
		<legend><?php echo __('Add Payment'); ?></legend>
	<?php
		echo $this->Form->input('paidamount');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?></li>
	</ul>
</div>
