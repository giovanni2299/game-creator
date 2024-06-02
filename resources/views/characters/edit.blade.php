@extends('layouts.app')

@section('content')

  <section class="edit-character">
    <div class="container">
      <h2 class="fs-2">Modify Character</h2>
    </div>
    <div class="container">
      <form action="{{ route('characters.update',$character) }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 
        @method('PUT')

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="insert Name.." value="{{$character->name}}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" name="description" class="form-control" id="description" placeholder="insert Description.." value="$character->description">
        </div>

        <div class="mb-3">
          <label for="attack">Attack</label>
          <input type="number" id="attack" name="attack" min="0" max="99999" value="{{$character->attack}}"/>
        </div>

        <div class="mb-3">
          <label for="defence">Defence</label>
          <input type="number" id="defence" name="defence" min="0" max="99999" value="{{$character->defence}}"/>
        </div>

        <div class="mb-3">
          <label for="speed">Speed</label>
          <input type="number" id="speed" name="speed" min="0" max="99999" value="{{$character->speed}}"/>
        </div>

        <div class="mb-3">
          <label for="attack">Life</label>
          <input type="number" id="life" name="life" min="0" max="999" value="{{$character->life}}"/>
        </div>

        <button class="btn btn-primary">Add Character</button>
      </form>

      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
    </div>
  </section>
  

@endsection