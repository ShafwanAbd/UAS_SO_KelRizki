@extends('layouts.sidebarAdmin')

@section('content')
<div>
    <div class="my-5">
        <p class="fw-bold mb-5 h5">Dashboard Prototipe</p>
        <div class="row">
            <div class="col-9">
                <div class="flex d-flex justify-content-between text-center">
                    <div>
                        <p class="mb-2 fw-bold">{{ $datas['total_transaksi'] }}</p>
                        <p class="">Total Transaksi</p>
                    </div>
                    <div>
                        <p class="mb-2 fw-bold">{{ $datas['active_users'] }}</p>
                        <p class="">Bisnis</p>
                    </div>
                    <div>
                        <p class="mb-2 fw-bold">{{ $datas['active_users'] }}</p>
                        <p class="">Active User</p>
                    </div>        
                    <div>
                        <p class="mb-2 fw-bold">{{ @money($datas['total_pendanaan']) }}</p>
                        <p class="">Total Pendanaan</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-4">
                    <p class="fw-bold px-3 h5">Weekly Record</p>
                    <div>
                        <p class="btn">this week</p>
                        <p class="btn">Last Month</p> 
                    </div> 
                </div>

                <div>
                    <canvas id="ChartLine"></canvas>
                </div> 

                <script>

                    const ctxLine = document.getElementById('ChartLine'); 

                    let delayed; 

                    const chartConfig = {
                        type: 'line',
                        data: {
                            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                            datasets: [{
                                data: [1,5,3,8,5,7,2], // Regression line data
                                backgroundColor: 'rgba(146, 203, 255, 0.5)',
                                borderColor: 'rgb(146, 203, 255)',
                                borderWidth: 2,
                                fill: true,
                                pointStyle: 'circle',
                                pointRadius: 3,
                                tension: 0.5,
                            }]
                        }, 
                        options: { 
                            animation: {
                                onComplete: () => {
                                    delayed = true;
                                },
                                delay: (context) => {
                                    let delay = 0;
                                    if (context.type === 'data' && context.mode === 'default' && !delayed) {
                                    delay = context.dataIndex * 300 + context.datasetIndex * 25;
                                    }
                                    return delay;
                                },
                            },
                            responsive: true,   
                            plugins: { 
                                legend: {
                                    display: false,
                                },
                                tooltip: {
                                    usePointStyle: true,
                                }
                            },
                            scales: {
                                x: { 
                                    title: {
                                        display: true,
                                        // text: 'X Value'
                                    }, 
                                },
                                y: { 
                                    title: {
                                        display: true,
                                        // text: 'Y Value'
                                    }, 
                                }
                            }
                        }
                    }; 

                    new Chart(ctxLine, chartConfig);
                </script>
            </div>

            <div class="col-3">
                <p class="mb-2 fw-bold">Activity</p>
                <div class="mx-auto">
                    <div style="max-width: 300px">
                        <canvas id="ChartDoughnut"></canvas>
                    </div> 
                </div>
                <div class="my-4">
                    <a href="" class="btn w-100">Read More</a>
                    
                </div>
            </div>
        </div>
    </div> 
</div> 

<script>
    const ctxDoughnut = document.getElementById('ChartDoughnut');

    new Chart(ctxDoughnut, {
        type: 'doughnut',
        data: {
            labels: ['Active', 'Pending', 'Complete'],
            datasets: [{
                label: '# of Votes',
                data: ["{{ $datas['total_active'] }}", "{{ $datas['total_unactive'] }}", 3],
                borderWidth: 5
            }]
        },
        options: {
        }
    });
</script>
@endsection