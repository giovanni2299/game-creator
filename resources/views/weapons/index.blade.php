@extends('layouts.app')

@section('content')
<section class="page-main">
    <div class="container">
        <p class="mt-2">
            <a class="btn btn-success" href="{{route('weapons.create')}}">Create a New Weapon</a>
        </p>
        <div class="row gx-2 gy-2">
            @foreach ($weapons as $weapon)
                
                <div class="col-3">
                    <div class="card h-100 my-card text-bg-secondary">
                        <div class="card-header my-card-header">
                            <p class="text-bold fs-3"> {{$weapon->name}}</p>

                        </div>
                        <div class="card-body">
                            <a class="btn btn-outline-dark" href="{{route('weapons.show', $weapon)}}">More info</a>
                            
                            {{--<a class="btn btn-danger" href="route{{route('weapons.delete')}}">Create a New Weapon</a>--}}
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            
    </div>
</section>
@endsection