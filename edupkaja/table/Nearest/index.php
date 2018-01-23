<?php
include('dbconfig.php');

 include('dbconfig.php');


?>

<script src="assets/jquery-2.1.3.js"></script>
<script src="assets/table-style/tableHeadFixer.js"></script>
<link rel="stylesheet" href="assets/bootstrap-3.3.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="all" href="assets/table-style/css/styles.css">
<script src='assets/table-style/js/multifilter.js'></script>

<script type="text/javascript" src="assets/table-style/tableExport.js"></script>
<script type="text/javascript" src="assets/table-style/jquery.base64.js"></script>
<script type="text/javascript" src="assets/table-style/html2canvas.js"></script>
<script src="table/result/bootstrap.js"></script


<link rel="stylesheet" type="text/css" href="assets/table-style/page/style.css" />
<link rel="stylesheet" type="text/css" href="assets/table-style/css/table-style.css" />
<script src="assets/table-style/js/jquery-ui.js"></script>

<style>
.boxbody{position:relative;padding:15px}
</style>
<script src="table/nearest/table_box.js"></script>

<div class="container">
  <div class="row">
    <div class="">

    </div>
     <ul class="breadcrumb">
       Nearest Best Schools in Northern Province
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?option=result">Select Page</a></li>
          <li class="active">School Wise Summary</li>
     </ul>
</div>
</div>
<div class="container">

<div class="row">

  <?php
  $sql= mysqli_query($con,"SELECT CenID, Scid, SchoolName, SchoolAddress, Telephone, ContactNo, schdata.Zone, Division, Category, Span, Type, Medium, schdata.Race, SexType, stTotal, sum(if(Service = 'SLTS' or Service = 'TeacherAssist', 1, 0)) as teanos FROM schdata,stafftb,studentpop WHERE NearestSch='1' and Scid=stScid and Scid=SchID Group by Scid Order by ZoneSort, Scid ASC");
  if(mysqli_num_rows($sql)==0)
  {
    echo ' Nothing here...';
    exit;
  }

   ?>


<div class="btn-group pull-left" style=" padding: 10px;">
<a class="btn btn-info btn-primary btn-overlay"  data-toggle="modal" data-target="#smallModal"><span class="glyphicon glyphicon-filter"></span></a>
</div>
<div class="btn-group pull-right" style=" padding: 10px;">

<button  onClick ="$('#fixTable').tableExport({type:'excel',escape:'false'});" type="button" class="btn btn-info" data-toggle='dropdown' aria-haspopup="true" aria-expanded="true">
<span class="glyphicon glyphicon-download-alt"></span> Download </button>
</div>
</div>
</div>




     <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Filter</h4>
          </div>
          <div class="boxbody">


      <form id="form1" name="form1" method="post" action="index.php?table=result">
        <label for="Zone">Zone</label>
  			<select class="form-control" name="Zone">
  			<option value="">--</option>
  			<?php
  				$sql = "SELECT * FROM schdata GROUP BY Zone ORDER BY Zone";
  				$sql_result = mysqli_query ($con,$sql) or die ('request "Could not execute SQL query" '.$sql);
  				while ($row = mysqli_fetch_assoc($sql_result)) {
  					echo "<option value='".$row["Zone"]."'>".$row["Zone"]."</option>";
  				}
  			?>
  			</select>
  			<br>

      <label for="Division">Division</label>
			<select class="form-control" name="Division">
			<option value="">--</option>
			<?php
				$sql = "SELECT * FROM schdata GROUP BY Division ORDER BY Division";
				$sql_result = mysqli_query ($con,$sql) or die ('request "Could not execute SQL query" '.$sql);
				while ($row = mysqli_fetch_assoc($sql_result)) {
					echo "<option value='".$row["Division"]."'>".$row["Division"]."</option>";
				}
			?>
			</select>
			<br>
			<label for="Function">Function</label>
			<select class="form-control" name="Function">
			<option value="">--</option>
			<?php
				$sql = "SELECT * FROM schdata GROUP BY Func ORDER BY Func";
				$sql_result = mysqli_query ($con,$sql) or die ('request "Could not execute SQL query" '.$sql);
				while ($row = mysqli_fetch_assoc($sql_result)) {
					echo "<option value='".$row["Func"]."'>".$row["Func"]."</option>";
				}
			?>
			</select>
			<br>
			</label>
			<label for="Function">Type</label>
			<select class="form-control" name="Type">
			<option value="">--</option>
			<?php
				$sql = "SELECT * FROM schdata GROUP BY Type ORDER BY Type";
				$sql_result = mysqli_query ($con,$sql) or die ('request "Could not execute SQL query" '.$sql);
				while ($row = mysqli_fetch_assoc($sql_result)) {
					echo "<option value='".$row["Type"]."'>".$row["Type"]."</option>";
				}
			?>
			</select>

			</label>
			<a href="index.php?table=nearest"> reset</a>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<input type="submit" name="button" id="button" class="btn btn-primary" value="Filter" />
          </div>
		  </form>
        </div>
      </div>
    </div>



  <div class="container">
<div class="row">
  <div id="wrapper">
  <table id="fixTable"   width="100%" class="tg">
<thead>
  <tr>

	<th class="tg-mxzp" align='center'>No.</th>
	<th class="tg-mxzp" align='center'>Census ID</th>
	<th class="tg-mxzp" align='center'>School ID</th>
	<th class="tg-mxzp" align='center'>School Name</th>
	<th class="tg-mxzp" align='center'>School Address</th>
	<th class="tg-mxzp" align='center'>Telephone</th>
	<th class="tg-mxzp" align='center'>Contact No</th>
	<th class="tg-mxzp" align='center'>Zone</th>
	<th class="tg-mxzp" align='center'>Division</th>
	<th class="tg-mxzp" align='center'>Category</th>
	<th class="tg-mxzp" align='center'>Grade Span</th>
	<th class="tg-mxzp" align='center'>Type</th>
	<th class="tg-mxzp" align='center'>Medium</th>
	<th class="tg-mxzp" align='center'>Race</th>
	<th class="tg-mxzp" align='center'>Gender Type</th>
	<th class="tg-mxzp" align='center'>Students</th>
	<th class="tg-mxzp" align='center'>Teachers</th>
	</tr>
  </thead>
<tbody>
<?php
	include('table/nearest/db.php');


	$search_Div="";
	$search_func="";
	$search_type="";
  $search_zone="";
	$fil_Div="";
	$fil_func="";
	$fil_type="";
  $fil_zone="";
	if(isset($_GET['f1']) && !$_GET['f1']==''){
		$fil_Div=$_GET['f1'];
		$search_Div = " AND Division='".$fil_Div."'";
		}
	if(isset($_GET['f2']) && !$_GET['f2']==''){
		$fil_func=$_GET['f2'];
		$search_func = " AND Func='".$fil_func."'";
		}
	if(isset($_GET['f3']) && !$_GET['f3']==''){
		$fil_type=$_GET['f3'];
		$search_type = " AND Type='".$fil_type."'";
		}
  if(isset($_GET['f4']) && !$_GET['f4']==''){
  	$fil_zone=$_GET['f4'];
  	$search_zone = " AND Zone='".$fil_zone."'";
  	}


	if (isset($_POST['Division']) && !$_POST['Division']=='' )
	{
		$fil_Div=$_POST['Division'];
		$search_Div = " AND Division='".$fil_Div."'";
	}
	if (isset($_POST['Function']) && !$_POST['Function']=='' )
	{
		$fil_func=$_POST['Function'];
		$search_func = " AND Func='".$fil_func."'";
	}
	if (isset($_POST['Type']) && !$_POST['Type']=='' )
	{
		$fil_type=$_POST['Type'];
		$search_type = " AND Type='".$fil_type."'";
	}
  if (isset($_POST['Zone']) && !$_POST['Zone']=='' )
  {
    $fil_zone=$_POST['Zone'];
    $search_zone = " AND Zone='".$fil_zone."'";
  }

	$sql = "SELECT * FROM schdata,studentpop WHERE Scid = stScid and stTotal>0" .$search_zone.$search_func.$search_Div.$search_type;
$sql="SELECT CenID, Scid, SchoolName, SchoolAddress, Telephone, ContactNo, schdata.Zone, Division, Category, Span, Type, Medium, schdata.Race, SexType, stTotal, sum(if(Service = 'SLTS' or Service = 'TeacherAssist', 1, 0)) as teanos FROM schdata,stafftb,studentpop WHERE NearestSch='1' and Scid=stScid and Scid=SchID Group by Scid Order by ZoneSort, Scid ASC";

	$records_per_page=25;
	$newquery = $crud->paging($sql,$records_per_page);
	$crud->dataview($newquery);
   ?>
   </tbody>
   </table>
   </div>
   <br>
   <div class="pagination-wrap">
     <?php $crud->paginglink($sql,$records_per_page,$fil_Div,$fil_func,$fil_type,$fil_zone); ?>
    </div>
   </div>

   </div>
   <script language="javascript">
       function open_win_editar(targetID) {
           window.open ("table/nearest/hasil.php?id=" + targetID, "MsgWindow","Editar notícia", "location=1, status=1, scrollbars=1, width=800, height=200");
        }
        function graph_editar() {
            window.open ("chart/index.php", "MsgWindow","Editar notícia", "location=1, status=1, scrollbars=1, width=800, height=200");
         }
   </script>
