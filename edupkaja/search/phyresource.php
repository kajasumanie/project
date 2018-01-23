
<?php
if(isset($_POST['subna']))
{
  if($_POST['summary']=='Zone_Wise_Summary' && $_POST['summary1']=='Basic_Details')
  {
		header("Location: index.php?table=Physical_resource_bd");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Basic_Details')
  {
		header("Location: index.php?table=school_physical_resource_bd");
  }
   if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Water_Electricity_Sanitation_Details')
  {
		header("Location: index.php?table=school_physical_resource_wesd");
  }
   if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Science_Lab_Details')
  {
		header("Location: index.php?table=school_physical_resource_sld");
  }
}

 ?>


<link rel="stylesheet" href="assets/select-css/select_jquery.css"/>
<script type="text/javascript" src="search/phyresource.js"></script>


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
			  <center>PHYSICAL RESOURCE</center>
				<label>Summary:</label><br/><br/>
				<select id="select1" name="summary">
					<option value='val'>--Select--</option>
					<option value='Zone_Wise_Summary'>Zone Wise Summary</option>
					<option value='School_Wise_Summary'>School Wise Summary</option>
				</select><br/><br/>

				<label>Details:</label><br/><br/>

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

