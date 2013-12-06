
<div id="sellsform">
 <?php echo $this->Form->create('Sellsdetail',array('controller'=>'sellsdetails','action'=>'add'));
    echo $this->Form->input(
        'purchase_product_id',
        array('value' => $sellsData['purchaseDetailsId'], 'type' => 'text')
    );
    echo $this->Form->input('quantity', array('value' => $sellsData['Quantity']));
    echo $this->Form->input('price', array('value' => $sellsData['Price']));
    echo $this->Form->input('sell_id', array('value' => $sellsData['sellsId'],'type'=>'text'));
    echo $this->Form->input(
        'serial_no',
        array(
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => $serial_array
        )
    );

    ?>

</div>

<?php echo $this->Form->end('Submit'); ?>