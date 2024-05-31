@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h2>Nome: {{$character->name}}</h2>
                </div>
                <div class="card-body">
                    <p>Descrizione: 
                        {{$character->description}}
                    </p>
                    <p>
                        Attacco:
                        {{$character->attack}}
                    </p>
                    <p>
                        Defence:
                        {{$character->defence}}
                    </p>
                    <p>
                        Speed:
                        {{$character->speed}}
                    </p>
                    <p>
                        Life-Points:
                        {{$character->life}}
                    </p>

                    <a href="{{ route('characters.show', $character) }}"></a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection