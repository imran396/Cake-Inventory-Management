<script>
    function sellsproducts(id) {
        $.post(" <?php echo $this->Html->url(
            array('controller' => 'purchasedetails', 'action' => 'sellsitems'),
            true
        );?>",
                {sellID:id},
                function (data) {
                    $('#sellsmodal').html(data);
                    $("#sellsmodal").modal();
                }
        )

    }


    function searchproducts() {
        var val = $('#searchProducts').val();
        $.post(" <?php echo $this->Html->url(
            array('controller' => 'purchasedetails', 'action' => 'sellsitemssearch'),
            true
        );?>",
                function (data) {
                    $('#sellsmodal').html(data);
                    $("#sellsmodal").modal();
                }
        )
    }

    function openSellsForm(id, pid, Qty, price, name, sellId) {

        $.post(" <?php echo $this->Html->url(
            array('controller' => 'sellsdetails', 'action' => 'sellsadform'),
            true
        );?>",
                {id:id, purchaseDetailsId:pid, Quantity:Qty, Price:price, Name:name, sellsId:sellId},
                function (data) {
                    $('#sellsmodal').html(data);
                    $("#sellsmodal").modal();
                }
        )
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
        echo $this->Form->input('amount',array('readonly'=>'readonly','type'=>'text'));
        echo $this->Form->input('paid',array('readonly'=>'readonly','type'=>'text','value'=>$toalpayment));
        echo $this->Form->input('date');
        ?>
    </fieldset>

    <span><a onclick="sellsproducts( <?php echo $this->params['pass'][0]; ?>)" style="text-align: right;"
             href="javascript:void(0);"><span
            class="icon-plus-sign"></span>Add Sells Products</a></span>
    <table width='100%' class='table table-hover' id="sellsproductslist">
        <?php foreach ($this->request->data['Sellsdetail'] as $key => $val): ?>
        <tr>
            <?php foreach ($val as $singleval): ?>
            <td><?php echo $singleval; ?></td>
            <?php endforeach; ?>
            <td>
                <?php echo $this->Html->link('<span title="delete" class="icon-remove"></span>',array('controller'=>'sellsdetails','action'=>'delete', $val['id'],$this->params['pass'][0]),array('OnClick'=>"return confirm('Are you sure you want to delete?')",'escape'=>false)) ?>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
