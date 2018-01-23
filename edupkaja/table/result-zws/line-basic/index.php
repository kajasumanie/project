<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<style type="text/css">
#container {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto
}
		</style>
	</head>
	<body>
<script src="../../code/highcharts.js"></script>
<script src="../../code/modules/exporting.js"></script>
<?php include('values.php') ?>
<div id="container"></div>



		<script type="text/javascript">

Highcharts.chart('container', {

    title: {
        text: 'Solar Employment Growth by Sector, 2010-2016'
    },

    subtitle: {
        text: 'Source: thesolarfoundation.com'
    },

    yAxis: {
        title: {
            text: 'Number of Employees'
        }
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
         data: [ <?php foreach ( $data as $key => $value ) { ?> [<?php echo ($key) ?>,<?php echo ($value) ?>], <?php } ?>],
         pointStart: 2015,
         
      },
	  {
         data: [ <?php foreach ( $data1 as $key => $value ) { ?> [<?php echo ($key) ?>,<?php echo ($value) ?>], <?php } ?>],
         pointStart: 2015,
         
      }]
});
		</script>
	</body>
</html>
