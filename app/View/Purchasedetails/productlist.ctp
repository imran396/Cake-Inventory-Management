<style>
    td,th{
        text-align: center;
    }
</style>

  <script>
      function addserial(i){
          $.post(" <?php echo $this->Html->url(array('controller'=>'purchasedetails','action'=>'addserial'),true);?> ",
               {productId: i},
                function(data){
                    $('#productslist').html(data);
                    $('#productslist').modal()
            });

      }
  </script>
<div id="productslist"></div>
<div class="purchasedetails index">

	<table width = "100%" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Product'); ?></th>
			<th><?php echo $this->Paginator->sort('Brand'); ?></th>
			<th><?php echo $this->Paginator->sort('Model'); ?></th>
			<th class="actions"> </th>
	</tr>
	<?php
	foreach ($purchasedetails as $purchasedetail): ?>
	<tr>

		<td><?php echo $purchasedetail['Product']['name']; ?></td>
		<td><?php echo $purchasedetail['Brand']['name']; ?>&nbsp;</td>
		<td><?php echo $purchasedetail['Product'] ['model']; ?>&nbsp;</td>
		<td class="actions">
           <a onclick="addserial('<?php echo $purchasedetail['Product']['id']?>');" href="javascript:void(0)"> Add serials </a>
	   </td>
	</tr>
<?php endforeach; ?>
	</table>


</div>
