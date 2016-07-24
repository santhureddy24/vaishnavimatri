<?php
include_once 'data.config.php';
include_once 'product.php';
$productObj = new Profile();

// http://www.link2connect.in/mobileapi/productdetails.php?pId=8850&token=39b5ca3afe674f7764d467e59a6331b2

if($_SERVER['REQUEST_METHOD'] == 'POST')
{    
   
    $iProfile  = isset($_GET['pid']) ? $_GET['pid'] : "" ; 
    
    $json = array();
    
    if(!($data == DATA))
	{
         $json  = array("status" => "0", "msg" => "Invalid Token");
         header('Content-Type: application/json');
         echo json_encode($json);
         die();
    }
    else
	{      
			
		$json = $profileObj->getProfileDetails($iProduct);	                
    }
	
	$jsonData  = array("status" => "1", "msg" => 'Product Details', 'resultData' => $json);
	 
    header('Content-Type: application/json');
    echo json_encode($jsonData);
}
else{
     $json  = array("status" => "0", "msg" => "Invalid Request");
     header('Content-Type: application/json');
     echo json_encode($json); 
}
?>

    
    
    