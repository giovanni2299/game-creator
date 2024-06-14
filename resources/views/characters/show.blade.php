@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center p-3">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h2>Name: {{$character->name}}</h2>
                </div>
                <div class="card-body">
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

                            <form action="{{ route('characters.destroy',$character) }}" method="POST">
                              @method('DELETE')
                              @csrf
              
                              <button class="btn btn-danger" href="">Delete Character</button>
              
                            </form>
                        </div>
                        

                    



                </div>
            </div>
        </div>
    </div>
</div>
@endsection