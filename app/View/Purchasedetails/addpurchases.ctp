<tr class ='<?php echo "remove$i"; ?>'>
        <td> <?php echo $this->Form->input("Purchasedetail.$i.product_id");?></td>
        <td> <?php echo $this->Form->input("Purchasedetail.$i.brand_id");?></td>
		<td><?php echo $this->Form->input("Purchasedetail.$i.qty");?></td>
		<td> <?php echo $this->Form->input("Purchasedetail.$i.unitprice");?></td>
        <td> <i title="remove" onclick="remove('<?php echo $i ?>')" class="icon-remove"></i></td>
    </tr>
