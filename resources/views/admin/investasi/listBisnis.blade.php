@extends('layouts.sidebarAdmin')

@section('content') 
<div class="my-4 p-4">
  <a href="{{ url('/createInvestasiAdmin') }}" class="btn btn-primary">Create Plan</a>
  <div class="card shadow my-4">
    @if($datas1->count() > 0)
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th>Nama</th>
          <th>Duration</th>
          <th>Lembar</th>
          <th>Interest</th>
          <th>Kategori</th>
          <th>Location</th>
          <th>Asuransi</th>
          <th>Start Date</th>
          <th>Expiring Date</th>
          <th>Status</th> 
        </tr>
      </thead>
      <tbody>
        @php $i = 1; @endphp
        @foreach($datas1 as $key=>$val)
        <tr>
          <td scope="row">{{ $i++ }}</td>
          <td>{{ $val->nama }}</td>
          <td>{{ $val->durasi }} Days</td>
          <td>{{ $val->lembar_terjual }}/{{ $val->lembar }}</td>
          <td>{{ $val->interest }}%</td>
          <td>{{ $val->kategori }}</td>
          <td>{{ $val->location }}</td>
          <td>{{ $val->asuransi }}</td>
          <td>{{ $val->start_date }}</td>
          <td>{{ $val->expiring_date }}</td>
          <td>{{ $val->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</td> 
        </tr> 
        @endforeach
      </tbody>
    </table>
    @else  
      <div class="d-flex justify-content flex-column"> 
          <img class="mx-auto w-25 mt-4 mb-3" src="{{ url('./image/helper/image1.png') }}">
          <h4 class="text-center mb-4">List Bisnis User Masih Kosong Nih...</h4>
      </div> 
    @endif
  </div>
</div>
@endsection