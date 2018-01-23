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
<script src="assets/table-style/js/bootstrap.js"></script>


<link rel="stylesheet" type="text/css" href="assets/table-style/page/style.css" />
<link rel="stylesheet" type="text/css" href="assets/table-style/css/table-style.css" />
<script src="assets/table-style/js/jquery-ui.js"></script>

<style>
.boxbody{position:relative;padding:15px}
</style>

<div class="container">
<div class="row">
<div class="btn-group pull-left" style=" padding: 10px;">
<a class="btn btn-info btn-primary btn-overlay"  data-toggle="modal" data-target="#smallModal"><span class="glyphicon glyphicon-filter"></span></a>
</div>
<div class="btn-group pull-right" style=" padding: 10px;">

<button  onClick ="$('#fixTable').tableExport({type:'excel',escape:'false'});" type="button" class="btn btn-info" data-toggle='dropdown' aria-haspopup="true" aria-expanded="true">
<span class="glyphicon glyphicon-download-alt"></span> Download </button>
</div>
</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">View Details</h4>
                    </div>
                    <div class="modal-body">
					 <div class="viewpage">
					 </div>
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
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
            
			<form id="form1" name="form1" method="post" action="index.php?table=school">
			<label for="Zone">Zone</label>
			<select class="form-control" name="Zone">
			<option value="">--</option>
			<?php
				$sql = "SELECT * FROM gender GROUP BY Zone ORDER BY Zone";
				$sql_result = mysqli_query ($con,$sql) or die ('request "Could not execute SQL query" '.$sql);
				while ($row = mysqli_fetch_assoc($sql_result)) {
					echo "<option value='".$row["Zone"]."'>".$row["Zone"]."</option>";
				}
			?>
			</select>
			<br>
			<label for="Function">Function</label>
			<select class="form-control" name="Function">
			<option value="">--</option>
			<?php
				$sql = "SELECT * FROM gender GROUP BY Func ORDER BY Func";
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
				$sql = "SELECT * FROM gender GROUP BY Type ORDER BY Type";
				$sql_result = mysqli_query ($con,$sql) or die ('request "Could not execute SQL query" '.$sql);
				while ($row = mysqli_fetch_assoc($sql_result)) {
					echo "<option value='".$row["Type"]."'>".$row["Type"]."</option>";
				}
			?>
			</select>
			
			</label>
			<a href="search.php"> reset</a>
			

			
			
			
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
	<th class="tg-mxzp">no</th>
    <th class="tg-8e09" colspan="2" border="1"><input autocomplete="off" class="form-control" id="filter" name="movie" placeholder="Search" data-col="School ID"/></th>
    <th class="tg-mxzp" rowspan='2'>School Name	</th>
    <th class="tg-mxzp" rowspan='2'>School Address	</th>
    <th class="tg-mxzp" rowspan='2'>Telephone</th>
	<th class="tg-mxzp" rowspan='2'>e-mail</th>
    <th class="tg-mxzp" rowspan='2'>Zone</th>
    <th class="tg-mxzp" rowspan='2'>Division</th>
    <th class="tg-mxzp" rowspan='2'>Category</th>
    <th class="tg-mxzp" rowspan='2'>Function</th>
	<th class="tg-mxzp" rowspan='2'>Grade Span</th>
	<th class="tg-mxzp" rowspan='2'>Type</th>
	<th class="tg-mxzp" rowspan='2'>Medium</th>
    <th class="tg-mxzp" rowspan='2'>Race</th>
	<th class="tg-mxzp" rowspan='2'>Gender Type</th>
	<th class="tg-mxzp" rowspan='2'>Gs Division</th>
    
    
  </tr>
  <tr>
    <th class="tg-mxzp">*</th>
    <th class="tg-mxzp">Census ID</th>
	<th class="tg-mxzp">School ID</th>
   
  </tr>
  </thead>
<tbody>
<?php
	include('table/school/db.php');
	
	
	$search_zone="";
	$search_func="";
	$search_type="";
	$fil_Zone="";
	$fil_func="";
	$fil_type="";
	if(isset($_GET['f1']) && !$_GET['f1']==''){
		$fil_Zone=$_GET['f1'];
		$search_zone = " AND Zone='".$fil_Zone."'";
		}
	if(isset($_GET['f2']) && !$_GET['f2']==''){
		$fil_func=$_GET['f2'];
		$search_func = " AND Func='".$fil_func."'";
		}
	if(isset($_GET['f3']) && !$_GET['f3']==''){
		$fil_type=$_GET['f3'];
		$search_type = " AND Type='".$fil_type."'";
		}
	
	
	if (isset($_POST['Zone']) && !$_POST['Zone']=='' ) 
	{
		$fil_Zone=$_POST['Zone'];
		$search_zone = " AND Zone='".$fil_Zone."'";	
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

	
	
	$sql = "select * from gender where Scid >0".$search_func.$search_zone.$search_type;
	
	$records_per_page=10;
	$newquery = $crud->paging($sql,$records_per_page);
	$crud->dataview($newquery);
   ?>
   </tbody>
   </table>
   </div>
   <br>
   <div class="pagination-wrap">
     <?php $crud->paginglink($sql,$records_per_page,$fil_Zone,$fil_func,$fil_type); ?>
    </div>
   </div>
   
   </div>
   	
	<script src="table/school/table_box.js"></script>
	
    
