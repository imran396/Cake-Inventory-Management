<h3> Sells Reports</h3>
<form>
    <input type="text" name="search"/>
    <input type="submit"/>
</form>


<table width="100%" class="table table-hover">
    <tr>
        <th> Product Name</th>
        <th> Quantity</th>
        <th> Total purchase</th>
        <th> Total sell</th>
        <th>Net Profit</th>
        <th>Date</th>

</tr>
    <?php
    $totalSell = 0;
    $totalPurchase = 0;
    foreach($data as $key=>$val):
        $totalPurchase = $val['0']['totalPurchsePrice'] + $totalPurchase;
        $totalSell = $val['totalsellsinfo']['total_price'] + $totalSell;
    ?>
        <tr>
            <td><?php echo $val['products']['name']; ?></td>
            <td><?php echo $val['totalsellsinfo']['quantity']; ?></td>
            <td><?php echo $val['0']['totalPurchsePrice']; ?></td>
            <td><?php echo $val['totalsellsinfo']['total_price']; ?></td>
            <td><?php echo $val['totalsellsinfo']['total_price'] - $val['0']['totalPurchsePrice']; ?></td>
            <td><?php echo $val['sells']['date']; ?></td>
        </tr>
    <?php
    endforeach;?>
         <tr>
             <td></td>
             <td></td>
             <td><?php echo $totalPurchase ?></td>
             <td><?php echo $totalSell ?></td>
             <td><?php echo $totalSell - $totalPurchase; ?></td>
              <td></td>
         </tr>
</table>