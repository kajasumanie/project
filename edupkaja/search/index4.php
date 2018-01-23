<?php
if(isset($_POST['subna']))
{
   if($_POST['summary']=='Zone_Wise' && $_POST['summary1']=='Schools')
  {
		header("Location: index.php?table=school_cot_zws_schs");
  }
  if($_POST['summary']=='Zone_Wise' && $_POST['summary1']=='Teachers_and_Students_in_Provincial_Schools')
  {
		header("Location: index.php?table=school_cot_zws_tsps");
  }
   if($_POST['summary']=='Zone_Wise' && $_POST['summary1']=='Teachers_and_Students_in_National_Schools')
  {
		header("Location: index.php?table=school_cot_zws_tsns");
  }
    if($_POST['summary']=='Division_Wise' && $_POST['summary1']=='Schools')
  {
		header("Location: index.php?table=school_cot_dws_schs");
  }
   if($_POST['summary']=='Division_Wise' && $_POST['summary1']=='Teachers_and_Students_in_National_Schools')
  {
		header("Location: index.php?table=school_cot_dws_tsns");
  }
   if($_POST['summary']=='Division_Wise' && $_POST['summary1']=='Teachers_and_Students_in_Provincial_Schools')
  {
		header("Location: index.php?table=school_cot_dws_tsps");
  }
}

 ?>
<link rel="stylesheet" href="assets/select-css/select_jquery.css"/>
	<script src="search/select_jquery4.js"></script>
  
<!-- include JavaScript file here-->


<script>
function next_step1(){
  document.getElementById("first").style.display="none";
  document.getElementById("second").style.display="block";
  document.getElementById("active2").style.color="red";
  }
  
function prev_step1(){
	document.getElementById("first").style.display="block";
	document.getElementById("second").style.display="none";
	document.getElementById("active1").style.color="red";
	document.getElementById("active2").style.color="gray";
	}

</script>

  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>

<br><br>
  
  
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
			  <center>SCHOOL COUNT</center>
				<label>Summary:</label><br/><br/>
				<select id="select1" name="summary">
					<option value='val'>--Select--</option>
					<option value='Zone_Wise'>Zone Wise</option>
					<option value='Division_Wise'>Division Wise</option>
					
				</select><br/><br/>
  
				<label>Schools:</label><br/><br/>

				<select id="select2" name="summary1"></select>
				<br/><br/>

				<input type="submit" class="submit_btn" value="Submit" name="subna" style="float: right;"/>
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
</div>
<br><br>
