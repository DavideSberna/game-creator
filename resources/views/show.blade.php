@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card my-5">
            <div class="row g-0">
                <div class="col-md-4 bg-secondary">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">{{ $character->name }}</h4>
                        <p class="card-text">{{ $character->description }}</p>
                        <p class="card-text">{{ $character->type_id }}</p>
                        <div class="text-end">
                            <small class="text-body-secondary">
                                <p class="text-uppercase">Class basic Stats</p>

                                <ul class="list-unstyled">
                                    <li><span class="fw-lighter fst-italic">Attack</span> {{ $character->attack }}</li>
                                    <li><span class="fw-lighter fst-italic">Defence</span> {{ $character->defence }}</li>
                                    <li><span class="fw-lighter fst-italic">Speed</span> {{ $character->speed }}</li>
                                    <li><span class="fw-lighter fst-italic">Life</span> {{ $character->life }}</li>
                                </ul>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
