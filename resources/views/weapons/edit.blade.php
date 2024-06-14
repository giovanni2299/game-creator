@extends('layouts.app')

@section('content')
    <main>
        <section class="create-weapons">
            <div class="container">
                <h1>Edit Weapon
                    {{$weapon->name}}
                </h1>
            </div>
            <div class="container">
                @csrf
                <form action="{{route('weapons.store')}}" method="POST">

                  @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Insert the Name..">
                      </div>
              
                      <div class="mb-3">
                        <div>
                          <label for="category">Category:</label>
                        </div>
                        <input type="text" id="category" name="category" placeholder="Insert the category"/>
                      </div>
              
                      <div class="mb-3">
                        <div>
                          <label for="weight">Weight:</label>
              
                        </div>
                        <input type="text" id="weight" name="weight" placeholder="Insert the Weight" />
                      </div>
              
                      <div class="mb-3">
                        <div>
                          <label for="cost">Cost:</label>
              
                        </div>
                        <input type="text" id="cost" name="cost" placeholder="Insert the Cost" />
                      </div>
              
                      <div class="mb-3">
                        <div>
                          <label for="damage_dice">Damage Dice:</label>
              
                        </div>
                        <input type="text" id="damage_dice" name="damage_dice" placeholder="Insert the Damage"/>
                      </div>
              
                      <button class="btn btn-primary">Edit Weapon</button>
                      



                </form>
                @if ($errors->any())
        <p class="">
          <ul>
            @foreach ($errors->all() as $error )
            <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
          </ul>
        </p>
      @endif
               
                

            </div>
        </section>
    </main>
@endsection