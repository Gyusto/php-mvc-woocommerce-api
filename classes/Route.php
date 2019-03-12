<?php
class Route{
	public static $validRoutes=array();
	public static function get($route,$function){ 
		self::$validRoutes[]=$route;
		//print_r(self::$validRoutes);
		if($_GET['url']==$route){
			$function->__invoke();
			
		}
		
	}
} 

?>