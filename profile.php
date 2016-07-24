<?php
class Profile{
    public function __construct() {
        
    }
    public function registerProfile($data)
	{
		
		 $data = mysql_query("INSERT INTO " . DB_PREFIX . "profile SET 
                pid = '0', gender = '" .  mysql_escape_string($data['gender']) . "',
				email = '" . mysql_escape_string($data['email']) . "',
				firstname = '" . mysql_escape_string($data['firstname']) . "',
				lastname = '" . mysql_escape_string($data['lastname']) . "',
				postedby = '" . mysql_escape_string($data['postedby']) . "', 
				edob = '" . mysql_escape_string($data['edob']) . "',
				religion = '" . mysql_escape_string($data['religion']) . "', 
				caste = '" . mysql_escape_string($data['caste']) . "',
				mothertongue = '" . mysql_escape_string($data['mothertongue']) . "', 
				residing = '" . mysql_escape_string($data['residing']) . "',
				mobileno = '" . mysql_escape_string($data['mobileno']) . "', 
				phoneno = '" . mysql_escape_string($data['phoneno']) . "',
				maritalstatus = '" . mysql_escape_string($data['maritalstatus']) . "', 
				complexion = '" . mysql_escape_string($data['complexion']) . "',
				phisicallychallenged = '" . mysql_escape_string($data['phisicallychallenged']) . "', 
				height = '" . mysql_escape_string($data['height']) . "', 
				borncitizenship = '" . mysql_escape_string($data['borncitizenship']) . "', 
				educationcategory = '" . mysql_escape_string($data['educationcategory']) . "',
				specialization = '" . mysql_escape_string($data['specialization']) . "',
				employedin = '" . mysql_escape_string($data['employedin']) . "',
				professiongroup = '" . mysql_escape_string($data['professiongroup']) . "',
				profession = '" . mysql_escape_string($data['profession']) . "',
				companyname = '" . mysql_escape_string($data['companyname']) . "', 
				monthlysalary = '" . mysql_escape_string($data['monthlysalary']) . "',
				state = '" . mysql_escape_string($data['state']) . "', 
				district = '" . mysql_escape_string($data['district']) . "',
				city = '" . mysql_escape_string($data['city']) . "', 
				fathername = '" . mysql_escape_string($data['phoneno']) . "',
				fathereducation = '" . mysql_escape_string($data['fathereducation']) . "', 
				fatherprofession = '" . mysql_escape_string($data['fatherprofession']) . "',
				mothername = '" . mysql_escape_string($data['mothername']) . "', 
				mothereducation = '" . mysql_escape_string($data['mothereducation']) . "', 
				motherprofession = '" . mysql_escape_string($data['motherprofession']) . "', 
				fathernative = '" . mysql_escape_string($data['fathernative']) . "',
				mothernative = '" . mysql_escape_string($data['mothernative']) . "',
				brothers = '" . mysql_escape_string($data['brothers']) . "',
				sisters = '" . mysql_escape_string($data['sisters']) . "'")
				
	}
	public function getProductDetails($product_id)
	{		
        $customer_group_id = 0;

		
		$sql = "SELECT DISTINCT *, pid, name, sex, edob, caste, height, specialcase, religion, mothertonque, maritalstatus, smoking, drinking, habits, complexion, bodytype, qualification, employedin, occupation, annualincome, countrypresidence, state,, district, city, fathername, fathereducation, fatherprofession, mothername, mothereducation, motherprofession, fathernative, mothernative, brothers, sisters) FROM " . DB_PREFIX . "profile WHERE pid FROM " . DB_PREFIX . "profile ";
		//echo $sql;
		mysql_query("SET CHARACTER SET utf8");		
        $sql_query = mysql_query($sql);		
		$num_rows = mysql_num_rows($sql_query);
		
        $aResults = array();
		if($num_rows > 0)
		{
			while($row_result = mysql_fetch_assoc($sql_query))
			{		   
				$aResults[] = $row_result;					
			}
		}
		
		$aData = array();
				
		$aData[0]['pid'] = $aResults[0]['pid'];
		
		
				
		
		$aData[0]['name'] = $aResults[0]['name'];
		
		
		
		//echo "<pre />";
		//print_r($aResults);
		//echo "<pre />";
		//print_r($aData); die('kk');
        return $aData;
    }

}
	
				
				
	
?>