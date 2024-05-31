@extends('layouts.app')

@section('content')

<section>
    <div class="container" >
        <a class="btn btn-primary" href="{{route('characters.create')}}" >
            New Character
        </a>
        <div class="row">
            @foreach($characters as $character)
            <div class="col-3">
                {{$character->name}}
                <a class="btn btn-primary" href="{{route('characters.show', $character)}}">Visualizza Dett</a>
                
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection