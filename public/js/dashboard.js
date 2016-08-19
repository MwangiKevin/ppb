var chartURL = 'dashboard/load_chart'

$(function() {
    /*Load Charts*/
    LoadChart('#usp_chart', chartURL, 'usp', 'quantity')
    LoadChart('#brand_chart', chartURL, 'brand', 'quantity')
    LoadChart('#manufacturer_chart', chartURL, 'manufacturer', 'quantity')
    LoadChart('#importer_chart', chartURL, 'importer', 'quantity')
    LoadChart('#country_chart', chartURL, 'country', 'quantity')

    /*ChartFilter Change Event*/
    $(".chart_filter").on("change", ChartFilterHandler);

});

function LoadChart(divID, chartURL, chartName, chartYaxis){
    /*Load Spinner*/
    LoadSpinner(divID)
    /*Load Chart*/
    chartURL = chartURL+'/'+chartName+'/'+chartYaxis
    $(divID).load(chartURL)
}

function LoadSpinner(divID){
    var spinner = new Spinner().spin()
    $(divID).empty('')
    $(divID).height('400px')
    $(divID).append(spinner.el)
}

function ChartFilterHandler(){
    var chart = $(this).attr("chart")
    var filter = 'quantity'

    if($(this).prop("checked") == true){
        filter = 'quantity'
    }else{
        filter = 'price'
    }

    divID = "#"+chart+"_chart" 
    LoadChart(divID, chartURL, chart, filter)
}

