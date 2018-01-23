<?php
if(isset($_POST['get_option']))
{
 include('dbconfig.php');

 $state = $_POST['get_option'];
 $find=mysqli_query($con,"show tables from emisdb like 'olresult%';");
 while($table=mysqli_fetch_array($find))
 {
  echo "<option>".$table[0]."</option>";
 }
 exit;
}
?>