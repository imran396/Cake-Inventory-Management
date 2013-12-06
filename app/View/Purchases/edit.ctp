<script>
var i = 1;
function purchasesmore(){

$.post(" <?php echo $this->Html->url(array('controller'=>'purchasedetails','action'=>'addpurchases'),true);?> ",
   {counter: i},
    function(data){
        $('.multiplepurchase').append(data);
    });

 i++;
}
</script>


<div class="purchases form">
<?php echo $this->Form->create('Purchase'); ?>
	<fieldset>
		<legend><?php echo __('Edit Purchase'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('invoice_no');
		echo $this->Form->input('company_id');
		echo $this->Form->input('paid');
		echo $this->Form->input('date');
		echo $this->Form->input('purchaseby');
	?>
	</fieldset>
    <table class="multiplepurchase">
     <tr>
         <td style="text-align: right;" colspan="5"><span onclick="purchasesmore();" class="btn btn-primary"><i class="icon-plus icon-white"></i>Add More</span></td>
     </tr>
    <tr>
        <td> <?php echo $this->Form->input('Purchasedetail.0.product_id');?></td>
        <td> <?php echo $this->Form->input('Purchasedetail.0.brand_id');?></td>
		<td><?php  echo $this->Form->input('Purchasedetail.0.qty');?></td>
		<td> <?php  echo $this->Form->input('Purchasedetail.0.unitprice');?></td>
		

    </tr>

   </table>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
