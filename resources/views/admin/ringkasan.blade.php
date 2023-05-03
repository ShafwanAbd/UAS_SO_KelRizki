@extends('layouts.sidebarAdmin')

@section('content') 
    <p>Total Transaksi: {{ $datas['total_transaksi'] }}</p>
    <p>Bisnis: {{ $datas['active_users'] }}</p>
    <p>Active User: {{ $datas['active_users'] }}</p>
    <p>Total Pendanaan: {{ @money($datas['total_pendanaan']) }}</p> 

    <div style="width: 300px;">
        <canvas id="myChart"></canvas>
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