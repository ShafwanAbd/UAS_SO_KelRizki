@extends('layouts.sidebarAdmin')

@section('content') 
    <div class="container_penggunaAdmin">
        <div class="container_isi">
            <h2>Pengguna</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Surel</th>
                        <th>Status</th>
                        <th>Saldo</th>
                        <th>Dividen</th>
                        <th>Bonus Rujukan</th>
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
                            <td><a href="#" style="color: black;" data-bs-toggle="modal" data-bs-target="#modalAktif">AKTIF</a></td>

                            <div class="modal fade" id="modalAktif" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">CAUTION</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin untuk menonaktifkan akun dari {{ $val->username }}?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <a href="{{ url('/NoAcceptAkun/'.$val->id) }}" class="btn btn-primary">Yakin</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <td><a href="#" style="color: black;" data-bs-toggle="modal" data-bs-target="#exampleModal">TIDAK AKTIF</a></td>

                            <div class="modal fade" id="exampleModal" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">CAUTION</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin untuk mengaktifkan akun dari {{ $val->username }}?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <a href="{{ url('/acceptAkun/'.$val->id) }}" class="btn btn-primary">Yakin</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <td>{{ @money($val->balance) }}</td>
                        <td>{{ @money($val->dividen) }}</td>
                        <td>{{ @money($val->bonusRujukan) }}</td>
                    </tr> 
                </tbody>
                @endforeach
                </table>
        </div>
    </div>
@endsection