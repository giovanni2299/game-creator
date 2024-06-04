@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <h1 class='p-2'>{{ $weapon->name }}</h1>
            <div class="row">
                <div>
                    <ul class="list-unstyled d-flex">
                        <li class="p-3">
                            <h1>Category:</h1>
                            <p class="fs-2">
                                {{$weapon->category}}
                            </p>
                        </li>
                        <li class="p-3">
                            <h1>Weight:</h1>
                            <p class="fs-2">
                                {{$weapon->weight}}
                            </p>
                        </li>
                        <li class="p-3">
                            <h1>Cost:</h1>
                            <p class="fs-2">
                                {{$weapon->cost}}

                            </p>
                        </li>
                        <li class="p-3">
                            <h1>Damage:</h1>
                            <p class="fs-2">
                                {{$weapon->damage_dice}}

                            </p>
                        </li>
                        <li>
                            <a class="btn btn-primary" href="{{route('weapons.edit',$weapon)}}">Edit Weapons</a>
                            
                            <form action="{{ route('weapons.destroy',$weapon) }}" method="POST">
                                @method('DELETE')
                                @csrf
                
                                <button class="btn btn-danger"> Delete Weapon </button>
                
                              </form>
                            
                        </li>
                        

                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
