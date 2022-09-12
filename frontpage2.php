<?php
require_once 'test2.php';

$id = $_GET['id'];

if($id =="24"){
    
    ?>
    <html>
<div style="background-color:blue;padding:10px;color:white;font-size:30px;text-align:center;">
Data viewer
</div>
    
    <a href="frontpage.php" class="button">Go back to frontpage </a>

    <?php
    $funcallclass = new func;

    $data3 = $funcallclass -> getindexalldetail();

    $getkey =[];

$keys = array_keys($data3[0]);

$time= 0;


?>

<div style="width:100%;text-align:center">





<?php foreach ($data3 as $key2 => $value){ ?>






<table>

<?php if($time == 0){ ?>



<?php $getkey= $data3[$key2] ?>

<?php $key3 = array_keys($getkey)
 ?>
<tbody>
<div class=“resp-table-row”>
<div class=“table-body-cell”>

<th style="padding-left:50px"><?php echo $key3[2]; ?> </th>
<th style="padding-left:30px"><?php echo $key3[4]; ?>  </th>
<th style="padding-left:30px"><?php echo $key3[6]; ?>  </th>
<th style="padding-left:50px"><?php echo $key3[1]; ?>  </th>
<th style="padding-left:50px"><?php echo $key3[5]; ?>  </th>
</table>
<table>
</div>
</div>
</tbody>
<?php $time++; ?>

<?php }?>




<tbody>
<div class=“resp-table-row”>

<div class=“table-body-cell”> 
    
<td style="padding-left:30px"><?php echo $data3[$key2]["Applicable_At"]; ?> </td>
<td style="padding-left:30px"><?php echo $data3[$key2]["Applicable_For"]; ?> </td>
<td style="padding-left:20px"><?php echo $data3[$key2]["Data_Item"]; ?> </td>
<td style="padding-left:30px"><?php echo $data3[$key2]["value"]; ?> </td>
<td style="padding-left:30px"><?php echo $data3[$key2]["Generated_Time"]; ?></td>
 </div>
 </tbody>
</div>


<?php } ?>



</div>

</table>



    




<?php }else{ ?>






<html>
<div style="background-color:blue;padding:10px;color:white;font-size:30px;text-align:center;">
Data viewer
</div>
<a href="frontpage.php" class="button">Go back to frontpage </a>
<?php $funcclass = new func;

$data = $funcclass -> getindex();


$func2class = new func;

$data2 = $funcclass -> getindexdetail($id);

$getkey =[];

$keys = array_keys($data2[0]);

$time= 0;

//var_export( $keys);

?> 

    <?php






?>





<div style="width:100%;text-align:center">


<?php foreach ($data2 as $key2 => $value){ ?>






<table>

<?php if($time == 0){ ?>



<?php $getkey= $data2[$key2] ?>

<?php $key3 = array_keys($getkey)
 ?>
<tbody>
<div class=“resp-table-row”>
<div class=“table-body-cell”>

<th style="padding-left:50px"><?php echo $key3[2]; ?> </th>
<th style="padding-left:30px"><?php echo $key3[4]; ?>  </th>
<th style="padding-left:30px"><?php echo $key3[6]; ?>  </th>
<th style="padding-left:50px"><?php echo $key3[1]; ?>  </th>
<th style="padding-left:50px"><?php echo $key3[5]; ?>  </th>
</table>
<table>
</div>
</div>
</tbody>
<?php $time++; ?>

<?php }?>




<tbody>
<div class=“resp-table-row”>

<div class=“table-body-cell”> 
    
<td style="padding-left:30px"><?php echo $data2[$key2]["Applicable_At"]; ?> </td>
<td style="padding-left:30px"><?php echo $data2[$key2]["Applicable_For"]; ?> </td>
<td style="padding-left:20px"><?php echo $data2[$key2]["Data_Item"]; ?> </td>
<td style="padding-left:30px"><?php echo $data2[$key2]["value"]; ?> </td>
<td style="padding-left:30px"><?php echo $data2[$key2]["Generated_Time"]; ?></td>
 </div>
 </tbody>
</div>


<?php } ?>



</div>

</table>
</html>
<?php }  ?>