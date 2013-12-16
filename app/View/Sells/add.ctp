<script>
  function sellsproducts(){
      $.post(" <?php echo $this->Html->url(array('controller'=>'purchasedetails','action'=>'sellsitems'),true);?>",
              function(data){
                    $('#sellsmodal').html(data);
                    $("#sellsmodal").modal();
              }
      )

  }

function searchproducts(){
    var val = $('#searchProducts').val();
    $.post(" <?php echo $this->Html->url(array('controller'=>'purchasedetails','action'=>'sellsitemssearch'),true);?>",
              function(data){
                    $('#sellsmodal').html(data);
                    $("#sellsmodal").modal();
              }
      )
}

function openSellsForm(id,pid,Qty,price,name){


    $.post(" <?php echo $this->Html->url(array('controller'=>'sellsdetails','action'=>'sellsadform'),true);?>",
            {id:id,purchaseDetailsId:pid,Quantity:Qty,Price:price,Name:name},
              function(data){
                    $('#sellsmodal').html(data);
                    $("#sellsmodal").modal();
              }
      )
}

function openSellsEditForm(id,Qty,price,name,counter,obj){

    $.post("<?php echo $this->Html->url(array('controller'=>'sellsdetails','action'=>'sellseditform'),true);?>",
            {purchaseDetailsId:id,Quantity:Qty,Price:price,Name:name,Counter:counter},
              function(data){
                    $('#sellsmodal').html(data);
                    $("#sellsmodal").modal();
              }
      )
}

function remove(obj){
    $(obj).parent().parent().remove();
}

</script>

 <div id="sellsmodal"></div>

<div class="sells form">
<?php echo $this->Form->create('Sell'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sell'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('invoice_no');
		echo $this->Form->input('company_id');
		echo $this->Form->input('amount',array('type'=>'text'));
		echo $this->Form->input('paid',array('type'=>'text'));
        echo $this->Form->input('date');
	?>
	</fieldset>
    <span><a onclick="sellsproducts()" style="text-align: right;" href="javascript:void(0);"><span class="icon-plus-sign"></span>Add Sells Products</a></span>
     <table width='100%' class='table' id="sellsproductslist"></table>




<?php echo $this->Form->end(__('Submit')); ?>
</div>
