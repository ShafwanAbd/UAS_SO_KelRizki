@extends('layouts.sidebarAdmin')

@section('content') 
    <a href="{{ url('/createInvestasiAdmin') }}" class="btn btn-primary">Create Plan</a>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Duration</th>
      <th scope="col">Lembar</th>
      <th scope="col">Interest</th>
      <th scope="col">Kategori</th>
      <th scope="col">Location</th>
      <th scope="col">Asuransi</th>
      <th scope="col">Start Date</th>
      <th scope="col">Expiring Date</th>
      <th scope="col">Status</th> 
    </tr>
  </thead>
  <tbody>
    @php $i = 1; @endphp
    @foreach($datas1 as $key=>$val)
    <tr>
      <td scope="row">{{ $i++ }}</td>
      <td scope="col">{{ $val->nama }}</td>
      <td scope="col">{{ $val->durasi }} Days</td>
      <td scope="col">{{ $val->lembar_terjual }}/{{ $val->lembar }}</td>
      <td scope="col">{{ $val->interest }}%</td>
      <td scope="col">{{ $val->kategori }}</td>
      <td scope="col">{{ $val->location }}</td>
      <td scope="col">{{ $val->asuransi }}</td>
      <td scope="col">{{ $val->start_date }}</td>
      <td scope="col">{{ $val->expiring_date }}</td>
      <td scope="col">{{ $val->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</td> 
    </tr> 
    @endforeach
  </tbody>
</table>
@endsection