<link rel="stylesheet" href="assets/bootstrap-3.3.2/css/bootstrap.css">

<div class="pre-scrollable">
<div class='table'>
<?php 
include('../../dbconfig.php');
$zone= $_POST['id'];
$sql = "select * from studentssummary Where Zone='$zone'";
$data = $con->query($sql);
  $row = $data->fetch_array(MYSQLI_ASSOC);
echo "<table  class='tg' style='width: 90%'>
<thead><tr>
    <td class='tg-c9p5' colspan='2' >Zone</td>
	<td class='tg-31u2'>".$row["Zone"]."</td>
	</tr>
	<tr>
	<td class='tg-c9p5' rowspan='4' width='15%'>Grade 5</td>
	<td class='tg-c9p5' width='30%'>Male</td>
    <td class='tg-31u2'>".$row["Male5"]."</td>
	</tr>
	<tr>
	<td class='tg-c9p5'>Female</td>
	<td class='tg-31u2'>".$row["Female5"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Total</td>
	<td class='tg-31u2'>".$row["Total5"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Parallel Class</td>
    <td class='tg-31u2'>".$row["Parallel_Class5"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5' rowspan='4'>Grade 6-11</td>
	<td class='tg-c9p5'>Male</td>
    <td class='tg-31u2'>".$row["Male11"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Female</td>
    <td class='tg-31u2'>".$row["Female11"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Total</td>
    <td class='tg-31u2'>".$row["Total11"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Parallel Class</td>
    <td class='tg-31u2'>".$row["Parallel_Class11"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5' rowspan='4'>Grade 12-13</td>
	<td class='tg-c9p5'>Male</td>
    <td class='tg-31u2'>".$row["Male13"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Female</td>
    <td class='tg-31u2'>".$row["Female13"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Total</td>
    <td class='tg-31u2'>".$row["Total13"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Parallel Class</td>
    <td class='tg-31u2'>".$row["Parallel_Class13"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5' rowspan='4'>Total</td>
	<td class='tg-c9p5'>Male</td>
    <td class='tg-31u2'>".$row["MaleT"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Female</td>
    <td class='tg-31u2'>".$row["FemaleT"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Total</td>
    <td class='tg-31u2'>".$row["TotalT"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5'>Parallel_Class</td>
    <td class='tg-31u2'>".$row["Parallel_ClassT"]."</td>
	</tr>
	<tr>
	<td class='tg-c9p5' colspan='2'>Spe. Edu. InCentre</td>
    <td class='tg-31u2'>".$row["InCentre"]."</td>
    </tr>
	<tr>
	<td class='tg-c9p5' colspan='2'>Grand Total</td>
    <td class='tg-31u2'>".$row["Total"]."</td>
  </tr><tbody></table>";
?>
</div>
</div>