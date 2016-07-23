<?php
class Profile{
    public function __construct() {
        
    }
    public function getProfileList(){
        
        $sql="SELECT pid, name, sex, edob, caste, 
                height, specialcase, religion, mothertonque, maritalstatus, smoking, 
                drinking, ms.habits, complexion, bodytype, qualification, employedin, occupation, annualincome, 
                countrypresidence, state, aboutme
                FROM  orderfood
                
            ";

        $results = array();
        $sql_query = mysql_query($sql);
        if(mysql_num_rows($sql_query)>0){
            while($row_result = mysql_fetch_assoc($sql_query)){
                
                $results[] = array(
                    'pid'           =>  $row_result['pid'],
                    'name'         =>  $row_result['name'],
                    'sex'       =>  $row_result['sex'],
                    'edob'         =>  $row_result['edob'],
                    'caste'           =>  $row_result['caste'],
                    'height'       =>  $row_result['height'],
                    'specialcase'         =>  $row_result['specialcase'],
                    'religion'         =>  $row_result['religion'],
                    'mothertonque'       =>  $row_result['mothertonque'],
                    'maritalstatus'        =>  $maritalstatus,
                    'smoking'         =>  $row_result['smoking'],
					'drinking'         =>  $row_result['drinking'],
                    'habits'           =>  $row_result['habits'],
                    'complexion'       =>  $row_result['complexion'],
                    'bodytype'         =>  $row_result['bodytype'],
                    'qualification'         =>  $row_result['qualification'],
                    'employedin'       =>  $row_result['employedin'],
                    'occupation'        =>  $occupation,
                    'annualincome'         =>  $row_result['annualincome'],
					'countrypresidence'           =>  $row_result['countrypresidence'],
                    'state'       =>  $row_result['state'],
                    'aboutme'         =>  $row_result['aboutme']
                );
            }
            
        }
      /* while($row_result = mysql_fetch_assoc($sql_query)){
            $results[] = $row_result;
        }*/
        return $results;

    }
	
	public function registerprofile(){
        
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
    
}
