<?php
include('../dbconfig.php');



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

	$ollast =end($olyear);
	$allast =end($alyear);
	$gvlast =end($gvyear);

$sql=  mysqli_query($con,"SELECT * FROM schdata,studentpop WHERE Scid = stScid and stTotal>0");
 while($row=mysqli_fetch_array($sql))
	 {
		$id = $row['Scid'];
		// echo $gvtable;
		$sat=  mysqli_query($con,"SELECT * FROM schdata,$gvlast where Scid=SchoolID and ((TotalMarks IS NOT NULL) and TotalMarks<>'999') and  SchoolID < 1500000 and Scid='$id'");
		$satcou=mysqli_num_rows($sat);
		$u70=  mysqli_query($con,"SELECT * FROM schdata,$gvlast where Scid=SchoolID and TotalMarks>=70 and TotalMarks<=200 and SchoolID < 1500000 and Scid='$id'") ;
		$u70cou=mysqli_num_rows($u70);
		?>
		<?php if($satcou>0){ $gvdata[$row['Scid']] =  round(($u70cou/$satcou)*100,2); } else{ $gvdata[$row['Scid']]=0;}  ?>
		<?php

		$sat=  mysqli_query($con,"SELECT * FROM schdata, $ollast where Scid=SchID and AttemptNo ='1' and SchID < 1500000 and sat6='1' and Scid='$id'");
		$satcou=mysqli_num_rows($sat);
		$u70=  mysqli_query($con,"SELECT * FROM schdata, $ollast where Scid=SchID and AttemptNo ='1' and al='1' and SchID < 1500000 and Scid='$id'") ;
		$u70cou=mysqli_num_rows($u70);
		?>
		<?php if($satcou>0){ $oldata[$row['Scid']] =  round(($u70cou/$satcou)*100,2); echo $row['Scid']."=>".round(($u70cou/$satcou)*100,2)."<br>";  } else{$oldata[$row['Scid']]=0; }  ?>
		<?php

		$sat=  mysqli_query($con,"SELECT * FROM schdata,$allast where Scid=SchID and Attempt ='1' and (Subj1Re='A' or Subj1Re='B' or Subj1Re='C' or Subj1Re='S' or Subj1Re='F' or Subj1Re='X' or Subj1Re='N' or Subj2Re='A' or Subj2Re='B' or Subj2Re='C' or Subj2Re='S' or Subj2Re='F' or Subj2Re='X' or Subj2Re='N' or Subj3Re='A' or Subj3Re='B' or Subj3Re='C' or Subj3Re='S' or Subj3Re='F' or Subj3Re='X' or Subj3Re='N') and SchID < 1500000 and Scid='$id'");
		$satcou=mysqli_num_rows($sat);
		$u70=  mysqli_query($con,"SELECT * FROM schdata,$allast where Scid=SchID and Attempt='1' and QualifiedforUni='Y' and SchID < 1500000 and Scid='$id'") ;
		$u70cou=mysqli_num_rows($u70);
	   if($satcou>0){ $aldata[$row['Scid']] =  round(($u70cou/$satcou)*100,2); } else{ $aldata[$row['Scid']]=0; }

    }

?>





<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="../assets/graph/highcharts.js"></script>
<script src="../assets/graph/data.js"></script>
<script src="../assets/graph/drilldown.js"></script>

<div id="container" ></div>


		<script type="text/javascript">

// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Browser market shares. January, 2015 to May, 2015'
    },
    subtitle: {
        text: 'Click the columns to view versions. Source: <a href="http://netmarketshare.com">netmarketshare.com</a>.'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent market share'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [ <?php foreach ( $oldata as $key => $value ) { ?> {
            name: '<?php echo ($key) ?>',
            y: <?php echo ($value) ?>,
            drilldown: '<?php echo ($key) ?>'
        } , <?php } ?> ]
    }],


    drilldown: {
        series: [{
            name: '1001002',
            id: '1001002',
            data: [
                [
                    'v11.0',
                    24.13
                ],
                [
                    'v8.0',
                    17.2
                ],
                [
                    'v9.0',
                    8.11
                ],
                [
                    'v10.0',
                    5.33
                ],
                [
                    'v6.0',
                    1.06
                ],
                [
                    'v7.0',
                    0.5
                ]
            ]
        }, {
            name: 'Chrome',
            id: 'Chrome',
            data: [
                [
                    'v40.0',
                    5
                ],
                [
                    'v41.0',
                    4.32
                ],
                [
                    'v42.0',
                    3.68
                ],
                [
                    'v39.0',
                    2.96
                ],
                [
                    'v36.0',
                    2.53
                ],
                [
                    'v43.0',
                    1.45
                ],
                [
                    'v31.0',
                    1.24
                ],
                [
                    'v35.0',
                    0.85
                ],
                [
                    'v38.0',
                    0.6
                ],
                [
                    'v32.0',
                    0.55
                ],
                [
                    'v37.0',
                    0.38
                ],
                [
                    'v33.0',
                    0.19
                ],
                [
                    'v34.0',
                    0.14
                ],
                [
                    'v30.0',
                    0.14
                ]
            ]
        }, {
            name: 'Firefox',
            id: 'Firefox',
            data: [
                [
                    'v35',
                    2.76
                ],
                [
                    'v36',
                    2.32
                ],
                [
                    'v37',
                    2.31
                ],
                [
                    'v34',
                    1.27
                ],
                [
                    'v38',
                    1.02
                ],
                [
                    'v31',
                    0.33
                ],
                [
                    'v33',
                    0.22
                ],
                [
                    'v32',
                    0.15
                ]
            ]
        }, {
            name: 'Safari',
            id: 'Safari',
            data: [
                [
                    'v8.0',
                    2.56
                ],
                [
                    'v7.1',
                    0.77
                ],
                [
                    'v5.1',
                    0.42
                ],
                [
                    'v5.0',
                    0.3
                ],
                [
                    'v6.1',
                    0.29
                ],
                [
                    'v7.0',
                    0.26
                ],
                [
                    'v6.2',
                    0.17
                ]
            ]
        }, {
            name: 'Opera',
            id: 'Opera',
            data: [
                [
                    'v12.x',
                    0.34
                ],
                [
                    'v28',
                    0.24
                ],
                [
                    'v27',
                    0.17
                ],
                [
                    'v29',
                    0.16
                ]
            ]
        }]
    }
});
		</script>
	</body>
</html>
