@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($characters as $character)
                <div class="col-sm-12 col-md-4 col-lg-3 card-group my-3">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $character->name }}</h5>
                            <p class="card-text">{{ $character->description }}</p>

                            <a class="btn btn-secondary mt-auto"
                                href="{{ route('character', ['id' => $character->id]) }}">Details</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <h1>Prova</h1>
@endsection
