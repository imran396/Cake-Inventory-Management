<script>
    $(document).ready(function () {
        $('#sellbutton').click(function (data) {
            var obj = $(this).parent();
            var purchase_product_id = obj.find('#purchases_product_id').val();
            var quantity = obj.find('#qty').val();
            var uniteprice = obj.find('#unit_price').val();
            var productName = obj.find('#product_name').val();
            var random_id = obj.find('#randomid').val();
            $("#sellsproductslist").modal('hide');
            var checkarray = '';
            $(':checkbox:checked').each(function (i) {
                checkarray += $(this).parent().find('label').text()+',';
            });

            var html = "<tr><td id='row_" + random_id + "' class='sellsdatarow'>" +
                    "<input type = 'hidden' name = 'data[Sellsdetail]["+random_id+"][purchase_product_id]' value = '" + purchase_product_id + "'>" +
                    "<input type = 'hidden' name = 'data[Sellsdetail]["+random_id+"][quantity]' value = '" + quantity + "'>" +
                    "<input type = 'hidden' name = 'data[Sellsdetail]["+random_id+"][price]' value = '" + uniteprice + "'>" +
                    "<input type = 'hidden' name = 'data[Sellsdetail]["+random_id+"][serial]' value = '" +checkarray+ "'>" +
                     productName + "</td><td></span>&nbsp;&nbsp;<span>" + quantity + "pcs</span></td><td>&nbsp;&nbsp;<span>@" + uniteprice + "tk</span></td>";

            var row_html = html + '<td>' + checkarray + '</td><td><a href="javascript:void(0)" onclick ="remove(this);"><span title="delete" class="icon-remove"></span></a></td></tr>';
            var serialhtml = '';
            $('#sellsproductslist').append(row_html);
        })
    })
</script>

<div id="sellsform">
    <?php
    // pr($serial_array);
    echo $this->Form->input('product_name', array('value' => $sellsData['Name']));
    echo $this->Form->hidden(
        'purchases_product_id',
        array('value' => $sellsData['purchaseDetailsId'], 'type' => 'text')
    );
    echo $this->Form->hidden('randomid', array('value' => $sellsData['id'], 'type' => 'text'));
    echo $this->Form->input('qty', array('value' => $sellsData['Quantity']));
    echo $this->Form->input('unit_price', array('value' => $sellsData['Price']));

    echo $this->Form->input(
        'serial_no',
        array(
            'type' => 'select',
            'multiple' => 'checkbox',
            'options' => $serial_array
        )
    );

    ?>
    <input class="close" data-dismiss="modal" id="sellbutton" type="button" value="Add Sell Items">
</div>