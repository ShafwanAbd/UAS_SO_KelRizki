@extends('layouts.sidebar')

@section('content') 
<div class='container'>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">ID Referensi</th>
        <th scope="col">Catatan</th>
        <th scope="col">Dibuat</th>
        <th scope="col">Diperbaharui</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i = 1;
      @endphp
      @foreach($datas1 as $key=>$val)
      <tr>
        <th scope="row">{{ $i++ }}</th>
        <td>{{ $val->id_referensi }}</td>
        <td>{{ $val->catatan }}</td>
        <td>{{ $val->created_at }}</td>
        <td>{{ $val->updated_at }}</td>
      </tr>
      @endforeach 
    </tbody>
  </table>
</div>
@endsection