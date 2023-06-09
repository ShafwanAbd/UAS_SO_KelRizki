@extends('layouts.sidebarAdmin')

@section('content') 
    <div class="container_penggunaAdmin depositTransaksi container">
        <div class="container_isi">
            <h2 class="mb-4">Transaksi Deposit</h2> 
            <div class="card shadow">
                @if($datas1->count() > 0)
                <table class="table table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Dibuat</th>
                            <th>Diperbaharui</th> 
                        </tr>
                    </thead>
                    @php 
                        $i = 1;
                    @endphp
                    @foreach($datas1 as $key=>$val) 
                    @php
                        $nama = App\Models\User::where('id',$val->id_user)->value('firstName') . ' ' . App\Models\User::where('id',$val->id_user)->value('lastName'); 
                    @endphp
                    <tbody>
                        <tr>
                            <th class="text-center">{{ $i++ }}</th>
                            <td>{{ $nama }}</td>
                            <td>{{ @money($val->amount) }}</td> 
                            @if ($val->status == 1)
                                <td>DISETUJUI</td>
                            @else
                                <td><a href="#" style="color: black;" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $val->id }}">BELUM DISETUJUI</a></td>

                                <div class="modal fade" id="exampleModal{{ $val->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">CAUTION</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin untuk menyetujui deposit dari {{ $nama }}?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                            <a href="{{ url('/acceptDeposit/'.$val->id) }}" class="btn btn-primary">Yakin</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <td>{{ $val->created_at }}</td>
                            <td>{{ $val->updated_at }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                @else
                <div class="d-flex justify-content flex-column"> 
                    <img class="mx-auto w-25 mt-5 mb-3" src="{{ url('./image/helper/image1.png') }}">
                    <h4 class="text-center mb-5">Transaksi Deposit User Masih Kosong Nih...</h4>
                </div>
                @endif
            </div> 
        </div>
    </div>
@endsection