@extends('layouts.app')

@section('content')

  <section class="create-character">
    <div class="container">
      <h2 class="fs-2">Add new Character</h2>
    </div>
    <div class="container">
      <form action="{{ route('characters.store') }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="insert Name..">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" name="description" class="form-control" id="description" placeholder="insert Description..">
        </div>

        <div class="mb-3">
          <div>
            <label for="attack">Attack</label>
          </div>
          <input type="number" id="attack" name="attack" min="0" max="99999"/>
        </div>

        <div class="mb-3">
          <label for="defence">Defence</label>
          <input type="number" id="defence" name="defence" min="0" max="99999"/>
        </div>

        <div class="mb-3">
          <label for="speed">Speed</label>
          <input type="number" id="speed" name="speed" min="0" max="99999"/>
        </div>

        <div class="mb-3">
          <label for="life">Life</label>
          <input type="number" id="life" name="life" min="0" max="999"/>
        </div>

        <button class="btn btn-primary">Add Character</button>

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
@endsection