<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab"
                                   href="#overview" role="tab" aria-controls="overview"
                                   aria-selected="true">Overview</a>
                            </li>
                            <!--                            <li class="nav-item">
                                                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences"
                                                               role="tab" aria-selected="false">Audiences</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                                               href="#demographics" role="tab" aria-selected="false">Demographics</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more"
                                                               role="tab" aria-selected="false">More</a>
                                                        </li>-->
                        </ul>

                    </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                             aria-labelledby="overview">
                            <div class="row my-3">
                                <div class="col-sm-4">
                                    <div class="bg-opacity-primary tw-flex tw-justify-between">
                                        <div class="circle-progress-width">
                                            <div id="countMuicBuilding" class="progressbar-js-circle pr-2"></div>
                                        </div>
                                        <div class="tw-flex tw-flex-col tw-items-end">
                                            <h1 class="tw-text-base tw-font-semibold mb-2">Computer MUIC Building</h1>
                                            <h2 class="tw-text-base mb-0 fw-bold">
                                                {{ computer_with_location['count_muic_building'] }} Unit
                                                <span class="text-small">({{ count_muic_building_percent }}%)</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bg-opacity-success tw-flex tw-justify-between">
                                        <div class="circle-progress-width">
                                            <div id="countAditayathornBuilding"
                                                 class="progressbar-js-circle pr-2"></div>
                                        </div>
                                        <div class="tw-flex tw-flex-col tw-items-end">
                                            <h1 class="tw-text-base tw-font-semibold mb-2">Computer Aditayathorn
                                                Building</h1>
                                            <h2 class="tw-text-base mb-0 fw-bold">
                                                {{ computer_with_location['count_aditayathorn_building'] }} Unit
                                                <span
                                                    class="text-small">({{
                                                        count_aditayathorn_building_percent
                                                    }}%)</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bg-opacity-info tw-flex tw-justify-between">
                                        <div class="circle-progress-width">
                                            <div id="countOtherBuilding" class="progressbar-js-circle pr-2"></div>
                                        </div>
                                        <div class="tw-flex tw-flex-col tw-items-end">
                                            <h1 class="tw-text-base tw-font-semibold mb-2">Computer Other Building</h1>
                                            <h2 class="tw-text-base mb-0 fw-bold">
                                                {{ computer_with_location['count_other_building'] }} Unit
                                                <span class="text-small">({{ count_other_building_percent }}%)</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-gradient">
                                                <div class="card-body">
                                                    <div class="circle-shadow-primary">
                                                        <svg viewBox="0 0 24 24" width="20">
                                                            <path
                                                                class="tw-white"
                                                                fill="currentColor"
                                                                d="m10,23c0,.553-.448,1-1,1h-4c-2.757,0-5-2.243-5-5V7C0,4.243,2.243,2,5,2h.171c.413-1.164,1.525-2,2.829-2h2c1.304,0,2.416.836,2.829,2h.171c2.757,0,5,2.243,5,5v3c0,.552-.447,1-1,1s-1-.448-1-1v-3c0-1.654-1.346-3-3-3h-1c-.552,0-1-.448-1-1s-.449-1-1-1h-2c-.551,0-1,.449-1,1s-.448,1-1,1h-1c-1.654,0-3,1.346-3,3v12c0,1.654,1.346,3,3,3h4c.552,0,1,.447,1,1Zm-1.207-16.287l-2.227,2.227c-.078.079-.204.082-.286.006l-1.105-1.013c-.407-.373-1.04-.344-1.413.062-.373.407-.346,1.04.062,1.413l1.105,1.013c.424.389.958.582,1.491.582.565,0,1.129-.217,1.56-.648l2.227-2.227c.391-.391.391-1.023,0-1.414s-1.023-.391-1.414,0Zm0,6.08l-2.227,2.227c-.078.079-.204.081-.286.006l-1.105-1.013c-.407-.373-1.04-.345-1.413.062-.373.407-.346,1.04.062,1.413l1.105,1.013c.424.389.958.582,1.491.582.565,0,1.129-.218,1.56-.648l2.227-2.227c.391-.391.391-1.023,0-1.414s-1.023-.391-1.414,0Zm15.207,3.707v4c0,1.93-1.57,3.5-3.5,3.5h-5c-1.93,0-3.5-1.57-3.5-3.5v-4c0-1.93,1.57-3.5,3.5-3.5h5c1.93,0,3.5,1.57,3.5,3.5Zm-2,0c0-.827-.673-1.5-1.5-1.5h-5c-.827,0-1.5.673-1.5,1.5v4c0,.827.673,1.5,1.5,1.5h5c.827,0,1.5-.673,1.5-1.5v-4Zm-3,.5h-2c-.553,0-1,.447-1,1s.447,1,1,1h2c.553,0,1-.447,1-1s-.447-1-1-1Zm-5-7c0-.552-.447-1-1-1h-1.5c-.552,0-1,.448-1,1s.448,1,1,1h1.5c.553,0,1-.448,1-1Z"
                                                            />
                                                        </svg>

                                                    </div>
                                                    <h6>Asset all type</h6>
                                                    <p>{{ all_inventory_percent }}%</p>
                                                    <h5 class="text-primary">{{ computers['all_inventory'] }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-gradient">
                                                <div class="card-body">
                                                    <div class="circle-shadow-success">
                                                        <i class="mdi mdi-arrow-down-bold-hexagon-outline"></i>
                                                    </div>
                                                    <h6>PC Set</h6>
                                                    <p>{{ pc_percent }}%</p>
                                                    <h5 class="text-success">{{ computers['pc'] }} </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-gradient">
                                                <div class="card-body">
                                                    <div class="circle-shadow-info">
                                                        <i class="mdi mdi-account-outline"></i>
                                                    </div>
                                                    <h6>Notebook</h6>
                                                    <p>{{ notebooks_percent }}%</p>
                                                    <h5 class="text-info">{{ computers['notebooks'] }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-gradient">
                                                <div class="card-body">
                                                    <div class="circle-shadow-danger">
                                                        <i class="mdi mdi-cube-outline"></i>
                                                    </div>
                                                    <h6>Monitors</h6>
                                                    <p>{{ monitors_percent }}%</p>
                                                    <h5 class="text-danger">{{ computers['monitors'] }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-gradient">
                                                <div class="card-body">
                                                    <div class="circle-shadow-dark">
                                                        <i class="mdi mdi-wallet"></i>
                                                    </div>
                                                    <h6>All in one</h6>
                                                    <p>{{ all_in_one_percent }}%</p>
                                                    <h5 class="text-dark">{{ computers['all_in_one'] }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-gradient">
                                                <div class="card-body">
                                                    <div class="circle-shadow-warning">
                                                        <i class="mdi mdi-wallet"></i>
                                                    </div>
                                                    <h6>Workstations</h6>
                                                    <p>{{ workstations_percent }}%</p>
                                                    <h5 class="text-warning">{{ computers['workstations'] }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">ประเภทคอมพิวเตอร์ แยกอาคาร</h4>
                                            <canvas id="barChartTypeComputer"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">จำนวนคอมพิวเตอร์ แยกประเภท</h4>
                                            <canvas id="donutChartTypeComputer"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">จำนวนคอมพิวเตอร์ แยกอายุ</h4>
                                            <canvas id="donutChartYearComputer"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">อายุคอมพิวเตอร์ แยกอาคาร</h4>
                                            <canvas id="barChartYearComputer"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script setup>
import {onMounted} from "vue";

const props = defineProps({
    computer_with_location: {type: Object, required: true},
    computers: {type: Object, required: true},
    count_year_computer: {type: Object, required: true},
    year_computer_for_building: {type: Object, required: true},
});

let all_inventory_percent = (props.computers['all_inventory'] * 100 / props.computers['all_inventory'])
let pc_percent = (props.computers['pc'] * 100 / props.computers['all_inventory']).toFixed(2)
let notebooks_percent = (props.computers['notebooks'] * 100 / props.computers['all_inventory']).toFixed(2)
let monitors_percent = (props.computers['monitors'] * 100 / props.computers['all_inventory']).toFixed(2)
let all_in_one_percent = (props.computers['all_in_one'] * 100 / props.computers['all_inventory']).toFixed(2)
let workstations_percent = (props.computers['workstations'] * 100 / props.computers['all_inventory']).toFixed(2)

let count_muic_building_percent = (props.computer_with_location['count_muic_building'] * 100 / props.computer_with_location['computers_both_buildings']).toFixed(2)
let count_aditayathorn_building_percent = (props.computer_with_location['count_aditayathorn_building'] * 100 / props.computer_with_location['computers_both_buildings']).toFixed(2)
let count_other_building_percent = (props.computer_with_location['count_other_building'] * 100 / props.computer_with_location['computers_both_buildings']).toFixed(2)

let barChartTypeComputerData = {
    labels: ["PC Set", "Notebook", "Monitor", "All in one", "Workstation"],
    datasets: [
        {
            label: "อาคารวิทยาลัยนานาชาติ",
            data: [props.computer_with_location['pc_muic_building'], props.computer_with_location['notebooks_muic_building'], props.computer_with_location['monitors_muic_building'], props.computer_with_location['all_in_one_muic_building'], props.computer_with_location['workstations_muic_building']],
            // data: [10, 10, 10, 10, 10],
            backgroundColor: [
                "rgba(10,20,30,0.3)",
                "rgba(10,20,30,0.3)",
                "rgba(10,20,30,0.3)",
                "rgba(10,20,30,0.3)",
                "rgba(10,20,30,0.3)"
            ],
            borderColor: [
                "rgba(10,20,30,1)",
                "rgba(10,20,30,1)",
                "rgba(10,20,30,1)",
                "rgba(10,20,30,1)",
                "rgba(10,20,30,1)"
            ],
            borderWidth: 1
        },
        {
            label: "อาคารอทิตยาทร",
            data: [props.computer_with_location['pc_aditayathorn_building'], props.computer_with_location['notebooks_aditayathorn_building'], props.computer_with_location['monitors_aditayathorn_building'], props.computer_with_location['all_in_one_aditayathorn_building'], props.computer_with_location['workstations_aditayathorn_building']],
            // data: [10, 10, 10, 10, 10],

            backgroundColor: [
                "rgba(50,150,200,0.3)",
                "rgba(50,150,200,0.3)",
                "rgba(50,150,200,0.3)",
                "rgba(50,150,200,0.3)",
                "rgba(50,150,200,0.3)"
            ],
            borderColor: [
                "rgba(50,150,200,1)",
                "rgba(50,150,200,1)",
                "rgba(50,150,200,1)",
                "rgba(50,150,200,1)",
                "rgba(50,150,200,1)"
            ],
            borderWidth: 1
        },
        {
            label: "อาคารอื่นๆ",
            data: [props.computer_with_location['pc_other_building'], props.computer_with_location['notebooks_other_building'], props.computer_with_location['monitors_other_building'], props.computer_with_location['all_in_one_other_building'], props.computer_with_location['workstations_other_building']],
            // data: [10, 10, 10, 10, 10],
            backgroundColor: [
                'rgba(255, 206, 86, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(255, 206, 86, 0.5)',
            ],
            borderColor: [
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1
        },
    ]
};
const configBarChartTypeComputer = {
    type: 'bar',
    data: barChartTypeComputerData,
    plugins: [ChartDataLabels],
    options: {
        layout: {
            padding: {
                top: 25
            }
        },
        plugins: {
            datalabels: {
                anchor: 'end',
                align: 'top'
            },
            legend: {
                position: 'bottom',
                padding: {
                    top: 15
                }
            },
        }
    }
}

let donutChartTypeComputerData = {
    datasets: [{
        data: [props.computers.pc, props.computers.notebooks, props.computers.monitors, props.computers.all_in_one, props.computers.workstations],
        // data: [10, 10, 10, 10, 10],
        backgroundColor: [
            'rgba(255, 99, 132, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(255, 206, 86, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(153, 102, 255, 0.5)',
            'rgba(255, 159, 64, 0.5)'
        ],
        borderColor: [
            'rgba(255,99,132,1)',
            'rgba(75, 192, 192, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: ["PC Set", "Notebook", "Monitors", "All in one", "Workstations"]
};
const configDonutChartTypeComputer = {
    type: 'doughnut',
    data: donutChartTypeComputerData,
    plugins: [ChartDataLabels],
    options: {
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 10,
                bottom: 0
            }
        },
        plugins: {
            datalabels: {
                anchor: 'center',
            },
            legend: {
                position: 'bottom',
                labels: {
                    pointStyle: 'circle',
                    usePointStyle: true
                }
            },
        }
    }
}

let donutChartYearComputerData = {
    datasets: [{
        data: [props.count_year_computer.less_three_years, props.count_year_computer.three_years, props.count_year_computer.five_years, props.count_year_computer.seven_years],
        backgroundColor: [
            'rgba(255, 99, 132, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(255, 206, 86, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(153, 102, 255, 0.5)',
            'rgba(255, 159, 64, 0.5)'
        ],
        borderColor: [
            'rgba(255,99,132,1)',
            'rgba(75, 192, 192, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: ["0 - 3 ปี", "3 ปี 1 เดือน - 5 ปี", "5 ปี 1 เดือน - 7 ปี", "7 ปีขึ้นไป"]
};
const configDonutChartYearComputer = {
    type: 'doughnut',
    data: donutChartYearComputerData,
    plugins: [ChartDataLabels],
    options: {
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 10,
                bottom: 0
            }
        },
        plugins: {
            datalabels: {
                anchor: 'center',
            },
            legend: {
                position: 'bottom',
                labels: {
                    pointStyle: 'circle',
                    usePointStyle: true
                }
            },
        }
    }
}

let barChartYearComputerData = {
    labels: ["อาคารวิทยาลัยนานาชาติ", "อาคารอทิตยาทร", "อาคารอื่นๆ"],
    datasets: [
        {
            label: "0 - 3 ปี",
            data: [props.year_computer_for_building.less_three_years_computer_muic_building, props.year_computer_for_building.less_three_years_computer_aditayathorn_building, props.year_computer_for_building.less_three_years_computer_other_building],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',

            ],
            borderColor: [
                'rgba(255,99,132,1)',

            ],
            borderWidth: 1
        },
        {
            label: "3 ปี 1 เดือน - 5 ปี",
            data: [props.year_computer_for_building.three_years_computer_muic_building, props.year_computer_for_building.three_years_computer_aditayathorn_building, props.year_computer_for_building.three_years_computer_other_building],
            backgroundColor: [
                'rgba(75, 192, 192, 0.5)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
            ],
            borderWidth: 1
        },
        {
            label: "5 ปี 1 เดือน - 7 ปี",
            data: [props.year_computer_for_building.five_years_computer_muic_building, props.year_computer_for_building.five_years_computer_aditayathorn_building, props.year_computer_for_building.five_years_computer_other_building],
            backgroundColor: [
                'rgba(255, 206, 86, 0.5)',
            ],
            borderColor: [
                'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1
        },
        {
            label: "7 ปีขึ้นไป",
            data: [props.year_computer_for_building.sever_years_computer_muic_building, props.year_computer_for_building.sever_years_computer_aditayathorn_building, props.year_computer_for_building.sever_years_computer_other_building],
            backgroundColor: [
                'rgba(54, 162, 235, 0.5)',
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        },
    ]
};
const configBarChartYearComputer = {
    type: 'bar',
    data: barChartYearComputerData,
    plugins: [ChartDataLabels],
    options: {
        layout: {
            padding: {
                top: 25
            }
        },
        plugins: {
            datalabels: {
                anchor: 'end',
                align: 'top'
            },
            legend: {
                position: 'bottom',
                padding: {
                    top: 15
                }
            },
        }
    }
}

onMounted(() => {
    new Chart(
        document.getElementById('barChartTypeComputer'),
        configBarChartTypeComputer
    );
    new Chart(
        document.getElementById('donutChartTypeComputer'),
        configDonutChartTypeComputer
    );

    new Chart(
        document.getElementById('donutChartYearComputer'),
        configDonutChartYearComputer
    );
    new Chart(
        document.getElementById('barChartYearComputer'),
        configBarChartYearComputer
    );

    if ($('#countMuicBuilding').length) {
        let bar = new ProgressBar.Circle(countMuicBuilding, {
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
                color: '#5275ff',
                width: 15
            },
            to: {
                color: '#9567e4',
                width: 15
            },
            // Set default step function for all animate calls
            step: function (state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                let value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value);
                }

            }
        });

        bar.text.style.fontSize = '0rem';
        bar.animate(count_muic_building_percent / 100); // Number from 0.0 to 1.0
    }
    if ($('#countAditayathornBuilding').length) {
        let bar = new ProgressBar.Circle(countAditayathornBuilding, {
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
            step: function (state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                let value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value);
                }

            }
        });

        bar.text.style.fontSize = '0rem';
        bar.animate(count_aditayathorn_building_percent / 100); // Number from 0.0 to 1.0
    }
    if ($('#countOtherBuilding').length) {
        let bar = new ProgressBar.Circle(countOtherBuilding, {
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
            step: function (state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                let value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value);
                }

            }
        });

        bar.text.style.fontSize = '0rem';
        bar.animate(count_other_building_percent / 100); // Number from 0.0 to 1.0
    }
})


</script>
