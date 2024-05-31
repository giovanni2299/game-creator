@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="row">
            @foreach($characters as $character)
            <div class="col-3">
                {{$character->name}}
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection