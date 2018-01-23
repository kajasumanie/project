<?php
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
<script src="table/school_dws_gw_ss/bootstrap.js"></script


<link rel="stylesheet" type="text/css" href="assets/table-style/page/style.css" />
<link rel="stylesheet" type="text/css" href="assets/table-style/css/table-style.css" />
<script src="assets/table-style/js/jquery-ui.js"></script>

<style>
.boxbody{position:relative;padding:15px}
</style>


<div class="container">
     <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?option=result">Select Page</a></li>
          <li class="active">School Wise Summary</li>
     </ul>
</div>
<div class="container">
<div class="row">

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
			<a href="index.php?table=school_dws_gw_ss"> reset</a>

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
	<th rowspan=2 align="center">Zone</th>
	<th colspan=2 align="center">Electricity</th>
	<th colspan=2 align="center">Generator</th>
	<th rowspan=2 class="rotate"><div>Wash Water</div></th>
	<th rowspan=2 class="rotate"><div>Drink Water</div></th>
	<th rowspan=2 class="rotate"><div>Computer Lab or Corner</div></th>
	<th colspan=2 align="center">Internet</th>
	<th rowspan=2 class="rotate"><div>Science Lab</div></th>
	<th rowspan=2 class="rotate"><div>Maths Room</div></th>
	<th colspan=2 align="center">Agriculture</th>
	<th rowspan=2 class="rotate"><div>Audio Visual Room</div></th>
	<th rowspan=2 class="rotate"><div>Councelling Room</div></th>
	<th rowspan=2 class="rotate"><div>Special Edu Room</div></th>
	<th rowspan=2 class="rotate"><div>Special Edu Unit</div></th>
	<th rowspan=2 class="rotate"><div>Assembly Hall</div></th>
	<th rowspan=2 class="rotate"><div>Activity Room</div></th>
	<th rowspan=2 class="rotate"><div>Home Science Room</div></th>
	<th rowspan=2 class="rotate"><div>Sick Room</div></th>
	<th rowspan=2 class="rotate"><div>Store Room</div></th>
	<th colspan=4 align="center">Library</th>

	<th rowspan=2 class="rotate"><div>Staff Room</div></th>
	<th rowspan=2 class="rotate"><div>Kitchen</div></th>
	<th rowspan=2 class="rotate"><div>Canteen</div></th>
	<th rowspan=2 class="rotate"><div>Playground</div></th>
	<th rowspan=2 class="rotate"><div>Dental Unit</div></th>
	<th rowspan=2 class="rotate"><div>Bank</div></th>
	<th colspan=3 class="center"><div>Technical lab</div></th>
	<th rowspan=2 class="rotate"><div>Technical Faculty</div></th>

	<tr>
	<th class="rotate"><div>Available</div></th>
	<th class="rotate"><div>Disconnected</div></th>
	<th class="rotate"><div>Working</div></th>
	<th class="rotate"><div>Repair</div></th>
	<th class="rotate"><div>Available</div></th>
	<th class="rotate"><div>Disconnected</div></th>
	<th class="rotate"><div>Lab</div></th>
	<th class="rotate"><div>Room</div></th>
	<th class="rotate"><div>Available</div></th>
	<th class="rotate"><div>Type 1</div></th>
	<th class="rotate"><div>Type 2</div></th>
	<th class="rotate"><div>Type 3</div></th>
	<th class="rotate"><div>TypeI</div></th>
	<th class="rotate"><div>TypeII</div></th>
	<th class="rotate"><div>Total</div></th>




	</tr>


	</tr>
  </thead>
<tbody>
<?php
	include('table/Physical_resource_bd/db.php');


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


$sql = "SELECT * FROM schdata GROUP BY Zone";

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
           window.open ("table/Physical_resource_bd/hasil.php?id=" + targetID, "MsgWindow","Editar notícia", "location=1, status=1, scrollbars=1, width=800, height=200");
        }
        function graph_editar() {
            window.open ("chart/index.php", "MsgWindow","Editar notícia", "location=1, status=1, scrollbars=1, width=800, height=200");
         }
   </script>
<script src="table/Physical_resource_bd/table_box.js"></script>
