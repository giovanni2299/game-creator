@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="row">
            @foreach($characters as $character)
            <div class="col-3">
                {{$character->name}}
                <button>Visualizza Dett</button>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection