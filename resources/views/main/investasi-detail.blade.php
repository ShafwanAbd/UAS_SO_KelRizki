@extends('layouts.sidebar')

@section('content')
    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">BELI SAHAM!</a> 
    
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
                    <input name="lembar" type="number" class="form-control" id="berapalembar" placeholder="123">
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