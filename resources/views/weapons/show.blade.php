@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
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
                        

                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
