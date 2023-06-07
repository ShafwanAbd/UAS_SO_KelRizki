@extends('layouts.sidebarAdmin')

@section('content') 
<div class="my-4 p-4 container"> 
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
          <th>Detail</th> 
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
          <td>
          @if ($val->status == 1)  
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAktif{{ $val->id }}">
              Aktif
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalAktif{{ $val->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Caution</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h4>Apakah Anda Yakin?</h4>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="{{ url('noAcceptInvestasi/'.$val->id) }}" class="btn btn-primary">Yakin</a>
                  </div>
                </div>
              </div>
            </div>
          @else 
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTidakAktif{{ $val->id }}">
              Tidak Aktif
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalTidakAktif{{ $val->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Caution</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h4>Apakah Anda Yakin?</h4>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="{{ url('acceptInvestasi/'.$val->id) }}" class="btn btn-primary">Yakin</a>
                  </div>
                </div>
              </div>
            </div>
          @endif
          </td>
          <td> 
            <a href="{{ url('/detail-peternakan/'.$val->id) }}" class="btn btn-primary">Detail</a> 
          </td>
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