(function($) {
    'use strict';
    $(function() {
        if ($('#totalVisitors').length) {
            var bar = new ProgressBar.Circle(totalVisitors, {
                color: '#fff',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 15,
                trailWidth: 15,
                easing: 'easeInOut',
                duration: 1400,
                text: {
                    autoStyleContainer: false
                },
                from: {
                    color: '#52CDFF',
                    width: 15
                },
                to: {
                    color: '#677ae4',
                    width: 15
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);
                    if (value === 0) {
                        circle.setText('');
                    } else {
                        circle.setText(value);
                    }

                }
            });

            bar.text.style.fontSize = '0rem';
            bar.animate(.64); // Number from 0.0 to 1.0
        }
        if ($('#visitperday').length) {
            var bar = new ProgressBar.Circle(visitperday, {
                color: '#fff',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 15,
                trailWidth: 15,
                easing: 'easeInOut',
                duration: 1400,
                text: {
                    autoStyleContainer: false
                },
                from: {
                    color: '#34B1AA',
                    width: 15
                },
                to: {
                    color: '#677ae4',
                    width: 15
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);
                    if (value === 0) {
                        circle.setText('');
                    } else {
                        circle.setText(value);
                    }

                }
            });

            bar.text.style.fontSize = '0rem';
            bar.animate(.34); // Number from 0.0 to 1.0
        }

        if ($.cookie('staradmin2-pro-banner')!="true") {
            document.querySelector('#proBanner').classList.add('d-flex');
            document.querySelector('.navbar').classList.remove('fixed-top');
        }
        else {
            document.querySelector('#proBanner').classList.add('d-none');
            document.querySelector('.navbar').classList.add('fixed-top');
        }

        if ($( ".navbar" ).hasClass( "fixed-top" )) {
            document.querySelector('.page-body-wrapper').classList.remove('pt-0');
            document.querySelector('.navbar').classList.remove('pt-5');
        }
        else {
            document.querySelector('.page-body-wrapper').classList.add('pt-0');
            document.querySelector('.navbar').classList.add('pt-5');
            document.querySelector('.navbar').classList.add('mt-3');

        }
        document.querySelector('#bannerClose').addEventListener('click',function() {
            document.querySelector('#proBanner').classList.add('d-none');
            document.querySelector('#proBanner').classList.remove('d-flex');
            document.querySelector('.navbar').classList.remove('pt-5');
            document.querySelector('.navbar').classList.add('fixed-top');
            document.querySelector('.page-body-wrapper').classList.add('proBanner-padding-top');
            document.querySelector('.navbar').classList.remove('mt-3');
            var date = new Date();
            date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
            $.cookie('staradmin2-pro-banner', "true", { expires: date });
        });

    });
    // iconify.load('icons.svg').then(function() {
    //   iconify(document.querySelector('.my-cool.icon'));
    // });

    if ($("#realTimeUserAnalytic").length) {
        var realTimeUserAnalyticChart = document.getElementById("realTimeUserAnalytic").getContext('2d');
        var realTimegradient = realTimeUserAnalyticChart.createLinearGradient(1, 0, 1, 70);
        realTimegradient.addColorStop(1, 'rgba(30, 59, 179, 0.1)');
        realTimegradient.addColorStop(0, 'rgba(30, 59, 179, 0.8)');
        var realTimeUserAnalyticData = {
            labels: ["jan","feb", "mar", "apr", "may", "jun", "july", "aug", "sep", "oct"],
            datasets: [{
                label: 'Last week',
                data: [0, 10, 9, 16, 15, 17, 16, 18, 14, 25],
                backgroundColor: realTimegradient,
                borderWidth: 0,
                pointBorderWidth:0,
                borderColor: [
                    '#1E3BB3',
                ],
                fill: true, // 3: no fill
            }]
        };
        var realTimeUserAnalyticOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    display: false,
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 6,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: false,
                    barPercentage: 0.5,
                    display: false,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: false,
                        autoSkip: true,
                        maxTicksLimit: 25,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,

            elements: {
                line: {
                    tension: 0.4,
                },
                point:{
                    radius: 0
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var realTimeUserAnalyticChart = new Chart(realTimeUserAnalytic, {
            type: 'line',
            data: realTimeUserAnalyticData,
            options: realTimeUserAnalyticOptions
        });
    }
    if ($("#totalEarningsAnalytic").length) {
        var totalEarningsAnalyticChart = document.getElementById("totalEarningsAnalytic").getContext('2d');
        var totalEarningsgradient = totalEarningsAnalyticChart.createLinearGradient(1, 0, 1, 70);
        totalEarningsgradient.addColorStop(1, 'rgba(0, 170, 183, 0.1)');
        totalEarningsgradient.addColorStop(0, 'rgba(0, 170, 183, 0.8)');
        var totalEarningsAnalyticData = {
            labels: ["jan","feb", "mar", "apr", "may", "jun", "july", "aug", "sep", "oct"],
            datasets: [{
                label: 'Last week',
                data: [0, 10, 9, 16, 15, 17, 16, 18, 14, 25],
                backgroundColor: totalEarningsgradient,
                borderWidth: 0,
                pointBorderWidth:0,
                borderColor: [
                    '#00AAB7',
                ],
                fill: true, // 3: no fill
            }]
        };
        var totalEarningsAnalyticOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    display: false,
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 6,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: false,
                    barPercentage: 0.5,
                    display: false,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: false,
                        autoSkip: true,
                        maxTicksLimit: 25,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,

            elements: {
                line: {
                    tension: 0.4,
                },
                point:{
                    radius: 0
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var totalEarningsAnalyticChart = new Chart(totalEarningsAnalytic, {
            type: 'line',
            data: totalEarningsAnalyticData,
            options: totalEarningsAnalyticOptions
        });
    }
    if ($("#impressionAnalytic").length) {
        var impressionAnalyticChart = document.getElementById("impressionAnalytic").getContext('2d');
        var impressiongradient = impressionAnalyticChart.createLinearGradient(1, 0, 1, 70);
        impressiongradient.addColorStop(1, 'rgba(77, 167, 97, 0.1)');
        impressiongradient.addColorStop(0, 'rgba(77, 167, 97, 0.8)');
        var impressionAnalyticData = {
            labels: ["jan","feb", "mar", "apr", "may", "jun", "july", "aug", "sep", "oct"],
            datasets: [{
                label: 'Last week',
                data: [0, 10, 9, 16, 15, 17, 16, 18, 14, 25],
                backgroundColor: impressiongradient,
                borderWidth: 0,
                pointBorderWidth:0,
                borderColor: [
                    '#4DA761',
                ],
                fill: true, // 3: no fill
            }]
        };
        var impressionAnalyticOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    display: false,
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 6,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: false,
                    barPercentage: 0.5,
                    display: false,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: false,
                        autoSkip: true,
                        maxTicksLimit: 25,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,

            elements: {
                line: {
                    tension: 0.4,
                },
                point:{
                    radius: 0
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var impressionAnalyticChart = new Chart(impressionAnalytic, {
            type: 'line',
            data: impressionAnalyticData,
            options: impressionAnalyticOptions
        });
    }
    if ($("#siteIncomeAnalytic").length) {
        var siteIncomeAnalyticChart = document.getElementById("siteIncomeAnalytic").getContext('2d');
        var siteIncomegradient = siteIncomeAnalyticChart.createLinearGradient(1, 0, 1, 70);
        siteIncomegradient.addColorStop(1, 'rgba(249, 95, 83, 0.1)');
        siteIncomegradient.addColorStop(0, 'rgba(249, 95, 83, 0.8)');
        var siteIncomeAnalyticData = {
            labels: ["jan","feb", "mar", "apr", "may", "jun", "july", "aug", "sep", "oct"],
            datasets: [{
                label: 'Last week',
                data: [0, 10, 9, 16, 15, 17, 16, 18, 14, 25],
                backgroundColor: siteIncomegradient,
                borderWidth: 0,
                pointBorderWidth:0,
                borderColor: [
                    '#F95F53',
                ],
                fill: true, // 3: no fill
            }]
        };
        var siteIncomeAnalyticOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    display: false,
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 6,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: false,
                    barPercentage: 0.5,
                    display: false,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: false,
                        autoSkip: true,
                        maxTicksLimit: 25,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,

            elements: {
                line: {
                    tension: 0.4,
                },
                point:{
                    radius: 0
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var siteIncomeAnalyticChart = new Chart(siteIncomeAnalytic, {
            type: 'line',
            data: siteIncomeAnalyticData,
            options: siteIncomeAnalyticOptions
        });
    }
    if ($("#doughnutChartAnalytic").length) {
        var doughnutChartCanvasAnalytic = $("#doughnutChartAnalytic").get(0).getContext("2d");
        var doughnutPieDataAnalytic = {
            datasets: [{
                data: [50, 20, 30],
                backgroundColor: [
                    "#1F3BB3",
                    "#00CDFF",
                    "#F95F53",
                ],
                borderColor: [
                    "#fff",
                    "#fff",
                    "#fff",
                ],
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'Admin dashboard',
                'Website design',
                'Mobile app design',
            ]
        };
        var doughnutPieOptionsAnalytic = {
            cutoutPercentage: 50,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false,
            responsive: true,
            maintainAspectRatio: true,
            showScale: true,
            legend: false,
            legendCallback: function (chart) {
                var text = [];
                text.push('<div class="chartjs-legend"><ul>');
                for (var i = 0; i < chart.data.datasets[0].data.length; i++) {

                    if (chart.data.labels[i]) {
                        text.push(chart.data.datasets[0].data[i] + '%');
                    }


                    text.push('<li><span style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '">');
                    text.push('</span>');

                    if (chart.data.labels[i]) {
                        text.push(chart.data.labels[i]);
                    }
                    text.push('</li>');
                }
                text.push('</div></ul>');
                return text.join("");
            },

            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                callbacks: {
                    title: function(tooltipItem, data) {
                        return data['labels'][tooltipItem[0]['index']];
                    },
                    label: function(tooltipItem, data) {
                        return data['datasets'][0]['data'][tooltipItem['index']];
                    }
                },

                backgroundColor: '#fff',
                titleFontSize: 14,
                titleFontColor: '#0B0F32',
                bodyFontColor: '#737F8B',
                bodyFontSize: 11,
                displayColors: false
            }
        };
        var doughnutChartAnalytic = new Chart(doughnutChartCanvasAnalytic, {
            type: 'doughnut',
            data: doughnutPieDataAnalytic,
            options: doughnutPieOptionsAnalytic
        });
        document.getElementById('doughnut-chart-legend-Analytic').innerHTML = doughnutChartAnalytic.generateLegend();
    }

    if ($("#realtimestatisticsAnalytic").length) {
        var realtimestatisticsAnalyticChart = document.getElementById("realtimestatisticsAnalytic").getContext('2d');
        var realtimestatisticsAnalyticData = {
            labels: ["Jan","Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'Last week',
                data: [125, 169, 60, 140, 100, 170, 50, 80, 240, 140, 80, 160],
                backgroundColor: "#1E3BB3",
                borderColor: [
                    '#1E3BB3',
                ],
                borderWidth: 0,
                fill: true, // 3: no fill

            },
                {
                    label: 'Last week',

                    data: [200, 290, 220, 180, 200, 250, 120, 170, 290, 210, 170, 210],
                    backgroundColor: "#E3E9FF",
                    borderColor: [
                        '#E3E9FF',
                    ],
                    borderWidth: 0,
                    fill: true, // 3: no fill

                }]
        };

        var realtimestatisticsAnalyticOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 6,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: true,
                    barPercentage: 0.4,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: false,
                        autoSkip: true,
                        maxTicksLimit: 12,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,

            elements: {
                line: {
                    tension: 0.4,
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var realtimestatisticsAnalytic = new Chart(realtimestatisticsAnalyticChart, {
            type: 'bar',
            data: realtimestatisticsAnalyticData,
            options: realtimestatisticsAnalyticOptions
        });
    }

    if ($('#totalVisitorsanalytic').length) {
        var bar = new ProgressBar.Circle(totalVisitorsanalytic, {
            color: '#fff',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 15,
            trailWidth: 15,
            easing: 'easeInOut',
            duration: 1400,
            text: {
                autoStyleContainer: false
            },
            from: {
                color: '#00CDFF',
                width: 15
            },
            to: {
                color: '#00CDFF',
                width: 15
            },
            // Set default step function for all animate calls
            step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value);
                }

            }
        });

        bar.text.style.fontSize = '0rem';
        bar.animate(.64); // Number from 0.0 to 1.0
    }
    if ($('#visitperdayAnalytic').length) {
        var bar = new ProgressBar.Circle(visitperdayAnalytic, {
            color: '#fff',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 15,
            trailWidth: 15,
            easing: 'easeInOut',
            duration: 1400,
            text: {
                autoStyleContainer: false
            },
            from: {
                color: '#1E3BB3',
                width: 15
            },
            to: {
                color: '#1E3BB3',
                width: 15
            },
            // Set default step function for all animate calls
            step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value);
                }

            }
        });

        bar.text.style.fontSize = '0rem';
        bar.animate(.34); // Number from 0.0 to 1.0
    }
    if ($("#performanceAnalytic").length) {
        var performanceAnalyticChart = document.getElementById("performanceAnalytic").getContext('2d');
        var performanceAnalyticgradient = performanceAnalyticChart.createLinearGradient(10, 10, 1, 160);
        performanceAnalyticgradient.addColorStop(1, 'rgba(0, 170, 183, 0)');
        performanceAnalyticgradient.addColorStop(0, 'rgba(0, 170, 183, 0.6)');
        var performanceAnalyticData = {
            labels: ["one","two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen"],
            datasets: [{
                label: 'Last week',
                data: [30, 20, 25, 22, 35, 18, 22, 20, 34, 17, 24, 22, 36],
                borderWidth: 0,
                pointBorderWidth:0,
                borderColor: [
                    '#00AAB7',
                ],
                fill: false, // 3: no fill
            },
                {
                    label: 'Last week',
                    data: [28, 18, 23, 20, 33, 16, 20, 18, 32, 15, 22, 20, 34],
                    backgroundColor: performanceAnalyticgradient,
                    borderWidth: 0,
                    pointBorderWidth:0,
                    fill: true, // 3: no fill
                }]
        };
        var performanceAnalyticOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    display: false,
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 38,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: false,
                    barPercentage: 0.5,
                    display: false,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: false,
                        autoSkip: true,
                        maxTicksLimit: 38,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,

            elements: {
                line: {
                    tension: 0,
                },
                point:{
                    radius: 0
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var performanceAnalyticChart = new Chart(performanceAnalytic, {
            type: 'line',
            data: performanceAnalyticData,
            options: performanceAnalyticOptions
        });
    }


    if ($("#modernRevenueGrowth").length) {
        var modernRevenueGrowthChart = document.getElementById("modernRevenueGrowth").getContext('2d');
        var modernRevenueGrowthData = {
            labels: ["Jan","Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [{
                label: 'Last week',
                data: [50, 75, 100, 60, 70, 45, 90],
                backgroundColor: "#00CDFF",
                borderColor: [
                    '#00CDFF',
                ],
                borderWidth: 0,
                fill: true, // 3: no fill

            }]
        };

        var modernRevenueGrowthOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 6,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: false,
                    barPercentage: 0.4,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: false,
                        autoSkip: true,
                        maxTicksLimit: 12,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,

            elements: {
                line: {
                    tension: 0.4,
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var modernRevenueGrowth = new Chart(modernRevenueGrowthChart, {
            type: 'bar',
            data: modernRevenueGrowthData,
            options: modernRevenueGrowthOptions
        });
    }

    if ($("#modernBubble").length) {
        var modernBubbleChart = document.getElementById("modernBubble").getContext('2d');
        var modernBubbleData = {
            labels: ["Jan","Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [{
                label: 'Money send',
                data: [{
                    x: 10,
                    y: 100,
                    r: 10
                }, {
                    x: 20,
                    y: 500,
                    r: 15
                }, {
                    x: 40,
                    y: 100,
                    r: 10
                }, {
                    x: 55,
                    y: 200,
                    r: 10
                }, {
                    x: 70,
                    y: 500,
                    r: 10
                }, {
                    x: 0,
                    y: 600,
                    r: 0
                }],
                backgroundColor: 'rgb(30,59,179)'
            },{
                label: 'Money Received',
                data: [{
                    x: 10,
                    y: 300,
                    r: 5
                }, {
                    x: 30,
                    y: 400,
                    r: 5
                }, {
                    x: 60,
                    y: 410,
                    r: 10
                }, {
                    x: 100,
                    y: 370,
                    r: 5
                }, {
                    x: 110,
                    y: 0,
                    r: 0
                }],
                backgroundColor: 'rgb(99,171,253)',
            }]
        };

        var modernBubbleOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 10,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: false,
                    barPercentage: 0.4,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: false,
                        autoSkip: true,
                        maxTicksLimit: 10,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,
            legendCallback: function (chart) {
                var text = [];
                text.push('<div class="chartjs-legend"><ul>');
                for (var i = 0; i < chart.data.datasets.length; i++) {
                    console.log(chart.data.datasets[i]); // see what's inside the obj.
                    text.push('<li class="text-dark text-small">');
                    text.push('<span style="background-color:' + chart.data.datasets[i].backgroundColor + '">' + '</span>');
                    text.push(chart.data.datasets[i].label);
                    text.push('</li>');
                }
                text.push('</ul></div>');
                return text.join("");
            },

            elements: {
                line: {
                    tension: 0.4,
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var modernBubble = new Chart(modernBubbleChart, {
            type: 'bubble',
            data: modernBubbleData,
            options: modernBubbleOptions
        });
        document.getElementById('bubble-chart-legend').innerHTML = modernBubble.generateLegend();
    }
    if ($("#moneyFlow").length) {
        var moneyFlowChart = document.getElementById("moneyFlow").getContext('2d');
        var moneyFlowgradient = moneyFlowChart.createLinearGradient(10, 10, 1, 160);
        moneyFlowgradient.addColorStop(1, 'rgba(30, 59, 179, 0)');
        moneyFlowgradient.addColorStop(0, 'rgba(30, 59, 179, 0.3)');
        var moneyFlowData = {
            labels: ["jan","feb", "mar", "apr", "may", "jun", "july", "aug", "sep", "oct", "nov", "dec"],
            datasets: [{
                label: 'Last week',
                data: [20000, 50000, 30000, 80000, 60000, 55000, 45000, 60000, 35000, 50000, 55000, 40000],
                backgroundColor: moneyFlowgradient,
                borderWidth: 2,
                pointBorderWidth:0,
                borderColor: [
                    '#1E3BB3',
                ],
                fill: true, // 3: no fill
            }]
        };
        var moneyFlowOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    display: true,
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 6,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: false,
                    barPercentage: 0.5,
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 12,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,

            elements: {
                line: {
                    tension: 0.5,
                },
                point:{
                    radius: 0
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var moneyFlowChart = new Chart(moneyFlow, {
            type: 'line',
            data: moneyFlowData,
            options:moneyFlowOptions
        });
    }
    if ($("#modernChartliability").length) {
        var modernChartliabilityCanvas = $("#modernChartliability").get(0).getContext("2d");
        var modernChartliabilityData = {
            datasets: [{
                data: [50, 20, 30],
                backgroundColor: [
                    "#4DA761",
                    "#00CDFF",
                    "#EE5E51",
                ],
                borderColor: [
                    "#fff",
                    "#fff",
                    "#fff",
                ],
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'Current',
                'New',
                'Pending',
            ]
        };
        var modernChartliabilityOptions = {
            cutoutPercentage: 60,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false,
            responsive: true,
            maintainAspectRatio: true,
            showScale: true,
            legend: false,
            legendCallback: function (chart) {
                var text = [];
                text.push('<div class="chartjs-legend"><ul>');
                for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
                    text.push('<li><span style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '">');
                    text.push('</span>');

                    if (chart.data.labels[i]) {
                        text.push(chart.data.labels[i]);
                    }
                    text.push('</li>');
                }
                text.push('</div></ul>');
                return text.join("");
            },

            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                callbacks: {
                    title: function(tooltipItem, data) {
                        return data['labels'][tooltipItem[0]['index']];
                    },
                    label: function(tooltipItem, data) {
                        return data['datasets'][0]['data'][tooltipItem['index']];
                    }
                },

                backgroundColor: '#fff',
                titleFontSize: 14,
                titleFontColor: '#0B0F32',
                bodyFontColor: '#737F8B',
                bodyFontSize: 11,
                displayColors: false
            }
        };
        var modernChartliability = new Chart(modernChartliabilityCanvas, {
            type: 'doughnut',
            data: modernChartliabilityData,
            options: modernChartliabilityOptions
        });
        document.getElementById('doughnut-chart-legend-modern').innerHTML = modernChartliability.generateLegend();
    }
    if ($("#summarySales").length) {
        var summarySalesChart = document.getElementById("summarySales").getContext('2d');
        var summarySalesgradient = summarySalesChart.createLinearGradient(10, 10, 1, 160);
        var pointBg = ["rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","#1E3BB3","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)"];
        var pointBorder = ["rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","#fff","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)","rgba(255,255,255,0)"];

        summarySalesgradient.addColorStop(1, 'rgba(30, 59, 179, 0)');
        summarySalesgradient.addColorStop(0, 'rgba(30, 59, 179, 0.3)');
        var summarySalesData = {
            labels: ["jan","feb", "mar", "apr", "may", "jun", "july", "aug", "sep", "oct", "nov", "dec"],
            datasets: [{
                label: 'Last week',
                data: [20000, 50000, 30000, 80000, 60000, 55000, 45000, 60000, 35000, 50000, 55000, 40000],
                backgroundColor: summarySalesgradient,
                borderWidth: 2,
                borderColor: [
                    '#1E3BB3',
                ],
                fill: true, // 3: no fill

                pointBackgroundColor:  pointBg,
                pointBorderColor: pointBorder,
                radius: 5,
                pointRadius: 5
            }]
        };
        var summarySalesOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    display: true,
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 6,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: false,
                    barPercentage: 0.5,
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 12,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,

            elements: {
                line: {
                    tension: 0.5,
                },
                point:{
                    radius: 0
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var summarySalesChart = new Chart(summarySales, {
            type: 'line',
            data: summarySalesData,
            options:summarySalesOptions
        });
    }
    if ($("#customerOverviewEcommerce").length) {
        var customerOverviewEcommerceCanvas = $("#customerOverviewEcommerce").get(0).getContext("2d");
        var customerOverviewEcommerceData = {
            datasets: [{
                data: [50, 20, 30],
                backgroundColor: [
                    "#1E3BB3",
                    "#00CDFF",
                    "#00AAB7",
                ],
                borderColor: [
                    "#fff",
                    "#fff",
                    "#fff",
                ],
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'Current',
                'New',
                'Retargeted',
            ]
        };
        var customerOverviewEcommerceOptions = {
            cutoutPercentage: 60,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false,
            responsive: true,
            maintainAspectRatio: true,
            showScale: true,
            legend: false,
            legendCallback: function (chart) {
                var text = [];
                text.push('<div class="chartjs-legend"><ul>');
                for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
                    text.push('<li><span style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '">');
                    text.push('</span>');

                    if (chart.data.labels[i]) {
                        text.push(chart.data.labels[i]);
                    }
                    text.push('</li>');
                }
                text.push('</div></ul>');
                return text.join("");
            },

            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                callbacks: {
                    title: function(tooltipItem, data) {
                        return data['labels'][tooltipItem[0]['index']];
                    },
                    label: function(tooltipItem, data) {
                        return data['datasets'][0]['data'][tooltipItem['index']];
                    }
                },

                backgroundColor: '#fff',
                titleFontSize: 14,
                titleFontColor: '#0B0F32',
                bodyFontColor: '#737F8B',
                bodyFontSize: 11,
                displayColors: false
            }
        };
        var customerOverviewEcommerce = new Chart(customerOverviewEcommerceCanvas, {
            type: 'doughnut',
            data: customerOverviewEcommerceData,
            options: customerOverviewEcommerceOptions
        });
        document.getElementById('customerOverviewEcommerce-legend').innerHTML = customerOverviewEcommerce.generateLegend();
    }
    if ($("#totalSalesByUnit").length) {
        var totalSalesByUnitCanvas = $("#totalSalesByUnit").get(0).getContext("2d");
        var totalSalesByUnitData = {
            datasets: [{
                data: [20, 55, 25],
                backgroundColor: [
                    "#4DA761",
                    "#F95F53",
                    "#00CDFF",
                ],
                borderColor: [
                    "#4DA761",
                    "#F95F53",
                    "#00CDFF",
                ],
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'Online',
                'Offline',
                'Marketing',
            ]
        };
        var totalSalesByUnitOptions = {
            cutoutPercentage: 0,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false,
            responsive: true,
            maintainAspectRatio: true,
            showScale: true,
            legend: false,
            legendCallback: function (chart) {
                var text = [];
                text.push('<div class="chartjs-legend"><ul>');
                for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
                    text.push('<li><span style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '">');
                    text.push('</span>');

                    if (chart.data.labels[i]) {
                        text.push(chart.data.labels[i]);
                    }
                    text.push('</li>');
                }
                text.push('</div></ul>');
                return text.join("");
            },

            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips: {
                callbacks: {
                    title: function(tooltipItem, data) {
                        return data['labels'][tooltipItem[0]['index']];
                    },
                    label: function(tooltipItem, data) {
                        return data['datasets'][0]['data'][tooltipItem['index']];
                    }
                },

                backgroundColor: '#fff',
                titleFontSize: 14,
                titleFontColor: '#0B0F32',
                bodyFontColor: '#737F8B',
                bodyFontSize: 11,
                displayColors: false
            }
        };
        var totalSalesByUnit = new Chart(totalSalesByUnitCanvas, {
            type: 'pie',
            data: totalSalesByUnitData,
            options: totalSalesByUnitOptions
        });
        document.getElementById('totalSalesByUnit-legend').innerHTML = totalSalesByUnit.generateLegend();
    }
    if ($('#carouselExampleControls').length) {
        var myCarousel = document.querySelector('#carouselExampleControls')
        var carousel = new bootstrap.Carousel(myCarousel)
    }
    if ($("#incomeExpences").length) {
        var incomeExpencesChart = document.getElementById("incomeExpences").getContext('2d');
        var incomeExpencesData = {
            labels: ["Jan","Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'Income',
                data: [125, 169, 60, 140, 100, 170, 50, 80, 240, 140, 80, 160],
                backgroundColor: "#1E3BB3",
                borderColor: [
                    '#1E3BB3',
                ],
                borderWidth: 0,
                fill: true, // 3: no fill

            },
                {
                    label: 'Expense',

                    data: [200, 290, 220, 180, 200, 250, 120, 170, 290, 210, 170, 210],
                    backgroundColor: "#00CDFF",
                    borderColor: [
                        '#00CDFF',
                    ],
                    borderWidth: 0,
                    fill: true, // 3: no fill

                }]
        };

        var incomeExpencesOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        color:"#F0F0F0",
                        zeroLineColor: '#F0F0F0',
                    },
                    ticks: {
                        beginAtZero: true,
                        autoSkip: true,
                        maxTicksLimit: 6,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
                xAxes: [{
                    stacked: true,
                    barPercentage: 0.4,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        beginAtZero: false,
                        autoSkip: true,
                        maxTicksLimit: 12,
                        fontSize: 10,
                        color:"#6B778C"
                    }
                }],
            },
            legend:false,
            legendCallback: function (chart) {
                var text = [];
                text.push('<div class="chartjs-legend"><ul>');
                for (var i = 0; i < chart.data.datasets.length; i++) {
                    text.push('<li>');
                    text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + '</span>');
                    text.push(chart.data.datasets[i].label);
                    text.push('</li>');
                }
                text.push('</ul></div>');
                return text.join("");
            },
            elements: {
                line: {
                    tension: 0.4,
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var incomeExpences = new Chart(incomeExpencesChart, {
            type: 'bar',
            data: incomeExpencesData,
            options: incomeExpencesOptions
        });
        document.getElementById('incomeExpences-legend').innerHTML = incomeExpences.generateLegend();
    }
})(jQuery);
