<div class="purchases form">
<?php echo $this->Form->create('Purchase'); ?>
	<fieldset>
		<legend><?php echo __('Add Purchase'); ?></legend>
	<?php
		echo $this->Form->input('invoice_no');
		echo $this->Form->input('company_id');
		echo $this->Form->input('paid');
		echo $this->Form->input('date');
		echo $this->Form->input('paymentmode');
		echo $this->Form->input('check_no');
		echo $this->Form->input('bank_name');
		echo $this->Form->input('branch_name');
		echo $this->Form->input('billdate');
		echo $this->Form->input('purchaseby');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Purchases'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productserials'), array('controller' => 'productserials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productserial'), array('controller' => 'productserials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Puchasedetails'), array('controller' => 'puchasedetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Puchasedetail'), array('controller' => 'puchasedetails', 'action' => 'add')); ?> </li>
	</ul>
</div>
