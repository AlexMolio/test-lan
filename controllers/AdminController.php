<?php



class AdminController
{
	public function actionIndex()
    {
        
        if(Admin::checkAdmin()){
            
        	require_once (ROOT . '/views/admin/index.php');
        	
        }
        
    	return true;
    }

    public function actionProducts()
    {
        if(Admin::checkAdmin()){

        	$productList = Product::getProductList();

        	require_once (ROOT . '/views/admin/products.php');
    	
        }

    	return true;
    }

    public function actionOrders()
    {
        if(Admin::checkAdmin()){

        	$orderList = Order::getOrdersList();
    	
        	require_once (ROOT . '/views/admin/orders.php');
        	
        }

    	return true;
    }
    
     public function actionProductupdate($id)
    {
        if(Admin::checkAdmin()){
        
            $result = false;
        	$productItem = Product::getProductItem($id);
        	
        	if(isset($_POST['submit'])) {
    			$options['name'] = $_POST['name'];
    			$options['1'] = $_POST['1'];
    			$options['2'] = $_POST['2'];
    			$options['3'] = $_POST['3'];
    			$options['4'] = $_POST['4'];
    			$options['5'] = $_POST['5'];
    			$options['6'] = $_POST['6'];
    			$options['7'] = $_POST['7'];
    			$options['8'] = $_POST['8'];
    			$options['9'] = $_POST['9'];
    			$options['10'] = $_POST['10'];
    			$options['11'] = $_POST['11'];
    			$options['12'] = $_POST['12'];
    			$options['13'] = $_POST['13'];
    			$options['14'] = $_POST['14'];
    			$options['15'] = $_POST['15'];
    			$options['16'] = $_POST['16'];
    			$options['17'] = $_POST['17'];
    			$options['18'] = $_POST['18'];
    			$options['19'] = $_POST['19'];
    			$options['20'] = $_POST['20'];
    			$options['21'] = $_POST['21'];
    			$options['22'] = $_POST['22'];
    			$options['23'] = $_POST['23'];
    			$options['24'] = $_POST['24'];
    			$options['25'] = $_POST['25'];
    			$options['26'] = $_POST['26'];
    			$options['27'] = $_POST['27'];
    			$options['28'] = $_POST['28'];
    			$options['29'] = $_POST['29'];
    			$options['30'] = $_POST['30'];
    			
    			$options['status'] = $_POST['status'];
                
               $result = Product::updateProduct($id, $options);
                
        	}
        	
    
        	require_once (ROOT . '/views/admin/productupdate.php');

        }

    	return true;
    }
    
    public function actionProductcreate(){
        
        if(Admin::checkAdmin()){
        
            $result = false;
            
            if(isset($_POST['submit'])) {
                
    			$options['name'] = $_POST['name'];
    			$options['char1'] = $_POST['char1'];
    			$options['char2'] = $_POST['char2'];
    			$options['char3'] = $_POST['char3'];
    			$options['char4'] = $_POST['char4'];
    			$options['char5'] = $_POST['char5'];
    			$options['char6'] = $_POST['char6'];
    			$options['char7'] = $_POST['char7'];
    			$options['char8'] = $_POST['char8'];
    			$options['char9'] = $_POST['char9'];
    			$options['char10'] = $_POST['char10'];
    			$options['char11'] = $_POST['char11'];
    			$options['char12'] = $_POST['char12'];
    			$options['char13'] = $_POST['char13'];
    			$options['char14'] = $_POST['char14'];
    			$options['char15'] = $_POST['char15'];
    			$options['char16'] = $_POST['char16'];
    			$options['char17'] = $_POST['char17'];
    			$options['char18'] = $_POST['char18'];
    			$options['char19'] = $_POST['char19'];
    			$options['char20'] = $_POST['char20'];
    			$options['char21'] = $_POST['char21'];
    			$options['char22'] = $_POST['char22'];
    			$options['char23'] = $_POST['char23'];
    			$options['char24'] = $_POST['char24'];
    			$options['char25'] = $_POST['char25'];
    			$options['char26'] = $_POST['char26'];
    			$options['char27'] = $_POST['char27'];
    			$options['char28'] = $_POST['char28'];
    			$options['char29'] = $_POST['char29'];
    			$options['char30'] = $_POST['char30'];
    			
    			$options['status'] = $_POST['status'];
                
                $result = Product::createProduct($options);
            
        	}
            
            require_once (ROOT . '/views/admin/productcreate.php');
            
        }
    }
    
    public function actionProductdelete($id)
	{
		if(Admin::checkAdmin()){

    			Product::deleteProductById($id);
    
    			header("Location: /admin/product");
    		
		}
    		
		return true;
	}
}

?>