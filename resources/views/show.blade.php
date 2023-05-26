

    @extends('layouts.app')
    @section(?content)

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$character->name}}<a href="{{ route('character', ['id' => $character->id]) }}"></a></h5>
                            <p class="card-text">{{$character->descrizine}}</p>
                            <p class="card-text">{{$character->type_id}}</p>
                            <p class="card-text">{{$character->attack}}</p>
                            <p class="card-text">{{$character->life}}</p>
                            <p class="card-text">{{$character->speed}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
   @endsection