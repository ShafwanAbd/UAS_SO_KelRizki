@extends('layouts.sidebarAdmin')

@section('content') 
<div class="my-5">
  <a href="{{ url('/createInvestasiAdmin') }}" class="btn btn-primary">Create Plan</a>
  <div class="card shadow my-4">
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
  </div>
</div>
@endsection