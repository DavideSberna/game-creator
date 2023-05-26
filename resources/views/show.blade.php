@extends('layouts.app')

name
description
type_id
attack
defence
speed
life


@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="car-body">
                <h1>{{$character->name }} </h1>
                <p>{{$character->description }}</p>
                <p>{{$character->type_id }}</p>
                <p>{{$character->defence }}</p>
                <p>{{$character->speed }}</p>
                <p>{{$character->life }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
