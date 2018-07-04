<?php

class Product
{
    const SHOW_BY_DEFAULT = 6;

    public static function getProductItem($id)
    {

        $productItem = array();

       
        $db = Db::getConnection();

        $result = $db-> query("SELECT * FROM porducts WHERE id = $id");
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;


        while($row = $result->fetch()){

            $productItem[$i]['id'] = $row['id'];
            $productItem[$i]['name'] = $row['name'];
            $productItem[$i]['char1'] = $row['char1'];
            $productItem[$i]['char2'] = $row['char2'];
            $productItem[$i]['char3'] = $row['char3'];
            $productItem[$i]['char4'] = $row['char4'];
            $productItem[$i]['char5'] = $row['char5'];
            $productItem[$i]['char6'] = $row['char6'];
            $productItem[$i]['char7'] = $row['char7'];
            $productItem[$i]['char8'] = $row['char8'];
            $productItem[$i]['char9'] = $row['char9'];
            $productItem[$i]['char10'] = $row['char10'];
            $productItem[$i]['char11'] = $row['char11'];
            $productItem[$i]['char12'] = $row['char12'];
            $productItem[$i]['char13'] = $row['char13'];
            $productItem[$i]['char14'] = $row['char14'];
            $productItem[$i]['char15'] = $row['char15'];
            $productItem[$i]['char16'] = $row['char16'];
            $productItem[$i]['char17'] = $row['char17'];
            $productItem[$i]['char18'] = $row['char18'];
            $productItem[$i]['char19'] = $row['char19'];
            $productItem[$i]['char20'] = $row['char20'];
            $productItem[$i]['char21'] = $row['char21'];
            $productItem[$i]['char22'] = $row['char22'];
            $productItem[$i]['char23'] = $row['char23'];
            $productItem[$i]['char24'] = $row['char24'];
            $productItem[$i]['char25'] = $row['char25'];
            $productItem[$i]['char26'] = $row['char26'];
            $productItem[$i]['char27'] = $row['char27'];
            $productItem[$i]['char28'] = $row['char28'];
            $productItem[$i]['char29'] = $row['char29'];
            $productItem[$i]['char30'] = $row['char30'];
            
            $productItem[$i]['status'] = $row['status'];
            $i++;
        }

        return $productItem;
    }

    public static function getProductList()
    {

        $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM porducts');
            $ordersList = array();
            $i = 0;
            while ($row = $result->fetch()) {
                $ordersList[$i]['id'] = $row['id'];
                $ordersList[$i]['name'] = $row['name'];
                $ordersList[$i]['char1'] = $row['1'];
                $ordersList[$i]['char3'] = $row['2'];
                $ordersList[$i]['char2'] = $row['3'];
                $ordersList[$i]['char4'] = $row['4'];
                $ordersList[$i]['char5'] = $row['5'];
                $ordersList[$i]['char6'] = $row['6'];
                $ordersList[$i]['char7'] = $row['7'];
                $ordersList[$i]['char8'] = $row['8'];
                $ordersList[$i]['char9'] = $row['9'];
                $ordersList[$i]['char10'] = $row['10'];
                $ordersList[$i]['char11'] = $row['11'];
                $ordersList[$i]['char12'] = $row['12'];
                $ordersList[$i]['char13'] = $row['13'];
                $ordersList[$i]['char14'] = $row['14'];
                $ordersList[$i]['char15'] = $row['15'];
                $ordersList[$i]['char16'] = $row['16'];
                $ordersList[$i]['char17'] = $row['17'];
                $ordersList[$i]['char18'] = $row['18'];
                $ordersList[$i]['char19'] = $row['19'];
                $ordersList[$i]['char20'] = $row['20'];
                $ordersList[$i]['char21'] = $row['21'];
                $ordersList[$i]['char22'] = $row['22'];
                $ordersList[$i]['char23'] = $row['23'];
                $ordersList[$i]['char24'] = $row['24'];
                $ordersList[$i]['char25'] = $row['25'];
                $ordersList[$i]['char26'] = $row['26'];
                $ordersList[$i]['char27'] = $row['27'];
                $ordersList[$i]['char28'] = $row['28'];
                $ordersList[$i]['char29'] = $row['29'];
                $ordersList[$i]['char30'] = $row['30'];
                $ordersList[$i]['status'] = $row['status'];
                
                $i++;
            }
            return $ordersList;
    }


