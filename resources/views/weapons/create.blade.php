@extends('layouts.app')

@section('content')
    <main>
        <section class="create-weapons">
            <div class="container">
                <h1>Create a new Weapon</h1>
            </div>
            <div class="container">
                @csrf
                <form action="{{route('weapons.store')}}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Insert the Name..">
                      </div>
              
                      <div class="mb-3">
                        <div>
                          <label for="categry">Category:</label>
                        </div>
                        <input type="text" id="categry" name="categry" placeholder="Insert the categoria"/>
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
                        <input type="text" id="cost" name="cost" placeholder="Insert the Costo" />
                      </div>
              
                      <div class="mb-3">
                        <div>
                          <label for="life">Damage:</label>
              
                        </div>
                        <input type="tetx" id="life" name="life" placeholder="Insert the  Damage"/>
                      </div>
              
                      <button class="btn btn-primary">Add Character</button>
              
                </form>

               
                

            </div>
        </section>
    </main>
@endsection