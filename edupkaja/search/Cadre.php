
<?php
if(isset($_POST['subna']))
{
  if($_POST['summary']=='Zone_Wise_Cadre' && $_POST['summary1']=='Teacher_Cadre_Summary')
  {
		header("Location: index.php?table=zws_tcs");
  }
  
}

 ?>

<link rel="stylesheet" href="assets/select-css/select_jquery.css"/>
<script type="text/javascript" src="search/cadre.js"></script>

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
			  <center>CADRE</center>
				<label>Cadre:</label><br/><br/>
				<select id="select1" name="summary">
					<option value='Zone_Wise_Cadre'>Zone Wise Cadre</option>
					<option value='School_Wise_Cadre'>School Wise Cadre</option>
				</select><br/><br/>

				<label>Summary:</label><br/><br/>

				<select id="select2" name="summary1">
				<option value='Teacher_Cadre_Summary'>Teacher Cadre Summary</option>
				<option value='Tearcher_Cadre_Summary_With_Zone'>Teacher Cadre Summary With Zone</option>
				<option value='Tea.Cadre_Subject_Wise'>Tea.Cadre Subject Wise</option>
				<option value='Tea.Cadre_SubjectWise_With_Zone'>Tea.Cadre SubjectWise With Zone</option>
				</select>
				
				
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