    public static function deleteProductById($id)
    {
        
        $db = Db::getConnection();

        $sql = 'DELETE FROM porducts WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function createProduct($options)
    {
        
        $db = Db::getConnection();
       
        $sql = 'INSERT INTO porducts (name, char1, char2, char3, char4, char5, char6, char7, char8, char9, char10, char11, char12, char13, char14, char15, char16, char17, char18, char19, char20, char21, char22, char23, char24, char25, char26, char27, char28, char29, char30, status) VALUES (:name, :char1, :char2, :char3, :char4, :char5, :char6, :char7, :char8, :char9, :char10, :char11, :char12, :char13, :char14, :char15, :char16, :char17, :char18, :char19, :char20, :char21, :char22, :char23, :char24, :char25, :char26, :char27, :char28, :char29, :char30, :status)';
        


        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':char1', $options['char1'], PDO::PARAM_STR);
        $result->bindParam(':char2', $options['char2'], PDO::PARAM_STR);
        $result->bindParam(':char3', $options['char3'], PDO::PARAM_STR);
        $result->bindParam(':char4', $options['char4'], PDO::PARAM_STR);
        $result->bindParam(':char5', $options['char5'], PDO::PARAM_STR);
        $result->bindParam(':char6', $options['char6'], PDO::PARAM_STR);
        $result->bindParam(':char7', $options['char7'], PDO::PARAM_STR);
        $result->bindParam(':char8', $options['char8'], PDO::PARAM_STR);
        $result->bindParam(':char9', $options['char9'], PDO::PARAM_STR);
        $result->bindParam(':char10', $options['char10'], PDO::PARAM_STR);
        $result->bindParam(':char11', $options['char11'], PDO::PARAM_STR);
        $result->bindParam(':char12', $options['char12'], PDO::PARAM_STR);
        $result->bindParam(':char13', $options['char13'], PDO::PARAM_STR);
        $result->bindParam(':char14', $options['char14'], PDO::PARAM_STR);
        $result->bindParam(':char15', $options['char15'], PDO::PARAM_STR);
        $result->bindParam(':char16', $options['char16'], PDO::PARAM_STR);
        $result->bindParam(':char17', $options['char17'], PDO::PARAM_STR);
        $result->bindParam(':char18', $options['char18'], PDO::PARAM_STR);
        $result->bindParam(':char19', $options['char19'], PDO::PARAM_STR);
        $result->bindParam(':char20', $options['char20'], PDO::PARAM_STR);
        $result->bindParam(':char21', $options['char21'], PDO::PARAM_STR);
        $result->bindParam(':char22', $options['char22'], PDO::PARAM_STR);
        $result->bindParam(':char23', $options['char23'], PDO::PARAM_STR);
        $result->bindParam(':char24', $options['char24'], PDO::PARAM_STR);
        $result->bindParam(':char25', $options['char25'], PDO::PARAM_STR);
        $result->bindParam(':char26', $options['char26'], PDO::PARAM_STR);
        $result->bindParam(':char27', $options['char27'], PDO::PARAM_STR);
        $result->bindParam(':char28', $options['char28'], PDO::PARAM_STR);
        $result->bindParam(':char29', $options['char29'], PDO::PARAM_STR);
        $result->bindParam(':char30', $options['char30'], PDO::PARAM_STR);
        
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);



        if ($result->execute()) {

            return true;
        }
        
        return 0;
    }

    public static function updateProduct($id, $options)
    {
        $db = Db::getConnection();
       
        $sql = 'UPDATE porducts SET name = :name, char1 = :1, char2 = :2, char3 = :3, char4 = :4, char5 = :5, char6 = :6, char7 = :7, char8 = :8, char9 = :9, char10 = :10, char11 = :11, char12 = :12, char13 = :13, char14 = :14, char15 = :15, char16 = :16, char17 = :17, char18 = :18, char19 = :19, char20 = :20, char21 = :21, char22 = :22, char23 = :23, char24 = :24, char25 = :25, char26 = :26, char27 = :27, char28 = :28, char29 = :29, char30 = :30, status = :status WHERE id = :id';
        


        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':1', $options['1'], PDO::PARAM_INT);
        $result->bindParam(':2', $options['2'], PDO::PARAM_INT);
        $result->bindParam(':3', $options['3'], PDO::PARAM_INT);
        $result->bindParam(':4', $options['4'], PDO::PARAM_INT);
        $result->bindParam(':5', $options['5'], PDO::PARAM_INT);
        $result->bindParam(':6', $options['6'], PDO::PARAM_INT);
        $result->bindParam(':7', $options['7'], PDO::PARAM_INT);
        $result->bindParam(':8', $options['8'], PDO::PARAM_INT);
        $result->bindParam(':9', $options['9'], PDO::PARAM_INT);
        $result->bindParam(':10', $options['10'], PDO::PARAM_INT);
        $result->bindParam(':11', $options['11'], PDO::PARAM_INT);
        $result->bindParam(':12', $options['12'], PDO::PARAM_INT);
        $result->bindParam(':13', $options['13'], PDO::PARAM_INT);
        $result->bindParam(':14', $options['14'], PDO::PARAM_INT);
        $result->bindParam(':15', $options['15'], PDO::PARAM_INT);
        $result->bindParam(':16', $options['16'], PDO::PARAM_INT);
        $result->bindParam(':17', $options['17'], PDO::PARAM_INT);
        $result->bindParam(':18', $options['18'], PDO::PARAM_INT);
        $result->bindParam(':19', $options['19'], PDO::PARAM_INT);
        $result->bindParam(':20', $options['20'], PDO::PARAM_INT);
        $result->bindParam(':21', $options['21'], PDO::PARAM_INT);
        $result->bindParam(':22', $options['22'], PDO::PARAM_INT);
        $result->bindParam(':23', $options['23'], PDO::PARAM_INT);
        $result->bindParam(':24', $options['24'], PDO::PARAM_INT);
        $result->bindParam(':25', $options['25'], PDO::PARAM_INT);
        $result->bindParam(':26', $options['26'], PDO::PARAM_INT);
        $result->bindParam(':27', $options['27'], PDO::PARAM_INT);
        $result->bindParam(':28', $options['28'], PDO::PARAM_INT);
        $result->bindParam(':29', $options['29'], PDO::PARAM_INT);
        $result->bindParam(':30', $options['30'], PDO::PARAM_INT);
      
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);



        if ($result->execute()) {
            

            return true;
        }
        
        return 0;
    }

    
    

}
?>