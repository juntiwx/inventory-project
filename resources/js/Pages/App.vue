<template>
    <AppLayout>
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
                            <li class="nav-item">
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
                            </li>
                        </ul>
                        <div>
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-otline-dark"><i class="icon-share"></i> Share</a>
                                <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i>
                                    Print</a>
                                <a href="#" class="btn btn-primary text-white me-0"><i
                                    class="icon-download"></i> Export</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                             aria-labelledby="overview">
                            <!--                            <div class="row">
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
                                                                                <p>{{ round($computers['all_inventory']*100/$computers['all_inventory'],2) }}
                                                                                    %</p>
                                                                                <h5 class="text-primary">{{$computers['all_inventory']}}</h5>
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
                                                                                <p>{{ round($computers['pc']*100/$computers['all_inventory'],2) }}
                                                                                    %</p>
                                                                                <h5 class="text-success">{{ $computers['pc'] }} </h5>
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
                                                                                <p>{{ round($computers['notebooks']*100/$computers['all_inventory'],2) }}
                                                                                    %</p>
                                                                                <h5 class="text-info">{{$computers['notebooks']}}</h5>
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
                                                                                <p>{{ round($computers['monitors']*100/$computers['all_inventory'],2) }}
                                                                                    %</p>
                                                                                <h5 class="text-danger">{{ $computers['monitors'] }}</h5>
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
                                                                                <p>{{ round($computers['all_in_one']*100/$computers['all_inventory'],2) }}
                                                                                    %</p>
                                                                                <h5 class="text-dark">{{$computers['all_in_one']}}</h5>
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
                                                                                <p>{{ round($computers['workstations']*100/$computers['all_inventory'],2) }}
                                                                                    %</p>
                                                                                <h5 class="text-warning">{{$computers['workstations']}}</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">ประเภทคอมพิวเตอร์ แยกอาคาร</h4>
                                            <canvas id="barChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">จำนวนคอมพิวเตอร์ แยกประเภท</h4>
                                            <canvas id="donutChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                            <div class="row">
                                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 grid-margin stretch-card">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">จำนวนคอมพิวเตอร์ แยกอายุ</h4>
                                                                        <canvas id="donutChartYear"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 grid-margin stretch-card">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">อายุคอมพิวเตอร์ แยกอาคาร</h4>
                                                                        <canvas id="barChartYear"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script setup>
import AppLayout from "./Layouts/AppLayout.vue";
import {onMounted} from "vue";
// let pc_muic_building = {!! json_encode($computer_with_location['pc_muic_building']) !!};
// let notebooks_muic_building = {!! json_encode($computer_with_location['notebooks_muic_building']) !!};
// let monitors_muic_building = {!! json_encode($computer_with_location['monitors_muic_building']) !!};
// let all_in_one_muic_building = {!! json_encode($computer_with_location['all_in_one_muic_building']) !!};
// let workstations_muic_building = {!! json_encode($computer_with_location['workstations_muic_building']) !!};
//
// let pc_aditayathorn_building = {!! json_encode($computer_with_location['pc_aditayathorn_building']) !!};
// let notebooks_aditayathorn_building = {!! json_encode($computer_with_location['notebooks_aditayathorn_building']) !!};
// let monitors_aditayathorn_building = {!! json_encode($computer_with_location['monitors_aditayathorn_building']) !!};
// let all_in_one_aditayathorn_building = {!! json_encode($computer_with_location['all_in_one_aditayathorn_building']) !!};
// let workstations_aditayathorn_building = {!! json_encode($computer_with_location['workstations_aditayathorn_building']) !!};
//
// let pc = {!! json_encode($computers['pc']) !!};
// let notebooks = {!! json_encode($computers['notebooks']) !!};
// let monitors = {!! json_encode($computers['monitors']) !!};
// let all_in_one = {!! json_encode($computers['all_in_one']) !!};
// let workstations = {!! json_encode($computers['workstations']) !!};


let barData = {
    labels: ["PC Set", "Notebook", "Monitor", "All in one", "Workstation"],
    datasets: [
        {
            label: "อาคารวิทยาลัยนานาชาติ",
            // data: [pc_muic_building, notebooks_muic_building, monitors_muic_building, all_in_one_muic_building, workstations_muic_building],
            data: [10, 10, 10, 10, 10],
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
            // data: [pc_aditayathorn_building, notebooks_aditay athorn_building, monitors_aditayathorn_building, all_in_one_aditayathorn_building, workstations_aditayathorn_building],
            data: [10, 10, 10, 10, 10],

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
        }
    ]
};
const configBarChart = {
    type: 'bar',
    data: barData,
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


let donutData = {
    datasets: [{
        // data: [pc, notebooks, monitors, all_in_one, workstations],
        data: [10, 10, 10, 10, 10],
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

const configDonutChart = {
    type: 'doughnut',
    data: donutData,
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

onMounted(() => {
    new Chart(
        document.getElementById('barChart'),
        configBarChart
    );
    new Chart(
        document.getElementById('donutChart'),
        configDonutChart
    );
})

</script>
