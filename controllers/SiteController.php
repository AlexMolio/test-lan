<?php



class SiteController
{
    public function actionIndex()
    {
		
		$productList = Product::getProductList();

	
		$result = false;
        require_once (ROOT . '/views/site/index.php');

        if(isset($_POST['name'])){
			$name = $_POST['name'];
			$email_buyer = $_POST['email'];
			$comment = $_POST['comment'];

			$email_sent = 'mr.molokhov@mail.ru';
    		

    		$errors = false;

            if (!User::checkLogin($name)){
				$errors[] = 'Имя не должно быть короче 2-х символов!';
			}
			if (!User::checkEmail($email_buyer)){
				$errors[] = 'Некорректный email!';
			}
			if (!User::checkComment($comment)){
				$errors[] = 'Сообщение не должно быть короче 6-ти символов!';
			}

			if($errors == false){

				$email = "От $name - $email_buyer, сообщение: $comment!";

				$result = mail($email_sent, $email, $email_buyer);
				
				if($result == true)
				
			    	$status = 1;
    			else
    				$status = 0;
    
    			Order::addOrder($name, $email_buyer, $comment, $status);
    				
    			}

			}

        return true;
    }

    public function actionAdmin()
    {

    	
    	//$productList = Product::getProductList();
    	

    	require_once (ROOT . '/views/admin/index.php');


    	return true;
    }
}

?>