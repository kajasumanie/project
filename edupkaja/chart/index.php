<?php
$jaffna[] = 'Jaffna';
$jaffna[] = 'Nallur';
$jaffna[] = 'Kopay';
$VALIKAMAM[]='Uduvil';
$VALIKAMAM[]='Chankanai';
$VALIKAMAM[]='Sandilipay';
$VALIKAMAM[]='Tellippalai';
$VADAMARACHCHI[]='Maruthankerny';
$VADAMARACHCHI[]='Point Pedro';
$VADAMARACHCHI[]='Karaveddy';
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
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


		<script type="text/javascript">

// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Result Summary Graph'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Pass Pearcentage(%)'
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
        name: 'Zone',
        colorByPoint: true,
        data: [{name: 'Jaffna',y: 56.33,drilldown: 'Jaffna'}, {name: 'Valikamam',y: 24.03,drilldown: 'Valikamam'},
		{
            name: 'Vadamarachchi',
            y: 10.38,
            drilldown: 'Vadamarachchi'
        }, {
            name: 'Thenmarachchi',
            y: 4.77,
            drilldown: 'Thenmarachchi'
        }, {
            name: 'Islands',
            y: 0.91,
            drilldown: 'Islands'
        }, {
            name: 'Kilinochchi',
            y: 0.91,
            drilldown: 'Kilinochchi'
        }, {
            name: 'Mannar',
            y: 0.91,
            drilldown: 'Mannar'
        }, {
            name: 'Madhu',
            y: 0.91,
            drilldown: 'Madhu'
        }, {
            name: 'Vavuniya North',
            y: 0.91,
            drilldown: 'Vavuniya North'
        }, {
            name: 'Vavuniya South',
            y: 0.91,
            drilldown: 'Vavuniya South'
        }, {
            name: 'Mullaitivu',
            y: 0.91,
            drilldown: 'Mullaitivu'
        }, {
            name: 'Thunukkai',
            y: 0.91,
            drilldown: 'Thunukkai'
        }]
    }],
    drilldown: {
        series: [{
            name: 'Jaffna',
            id: 'Jaffna',
            data: [ <?php $p=90; foreach($jaffna as $value){ $p= $p-0.5; ?> { name:'<?php echo $value; ?>',y: <?php echo $p; ?>,drilldown: '<?php echo $value.'d'; ?>' }, <?php  } ?> ]
			},
			{
            name: 'Valikamam',
            id: 'Valikamam',
            data: [ <?php $p=90; foreach($VALIKAMAM as $value){ $p= $p-0.5; ?> { name:'<?php echo $value; ?>',y: <?php echo $p; ?>,drilldown: '<?php echo $value; ?>' }, <?php  } ?> ]
			},
			{
            name: 'Vadamarachchi',
            id: 'Vadamarachchi',
            data: [ <?php $p=90; foreach($VADAMARACHCHI as $value){ $p= $p-0.5; ?> { name:'<?php echo $value; ?>',y: <?php echo $p; ?>,drilldown: '<?php echo $value; ?>' }, <?php  } ?> ]
			},
			{
            name: 'Nallur',
            id: 'Nallurd',
            data: [ <?php $p=90; for($i=1001001;$i<1001031;$i++){ $p= $p-0.8; ?> {name: '<?php  echo $i; ?>',y:<?php echo $p; ?>,drilldown: '<?php  echo $i; ?>'}, <?php  } ?> ]
			},
			{
            name: 'Uduvil',
            id: 'Uduvil',
            data: [ <?php $p=90; for($i=1001001;$i<1001031;$i++){ $p= $p-0.8; ?> {name: '<?php  echo $i; ?>',y:<?php echo $p; ?>,drilldown: '<?php  echo $i; ?>'}, <?php  } ?> ]
			},

			{
            name: 'Jaffna',
            id: 'Jaffnad',
			data: [ <?php $p=90; for($i=1001001;$i<1001031;$i++){ $p= $p-0.8; ?> {name: '<?php  echo $i; ?>',y:<?php echo $p; ?>,drilldown: '<?php  echo $i; ?>'},<?php } ?>] },

			{
            name: 'Kopay',
            id: 'Kopayd',
			data: [ <?php $p=90; for($i=1001032;$i<1001051;$i++){ $p= $p-1.8; ?> {name: '<?php  echo $i; ?>',y:<?php echo $p; ?>,drilldown: '<?php  echo $value; ?>'},<?php } ?>] },

			{
            name: 'Sandilipay',
            id: 'Sandilipay',
			data: [ <?php $p=90; for($i=1001032;$i<1001051;$i++){ $p= $p-1.8; ?> {name: '<?php  echo $i; ?>',y:<?php echo $p; ?>,drilldown: '<?php  echo $value; ?>'},<?php } ?>] },

			{
            name: 'Tellippalai',
            id: 'Tellippalai',
			data: [ <?php $p=90; for($i=1001032;$i<1001051;$i++){ $p= $p-1.8; ?> {name: '<?php  echo $i; ?>',y:<?php echo $p; ?>,drilldown: '<?php  echo $value; ?>'},<?php } ?>] },

			{
            name: 'Maruthankerny',
            id: 'Maruthankerny',
			data: [ <?php $p=90; for($i=1001032;$i<1001051;$i++){ $p= $p-1.8; ?> {name: '<?php  echo $i; ?>',y:<?php echo $p; ?>,drilldown: '<?php  echo $value; ?>'},<?php } ?>] },

			{
            name: 'Point Pedro',
            id: 'Point Pedro',
			data: [ <?php $p=90; for($i=1001032;$i<1001051;$i++){ $p= $p-1.8; ?> {name: '<?php  echo $i; ?>',y:<?php echo $p; ?>,drilldown: '<?php  echo $value; ?>'},<?php } ?>] },

			{
            name: 'Karaveddy',
            id: 'Karaveddy',
			data: [ <?php $p=90; for($i=1001032;$i<1001051;$i++){ $p= $p-1.8; ?> {name: '<?php  echo $i; ?>',y:<?php echo $p; ?>,drilldown: '<?php  echo $value; ?>'},<?php } ?>] },

		]
    }
});
		</script>
	</body>
</html>
