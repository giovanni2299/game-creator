@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center p-3">
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

                   
                        
                        <div class="d-flex gap-2">
                            <a class="btn me-2 btn-primary" href="{{ route('characters.edit', $character) }}">edita personaggio  </a>

                            <form action="{{ route('characters.destroy',$character) }}" method="POST">
                              @method('DELETE')
                              @csrf
              
                              <button class="btn btn-danger" href="">elimina personaggio</button>
              
                            </form>
                          </div>
                        

                    



                </div>
            </div>
        </div>
    </div>
</div>
@endsection