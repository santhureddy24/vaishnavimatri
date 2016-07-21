<html>
<body bgcolor="orange">
<table><tr>
<form name="admin" id="admin" method="post">
<td><input type="button" onclick="location.href='home.php'" value="Logout" /></td></tr>
</form>
</table>
</body>
</html>
<?php
$message="Are You Sure To Delete?";
$con=mysql_connect("localhost","root","");
mysql_select_db("matrimony",$con);
$result=mysql_query("select * from orderfood",$con);
if(isset($_REQUEST['del']))
{
$delete=mysql_query("delete from orderfood where name='".mysql_real_escape_string($_REQUEST['del'])."'",$con);
if($delete)
{
$dis=mysql_query("select * from orderfood",$con);
header('location:view.php');
}
else
{
echo "Error: ".mysql_error();
}
}
echo "<h3 align='center'>CREATE PROFILE </h3>";
echo '<form name="stureg" id="stureg" method="post">'."<table bordercolor='red' bgcolor='#CC99CC' border='1' cellpadding='10'>";
echo "<tr><th>Profile ID</th><th>Name</th><th>sex</th><th>Date of birth</th><th>Caste</th><th>SubCaste</th><th>Height</th><th>Specialcase</th><th>Religion</th><th>Mothertongue</th>
<th>Maritalstatus</th><th>Smoking</th><th>Drinking</th><th>habits</th><th>Complexion</th>
<th>Bodytype</th><th>qualification</th><th>Employedin</th><th>Occupation</th><th>Annuallncome</th><th>CountryPresidence</th><th>State</th><th>Aboutme</th>
<th>Delete</th></tr>";
if($result)
{
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo '<td>'.$row['Pid'].'</td>';
echo '<td>'.$row['name'].'</td>';

echo '<td>'.$row['sex'].'</td>';
echo '<td>'.$row['edob'].'</td>';
echo '<td>'.$row['Caste'].'</td>';
echo '<td>'.$row['SubCaste'].'</td>';
echo '<td>'.$row['Height'].'</td>';
echo '<td>'.$row['Specialcase'].'</td>';
echo '<td>'.$row['Religion'].'</td>';
echo '<td>'.$row['Mothertongue'].'</td>';
echo '<td>'.$row['Maritalstatus'].'</td>';
echo '<td>'.$row['Smoking'].'</td>';
echo '<td>'.$row['Drinking'].'</td>';
echo '<td>'.$row['habits'].'</td>';
echo '<td>'.$row['Complexion'].'</td>';
echo '<td>'.$row['Bodytype'].'</td>';
echo '<td>'.$row['qualification'].'</td>';
echo '<td>'.$row['Employedin'].'</td>';
echo '<td>'.$row['Occupation'].'</td>';
echo '<td>'.$row['AnnualIncome'].'</td>';
echo '<td>'.$row['CountryPresidence'].'</td>';
echo '<td>'.$row['state'].'</td>';
echo '<td>'.$row['Aboutme'].'</td>';



echo "<td>".'<a href="view.php?del='.$row['name'].'" onclick="if(!confirm(\".$message."\")){return false;}"><input type="button" value="Delete"></a>'."</td>";
echo "</tr>";
}
}
echo "</table".'</form>';
?>