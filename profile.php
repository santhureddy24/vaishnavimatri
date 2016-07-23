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
	
	public function registerProfile($data){
        
        $data1 = mysql_query("INSERT INTO " . DB_PREFIX . "profile SET 
                pid = '0', name = '" .  mysql_escape_string($data['name']) . "', sex = '" . mysql_escape_string($data['sex']) . "', edob = '" . mysql_escape_string($data['edob']) . "',
				caste = '" . mysql_escape_string($data['caste']) . "', height = '" . mysql_escape_string($data['height']) . "', 
				specialcase = '" . mysql_escape_string($data['specialcase']) . "', religion = '" . mysql_escape_string($data['religion']) . "', 
				mothertonque = '" . mysql_escape_string($data['mothertonque']) . "', maritalstatus = '" . mysql_escape_string($data['maritalstatus']) . "', 
				smoking = '" . mysql_escape_string($data['smoking']) . "', drinking = '" . mysql_escape_string($data['drinking']) . "', 
				habits = '" . mysql_escape_string($data['habits']) . "', complexion = '" . mysql_escape_string($data['complexion']) . "', 
				bodytype = '" . mysql_escape_string($data['bodytype']) . "', qualification = '" . mysql_escape_string($data['qualification']) . "', 
				employedin = '" . mysql_escape_string($data['employedin']) . "', 
				occupation = '" . mysql_escape_string($data['occupation']) . "', 
				annualincome = '" . mysql_escape_string($data['annualincome']) . "',
				countrypresidence = '" . mysql_escape_string($data['countrypresidence']) . "',
				state = '" . mysql_escape_string($data['state']) . "', aboutme = '" . mysql_escape_string($data['aboutme']) . "',
				habits = '" . mysql_escape_string($data['habits']) . "',");
     
	 
	 
	 
	 
	 
	
     
     
    
}
    
}
