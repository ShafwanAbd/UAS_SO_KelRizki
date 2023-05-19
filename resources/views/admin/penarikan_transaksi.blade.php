@extends('layouts.sidebarAdmin')

@section('content') 
    <div class="container_penggunaAdmin depositTransaksi">
        <div class="container_isi">
            <h2 class="mb-4">Transaksi Penarikan</h2>
            @if($datas1->count() > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Mengenakan Biaya</th>
                        <th>Detail</th>
                        <th>Metode</th>
                        <th>Jenis</th>
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
                        <th>{{ $i++ }}</th>
                        <td>{{ $nama }}</td>
                        <td>{{ @money($val->amount) }}</td> 
                        <td>{{ @money($setting->admin_fee) }}</td> 
                        <td>{{ isset($val->detil_transaksi) ? $val->detil_transaksi : '-' }}</td>
                        <td>{{ $val->metode_penarikan }}</td>
                        <td>{{ $val->debit_from }}</td>
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
                                        <p>Apakah Anda yakin untuk menyetujui penarikan dari {{ $nama }}?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <a href="{{ url('/acceptPenarikan/'.$val->id) }}" class="btn btn-primary">Yakin</a>
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
            <div class="card shadow">
                <div class="d-flex justify-content flex-column"> 
                    <img class="mx-auto w-25 mt-4 mb-3" src="{{ url('./image/helper/image1.png') }}">
                    <h4 class="text-center mb-4">Transaksi Penarikan User Masih Kosong Nih...</h4>
                </div> 
            </div>
            @endif
        </div>
    </div>
@endsection