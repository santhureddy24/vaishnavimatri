<?php
include_once('confi.php');
error_reporting(E_ALL);

//Get the variables here
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
@$username = $request->username;
@$password = $request->password;


//Get the variables here end
$insertstatement = 'SELECT count(*) co FROM `login` WHERE username="'.$username.'" AND password="'.$password.'"';

$query123 = mysql_query($insertstatement) or trigger_error(mysql_error()." ".$insertstatement);

while($r = mysql_fetch_array($query123)){
			extract($r);
//echo "count star is $co";
    
}
$co = (int)$co;
$customer_id = '';
if($co == 1){
    //User is availaible
   
$result = array();
$result[] = array("customer_id" => $customer_id,"status" => 1);
}

if($co != 1){
    //User is not availaible
   
    $result = array();
$result[] = array("status" => $insertstatement);
}

/* Output header */
	header('Content-type: application/json');
	echo json_encode($result);

?>