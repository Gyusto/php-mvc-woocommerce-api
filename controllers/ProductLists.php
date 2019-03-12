<?php
class ProductLists extends Controller{
	public static function SelectProducts(){
		echo json_encode(self::productData());
	}
	public static function SelectProductsByID(){
		echo json_encode(self::getproductsByID());

	}
	public static function addProductsList(){
		echo json_encode(self::Addproducts());

	}
	public static function deleteProductsList(){
		echo json_encode(self::deleteproducts());

	}

	public static function selectCategories(){
		echo json_encode(self::categoryData());

	}
	public static function selectCategoriesById(){
		echo json_encode(self::getCategoryById());

	}
    public static function addCategoryList(){
		echo json_encode(self::AddCategory());

	}

	public static function selectOrderList(){
		echo json_encode(self::orderData());

	}
	public static function updateOrderList(){
		echo json_encode(self::updateOrder());

	}
	public static function selectOrderTest(){
		echo json_encode(self::orderTest());

	}



}