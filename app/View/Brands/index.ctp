<div class="brands index">
	<h2><?php echo __('Brands'); ?></h2>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
	<thead>
       <tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
     </thead>
        <tbody>
	<?php
	foreach ($brands as $brand): ?>
	<tr>
		<td><?php echo h($brand['Brand']['id']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $brand['Brand']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $brand['Brand']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $brand['Brand']['id']), null, __('Are you sure you want to delete # %s?', $brand['Brand']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
        </tbody>
	</table>
   <?php if($this->paginator->hasPage(2)):?>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
   <?php endif; ?>
</div>
<div class="actions">
	<?php echo $this->Html->link(__('Add New'), array('action' => 'add')); ?>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').dataTable( {
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>"
    } );
} );



</script>

<div>
