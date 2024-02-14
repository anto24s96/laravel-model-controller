@extends('layout.app')

@section('content')
    <div class="container py-5">
        <div class="row pb-5">
            <div class="col-12">
                <h1 class="fw-bolder">DB MOVIES</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3 py-3">
                    <div class="card text-center border-5 border-danger bg-dark text-white p-3 my-card pointer">
                        <h4 class="pb-3 text-uppercase fw-bolder"><span>{{ $movie['title'] }}</span></h4>
                        <div class="pb-2">Orig.Title: <span class="fst-italic">{{ $movie['original_title'] }}</span>
                        </div>
                        <div class="pb-2">Country: <span class="fst-italic">{{ $movie['nationality'] }}</span>
                        </div>
                        <div class="pb-2"> Realase Date: <span class="fst-italic">{{ $movie['date'] }}</span>
                        </div>
                        <div class="pb-2">Vote: <span class="fst-italic">{{ $movie['vote'] }}</span></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
