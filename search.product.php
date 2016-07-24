<?php
class SearchProfile{
    public function __construct(){

    }
        
    public function dataProfiles($data = array())
	{
         
         $sql = "SELECT pid, name, sex, edob, caste, height, specialcase, religion, mothertonque, maritalstatus, smoking, drinking, habits, complexion, bodytype, qualification, employedin, occupation, annualincome, countrypresidence, state, aboutme)
    VALUES('$pid', '$name', '$sex', '$edob', '$caste', '$height', '$specialcase', '$religion', '$mothertonque', '$maritalstatus', '$smoking', '$drinking', '$habits', '$complexion',
	'$bodytype', '$qualification', '$employedin', '$occupation', '$annualincome', '$countrypresidence', '$state', '$aboutme' FROM profile
                 ORDER BY gender, state, mothertongue, maritialstatus
            FROM " .DB_PREFIX. "profile ";
         
               
      
         if (isset($data['gender'])){
              $sql .= " ORDER BY name ";	
         }else{
             $sql .= " ORDER BY name ";	
         }
         
         if (isset($data['state'])) {
             $sql .= " ORDER BY name ";
         }else{
             $sql .= " ORDER BY name ";
         }

         
          if (isset($data['mothertongue'])){
              $sql .= " ORDER BY name ";	
         }else{
             $sql .= " ORDER BY name ";	
         }
         
         if (isset($data['maritialstatus'])) {
             $sql .= " ORDER BY name ";
         }else{
             $sql .= " ORDER BY name ";
         }
         
         
         $sql_query = mysql_query($sql);
         $reselts = array();
         while($row_reselts = mysql_fetch_assoc($sql_query))
		 {
            /* $reselts['id'][] = $row_reselts['id'];
             $reselts['name'][] = $row_reselts['name'];
             $reselts['email'][] = $row_reselts['email'];*/
            $reselts[] = $row_reselts;
         }		
		//echo "<pre />";
		//print_r($reselts); die('kk');
         return $reselts;        
     }
/*
    public function todayOrders(){
        
        date_default_timezone_set("Asia/Calcutta");
        $date_today=date('Y-m-d');
        
        $sqlTodayOrders = mysql_query("SELECT count(*) AS orders FROM " . DB_PREFIX . "order WHERE order_status_id > 0 AND DATE(date_added) = DATE('".$date_today."') ");
        $rows = mysql_fetch_array($sqlTodayOrders);
        $orders = $rows['orders'];
        return $orders;
    }
     public function totalOrders(){
        $sqlTodayOrders = mysql_query("SELECT count(*) AS orders FROM " . DB_PREFIX . "order WHERE order_status_id > 0 ");
        $rows = mysql_fetch_array($sqlTodayOrders);
        $orders = $rows['orders'];
        return $orders;
    }
    public function cancelOrders(){
        $sqlTodayOrders = mysql_query("SELECT count(*) AS orders FROM " . DB_PREFIX . "order WHERE order_status_id=7");
        $rows = mysql_fetch_array($sqlTodayOrders);
        $orders = $rows['orders'];
        return $orders;
    }*/
}
?>
