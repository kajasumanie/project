<link rel="stylesheet" href="assets/bootstrap-3.3.2/css/bootstrap.css">

<div class="pre-scrollable">
<div class='table'>
<?php
include('../dbconfig.php');
$id= $_GET['id'];
echo $id;
  $find=mysqli_query($con,"show tables from emisdb");
	 while($table=mysqli_fetch_array($find))
	 {
		$tab_name=$table[0];

		$year=substr($tab_name, -4);
	 if(substr($tab_name, 0,8)=='olresult' && strlen($tab_name)==12 && is_numeric($year)){
		 $olyear[]= $tab_name;
	 }
	 if(substr($tab_name, 0,9)=='alresults' && strlen($tab_name)==13 && is_numeric($year)){
		 $alyear[]= $tab_name;
	 }
	 if(substr($tab_name, 0,6)=='gvexam' && strlen($tab_name)==10 && is_numeric($year)){
		 $gvyear[]= $tab_name;

	 }
	 }

	 foreach ($gvyear as $gvtable)
	 {
		// echo $gvtable;
		$sat=  mysqli_query($con,"SELECT * FROM schdata,$gvtable where Scid=SchoolID and ((TotalMarks IS NOT NULL) and TotalMarks<>'999') and  SchoolID < 1500000 and schdata.Division='$id'");
		$satcou=mysqli_num_rows($sat);
		$u70=  mysqli_query($con,"SELECT * FROM schdata,$gvtable where Scid=SchoolID and TotalMarks>=70 and TotalMarks<=200 and SchoolID < 1500000 and schdata.Division='$id'") ;
		$u70cou=mysqli_num_rows($u70);
		?>
		<?php if($satcou>0){ $gvdata[substr($gvtable, -4)] =  round(($u70cou/$satcou)*100,2); } else{ $gvdata[substr($gvtable, -4)]=0;}  ?>
		<?php
	 	}
		foreach ($olyear as $oltable)
	 	{
		$sat=  mysqli_query($con,"SELECT * FROM schdata, $oltable where Scid=SchID and AttemptNo ='1' and SchID < 1500000 and sat6='1' and schdata.Division='$id'");
		$satcou=mysqli_num_rows($sat);
		$u70=  mysqli_query($con,"SELECT * FROM schdata, $oltable where Scid=SchID and AttemptNo ='1' and al='1' and SchID < 1500000 and schdata.Division='$id'") ;
		$u70cou=mysqli_num_rows($u70);
		?>
		<?php if($satcou>0){ $oldata[substr($oltable, -4)] =  round(($u70cou/$satcou)*100,2); } else{ $oldata[substr($oltable, -4)]=0; }  ?>
		<?php
	 	}
		foreach ($alyear as $altable)
 	 	{
		$sat=  mysqli_query($con,"SELECT * FROM schdata,$altable where Scid=SchID and Attempt ='1' and (Subj1Re='A' or Subj1Re='B' or Subj1Re='C' or Subj1Re='S' or Subj1Re='F' or Subj1Re='X' or Subj1Re='N' or Subj2Re='A' or Subj2Re='B' or Subj2Re='C' or Subj2Re='S' or Subj2Re='F' or Subj2Re='X' or Subj2Re='N' or Subj3Re='A' or Subj3Re='B' or Subj3Re='C' or Subj3Re='S' or Subj3Re='F' or Subj3Re='X' or Subj3Re='N') and SchID < 1500000 and schdata.Division='$id'");
		$satcou=mysqli_num_rows($sat);
		$u70=  mysqli_query($con,"SELECT * FROM schdata,$altable where Scid=SchID and Attempt='1' and QualifiedforUni='Y' and SchID < 1500000 and schdata.Division='$id'") ;
		$u70cou=mysqli_num_rows($u70);
	   if($satcou>0){ $aldata[substr($altable, -4)] =  round(($u70cou/$satcou)*100,2); } else{ $aldata[substr($altable, -4)]=0; }

    }



  ?>


  		<style type="text/css">
#containerit {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto
}
		</style>

<script src="../assets/graph/highcharts.js"></script>
<script src="../assets/graph/exporting.js"></script>
<div id="containerit"></div>



		<script type="text/javascript">

Highcharts.chart('containerit', {

    title: {
        text: '<?php echo $id; ?>'
    },

    subtitle: {
        text: ''
    },

    yAxis: {
        title: {
            text: 'pass(%)'
        }
    },
    xAxis : {
    title : {
    text : 'YEAR'
    },
    categories : 'YEAR'
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions : {
	spline : {
	marker : {
	radius : 5,
	lineColor : '#666666',
	lineWidth : 1
	}
	}
	},


    series: [{
          name : 'exam',
         data: [ <?php foreach ( $gvdata as $key => $value ) { ?> [<?php echo ($key) ?>,<?php echo ($value) ?>], <?php } ?>],
         pointStart: 2013,

      },
	  {
        name : 'O/L Exam',
         data: [ <?php foreach ( $oldata as $key => $value ) { ?> [<?php echo ($key) ?>,<?php echo ($value) ?>], <?php } ?>],
         pointStart: 2013,

      },
	  {
        name : 'A/L Exam',
         data: [ <?php foreach ( $aldata as $key => $value ) { ?> [<?php echo ($key) ?>,<?php echo ($value) ?>], <?php } ?>],
         pointStart: 2013,

      }]
});
		</script>





</div>
</div>
