<?php include('create.html');
include_once './profile.php';
include_once './data.config.php';
$profileObj = new Profile();




if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    
    
      $pid = isset($_POST['pid']) ? $_POST['pid'] : "" ; 
   $name = isset($_POST['name']) ? $_POST['name'] : "" ; 
     $sex= isset($_POST['sex']) ? $_POST['sex'] : "" ; 
     $edob = isset($_POST['edob']) ? $_POST['edob'] : "" ; 
     $caste = isset($_POST['caste']) ? $_POST['caste'] : "" ; 
	 $height = isset($_POST['height']) ? $_POST['height'] : "" ; 
    $specialcase= isset($_POST['specialcase']) ? $_POST['specialcase'] : "" ; 
	$religion = isset($_POST['religion']) ? $_POST['religion'] : "" ; 
	$mothertonque = isset($_POST['mothertonque']) ? $_POST['mothertonque'] : "" ; 
	$maritalstatus = isset($_POST['maritalstatus']) ? $_POST['maritalstatus'] : "" ; 
	$smoking = isset($_POST['smoking']) ? $_POST['smoking'] : "" ; 
	$drinking = isset($_POST['drinking']) ? $_POST['drinking'] : "" ; 
	$habits = isset($_POST['habits']) ? $_POST['habits'] : "" ; 
	 $complexion = isset($_POST['complexion']) ? $_POST['complexion'] : "" ; 
     
     $bodytype = isset($_POST['bodytype']) ? $_POST['bodytype'] : "" ; 
     $qualification = isset($_POST['qualification']) ? $_POST['qualification'] : "" ; 
     $employedin = isset($_POST['employedin']) ? $_POST['employedin'] : "" ; 
     $occupation = isset($_POST['occupation']) ? $_POST['occupation'] : "" ; 
     $annualincome = isset($_POST['annualincome']) ? $_POST['annualincome'] : "" ; 
     $countrypresidence = isset($_POST['countrypresidence']) ? $_POST['countrypresidence'] : "" ;
     $state = isset($_POST['state']) ? $_POST['state'] : "" ;
	  $aboutme = isset($_POST['aboutme']) ? $_POST['aboutme'] : "" ;
    


    $sql = "INSERT INTO orderfood(pid, name, sex, edob, caste, height, specialcase, religion, mothertonque, maritalstatus, smoking, drinking, habits, complexion, bodytype,
	qualification, employedin, occupation, annualincome, countrypresidence, state, aboutme)
    VALUES('$pid', '$name', '$sex', '$edob', '$caste', '$height', '$specialcase', '$religion', '$mothertonque', '$maritalstatus', '$smoking', '$drinking', '$habits', '$complexion',
	'$bodytype', '$qualification', '$employedin', '$occupation', '$annualincome', '$countrypresidence', '$state', '$aboutme')";
$query123 = mysql_query($sql) or trigger_error(mysql_error()." ".$sql);

echo "$query123";
     
   

     
     
   $data = array(
     
     'pid' => $pid,
     'name' => $name,
     'sex' => $sex,
     'edob' => $edob,
     'caste' => $caste,
     'height' => $height,
     'specialcase' => $specialcase,
     'religion' => $religion,
     'mothertonque' => $mothertonque,
     'maritalstatus' => $maritalstatus,
     'smoking' => $smoking,
	 'drinking' => $drinking,
	 'habits' => $habits,
	 'complexion' => $complexion,
	 'bodytype' => $bodytype,
	 'qualification' => $qualification,
	 'employedin' => $employedin,
	 'occupation' => $occupation,
	 'annualincome' => $annualincome,
	 'countrypresidence' => $countrypresidence,
	 'state' => $state,
	 'aboutme' => $aboutme
	 
	 );
	 
	 
     
    $json = array();
    $results = array();
}
    
    
   else{
     $json  = array("status" => "0", "msg" => "Invalid Request");
     header('Content-Type: application/json');
     echo json_encode($json); 
}


?>
