<?php
include('../../dbconfig.php');
$id= $_GET['id'];
$primTotM=$primTotF=$primTot=$primTotPClass=$secTotM=$secTotF=$secTot=$secTotPClass=$advTotM=$advTotF=$advTot=$advTotPClass=$TotM=$TotF=$Tot=$TotPClass=$SpeTot=$GTot=0;

$JafprimTotM=0;
$JafprimTotF=0;
$JafprimTot=0;
$JafprimTotPClass=0;
$JafsecTotM=0;
$JafsecTotF=0;
$JafsecTot=0;
$JafsecTotPClass=0;
$JafadvTotM=0;
$JafadvTotF=0;
$JafadvTot=0;
$JafadvTotPClass=0;
$JafTotM=0;
$JafTotF=0;
$JafTot=0;
$JafTotPClass=0;
$JafSpeTot=0;
$JafGTot=0;


$result=mysqli_query($con,"SELECT * FROM schdata,studentpop,grpsubstudp WHERE Scid=stScid and Scid=SubScid and Station='School' and schdata.Zone='$id'");
while($test = mysqli_fetch_array($result))
{

$JafprimTotM=$JafprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
$JafprimTotF=$JafprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
$JafprimTot=$JafprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
$JafprimTotPClass=$JafprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

$JafsecTotM=$JafsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
$JafsecTotF=$JafsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
$JafsecTot=$JafsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
$JafsecTotPClass=$JafsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

$JafadvTotM=$JafadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
$JafadvTotF=$JafadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
$JafadvTot=$JafadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
$JafadvTotPClass=$JafadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

$JafTotM=$JafTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
$JafTotF=$JafTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
$JafTot=$JafTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
$JafTotPClass=$JafTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+
$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

$JafSpeTot=$JafSpeTot+$test['SpeInCentre'];
$JafGTot=$JafGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];

}
 echo $JafprimTotPClass;
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Highcharts- Demo 1 (Data defined in HTML - Highcharts Data Series</title>
    <style>
		body{
			margin-top: 30px;
			margin-left:40px;
		}
				pre	{
		border:1px solid red;
		}

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>

<body>
   <div style="width: 800px; margin: 2em auto; padding: 1em; border: 1px solid red; border-radius: 0.5em">
	Highcharts data defined in series. This is the default expected behavior.
	</div>
<div id="container" style="width:1024px; min-width: 310px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Monthly Average Rainfall'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
            },
            xAxis: {
                categories: [
                    'Grade 1-5',
                    'Grade 6-11',
                    'Grade 12-13',
                    'Total'
                                    ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'number of student '
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:11px">{point.key}</span><table style="font-size:10px">',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Male',
                data: [<?php echo $JafprimTotM ?>,<?php echo $JafsecTotM ?>,<?php echo $JafadvTotM ?>,<?php echo $JafTotM ?>]

            }, {
                name: 'Female',
                data: [<?php echo $JafprimTotF ?>,<?php echo $JafsecTotF ?>,<?php echo $JafadvTotF ?>,<?php echo $JafTotF ?>]

            }, {
                name: 'Total',
                data: [<?php echo $JafprimTot ?>,<?php echo $JafsecTot ?>,<?php echo $JafadvTot ?>,<?php echo $JafTot ?>]

            }, {
                name: 'Parallel Class',
                data: [<?php echo $JafprimTotPClass ?>,<?php echo $JafsecTotPClass ?>,<?php echo $JafadvTotPClass ?>,<?php echo $JafTotPClass ?>]
            }]
        });
});
</script>
</body>
</html>
