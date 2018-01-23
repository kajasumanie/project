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
  <a href='' onclick="graph_editar()">Result Summary Graph</a>
  <div id="wrapper">
  <table id="fixTable"   width="100%" class="tg">
<thead>
  <tr>
	<th rowspan=2 align="center"  class="tg-mxzp"><div>No.</div></th>
	<th rowspan=2 align="center" class="tg-mxzp"><div>Census ID</div></th> 
	<th rowspan=2 align="center" class="tg-mxzp"><div>School ID</div></th>
	<th rowspan=2 align="center" class="tg-mxzp">School Name</th> 
	<th colspan=9 align="center" class="tg-mxzp">Grade 10</th>
	<th colspan=9 align="center" class="tg-mxzp">Grade 11</th>
	<th colspan=9 align="center" class="tg-mxzp">Grade 11R</th>
	<th colspan=9 align="center" class="tg-mxzp">6 - 11 Total</th>
	<th rowspan=2 align="center" class="tg-mxzp">Last Updated</th>
	</tr>
	<tr>
	
	<th class="rotate"><div>Business Accounting Studies</div></th>
	<th class="rotate"><div>Geography</div></th>
	<th class="rotate"><div>Citizenship Education Governance</div></th>
	<th class="rotate"><div>Entrepreneurship Studies</div></th>
	<th class="rotate"><div>Second Language Sinhala</div></th>
	<th class="rotate"><div>Second Language Tamil</div></th>
	<th class="rotate"><div>Sanskrit</div></th>
	<th class="rotate"><div>Arabic</div></th>
	<th class="rotate"><div>1st Group Subject Total</div></th>
	
	<th class="rotate"><div>Business Accounting Studies</div></th>
	<th class="rotate"><div>Geography</div></th>
	<th class="rotate"><div>Citizenship Education Governance</div></th>
	<th class="rotate"><div>Entrepreneurship Studies</div></th>
	<th class="rotate"><div>Second Language Sinhala</div></th>
	<th class="rotate"><div>Second Language Tamil</div></th>
	<th class="rotate"><div>Sanskrit</div></th>
	<th class="rotate"><div>Arabic</div></th>
	<th class="rotate"><div>1st Group Subject Total</div></th>
	
	<th class="rotate"><div>Business Accounting Studies</div></th>
	<th class="rotate"><div>Geography</div></th>
	<th class="rotate"><div>Citizenship Education Governance</div></th>
	<th class="rotate"><div>Entrepreneurship Studies</div></th>
	<th class="rotate"><div>Second Language Sinhala</div></th>
	<th class="rotate"><div>Second Language Tamil</div></th>
	<th class="rotate"><div>Sanskrit</div></th>
	<th class="rotate"><div>Arabic</div></th>
	<th class="rotate"><div>1st Group Subject Total</div></th>
	
	<th class="rotate"><div>Business Accounting Studies</div></th>
	<th class="rotate"><div>Geography</div></th>
	<th class="rotate"><div>Citizenship Education Governance</div></th>
	<th class="rotate"><div>Entrepreneurship Studies</div></th>
	<th class="rotate"><div>Second Language Sinhala</div></th>
	<th class="rotate"><div>Second Language Tamil</div></th>
	<th class="rotate"><div>Sanskrit</div></th>
	<th class="rotate"><div>Arabic</div></th>
	<th class="rotate"><div>1st Group Subject Total</div></th>
	
	</tr>
	

	</tr> 
			

  </thead>
<tbody>
<?php
	include('table/school_dws_gw_ss/db.php');


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


$sql = "SELECT * FROM schdata GROUP BY Division ORDER BY Division";

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
           window.open ("table/school_srws_g1ss/hasil.php?id=" + targetID, "MsgWindow","Editar notícia", "location=1, status=1, scrollbars=1, width=800, height=200");
        }
        function graph_editar() {
            window.open ("chart/index.php", "MsgWindow","Editar notícia", "location=1, status=1, scrollbars=1, width=800, height=200");
         }
   </script>
<script src="table/school_srws_g1ss/table_box.js"></script>
