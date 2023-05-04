@extends('layouts.sidebar')

@section('content')
    <div class="card shadow my-5 mx-4">
        <p class="fw-bold h3 text-center my-3">{{ $datas1->nama }}</p>
        <div class="row mx-2 mb-5"> 
            <!-- isi disisni -->
            <div class="col-md-4 pt-3 px-3">
                <div class="card border-0 rounded shadow">
                    <div class="card-header pt-3 px-3 border-0">
                    <h5>{{ $datas1->nama }}</h5><span style="color:green"></span>
                    </div>
                    <div class="card-body px-3">
                    <small style="color:grey">{{ $datas1->lembar_terjual }} / {{ $datas1->lembar }} Lembar Terjual</small>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $datas1->lembar_terjual }}" aria-valuemin="0" aria-valuemax="{{ $datas1->lembar }}">
                        @php 
                        $persenanBar = $datas1->lembar_terjual / $datas1->lembar * 100; 
                        @endphp
                        <div id="progress{{ $datas1->id }}" class="progress-bar" width="{{ $persenanBar }}%"></div>

                        <script>
                        $(document).ready(function() {
                            $('#progress{{ $datas1->id }}').css('width', '{{ $persenanBar }}%');
                        });
                        </script>
                    </div>
                    <div class="pt-3">
                        <small style="color:grey">{{ $datas1->location }}</small>
                        <p class="mb-0"><span style="color:blue">{{ $datas1->interest }}%</span> Pembagian deviden perbulan </p>
                        <p><span style="color:green">{{ @money($datas1->harga) }}</span> Perlembar Saham </p>
                    </div>
                    <div class="row justify-content-between text-center">
                        <div class="col-6">
                        <span><small>Tanggal Buka</small></span>
                        <p class="text-muted">{{ $datas1->start_date }}</p>
                        </div>
                        <div class="col-6">
                        <span><small>Tanggal Tutup</small></span>
                        <p class="text-muted">{{ $datas1->expiring_date }}</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary mb-3 w-75 rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli Saham</a> 
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-7 card">
                <p class="fw-bold py-3">Keterangan</p>
                <p>{{ $datas1->keterangan }}</p>
            </div>
        </div>
    </div>
    
    
    <form method="POST" action="{{ url('/beli_investasi/'.$id) }}">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="berapalembar">Lembar</label>
                    <input name="lembar" type="number" min="0" class="form-control" id="berapalembar" placeholder="12">
                </div> 
                <label id="perkalianlembar">0 Lembar: Rp 0</label> 
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>

            <script>
            $(document).ready(function() {
                $('#berapalembar').on('input', function() {
                const berapalembarVal = $('#berapalembar').val();
                $('#perkalianlembar').html(berapalembarVal + ' Lembar: Rp ' + (berapalembarVal * '{{ $datas1->harga }}'));
                });
            })    
            </script> 
        </div>  
    </div>
    </form>
@endsection