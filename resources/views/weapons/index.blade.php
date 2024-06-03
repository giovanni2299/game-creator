@extends('layouts.app')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row gx-2 gy-2">
                    @foreach ($weapons as $weapon)
                        
                        <div class="col-3">
                            <div class="card">
                                <div class="card-header">
                                    <p class="text-bold fs-3"> {{$weapon->name}}</p>

                                </div>
                                <div class="card-body">
                                    <a class="btn btn-primary" href="{{route('weapons.show', $weapon)}}">More info</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                  
            </div>
        </section>

       
    </main> 
@endsection