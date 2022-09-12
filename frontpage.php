<!DOCTYPE html>
<html lang="en">
<head>
  <title>test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  
 
  
<meta name="google-site-verification" content="h1xbwr2jYIcR7BZvYvHMwaU5nWh_kTCJtPslkW9F6No" />
  

  
</head>
<?php require_once 'test2.php'; ?>



<body>
<div style="background-color:blue;padding:10px;color:white;font-size:30px;text-align:center;">
Data viewer
</div>

<div>

<?php 

$funcclass = new func;

$data = $funcclass -> getindex();

foreach ($data as $key => $value){ ?>

   <li><a href="frontpage2.php?id=<?php echo $data[$key]["id"]?>"> <?php echo $data[$key]["Data_Item"]; ?>   </li>

<?php } ?>
 

</div>




</body>