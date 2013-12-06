<div class="sellsproductserials view">
<h2><?php  echo __('Sellsproductserial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sellsproductserial['Sellsproductserial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sellsdetail'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sellsproductserial['Sellsdetail']['id'], array('controller' => 'sellsdetails', 'action' => 'view', $sellsproductserial['Sellsdetail']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial'); ?></dt>
		<dd>
			<?php echo h($sellsproductserial['Sellsproductserial']['serial']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sellsproductserial'), array('action' => 'edit', $sellsproductserial['Sellsproductserial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sellsproductserial'), array('action' => 'delete', $sellsproductserial['Sellsproductserial']['id']), null, __('Are you sure you want to delete # %s?', $sellsproductserial['Sellsproductserial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sellsproductserials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sellsproductserial'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sellsdetails'), array('controller' => 'sellsdetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sellsdetail'), array('controller' => 'sellsdetails', 'action' => 'add')); ?> </li>
	</ul>
</div>
