<?php
Route::get('',function(){
	Home::CreateView('Home');
});

Route::get('productLists',function(){
	ProductLists::products('productList');
});
Route::get('getproduct',function(){
    ProductLists::getproducts('productList');
});
Route::get('addproduct',function(){
    ProductLists::postproducts('productList');
});
Route::get('userproducts',function(){
    ProductLists::usersProducts('productList');
});
Route::get('deleteproduct',function(){
    ProductLists::deleteproductData('productList');
});

Route::get('categorieslist',function(){
    ProductLists::category('productList');
});

Route::get('getcategory',function(){
    ProductLists::getCategory('productList');
});

Route::get('deletecategory',function(){
    ProductLists::deleteCategoryData('productList');
});
Route::get('orderlist',function(){
    ProductLists::orders('productList');
});

Route::get('updateorderlist',function(){
    ProductLists::updateOrder('productList');
});
Route::get('ordertest',function(){
    ProductLists::orderList('productList');
});

