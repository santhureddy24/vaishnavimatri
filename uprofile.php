<?php
class Profile{
    public function __construct() {
        
    }
    public function Registerprofile($data){
            
            
                $data = mysql_query("INSERT INTO " . DB_PREFIX . "profile SET 
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
