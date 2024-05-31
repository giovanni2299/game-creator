@extends('layout.app')

@section('content')

  <section class="edit-character">
    <div class="container">
      <h2 class="fs-2">Modify Character</h2>
    </div>
    <div class="container">
      <form action="{{ route('characters.update') }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 
        @method('PUT')

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="insert Name.." value="">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" name="description" class="form-control" id="description" placeholder="insert Description..">
        </div>

        <div class="mb-3">
          <label for="attack">Attack</label>
          <input type="number" id="attack" name="attack" min="0" max="99999" value=""/>
        </div>

        <div class="mb-3">
          <label for="attack">Defence</label>
          <input type="number" id="attack" name="attack" min="0" max="99999" value=""/>
        </div>

        <div class="mb-3">
          <label for="attack">Speed</label>
          <input type="number" id="attack" name="attack" min="0" max="99999" value=""/>
        </div>

        <div class="mb-3">
          <label for="attack">Life</label>
          <input type="number" id="attack" name="attack" min="0" max="999" value=""/>
        </div>

        <button class="btn btn-primary">Add Character</button>
      </form>
    </div>
  </section>
  

@endsection