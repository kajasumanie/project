<?php
if(isset($_POST['get_option']))
{
 include('dbconfig.php');

 $state = $_POST['get_option'];

 $find=mysqli_query($con,"show tables from emisdb like '$state%';");
 while($table=mysqli_fetch_array($find))
 {
	 $tab_name=$table[0];
   $year=substr($tab_name, -4);
	if((($state=='olresult' && strlen($tab_name)==12) || ($state=='alresults' && strlen($tab_name)==13) || ($state=='gvexam' && strlen($tab_name)==10)) && is_numeric($year)){
  echo "<option>".$year."</option>";
	}
 }
 exit;
}
?>
