@extends('layouts.sidebarPeternak')

@section('content')
<div class="container p-5">
    <h2 class="mx-5">Detail Peternakan Kamu</h2>
    <div>
        <!-- BODY -->
        <div class="d-flex justify-content-between my-5">
            <div class="d-flex gap-5">
                <div>
                    <h5>Nama</h5> 
                    <h5>Kategori</h5> 
                    <h5>Lokasi</h5> 
                    <h5>Jenis Peternakan</h5>
                    <h5>Interest</h5>
                    <h5>Harga</h5>
                    <h5>Lembar</h5>
                    <h5>Lembar Terjual</h5>
                    <h5>Asuransi</h5>
                    <h5>Referal Persen</h5>
                    <h5>Profit</h5>
                </div> 
                <div> 
                    <h5>: {{ $datas['myInvest']->nama }}</h5> 
                    <h5>: {{ $datas['myInvest']->kategori }}</h5>
                    <h5>: {{ $datas['myInvest']->location }}</h5>
                    <h5>: {{ $datas['myInvest']->jenis }}</h5>
                    <h5>: {{ $datas['myInvest']->interest }}%</h5>
                    <h5>: {{ @money($datas['myInvest']->harga) }}</h5>
                    <h5>: {{ $datas['myInvest']->lembar }} Lembar</h5>
                    <h5>: {{ $datas['myInvest']->lembar_terjual }} Lembar</h5>
                    <h5>: {{ $datas['myInvest']->asuransi }}</h5>
                    <h5>: {{ $datas['myInvest']->referral_percent }}</h5>
                    <h5>: {{ $datas['myInvest']->profit }}</h5>
                </div>
            </div>
            
            <div class="rounded p-4 shadow" style="height: fit-content;">
                <div class="d-flex gap-5">
                    <div> 
                        <h5>Durasi</h5>
                        <h5>Period</h5>
                        <h5>Dimulai Pada</h5>
                        <h5>Berakhir Pada</h5> 
                    </div> 
                    <div>  
                        <h5>: {{ $datas['myInvest']->durasi }} Hari</h5>
                        <h5>: {{ $datas['myInvest']->period }} Hari</h5>
                        <h5>: {{ $datas['myInvest']->start_date }}</h5>
                        <h5>: {{ $datas['myInvest']->expiring_date }}</h5> 
                    </div>
                </div> 
                <diV class="my-3">
                    <a href="{{ url('detail-peternakan/'.$datas['myInvest']->id) }}" class="btn btn-primary w-100">Lihat Peternakan</a>
                </diV>
            </div>

            <style>
                h5 {
                    font-size: 1.10rem;
                }
            </style>
        </div>
    </div>


    <h2 class="mt-5 mx-5">Investor</h2>
    <div class="my-5 shadow">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Total Lembar</th>
                <th scope="col">Total Uang</th> 
                <th scope="col">Terakhir Transaksi</th> 
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($datas['investor'] as $key=>$val)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $datas['userInvestor']->where('id', $val->id_user)->value('username') }}</td>
                    <td>{{ $datas['userInvestor']->where('id', $val->id_user)->value('email') }}</td>
                    <td>{{ $val->lembar }}</td>
                    <td>{{ $val->amount }}</td> 
                    <td>{{ $val->updated_at }}</td> 
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection