<?php
if(isset($_POST['subna']))
{
  if($_POST['grade']=='sumary_result' && $_POST['zone']=='Province')
  {
    $zone=$_POST['zone'];
    header("Location: index.php?table=result");
  }
  if($_POST['grade']=='sumary_result' && $_POST['zone']=='zwr')
  {
    $zone=$_POST['zone'];
    header("Location: index.php?table=result-zws");
  }
  if($_POST['grade']=='sumary_result' && $_POST['zone']=='dwr')
  {
    $zone=$_POST['zone'];
    header("Location: index.php?table=result-dws");
  }
}

 ?>


<link rel="stylesheet" href="assets/select-css/select_jquery.css"/>
<style>
.summary {
  display: none;
}
</style>
<script src="jquery.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
  $('.summary').hide();
  	if(val !='sumary_result'){
      $('#id123').show();
  	}

 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("select2").innerHTML=response;
 }
 });
}

</script>
<br>
<br>



<div class="container text-center">
  <div class="row">
    <div class="col-sm-7">


      <div class="row">
        <div class="col-sm-12 col-md-offset-5">

          <div class="panel panel-default text-left">
            <div class="panel-body">

              <form action="" method="post">

			  <div id="prm">
			  <fieldset id="first">
<center>RESULTS</center>
				<label>Grade:</label><br/>
				<select id="select1" name="grade" onchange="fetch_select(this.value);">
          <option value='sumary_result'>results summary</option>
          <option value='gvexam'>Grade 5</option>
					<option value='olresult'>GCE O/L</option>
					<option value='alresults'>GCE A/L</option>
				</select><br/><br/>

        <div id='id123' class='summary'>
				<label>Year:</label><br/>
				<select id="select2" name="year"></select>
				<br/><br/>
        </div>

        <label>Report:</label><br/>
        <select id="select3" name="zone">
          <option value="Province" selected>School Wise Report</option>
								<option value="dwr">Division Wise Report</option>
								<option value="zwr">Zone Wise Report</option>

							</select>
            </br>
          </br>

			<input type="submit" class="submit_btn" name="subna" value="Submit" style="float: right;"/>
			</fieldset>
  </div>
  </form>
</div>

            </div>
          </div>
        </div>
      </div>


    </div>

  </div>
<br>
<br>
<br/>
