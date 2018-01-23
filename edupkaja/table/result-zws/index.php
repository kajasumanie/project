<?php
include('dbconfig.php');

 include('dbconfig.php');
 $find=mysqli_query($con,"show tables from emisdb");
 while($table=mysqli_fetch_array($find))
 {
 $tab_name=$table[0];
 $year=substr($tab_name, -4);
 if(substr($tab_name, 0,8)=='olresult' && strlen($tab_name)==12 && is_numeric($year)){
  $olyear[]= $tab_name;
  $attyeol[] =$year;
 }
 if(substr($tab_name, 0,9)=='alresults' && strlen($tab_name)==13 && is_numeric($year)){
  $alyear[]= $tab_name;
  $attyeal[] =$year;
 }
 if(substr($tab_name, 0,6)=='gvexam' && strlen($tab_name)==10 && is_numeric($year)){
  $gvyear[]= $tab_name;
  $attyegv[] =$year;
 }
 }


?>

<script src="assets/jquery-2.1.3.js"></script>
<script src="assets/table-style/tableHeadFixer.js"></script>
<link rel="stylesheet" href="assets/bootstrap-3.3.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="all" href="assets/table-style/css/styles.css">
<script src='assets/table-style/js/multifilter.js'></script>

<script type="text/javascript" src="assets/table-style/tableExport.js"></script>
<script type="text/javascript" src="assets/table-style/jquery.base64.js"></script>
<script type="text/javascript" src="assets/table-style/html2canvas.js"></script>
<script src="table/result/bootstrap.js"></script>


<link rel="stylesheet" type="text/css" href="assets/table-style/page/style.css" />
<link rel="stylesheet" type="text/css" href="assets/table-style/css/table-style.css" />
<script src="assets/table-style/js/jquery-ui.js"></script>

<style>
.boxbody{position:relative;padding:15px}
</style>
<script src="table/result-zws/table_box.js"></script>

<div class="container">
     <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?option=result">Select Page</a></li>
          <li class="active">Zone Wise Summary</li>
     </ul>
</div>


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
    <a href='' onclick="graph_editar()">Result Summary Graph</a>
  <table id="fixTable"   width="100%" class="tg">
    <thead>
      <tr>

    	<th class="tg-mxzp" align='center' rowspan='3'>No.</th>
    	<th class="tg-mxzp" align='center' rowspan='3'>Zone/Province</th>

      <?php if(!count($gvyear)==0) { ?>
    	<th class="tg-mxzp" align='center' colspan='<?php echo 3*count($gvyear); ?>'>Grade 5 Scholarship</th>
      <?php } ?>
      <?php if(!count($olyear)==0){ ?>
    	<th class="tg-mxzp" align='center' colspan='<?php echo 3*count($olyear); ?>'>GCE (O/L) 3C 3S With First Language and Maths</th>
      <?php } ?>
      <?php if(!count($olyear)==0){ ?>
    	<th class="tg-mxzp" align='center' colspan='<?php echo 3*count($olyear); ?>'>GCE (O/L) 3C 2S With First Language</th>
      <?php } ?>
      <?php if(!count($alyear)==0){ ?>
    	<th class="tg-mxzp" align='center' colspan='<?php echo 3*count($alyear); ?>'>GCE (A/L)</th>
      <?php } ?>
      <?php if(!count($olyear)==0){ ?>
    	<th class="tg-mxzp" align='center' colspan='6'>Weak in All Subject (O/L)(Appeared for 6 or MoreSubjects)</th>
      <?php } ?>

      </tr>
      <tr>
      <?php if(!count($gvyear)==0) { foreach ($attyegv as $value) { ?>
        <th class="tg-mxzp" align='center' colspan='3'><?php echo $value; ?></th>
      <?php } }
        if(!count($olyear)==0) {  foreach ($attyeol as $value) { ?>
    	<th class="tg-mxzp" align='center' colspan='3'><?php echo $value; ?></th>
    	<?php } }
        if(!count($olyear)==0) {  foreach ($attyeol as $value) { ?>
      <th class="tg-mxzp" align='center' colspan='3'><?php echo $value; ?></th>
      <?php } }
       if(!count($alyear)==0) { foreach ($attyeal as $value) { ?>
    	<th class="tg-mxzp" align='center' colspan='3'><?php echo $value; ?></th>
    	<?php } } ?>

    	<th class="tg-mxzp" align='center' colspan='6'><?php echo end($attyeol); ?></th>
      </tr>
      <tr>
        <?php if(!count($gvyear)==0) { foreach ($attyegv as $value) { ?>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>Students</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>Above 70</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>Above 70%</font></strong></th>
      <?php } }
        if(!count($olyear)==0) {  foreach ($attyeol as $value) { ?>
      <th class="tg-mxzp" align='center'><strong><font size='2'>Students</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>pass</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>pass %</font></strong></th>
      <?php } }
      if(!count($olyear)==0) {  foreach ($attyeol as $value) { ?>
    <th class="tg-mxzp" align='center'><strong><font size='2'>Students</font></strong></th>
  	<th class="tg-mxzp" align='center'><strong><font size='2'>pass</font></strong></th>
  	<th class="tg-mxzp" align='center'><strong><font size='2'>pass %</font></strong></th>
    <?php } }
       if(!count($alyear)==0) { foreach ($attyeal as $value) { ?>
      <th class="tg-mxzp" align='center'><strong><font size='2'>Students</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>pass</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>pass %</font></strong></th>
      <?php } } ?>

    	<th class="tg-mxzp" align='center'><strong><font size='2'>Male</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>Female</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>Total</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>Male %</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>Female %</font></strong></th>
    	<th class="tg-mxzp" align='center'><strong><font size='2'>Total %</font></strong></th>
    	</tr>
      </thead>
<tbody>
<?php
	include('table/result-zws/db.php');


	$search_Div="";
	$search_func="";
	$search_type="";
  $search_zone="";
	$fil_Div="";
	$fil_func="";
	$fil_type="";
  $fil_zone="";

	$sql = 		 	"SELECT * FROM schdata GROUP BY Zone ORDER BY Zone";


	$records_per_page=10;
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
           window.open ("table/result-zws/hasil.php?id=" + targetID, "MsgWindow","Editar notícia", "location=1, status=1, scrollbars=1, width=800, height=200");
        }
        function graph_editar() {
            window.open ("chart/index.php", "MsgWindow","Editar notícia", "location=1, status=1, scrollbars=1, width=800, height=200");
         }
   </script>
