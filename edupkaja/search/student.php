<?php
if(isset($_POST['subna']))
{
  if($_POST['summary']=='Zone_Wise_Summary' && $_POST['summary1']=='Grade_Wise_Student_Population1' && $_POST['summary2']=='Students_Summary')
  {
		header("Location: index.php?table=student_zone_gws_ss");
  }
  if($_POST['summary']=='Zone_Wise_Summary' && $_POST['summary1']=='Subject_Religion_Wise_Student_Population1' && $_POST['summary2']=='Group3_Subjects_Students')
  {
		header("Location: index.php?table=school_zws_sw_3ss");
  }
  if($_POST['summary']=='Division_Wise_Summary' && $_POST['summary1']=='Grade_Wise_Student_Population2' && $_POST['summary2']=='Students_Summary')
  {
		header("Location: index.php?table=school_dws_gw_ss");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Grade_Wise_Student_Population3' && $_POST['summary2']=='Primary_Students')
  {
		header("Location: index.php?table=school_sws_gw_ps");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Grade_Wise_Student_Population3' && $_POST['summary2']=='Secondary_Junior_Students')
  {
		header("Location: index.php?table=school_sws_gw_ss");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Grade_Wise_Student_Population3' && $_POST['summary2']=='Secondary_Senior_Students')
  {
		header("Location: index.php?table=school_sws_gw_sss");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Grade_Wise_Student_Population3' && $_POST['summary2']=='Students_Summary')
  {
		header("Location: index.php?table=school_sws_gw_ssumary");
  }
   if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Subject_Religion_Wise_Student_Population1' && $_POST['summary2']=='Group1_Subjects_Students')
  {
		header("Location: index.php?table=school_srws_g1ss");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Subject_Religion_Wise_Student_Population1' && $_POST['summary2']=='Group2_Subjects_Students')
  {
		header("Location: index.php?table=school_srws_g2ss");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Subject_Religion_Wise_Student_Population1' && $_POST['summary2']=='Group3_Subjects_Students')
  {
		header("Location: index.php?table=school_srws_g3ss");
  }
   if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Subject_Religion_Wise_Student_Population1' && $_POST['summary2']=='AL_Science_Stream_Students')
  {
		header("Location: index.php?table=school_srws_asss");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Subject_Religion_Wise_Student_Population1' && $_POST['summary2']=='AL_Technical_Stream_Students')
  {
		header("Location: index.php?table=school_srws_atss");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Subject_Religion_Wise_Student_Population1' && $_POST['summary2']=='AL_Commerce_Stream_Students')
  {
		header("Location: index.php?table=school_srws_acss");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Subject_Religion_Wise_Student_Population1' && $_POST['summary2']=='AL_Arts_Stream_Students')
  {
		header("Location: index.php?table=school_srws_aass");
  }
  if($_POST['summary']=='School_Wise_Summary' && $_POST['summary1']=='Subject_Religion_Wise_Student_Population1' && $_POST['summary2']=='Bilingual_Students')
  {
		header("Location: index.php?table=school_srws_bs");
  }
}

 ?>


<link rel="stylesheet" href="assets/select-css/select_jquery.css"/>
<script type="text/javascript" src="search/student.js"></script>
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

$(document).ready(function() {
    $('.navbar a.dropdown-toggle').on('click', function(e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if(!$parent.parent().hasClass('nav')) {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }

        $('.nav li.open').not($(this).parents("li")).removeClass("open");

        return false;
    });
});

</script>

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
			  <center>STUDENTS</center>
				<label>Summary:</label><br/><br/>
				<select id="select1" name="summary">
					<option value='val'>--Select--</option>
					<option value='Zone_Wise_Summary'>Zone Wise Summary</option>
					<option value='Division_Wise_Summary'>Division Wise Summary</option>
					<option value='School_Wise_Summary'>School Wise Summary</option>
				</select><br/><br/>

				<label>Student Population:</label><br/><br/>

				<select id="select2" name="summary1"></select>
				<br/><br/>
				<label>Students:</label><br/><br/>

				<select id="select3" name="summary2"></select>
					<br>
					<br>
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
