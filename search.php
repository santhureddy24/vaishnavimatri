<?php
include_once 'data.config.php';
include_once 'search.product.php';
$searchProfile = new SearchProfile();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(!@$_GET['token']=='39b5ca3afe674f7764d467e59a6331b2'){
        die("Invalid Token");
    }
    
     
    $gender = isset($_GET['gender']) ? $_GET['gender'] : '' ; 
    $state = isset($_GET['state']) ? $_GET['state'] : '' ; 
    $mothertongue = isset($_GET['mothertongue']) ? $_GET['mothertongue'] : '' ; 
    $maritialstatus = isset($_GET['maritialstatus']) ? $_GET['maritialstatus'] : '' ; 
    
    
    
    
    
    $data = array(
        
        'gender'             => $gender,
        'state'            => $state,
		'mothertongue'             => $mothertongue,
        'maritialstatus'            => $maritialstatus,
        
    );
    
	//echo "<pre />";
	//print_r($data); die('kk');
    $reselts = $searchProfile ->dataProfiles($data);
    
    
   /* $sql = "SELECT id,name,email FROM " .DB_PREFIX. "aa_rd_form WHERE name LIKE '%$data%' ";
    $sql_query = mysql_query($sql);
    $reselts = array();
    while($row_reselts = mysql_fetch_assoc($sql_query)){
        /* $reselts['id'][] = $row_reselts['id'];
         $reselts['name'][] = $row_reselts['name'];
         $reselts['email'][] = $row_reselts['email'];*/
      //  $reselts[] = $row_reselts;
   // }

    $method = $_SERVER['REQUEST_METHOD'];
    $json  = array("status" => "1", "msg" => "Done", "resultData" => $reselts);
    
    header('Content-Type: application/json');
    echo json_encode($json);
}
else{
     $json  = array("status" => "0", "msg" => "Invalid Request");
     header('Content-Type: application/json');
     echo json_encode($json); 
}


//if($_SERVER('REQUEST_METHOD')=='GET'){
   // $data = isset($_GET['data']) ? mysql_escape_string($_GET['data']) : "";
    
   /* $sql = "SELECT * FROM " .DB_PREFIX. "aa_rd_form WHERE name like LIKE '%$uname%' ";
    $sql_query = mysql_query($sql);
    
    while($row_reselts = mysql_fetch_array($sql_query)){
        
    }*/
 
    
           
//}


?>