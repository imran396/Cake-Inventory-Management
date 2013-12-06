<?php
    $sellqty = $sellQty['0']['sellQty'];
    $purchaseqty = $purchaseQty['0']['purchaseQty'];
    $stock = $purchaseqty - $sellqty;
       $options = '';
       foreach($producserials as $key =>$values){
             $options .= "<option value='$key'>$values</option>";
       }

    $jsonarray= array('stock'=>$stock,'salerate'=>$sellrate['Product']['unitprice'],'option'=>$options) ;
    echo json_encode($jsonarray);


 ?>