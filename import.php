<?php 




$host = "localhost:3306";
$user = "root";
$password = "";
$dbname = "test";
$value = 0;
$app_at = "";
$app_for = "";
$real_value ="";
$gen_time ="";
$row = 1;


$connect = mysqli_connect($host, $user, $password, $dbname);

if ($connect->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";





$handle = fopen("DataItem_11-08-2022_11-09-2022 (2).csv", "r");




while (($data = fgetcsv($handle)) !== FALSE) {

    
   // var_dump($data);

  //  print_r($data['3']);

    




  

    $app_at = $data['0'];
    $app_for = $data['1'];
    $real_value = $data['3'];
    $gen_time = $data['4'];



 


if($data['2'] == "Calorific Value, Campbeltown"){
    $value = 1;
}
if($data['2'] == "Calorific Value, LDZ(EA)"){
    $value = 3;
}
if($data['2'] == "Calorific Value, LDZ(EM)"){
    $value = 4;
}
if($data['2'] == "Calorific Value, LDZ(NE)"){
    $value = 5;
}
if($data['2'] == "Calorific Value, LDZ(NO)"){
    $value = 6;
}
if($data['2'] == "Calorific Value, LDZ(NT)"){
    $value = 9;
}
if($data['2'] == "Calorific Value, LDZ(NW)"){
    $value = 10;
}
if($data['2'] == "Calorific Value, LDZ(SC)"){
    $value = 11;
}
if($data['2'] == "Calorific Value, LDZ(SE)"){
    $value = 12;
}
if($data['2'] == "Calorific Value, LDZ(SO)"){
    $value = 13;
}
if($data['2'] == "Calorific Value, LDZ(SW)"){
    $value = 14;
}
if($data['2'] == "Calorific Value, LDZ(WM)"){
    $value = 15;
}
if($data['2'] == "Calorific Value, LDZ(WN)"){
    $value = 16;
}
if($data['2'] == "Calorific Value, LDZ(WS)"){
    $value = 17;
}
if($data['2'] == "Calorific Value, Oban"){
    $value = 19;
}
if($data['2'] == "Calorific Value, Stornoway"){
    $value = 20;
}
if($data['2'] == "Calorific Value, Stranraer"){
    $value = 21;
}
if($data['2'] == "Calorific Value, Thurso"){
    $value = 22;
}
if($data['2'] == "Calorific Value, Wick"){
    $value = 23;
}



$sql ="insert into index_content(Applicable_At,Applicable_For,index_id,value,Generated_Time) VALUES('$app_at','$app_for','$value','$real_value','$gen_time')";



echo $sql;

if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
?>