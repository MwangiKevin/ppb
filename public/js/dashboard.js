var chartURL = 'dashboard/load_chart'
var defaultMetric = 'quantity'
var defaultUsp = 'all'
var defaultOrder = 'desc'
var defaultLimit = '5'
var chartList = ['brand','dosage','manufacturer','importer','country']

$(function() {
    /*Load Chart Heading*/
    LoadHeading('.heading', defaultOrder, defaultLimit)
    /*Load USP Categories*/
    LoadCategories('.usp', 'dashboard/get_categories')
    /*Load Filters*/
    LoadSelectBox('.metric', JSON.stringify([{ id: 'price', text: 'Price' }]), 'classic')
    LoadSelectBox('.order', JSON.stringify([{ id: 'asc', text: 'Bottom' }]), 'classic')
    LoadSelectBox('.limit', JSON.stringify([{ id: '10', text: '10' }]), 'classic')
    /*Load Charts*/
    $.each(chartList, function(key, chartName) {
        chartID = '#'+chartName+'_chart'
        LoadChart(chartID, chartURL, chartName, defaultMetric, defaultUsp, defaultOrder, defaultLimit)
    });
    /*ChartFilter Change Event*/
    $("#filter_btn").on("click", ChartFilterHandler);
});

function LoadCategories(divClass, categoriesURL){
    //Fetch Categories
    $.get(categoriesURL, function(data) {
        //Append Categories to Select2
        LoadSelectBox(divClass, data, 'classic')
    });
}

function LoadSelectBox(divClass, data, theme){
    $(divClass).select2({
        theme: theme,
        data: jQuery.parseJSON(data)
    })
}
    
function LoadChart(divID, chartURL, chartName, metric, usp, order, limit){
    /*Load Spinner*/
    LoadSpinner(divID)
    /*Load Chart*/
    $(divID).load(chartURL, {'name':chartName, 'metric': metric, 'usp':usp, 'order':order, 'limit':limit})
}

function LoadSpinner(divID){
    var spinner = new Spinner().spin()
    $(divID).empty('')
    $(divID).height('400px')
    $(divID).append(spinner.el)
}

function ChartFilterHandler(){
    var metric = $('.metric').val()
    var usp = $('.usp').val()
    var order = $('.order').val()
    var limit = $('.limit').val()

    //Load Chart Heading
    LoadHeading('.heading', order, limit)

    //Load Charts
    $.each(chartList, function(key, chartName) {
        chartID = '#'+chartName+'_chart'
        LoadChart(chartID, chartURL, chartName, metric, usp, order, limit)
    });
}

function LoadHeading(spanClass, order, limit){
    var titles = new Array();
    titles['desc'] = 'Top'
    titles['asc'] = 'Bottom'
    message = titles[order]+' '+limit
    $(spanClass).text(message)
}