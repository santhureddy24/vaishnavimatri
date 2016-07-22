<?php
class Profile{
    public function __construct() {
        
    }
    public function getProfileList(){
        
        $sql="SELECT pid, name, sex, edob, caste, 
                height, specialcase, religion, mothertonque, maritalstatus, smoking, 
                drinking, ms.habits, complexion, bodytype, qualification, employedin, occupation, annualincome, 
                countrypresidence, state, aboutme
                FROM  profile
                
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
		header('Content-Type: application/json');
     echo json_decode($data); 

    }
    
}
