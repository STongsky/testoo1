<?php
require_once 'test1.php';

class func{
    private $uid;

public function getindex()
{
    $getDB = new BaseDB();
    $sql = "SELECT * from index_name";
    $data = $getDB -> select($sql);

   /* foreach ($data as $key => $value) {
        
        $result = $data[$key]['name'];
       // echo $result;


    } */
    
    return $data;


}

public function getindexdetail($id)
{


       

    $this->uid = $id;



    $getDB = new BaseDB();
    $sql = "SELECT * from index_content as ic , index_name as ina where ina.id = ic.index_id AND ic.index_id = '$this->uid'";
    $data_content = $getDB -> select($sql);
    //echo $sql;

    foreach ($data_content as $key => $value) {
        


       // echo '<pre>';
        //print_r($data_content);
       // echo '</pre>';
      //  $result = $data_content[$key];

        //echo '<pre>';
        //print_r ($result);
        //echo '</pre>';

    } 
    
    return $data_content;


}


public function getindexalldetail()
{


       





    $getDB = new BaseDB();
    $sql = "SELECT * from index_content as ic , index_name as ina where ina.id = ic.index_id";
    $data_content2 = $getDB -> select($sql);
 

    foreach ($data_content2 as $key => $value) {
        


       // echo '<pre>';
        //print_r($data_content2);
       // echo '</pre>';
      //  $result = $data_content2[$key];


    } 
    
    return $data_content2;


}




}




?>