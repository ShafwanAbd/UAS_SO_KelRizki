@extends('layouts.sidebar')

@section('content')
    <div class="card shadow my-5 mx-4">
        <p class="fw-bold h3 text-center my-3">Detail</p>
        <div class="row mx-2 mb-5">
            <div class="col-4 card px-3">
                <!-- isi disisni -->
            </div>
            <div class="col-1"></div>
            <div class="col-7 card">
                <p class="fw-bold py-3">Keterangan</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, cum soluta libero aut amet iusto, ipsam obcaecati magnam corporis temporibus nam veniam eum. Earum ipsum suscipit pariatur nisi, ab laudantium?</p>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-primary mb-3 w-25 rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">BELI SAHAM!</a> 
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
                    <input name="lembar" type="number" min="0" step="5" class="form-control" id="berapalembar" placeholder="12">
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