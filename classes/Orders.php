<?php
trait Orders{
//GETTING ORDERS FOR THE USER
public static function orderData(){
  if(isset($_GET['order_id'])){
    $Id=$_GET['order_id'];
 // $Id=758;
    $data = self::con()->orders->get('',array( 'filter[customer_id' => $Id));
    $data_arr['data']=$data;
    return $data_arr;
}
}
//UPDATE ORDERS
public static function updateOrder(){

  if(isset($_GET['order_id'])){
    $Id=$_GET['order_id'];
 // $Id=758;
    $data = self::con()->get('orders/'.$Id);
    $data_arr['data']=$data;
    return $data_arr;
  }else{
    $status="<center><p style='color:red;'>Expect One Parameter: 'categories_id'</p></center>";
    
    echo($status);
    exit();
  }
 
}
// testing 
public static function orderTest(){
    $data = self::con()->get('orders');
    $data_arr['data']=$data;
    return $data_arr;
}

}