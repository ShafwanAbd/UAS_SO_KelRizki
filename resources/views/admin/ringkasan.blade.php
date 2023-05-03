@extends('layouts.sidebarAdmin')

@section('content')
<div>
    <!-- dashborad prototype -->
    <div class="my-5">
        <p class="fw-bold mb-5 h5">Dashboard Prototipe</p>
        <div class="row gx-5">
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
            </div>
            <div class="col-3">
                <p class="mb-2 fw-bold">Activity</p>
                <div class="">
                    <div style="">
                        <canvas id="myChart"></canvas>
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
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
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