<tr class ='<?php echo "remove$i"; ?>'>
        <td> <?php echo $this->Form->input("Sellsdetail.$i.product_id",array('onchange'=>"calStock($i);"));?></td>
		<td><?php echo $this->Form->input("Sellsdetail.$i.qty");?></td>
         <td><?php echo $this->Form->input("Sells.$i.stock");?></td>
		<td> <?php echo $this->Form->input("Sellsdetail.$i.unitprice");?></td>
        <td> <?php echo $this->Form->input("Serial.$i.productserial",array('type'=>'select'));?></td>
        <td> <i title="remove" onclick="remove('<?php echo $i ?>')" class="icon-remove"></i></td>
 </tr>
