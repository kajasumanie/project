<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<div id="container" style="min-width: 300px; height: 300px; margin: 1em"></div>


<script>
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Stacked column chart'
            },
            xAxis: {
                categories: ['ISLANDS', 'JAFFNA', 'THENMARACHCHI', 'VADAMARACHCHI', 'VALIKAMAM']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total fruit consumption'
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                    }
                }
            },
            plotOptions: {
                column: {
                    stacking: 'normal',
                    dataLabels: {
                        enabled: true,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                        rotation: 0
                    }
                }
            },
            series: [{
                data: [5, 3, 4.00, 7.13, 2.134]
            }, {
                data: [2.123, 2.423, 3, 2, 1]
            }, {
                data: [3.913, 12.000, 18.371, 7.333, 18.372]
            }]
        });
    });
</script>
