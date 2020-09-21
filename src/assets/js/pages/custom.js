


$(function() {
    // custom charts functions
    custom.custom_charts();
    // custom.superstore_sale();
    // custom.superstore_profit();
    custom.chart_spline();
    custom.category_sales();
    custom.donut_category();
    // custom.superstore_discount();
    // custom.superstore_transaction();
    custom.linked();
    custom.bar_state();
    custom.scatter_returnquantity();
});

custom = {
    scatter_returnquantity: function(){
        var c3chart_scatter_id = '#c3_chart_scatter';

        if ( $(c3chart_scatter_id).length ) {

            var c3chart_scatter = c3.generate({
                bindto: c3chart_scatter_id,
                data: {
                    xs: {
                        returned: 'quantity',
                    },
                    // iris data from R
                    columns: [
                        ["quantity", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14],
                        ["returned", 7.34, 8.36, 7.47, 8.22, 8.94, 7.16, 7.75, 8.17, 9.30, 3.50, 8.82, 13.04, 3.70, 10.34],
                    ],
                    type: 'scatter'
                },
                axis: {
                    x: {
                        label: 'Quantities',
                        tick: {
                            fit: false
                        }
                    },
                    y: {
                        label: 'Percentage Returned'
                    }
                },
                color: {
                    pattern: ['#1f77b4', '#ff7f0e', '#2ca02c', '#d62728', '#9467bd', '#8c564b', '#e377c2', '#7f7f7f', '#bcbd22', '#17becf']
                }
            });


            $window.on('debouncedresize', function () {
                c3chart_scatter.resize();
            });

        }
    },

    bar_state: function(){
        var ch_distributed_series = new Chartist.Bar('#chartist_distributed_series', {
            labels: ['California', 'Washington', 'Texas', 'New York', 'Colorado', 'Arizona', 'Ohio'],
            series: [127, 29, 17, 16, 9, 9, 9]
        }, {
            distributeSeries: true
        });
        $window.on('resize',function() {
            ch_distributed_series.update();
        });
    },
    //all metrics linked graphics
    linked: function(){
        var mg_superstore_chart_id = '#mg_superstore_chart_id',
            mg_superstore_profit_id = '#mg_superstore_profit_id',
            mg_superstore_chart_height = $(mg_superstore_chart_id).height(),
            mg_superstore_profit_height = $(mg_superstore_chart_id).height()

        if ($(mg_superstore_chart_id).length && $(mg_superstore_profit_id).length) {

            function mg_linked_charts() {

                var mg_superstore_chart_width = $(mg_superstore_chart_id).width(),
                    mg_superstore_profit_width = $(mg_superstore_profit_id).width()

                
                d3.json('data/return_order.json', function (data) {
                    data = MG.convert.date(data, 'Order Date');
                    MG.data_graphic({
                        title: "Returned Orders",
                        data: data,
                        area: false,
                        linked: true,
                        width: mg_superstore_profit_width,
                        height: mg_superstore_profit_height,
                        target: mg_superstore_profit_id,
                        xax_count: 4,
                        x_accessor: 'Order Date',
                        y_accessor: 'Order ID',
                        yax_units: '',
                    });
                });
                d3.json('data/return_sales.json', function (data) {
                    data = MG.convert.date(data, 'Order Date');
                    MG.data_graphic({
                        title: "Sales of Returned Orders",
                        data: data,
                        linked: true,
                        xax_count: 4,
                        width: mg_superstore_chart_width,
                        height: mg_superstore_chart_height,
                        target: mg_superstore_chart_id,
                        x_accessor: 'Order Date',
                        y_accessor: 'Sales',
                        yax_units: '$',
                    });
                });
            }

            mg_linked_charts();

            $window.on('debouncedresize', function () {
                mg_linked_charts();
            })

        }
    },

    superstore_transaction: function(){
        var mg_superstore_transaction_id = '#mg_superstore_transaction_id',
            mg_superstore_transaction_height = $(mg_superstore_transaction_id).height();

        if ( $(mg_superstore_transaction_id).length ) {

            function mg_superstore_transaction() {
                // chart width
                var mg_superstore_transaction_width = $(mg_superstore_transaction_id).width();

                d3.json('data/transaction.json', function(data) {
                    
                    data = MG.convert.date(data, "Order Date");
                    MG.data_graphic({
                        title: "Transaction",
                        data: data,
                        width: mg_superstore_transaction_width,
                        height: mg_superstore_transaction_height,
                        target: mg_superstore_transaction_id,
                        x_accessor: 'Order Date',
                        y_accessor: 'Transaction',
                        yax_units: '$',

                    });
                });

            }

            mg_superstore_transaction();

            $window.on('debouncedresize', function () {
                mg_superstore_transaction();
            });

            $("#mGraph_sale").on('display.uk.check', function(){
                mg_superstore_transaction();
            });

        }
    },
    
    superstore_discount: function(){
        var mg_superstore_discount_id = '#mg_superstore_discount_id',
            mg_superstore_discount_height = $(mg_superstore_discount_id).height();

        if ( $(mg_superstore_discount_id).length ) {

            function mg_superstore_discount() {
                // chart width
                var mg_superstore_discount_width = $(mg_superstore_discount_id).width();

                d3.json('data/discount.json', function(data) {
                    
                    data = MG.convert.date(data, "Order Date");
                    MG.data_graphic({
                        title: "Discount",
                        data: data,
                        width: mg_superstore_discount_width,
                        height: mg_superstore_discount_height,
                        target: mg_superstore_discount_id,
                        x_accessor: 'Order Date',
                        y_accessor: 'discounted',
                        yax_units: '$',

                    });
                });

            }

            mg_superstore_discount();

            $window.on('debouncedresize', function () {
                mg_superstore_discount();
            });

            $("#mGraph_sale").on('display.uk.check', function(){
                mg_superstore_discount();
            });

        }
    },

    donut_category: function() {
        var c3_donut_category_id = '#c3_donut_category';

        if ( $(c3_donut_category_id).length ) {

            var c3_donut_category = c3.generate({
                bindto: c3_donut_category_id,
                data: {
                    columns: [
                        ['data1', 30],
                        ['data2', 120]
                    ],
                    type : 'donut',
                    onclick: function (d, i) { console.log("onclick", d, i); },
                    onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                    onmouseout: function (d, i) { console.log("onmouseout", d, i); }
                },
                donut: {
                    title: "Customer Segment",
                    width: 40
                },
                color: {
                    pattern: ['#1f77b4', '#ff7f0e', '#2ca02c', '#d62728', '#9467bd', '#8c564b', '#e377c2', '#7f7f7f', '#bcbd22', '#17becf']
                }
            });

            $(c3_donut_category_id).waypoint({
                handler: function() {
                    setTimeout(function () {
                        c3_donut_category.load({
                            columns: [
                                ["Home Office", 49],
                                ["Corporate", 93],
                                ["Consumer", 154],
                            ]
                        });
                    }, 2000);

                    setTimeout(function () {
                        c3_donut_category.unload({
                            ids: 'data1'
                        });
                        c3_donut_category.unload({
                            ids: 'data2'
                        });
                    }, 300);
                    this.destroy();
                },
                offset: '80%'
            });

            $window.on('debouncedresize', function () {
                c3_donut_category.resize();
            });

        }
    },
    custom_charts: function() {
        // custom currency
        var mg_currency_chart_id = '#mg_chart_currency',
            mg_currency_charts_height = $(mg_currency_chart_id).height();

        if ( $(mg_currency_chart_id).length ) {

            function mg_currency_chart() {

                // chart width
                var mg_currency_charts_width = $(mg_currency_chart_id).width();

                d3.json('data/mg_some_currency.min.json', function(data) {
                    data = MG.convert.date(data, 'date');
                    MG.data_graphic({
                        title: "Some Currency",
                        description: "Here is an example that uses custom units for currency.",
                        data: data,
                        width: mg_currency_charts_width,
                        height: mg_currency_charts_height,
                        target: mg_currency_chart_id,
                        yax_units: '$'
                    });
                });

            }

            mg_currency_chart();

            $window.on('debouncedresize', function () {
                mg_currency_chart();
            })

        }
    },

    superstore_sale: function(){
        var mg_superstore_chart_id = '#mg_superstore_chart_id',
            mg_superstore_chart_height = $(mg_superstore_chart_id).height();

        if ( $(mg_superstore_chart_id).length ) {

            function mg_superstore_chart() {

                // chart width
                var mg_superstore_chart_width = $(mg_superstore_chart_id).width();

                d3.json('data/result.json', function(data) {
                    data = MG.convert.date(data, "Order Date");
                    MG.data_graphic({
                        title: "Sales",
                        data: data,
                        width: mg_superstore_chart_width,
                        height: mg_superstore_chart_height,
                        target: mg_superstore_chart_id,
                        x_accessor: 'Order Date',
                        y_accessor: 'Sales',
                        yax_units: '$',

                    });
                });

            }

            mg_superstore_chart();

            $window.on('debouncedresize', function () {
                mg_superstore_chart();
            });

            $("#mGraph_sale").on('display.uk.check', function(){
                mg_superstore_chart();
            });

        }
    },

    superstore_profit: function(){
        var mg_superstore_profit_id = '#mg_superstore_profit_id',
            mg_superstore_profit_height = $(mg_superstore_profit_id).height();

        if ( $(mg_superstore_profit_id).length ) {

            function mg_superstore_profit() {

                // chart width
                var mg_superstore_profit_width = $(mg_superstore_profit_id).width();

                d3.json('data/profit.json', function(data) {
                    data = MG.convert.date(data, "Order Date");
                    MG.data_graphic({
                        title: "Profit",
                        data: data,
                        width: mg_superstore_profit_width,
                        height: mg_superstore_profit_height,
                        target: mg_superstore_profit_id,
                        x_accessor: 'Order Date',
                        y_accessor: 'Profit',
                        yax_units: '$',

                    });
                });

            }

            mg_superstore_profit();

            $window.on('debouncedresize', function () {
                mg_superstore_profit();
            })
        }
    },
    
    chart_spline: function(){
        var c3chart_spline_id = '#c3_chart_spline';

        if ( $(c3chart_spline_id).length ) {

            var c3chart_spline = c3.generate({
                bindto: c3chart_spline_id,
                data: {
                    columns: [
                        ['data1', 30, 200, 100, 400, 150, 250],
                        ['data2', 130, 100, 140, 200, 150, 50]
                    ],
                    type: 'spline'
                },
                color: {
                    pattern: ['#5E35B1', '#FB8C00']
                }
            });

            $window.on('debouncedresize', function () {
                c3chart_spline.resize();
            });

        }
    },

    category_sales: function(){
        var c3chart_category_id = '#c3_chart_category';

        if( $(c3chart_category_id).length){
            var c3chart_category = c3.generate({
                bindto: c3chart_category_id,
                data: {
                    x: 'Date',
                    rows:[
                        ["Date","Consumer","Corporate","Home Office"],
                        ["2017-01-02",1,6,2],
                        ["2017-02-02",1,1,3],
                        ["2017-03-02",4,3,2],
                        ["2017-04-02",4,2,2],
                        ["2017-05-02",4,4,2],
                        ["2017-06-02",2,3,2],
                        ["2017-07-02",3,3,1],
                        ["2017-08-02",4,5,1],
                        ["2017-09-02",11,4,0],
                        ["2017-10-02",3,0,1],
                        ["2017-11-02",8,0,2],
                        ["2017-12-02",10,0,0]
                        ]
                },
                axis: {
                    x: {
                        type: 'timeseries',
                        tick: {
                            format: '%Y-%m-%d'
                        }
                    }
                }
            });

            $window.on('debouncedresize', function () {
                c3chart_category.resize();
            });
        }
    }
}