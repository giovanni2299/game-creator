@extends('layouts.app')

@section('content')

<section>
    <div class="container p-3" >
        <div class="ms-3">
            <a class="btn btn-success" href="{{route('welcome')}}">vai a welcome</a>
            <a class="btn btn-primary " href="{{route('characters.create')}}" >
                New Character
            </a>

        </div>
        <div class="row gx-2 gy-2 p-3">
            @foreach($characters as $character)
            <div class="col-3">
                <div class="card">
                    <div class="card-header text-center">
                        <p>
                            {{$character->name}}
    
                        </p>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <p>
                            <a class="btn btn-primary" href="{{route('characters.show', $character)}}">Visualizza Dett</a>
        
                        </p>

                    </div>
                   

                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection