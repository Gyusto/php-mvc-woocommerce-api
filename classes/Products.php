<?php
trait Products{

public static function productData(){
  $data = self::con()->get('products');
    $data_arr['data']=$data;
    return $data_arr;
}


public static function getproductsByID(){

  if(isset($_GET['product_id'])){
    $Id=$_GET['product_id'];
 // $Id=758;
    $data = self::con()->get('products/'.$Id);
    $data_arr['data']=$data;
    return $data_arr;
  }else{
    $status="<center><p style='color:red;'>Expect One Parameter: 'product_id'</p></center>";
    
    echo($status);
    exit();
  }
 
}

public static function deleteproducts(){

  if(isset($_GET['product_id'])){
    $Id=$_GET['product_id'];
   self::con()->delete('products/'.$Id, ['force' => true]);
    return "data deleted";
  }else{
    $status="<center><p style='color:red;'>Expect One Parameter: 'product_id'</p></center>";
    
    echo($status);
    exit();
  }
 
}


public static function Addproducts(){
  if(isset($_GET['name'],$_GET['type'],$_GET['price'])){
    $name=$_GET['name'];$type=$_GET['type'];$price=$_GET['price'];$regular_price=$_GET['regular_price'];
    $category_id=$_GET['category_name'];$category_id2=$_GET['category_slug'];
    $category_name2=$_GET['category_name2'];$category_slug2=$_GET['category_slug2'];
    $image=$_GET['image'];$image2=$_GET['image2'];$desc=$_GET['description'];$desc2=$_GET['short_desc'];
  $data = [
    'name' => $name,
    'type' => $type,
    'regular_price' => $regular_price,
    'description' => $desc,
    'short_description' => $desc2,
    'categories' => [
        [
            'id' => $category_id


        ],
        [
            'id' => $category_id2
        ]
    ],
    'images' => [
       [
            'src' => $image
        ],
        [
            'src' => $image2
        ]
    ]
];
self::con()->post('products',  $data);
   return "data inserted!";
  }else{
    return null;
  }

  
}
public static function useProducts(){
  if(isset($_GET['user_id'])){
    $stmt = self::conMysql()->prepare("select * from wp_posts inner join wp_postmeta on wp_posts.ID=wp_postmeta.post_id inner join wp_users on wp_users.ID=wp_posts.post_author where wp_users.ID=:userid");
    $stmt->bindValue(":userid",$_GET['user_id']);
    $stmt->execute();
    $data = $stmt->fetchAll();
     return $data;
  }
   
  }



}