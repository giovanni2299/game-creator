@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <h1 class='p-5 text-white'>{{ $weapon->name }}</h1>
            <div class="row">
                <div class="col-8">
                    <div class="card  my-card text-bg-secondary">
                        <div class="p-3">
                            <h5>Category:</h5>
                            <p class="">
                                {{$weapon->category}}
                            </p>
                        </div>
                        <div class="p-3">
                            <h5>Weight:</h5>
                            <p class="">
                                {{$weapon->weight}}
                            </p>
                        </div>
                        <div class="p-3">
                            <h5>Cost:</h5>
                            <p class="">
                                {{$weapon->cost}}

                            </p>
                        </div>
                        <div class="p-3">
                            <h5>Damage:</h5>
                            <p class="">
                                {{$weapon->damage_dice}}

                            </p>
                        </div>
                        <div class="d-flex gap-2" >
                            <a class="btn btn-dark" href="{{route('weapons.edit',$weapon)}}">Edit Weapons</a>
                            
                            <form class="delete-form" action="{{ route('weapons.destroy',$weapon) }}" method="POST">
                                @method('DELETE')
                                @csrf
                
                                <button class="btn btn-danger"> Delete Weapon </button>
                
                              </form>
                            
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
