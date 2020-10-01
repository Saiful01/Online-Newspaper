

!function ($) {
    "use strict";

    var Dashboard1 = function () {
        this.$realData = []
    };

    //creates Stacked chart
    Dashboard1.prototype.createStackedChart = function (element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barColors: lineColors
        });
    },

        //creates line chart
        Dashboard1.prototype.createLineChart = function (element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
            Morris.Line({
                element: element,
                data: data,
                xkey: xkey,
                ykeys: ykeys,
                labels: labels,
                fillOpacity: opacity,
                pointFillColors: Pfillcolor,
                pointStrokeColors: Pstockcolor,
                behaveLikeLine: true,
                gridLineColor: '#eef0f2',
                lineWidth: '4px',
                hideHover: 'auto',
                resize: true, //defaulted to true
                pointSize: 0,
                lineColors: lineColors
            });
        },


        Dashboard1.prototype.init = function () {

            //creating Stacked chart
            var $stckedData = [
                {y: '2005', a: 45},
                {y: '2006', a: 75},
                {y: '2007', a: 100},
                {y: '2008', a: 75},
                {y: '2009', a: 100},
                {y: '2010', a: 75},
                {y: '2011', a: 50},
                {y: '2012', a: 75},
                {y: '2013', a: 50},
                {y: '2014', a: 75},
                {y: '2015', a: 100}
            ];
            this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a', 'b', 'c']);

        },
        //init
        $.Dashboard1 = new Dashboard1, $.Dashboard1.Constructor = Dashboard1
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.Dashboard1.init();
    }(window.jQuery);