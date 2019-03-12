<?php
trait Categories{
//GETTING ALL CATEGORY
public static function categoryData(){
  $data = self::con()->get('products/categories');
    $data_arr['data']=$data;
    return $data_arr;
}

//GETTING CATEGORY BY ID
public static function getCategoryById(){

  if(isset($_GET['categories_id'])){
    $Id=$_GET['categories_id'];
 // $Id=758;
    $data = self::con()->get('products/categories/'.$Id);
    $data_arr['data']=$data;
    return $data_arr;
  }else{
    $status="<center><p style='color:red;'>Expect One Parameter: 'categories_id'</p></center>";
    
    echo($status);
    exit();
  }
 
}
public static function deleteCategory(){

  if(isset($_GET['categories_id'])){
    $Id=$_GET['categories_id'];
   self::con()->delete('products/categories/'.$Id, ['force' => true]);
    return "data deleted";
  }else{
    $status="<center><p style='color:red;'>Expect One Parameter: 'categories_id'</p></center>";
    
    echo($status);
    exit();
  }
 
}
public static function Addcategory(){
  if(isset($_GET['name'],$_GET['slug'],$_GET['description'])){
  $data = [
    'name' => $_GET['name'],
    'slug' => $_GET['slug'],
    'description' => $_GET['name']
];
self::con()->post('products/categories',  $data);
   return "data inserted!";
  }else{
    return null;
  }

  
}
}