<?php
class Controller extends DBConnect{
	use Categories;
	use Products;
	use Orders;
//Home page
	public static function CreateView($viewName){
		require_once("views/$viewName.php");
	}
//Product 
	public static function products($viewName){
		require_once("views/$viewName.php");
		static::SelectProducts();
	}

	public static function getproducts($viewName){
	   require_once("views/$viewName.php");
	   static::SelectProductsByID();
	}
	public static function postproducts($viewName){
	   require_once("views/$viewName.php");
	   static::addProductsList();
	}
//Categories
	public static function category($viewName){
	   require_once("views/$viewName.php");
	   static::selectCategories();
	}
	public static function getCategory($viewName){
	   require_once("views/$viewName.php");
	   static::selectCategoriesById();
	}
	public static function deleteCategoryData($viewName){
	   require_once("views/$viewName.php");
	   static::deleteCategoryList();
	}
	public static function addCategoryData($viewName){
	   require_once("views/$viewName.php");
	   static::addCategoryList();
	}
//Customers
	/*public static function customer($viewName){
	   require_once("views/$viewName.php");
	   static::addCategoryList();
	}*/

// Order
	public static function orders($viewName){
		require_once("views/$viewName.php");
		static::selectOrderList();
	}

	public static function updateOrder($viewName){
	require_once("views/$viewName.php");
		static::updateOrderList();
	}

	public static function orderList($viewName){
		require_once("views/$viewName.php");
		static::selectOrderTest();
	}

}
?>