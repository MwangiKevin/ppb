<!--chart_container-->
<div id="<?php echo $chart_name; ?>_container"></div>

<!--highcharts_configuration-->
<script type="text/javascript">
  $(function () {
    Highcharts.setOptions({
        global: {
            useUTC: false,
            
        },
        lang: {
          decimalPoint: '.',
          thousandsSep: ','
        }
    });

    $('#<?php echo $chart_name; ?>_container').highcharts({
        chart: {
            type: '<?php echo $chart_type; ?>'
        },
        title: {
            text: '<?php echo $chart_title; ?>'
        },
        subtitle: {
            text: 'Source: www.pharmacyboardkenya.org'
        },
        xAxis: {
            categories: <?php echo $chart_columns; ?>,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '<?php echo $chart_metric_title; ?>'
            }
        },
        tooltip: {
            pointFormat: '{point.key} <b>{point.y:,.0f}</b>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                colorByPoint: true
            },
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: <?php echo $chart_data; ?>
    });
});
</script>