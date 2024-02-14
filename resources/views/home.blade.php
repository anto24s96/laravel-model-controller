@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <div>
                    <h1 class="text-center fw-bolder">BOOL MOVIES</h1>
                    <div class="d-flex justify-content-center py-3">
                        <a href="{{ route('movies') }}" class="btn btn-danger fw-bolder">SHOW MOVIES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
