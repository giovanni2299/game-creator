@extends('layouts.app')

@section('content')


    <!-- <section class="hero">
        <img src="/img/dragon.jpeg" alt="">
        <div class="container">

        </div>
    </section> -->
    <section class="page-main">

        <div class="container p-3" >
            
            <div class="button-new-character">
                <a class="btn btn-dark " href="{{route('characters.create')}}" >
                    New Character
                </a>
    
            </div>

            <div class="row pt-3 ">
                @foreach($characters as $character)
                <div class="col-3 p-2">
                    <div class="card my-card text-bg-secondary h-100 ">
                        <div class="card-header my-card-header text-center">
                            <p>
                                {{$character->name}}
        
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-end">
                                <a class="btn btn-outline-dark" href="{{route('characters.show', $character)}}">Show Details</a>
        
                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection