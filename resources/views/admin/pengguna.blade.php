@extends('layouts.sidebarAdmin')

@section('content') 
    <div class="container_penggunaAdmin">
        <div class="container_isi">
            <h2 class="mb-5">Pengguna</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Surel</th>
                        <th>Status</th>
                        <th>Saldo</th>
                        <th>Dividen</th> 
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                @foreach($datas1 as $key=>$val) 
                <tbody>
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $val->firstName }} {{ $val->lastName }}</td>
                        <td>{{ $val->username }}</td>
                        <td>{{ $val->email }}</td>
                        @if ($val->status == 1)
                            <td><a class="btn btn-primary rounded-5 w-100" data-bs-toggle="modal" data-bs-target="#modalAktif{{ $val->id }}">AKTIF</a></td>

                            <div class="modal fade" id="modalAktif{{ $val->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header bg-c-primary">
                                        <h5 class="modal-title text-white">CAUTION</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin untuk menonaktifkan akun dari {{ $val->username }}?</p>
                                    </div>
                                    <div class="modal-footer">                                        
                                        <a href="{{ url('/NoAcceptAkun/'.$val->id) }}" class="btn btn-primary">Yakin</a>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <td><a class="btn rounded-5 w-100 bg-c-primary-unactive text-white" data-bs-toggle="modal" data-bs-target="#modalAktif{{ $val->id }}">TIDAK AKTIF</a></td>

                            <div class="modal fade" id="modalAktif{{ $val->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header bg-c-primary">
                                        <h5 class="modal-title text-white">CAUTION</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin untuk mengaktifkan akun dari {{ $val->username }}?</p>
                                    </div>
                                    <div class="modal-footer">                                        
                                        <a href="{{ url('/acceptAkun/'.$val->id) }}" class="btn btn-primary">Yakin</a>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <td>{{ @money($val->balance) }}</td>
                        <td>{{ @money($val->dividen) }}</td> 
                    </tr> 
                </tbody>
                @endforeach
                </table>
        </div>
    </div>
@endsection