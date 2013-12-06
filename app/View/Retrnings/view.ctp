<div class="retrnings view">
<h2><?php  echo __('Retrning'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($retrning['Retrning']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($retrning['Retrning']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Retrning'), array('action' => 'edit', $retrning['Retrning']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Retrning'), array('action' => 'delete', $retrning['Retrning']['id']), null, __('Are you sure you want to delete # %s?', $retrning['Retrning']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Retrnings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retrning'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retrndetails'), array('controller' => 'retrndetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retrndetail'), array('controller' => 'retrndetails', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Retrndetails'); ?></h3>
	<?php if (!empty($retrning['Retrndetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Retrning Id'); ?></th>
		<th><?php echo __('Sell Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($retrning['Retrndetail'] as $retrndetail): ?>
		<tr>
			<td><?php echo $retrndetail['id']; ?></td>
			<td><?php echo $retrndetail['retrning_id']; ?></td>
			<td><?php echo $retrndetail['sell_id']; ?></td>
			<td><?php echo $retrndetail['product_id']; ?></td>
			<td><?php echo $retrndetail['qty']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'retrndetails', 'action' => 'view', $retrndetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'retrndetails', 'action' => 'edit', $retrndetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'retrndetails', 'action' => 'delete', $retrndetail['id']), null, __('Are you sure you want to delete # %s?', $retrndetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Retrndetail'), array('controller' => 'retrndetails', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
