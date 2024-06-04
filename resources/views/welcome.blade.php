 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        @extends('layouts.app')

       
            
        <main>
            <section>
                <div class="container">
                    <div class="row p-3">
                        <div class="col-3">
                            <a class="btn btn-dark" href="{{route('characters.index')}}">Charactes</a>
                        </div>
                        <div class="col-3">
                            {{-- <a class="btn btn-success" href="{{route('weapons.index')}}">Weapons</a> --}}
                        </div>
                        
                    </div>
                </div>
            </section>
        </main>

        {{-- <h1 class="text-center">Weapons</h1>
            
        <div class="container">
            <div class="btn btn-primay">
                <a class="btn btn-primary" href="{{route('characters.index')}}">see character</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Weight</th>
                        <th>Cost</th>
                        <th>Damage Dice</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($weapons as $weapon)
                    <tr>
                        <td>{{$weapon->name}}</td>
                        <td>{{$weapon->category}}</td>
                        <td>{{$weapon->weight}}</td>
                        <td>{{$weapon->cost}}</td>
                        <td>{{$weapon->damage_dice}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table> --}}
        </div>
    </body>
</html> 
