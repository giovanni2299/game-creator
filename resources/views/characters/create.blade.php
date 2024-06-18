@extends('layouts.app')

@section('content')

<section class="create-character text-white">
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

      <div class="accordion" id="accordionExample">
        <div class="accordion-item bg-dark text-white">
          <h2 class="accordion-header " id="headingOne">
            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Select Weapons
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body d-flex flex-wrap">
              @foreach ($weapons as $weapon)
                <div class="form-check">
                  <input @checked(in_array($weapon->id, old('weapons', []))) type="checkbox" name='weapons[]' id='weapon-{{ $weapon->id }}' value='{{ $weapon->id }}'>
                  <label for="weapon-{{ $weapon->id }}">
                    {{ $weapon->name }}
                  </label>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <div>
          <label for="attack">Attack</label>
        </div>
        <input type="number" id="attack" name="attack" min="0" max="99999" />
      </div>


        <div class="mb-3">
          <div>
            <label for="defence">Defence</label>

          </div>
          <input type="number" id="defence" name="defence" min="0" max="99999" />
        </div>

        <div class="mb-3">
          <div>
            <label for="speed">Speed</label>

          </div>
          <input type="number" id="speed" name="speed" min="0" max="99999" />
        </div>

        <div class="mb-3">
          <div>
            <label for="life">Life</label>

          </div>
          <input type="number" id="life" name="life" min="0" max="999" />
        </div>

        <button class="btn btn-light">Add Character</button>

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