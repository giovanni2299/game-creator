@extends('layouts.app')

@section('content')
<section class="page-main">
    <section   section class="hero ">
        <img src="/img/dragon.jpeg" alt="">
    </section>
    <section class="page-main">
<div class="container">
    <div class="row justify-content-center p-3">
        <div class="col-5">
            <div class="card">
                <img src="{{ $character->type->url_img }}" alt="">
            </div>
        </div>
        <div class="col-7">
            <div class="card text-bg-secondary">
                <div class="card-header my-card-header">
                    <h2>Name: {{$character->name}}</h2>
                </div>
                <div class="card-body">
                    <p>
                        Type:
                        {{$character->type->name}}
                    </p>
                    <p>Description: 
                        {{$character->description}}
                    </p>
                    <p>
                        Attack:
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
                    <p>
                        <strong>Weapons:</strong>
                        <br>
                        @foreach ($character->weapons as $weapon )
                            {{ $weapon->name }}
                            <br>
                        @endforeach

                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn me-2 btn-primary" href="{{ route('characters.edit', $character) }}">Edit Character</a>

                        {{-- <form action="{{ route('characters.destroy',$character) }}" method="POST">
                            @method('DELETE')
                            @csrf
            
                            <button class="btn btn-danger" href="">Delete Character</button>
            
                        </form> --}}
                        
                    <form class="delete-form" action="{{ route('characters.destroy',$character) }}" method="POST">
                    
                      @csrf
                      @method('DELETE')

                      <button class="btn btn-danger">Delete</button>
                    
                    </form>
              
                  
                {{-- @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</section>
@endsection