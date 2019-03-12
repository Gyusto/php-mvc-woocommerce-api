<?php
trait Customers{

public static function getCustomer(){
  $data = self::con()->get('customers');
    $data_arr['data']=$data;
    return $data_arr;
}



}