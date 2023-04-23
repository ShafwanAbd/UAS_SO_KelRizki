@extends('layouts.sidebar')

@section('content') 
    <div class="container_pertanyaan">
        <div class="navbar1">
             <a href="{{ route('logout') }}">
                <div class="container_image">
                    <img src="{{ asset('./image/helper/stairways.png') }}">
                </div>
             </a>
        </div>
        <div class="navbar2 flex">
            <h4>Pertanyaan</h4>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Buat Topik Diskusi</a>
        </div>
        <div class="container_isi">
            @if ($datas1->count() == 0)
            <div class="isi_kosong">
                <div class="container_image">
                    <img src="{{ asset('./image/helper/stairways.png') }}">
                </div>
                <h4>Pertanyaan Masih Kosong</h4>
                <p>Silahkan menambahkan pertanyaan ...</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Membuat forum diskusi</button>
                <!-- Button trigger modal -->
            </div>
            @else
            <div class="isi_ada">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Prioritas</th> 
                        <th scope="col">Subjek</th>  
                        <th scope="col">Owner</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas1 as $key=>$val)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $val->prioritas }}</td>
                            <td>{{ $val->subjek }}</td> 
                            <td>{{ $val->owner }}</td>
                            <td>
                                <div class="container_button flex">
                                    <a href="{{ url('/pertanyaan/'.$val->id) }}" class="btn btn-primary">Lihat</a>
                                    <a href="{{ url('/pertanyaan/delete/'.$val->id) }}" class="btn btn-primary">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
            @endif

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="POST" action="{{ url('/pertanyaan/create') }}">
                            @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tiket Terbuka</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="subjek" class="form-control" id="floatingInput" placeholder="Subjek" required>
                                        <label for="floatingInput">Subjek</label>
                                    </div> 
                                    <div class="form-floating mb-3" required> 
                                        <select id="floatingInput" name="prioritas" class="form-control">
                                            <option value="Sangat Penting">Sangat Penting</option>
                                            <option value="Penting">Penting</option>
                                            <option value="Biasa">Biasa</option>
                                        </select>
                                        <label for="floatingInput">Prioritas</label>
                                    </div> 
                                    <div class="form-floating mb-3">
                                        <textarea type="text" name="deskripsi" class="form-control" id="floatingInput" placeholder="Tulis Deskripsi Disini ..." required></textarea>
                                        <label for="floatingInput">Deskripsi</label>
                                    </div> 
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary w100">KIRIM</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div> 
        </div>
    </div>
@endsection