<?php 
include_once './profile.php';
include_once './data.config.php';
$profileObj = new Profile();




if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    
    
    $gender= isset($_POST['gender']) ? $_POST['gender'] : "" ;  
   $email = isset($_POST['email']) ? $_POST['email'] : "" ; 
   $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "" ; 
   $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "" ; 
   $postedby = isset($_POST['postedby']) ? $_POST['postedby'] : "" ; 
    $edob = isset($_POST['edob']) ? $_POST['edob'] : "" ; 
	$religion = isset($_POST['religion']) ? $_POST['religion'] : "" ; 
	 $caste = isset($_POST['caste']) ? $_POST['caste'] : "" ; 
	 $mothertongue = isset($_POST['mothertongue']) ? $_POST['mothertongue'] : "" ; 
   $residing = isset($_POST['residing']) ? $_POST['residing'] : "" ; 
   $mobileno = isset($_POST['mobileno']) ? $_POST['mobileno'] : "" ; 
    $phoneno= isset($_POST['phoneno']) ? $_POST['phoneno'] : "" ;
   $maritalstatus = isset($_POST['maritalstatus']) ? $_POST['maritalstatus'] : "" ; 
   $complexion = isset($_POST['complexion']) ? $_POST['complexion'] : "" ; 
    $phisicallychallenged= isset($_POST['phisicallychallenged']) ? $_POST['phisicallychallenged'] : "" ;
	 $height = isset($_POST['height']) ? $_POST['height'] : "" ; 
   $borncitizenship = isset($_POST['borncitizenship']) ? $_POST['borncitizenship'] : "" ; 
    $educationcategory = isset($_POST['educationcategory']) ? $_POST['educationcategory'] : "" ;
	
   $specialization = isset($_POST['specialization']) ? $_POST['specialization'] : "" ;
    $employedin = isset($_POST['employedin']) ? $_POST['employedin'] : "" ; 
   $professiongroup = isset($_POST['professiongroup']) ? $_POST['professiongroup'] : "" ; 
   $profession = isset($_POST['profession']) ? $_POST['profession'] : "" ; 
   $companyname = isset($_POST['companyname']) ? $_POST['companyname'] : "" ; 
   $monthlysalary = isset($_POST['monthlysalary']) ? $_POST['monthlysalary'] : "" ;
$state = isset($_POST['state']) ? $_POST['state'] : "" ;   
   $district = isset($_POST['district']) ? $_POST['district'] : "" ; 
   $city = isset($_POST['city']) ? $_POST['city'] : "" ; 
   $fathername = isset($_POST['fathername']) ? $_POST['fathername'] : "" ; 
   $fathereducation = isset($_POST['fathereducation']) ? $_POST['fathereducation'] : "" ; 
   $fatherprofession = isset($_POST['fatherprofession']) ? $_POST['fatherprofession'] : "" ; 
   $mothername = isset($_POST['mothername']) ? $_POST['mothername'] : "" ; 
   $mothereducation = isset($_POST['mothereducation']) ? $_POST['mothereducation'] : "" ; 
   $motherprofession = isset($_POST['motherprofession']) ? $_POST['motherprofession'] : "" ; 
   $fathernative = isset($_POST['fathernative']) ? $_POST['fathernative'] : "" ; 
   $mothernative = isset($_POST['mothernative']) ? $_POST['mothernative'] : "" ; 
   $brothers = isset($_POST['brothers']) ? $_POST['brothers'] : "" ; 
   $sisters = isset($_POST['sisters']) ? $_POST['sisters'] : "" ;
    


    $sql = "INSERT INTO create_profile(pid, gender, email, firstname, lastname, postedby, edob, religion, caste, mothertongue, residing, mobileno, phoneno, maritalstatus, complexion,
	phisicallychallenged, height, borncitizenship, educationcategory, specialization, employedin, 
	professiongroup, profession, companyname, monthlysalary, state, district, city, fathername,
	 fathereducation, fatherprofession, mothername, mothereducation, motherprofession, fathernative, mothernative, brothers, sisters)
    VALUES('NULL', '$gender', '$email', '$firstname', '$lastname', '$postedby', '$edob', '$religion', '$caste', '$mothertongue', '$residing',
	'$mobileno', '$phoneno', '$maritalstatus','$complexion', '$phisicallychallenged', '$height', '$borncitizenship', '$educationcategory', 
	'$specialization', '$employedin', '$professiongroup', '$profession', '$companyname', '$monthlysalary', '$state', '$district', '$city', '$fathername',
	 '$fathereducation', '$fatherprofession', '$mothername', '$mothereducation', '$motherprofession',
	  '$fathernative', '$mothernative', '$brothers', '$sisters')";
	$query123 = mysql_query($sql) or trigger_error(mysql_error()." ".$sql);

	echo "$query123";
     
   

     
     
   $data = array(
     
     'pid' => $pid,
     'gender' => $gender,
     'email' => $email,
     'firstname' => $firstname,
     'lastname' => $lastname,
     'postedby' => $postedby,
     'edob' => $edob,
     'religion' => $religion,
     'caste' => $caste,
     'mothertongue' => $mothertongue,
     'residing' => $residing,
	 'mobileno' => $mobileno,
	 'phoneno' => $phoneno,
	 'maritalstatus' => $maritalstatus,
	 'complexion' => $complexion,
	 'phisicallychallenged' => $phisicallychallenged,
	 'height' => $height,
	 'borncitizenship' => $borncitizenship,
	 'educationcategory' => $educationcategory,
	 'specialization' => $specialization,
	 'employedin' => $employedin,
	 'professiongroup' => $professiongroup,
     'profession' => $profession,
     'companyname' => $companyname,
     'monthlysalary' => $monthlysalary,
     'state' => $state,
     'district' => $district,
	 'city' => $city,
     'fathername' => $fathername,
     'fathereducation' => $fathereducation,
     'fatherprofession' => $fatherprofession,
     'mothername' => $mothername,
     'mothereducation' => $mothereducation,
	 'motherprofession' => $motherprofession,
     'fathernative' => $fathernative,
     'mothernative' => $mothernative,
     'brothers' => $brothers,
     'sisters' => $sisters
	 
	 );
	 
	 
     
    $json = array();
    $results = array();

      header('Content-Type: application/json');
     echo json_encode($data); 
}
    
   else{
     $json  = array("status" => "0", "msg" => "Invalid Request");
      
}


?>
