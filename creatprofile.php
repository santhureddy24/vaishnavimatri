<?php include('create.html');

$account = new Account();
//http://localhost/api/register.php?token=39b5ca3afe674f7764d467e59a6331b2

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    
    
     $Pid = isset($_POST['Pid']) ? $_POST['Pid'] : "" ; 
     $name = isset($_POST['name']) ? $_POST['name'] : "" ; 
     $sex= isset($_POST['sex']) ? $_POST['sex'] : "" ; 
     $edob = isset($_POST['edob']) ? $_POST['edob'] : "" ; 
     $Caste = isset($_POST['Caste']) ? $_POST['Caste'] : "" ; 
	 $SubCaste = isset($_POST['SubCaste']) ? $_POST['SubCaste'] : "" ; 
	 $Height = isset($_POST['Height']) ? $_POST['Height'] : "" ; 
    $Specialcase= isset($_POST['Specialcase']) ? $_POST['Specialcase'] : "" ; 
	$Religion = isset($_POST['Religion']) ? $_POST['Religion'] : "" ; 
	$Mothertonque = isset($_POST['Mothertonque']) ? $_POST['Mothertonque'] : "" ; 
	$Maritalstatus = isset($_POST['Maritalstatus']) ? $_POST['Maritalstatus'] : "" ; 
	$Smoking = isset($_POST['Smoking']) ? $_POST['Smoking'] : "" ; 
	$Drinking = isset($_POST['Drinking']) ? $_POST['Drinking'] : "" ; 
	$habits = isset($_POST['habits']) ? $_POST['habits'] : "" ; 
	 $Complexion = isset($_POST['Complexion']) ? $_POST['Complexion'] : "" ; 
     
     $Bodytype = isset($_POST['Bodytype']) ? $_POST['Bodytype'] : "" ; 
     $qualification = isset($_POST['qualification']) ? $_POST['qualification'] : "" ; 
     $Employedin = isset($_POST['Employedin']) ? $_POST['Employedin'] : "" ; 
     $Occupation = isset($_POST['Occupation']) ? $_POST['Occupation'] : "" ; 
     $AnnualIncome = isset($_POST['AnnualIncome']) ? $_POST['AnnualIncome'] : "" ; 
     $CountryPresidence = isset($_POST['CountryPresidence']) ? $_POST['CountryPresidence'] : "" ;
     $state = isset($_POST['state']) ? $_POST['state'] : "" ;
	  $Aboutme = isset($_POST['Aboutme']) ? $_POST['Aboutme'] : "" ;
     
    
    
     if(empty($name) || empty($sex) || empty($Caste) || empty($edob) || empty($SubCaste) || empty($Height) || empty($Specialcase) || empty($Religion)
		 || empty($Mothertonque) || empty($Maritalstatus) || empty($Smoking) || empty($Drinking) || empty($habits) || empty($Complexion)
	 || empty($Bodytype) || empty($qualification) || empty($Employedin) || empty($Occupation) || empty($AnnualIncome) || empty($CountryPresidence) || empty($state) || empty($Aboutme)){
         $json  = array("status" => "0", "msg" => "please fill all mandatory fields");
         header('Content-Type: application/json');
         echo json_encode($json);
         die();
     }
     
   

     
     
     $data = array(); 
     
     $data['Pid'] = $Pid;
     $data['name'] = $name;
     
     $data['sex'] = $sex;
     $data['edob'] = $edob;
     $data['Caste'] = $Caste;
     $data['SubCaste'] = $SubCaste;
     $data['Height'] = $Height;
     $data['Specialcase'] = $Specialcase;
     $data['Religion'] = $Religion;
     $data['Mothertonque'] = $Mothertonque;
     $data['Maritalstatus'] = $Maritalstatus;
     $data['Smoking'] = $Smoking;
	 $data['Drinking'] = $Drinking;
	 $data['habits'] = $habits ;
	 $data['Complexion'] = $Complexion;
	 $data['Bodytype'] = $Bodytype;
	 $data['qualification'] = $qualification;
	 $data['Employedin'] = $Employedin;
	 $data['Occupation'] = $Occupation;
	 $data['AnnualIncome'] = $AnnualIncome;
	 $data['CountryPresidence'] = $CountryPresidence;
	 $data['state'] = $state;
	 $data['Aboutme'] = $Aboutme;
	 
	 
     
    $json = array();
    
    if(!($token == TOKEN)){
         $json  = array("status" => "0", "msg" => "Invalid Token");
         header('Content-Type: application/json');
         echo json_encode($json);
         die();
    }
    else{
        $results = $account->userRegistration($data);
        
        if($results==1){
              $json  = array("status" => "0", "msg" => "Registration Failed",'resultData' => $results);   
        }
        else{
            $json  = array("status" => "1", "msg" => "Registr Successfully",'resultData' => $results);
        }

    }
    header('Content-Type: application/json');
    echo json_encode($json);
}
else{
     $json  = array("status" => "0", "msg" => "Invalid Request");
     header('Content-Type: application/json');
     echo json_encode($json); 
}

?>
