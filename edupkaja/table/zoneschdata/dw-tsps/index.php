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

<div class="container">
<div class="row">
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
                    </div>
					<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


		
	

  <div class="container">

        
        
<div class="row">
  <div id="wrapper">
  <table id="fixTable"   width="100%" class="tg">
<thead>
  <tr>
    <th class="tg-8e09" colspan="2" border="1"><input autocomplete="off" class="form-control" id="filter" name="movie" placeholder="Search" data-col="Zone"/></th>
    <th class="tg-8e09" colspan="4">Grade 5</th>
    
    <th class="tg-8e09" colspan="4">Grade 6-11</th>
    <th class="tg-8e09" colspan="4">Grade 12-13</th>
   <th class="tg-8e09" colspan="4">Total</th>
    <th class="tg-8e09" rowspan="2">Spe. Edu. InCentre</th>
    <th class="tg-8e09" ></th>
    
  </tr>
  <tr>
    <th class="tg-mxzp">no</th>
    <th class="tg-mxzp">Zone</th>
	<th class="tg-mxzp">Male</th>
    <th class="tg-mxzp">Female</th>
    <th class="tg-mxzp">Total</th>
    <th class="tg-mxzp">Parallel Class</th>
	<th class="tg-mxzp">Male</th>
    <th class="tg-mxzp">Female</th>
    <th class="tg-mxzp">Total</th>
    <th class="tg-mxzp">Parallel Class</th>
    <th class="tg-mxzp">Male</th>
    <th class="tg-mxzp">Female</th>
    <th class="tg-mxzp">Total</th>
	<th class="tg-mxzp">Parallel Class</th>
    <th class="tg-mxzp">Male</th>
    <th class="tg-veoe">Female</th>
    <th class="tg-veoe">Total</th>
    <th class="tg-veoe">Parallel Class</th>
    
	<th class="tg-veoe">Grand Total</th>
  </tr>
  </thead>
<tbody>
<?php
	include('table/table/db.php');
	$sql = "select * from studentssummary order by Zone asc";
	$records_per_page=4;
	$newquery = $crud->paging($sql,$records_per_page);
	$crud->dataview($newquery);
   ?>
   </tbody>
   </table>
   </div>
   <br>
   <div class="pagination-wrap">
     <?php $crud->paginglink($sql,$records_per_page); ?>
    </div>
   </div>
   
   </div>
   	
	<script src="table/table/table_box.js"></script>
