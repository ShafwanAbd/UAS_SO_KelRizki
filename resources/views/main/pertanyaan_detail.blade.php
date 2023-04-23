@extends('layouts.sidebar')

@section('content') 
    <div class="container_pertanyaan detail">
        <div class="navbar1">
            <div class="flex">
             <a href="{{ url('/pertanyaan') }}" class="flex">
                <div class="container_image">
                    <img src="{{ asset('./image/helper/stairways.png') }}">
                </div>
                <p>Kembali</p>
             </a>
            </div>
             <a href="{{ route('logout') }}" class="flex"> 
                <p>Log Out</p>
                <div class="container_image">
                    <img src="{{ asset('./image/helper/stairways.png') }}">
                </div>
             </a>
        </div>
        <div class="navbar2 flex">
        </div>
        <div class="container_isi"> 
            <div class="isi_ada">
                <div class="header flex">
                    <div class="subjek flex">
                        <h2 class="title">{{ $model1->subjek }}</h2>
                        <h6 class="pt-2">({{ $model1->prioritas }})</h6>
                    </div>
                    <div class="info">
                        <h5>{{ $model1->owner }}</h5>
                        <h6>{{ $model1->created_at->diffForHumans() }}</h6>
                    </div>
                </div>
                <div class="isi">
                    <p>{{ $model1->deskripsi }}</p>
                </div>
                <div class="footer flex">
                    <a href="#">Share</a>
                    <a href="#">Follow</a>
                    <a href="#floatingInput" class="replyBtn" data-owner="{{ $model1->owner }}">Reply</a>
                    <a href="#">Report</a>
                </div>
            </div>

            @foreach($model2 as $key=>$val)
            <div class="isi_ada replyDetail">
                <div class="header flex">  
                    <div class="subjek">
                        @if (isset($val->replyTo))
                            <h5>Replying to {{ $val->replyTo }}</h5> 
                        @endif
                    </div>
                    <div class="info">
                        <h5>{{ $val->owner }}</h5>
                        <h6>{{ $val->created_at->diffForHumans() }}</h6>
                    </div> 
                </div> 
                <div class="isi">
                    <p>{{ $val->deskripsi }}</p>
                </div>
                <div class="footer flex">
                    <a href="#">Share</a>
                    <a href="#">Follow</a>
                    <a href="#floatingInput" class="replyBtn" data-owner="{{ $val->owner }}">Reply</a>
                    <a href="#">Report</a>
                </div>
            </div>
            @endforeach

            <div class="isi_ada reply">
                <div class="header flex">
                    <div class="subjek">
                        <h2>Your Answer</h2>
                    </div>
                </div>
                <form method="post" action="{{ url('/pertanyaan/createReply/'.$model1->id) }}">
                @csrf                                  
                <div class="isi mb-3">      
                    <p class="replyTo"></p>
                    <input type="hidden" name="replyTo" id="inputReplyTo">
                    <textarea type="text" name="deskripsi" class="form-control" id="floatingInput" placeholder="Tulis Deskripsi Disini ..."></textarea>
                </div>
                <div class="footer flex">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>

            <script>
                $(document).ready(function(){
                    $('.replyBtn').click(function(){
                        var owner = $(this).data('owner');
                        $('.replyTo').text('Replying to ' + owner);
                        $('#inputReplyTo').val(owner);
                    });
                });
            </script>
        </div>
    </div>
@endsection