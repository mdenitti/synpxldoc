@extends('master')
@section('content')
  <div class="row">
    <div class="col-md-10">
      <h2>Welkom</h2>
       {{--  make cards of all the teachers with a contact button ($teachers) --}}

       <div class="container">
  <div class="row">
    @foreach ($teachers as $teacher)
    <div class="col-md-4">
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">{{ $teacher->firstname }} {{ $teacher->lastname }}</h5>
          @if (!empty($teacher->category->name))
            <h6 class="card-subtitle mb-2 text-muted">{{ $teacher->category->name }}</h6>
          @else
            <h6 class="card-subtitle mb-2 text-muted">Nog geen category toegewezen</h6>
          @endif
          <p class="card-text">{{ $teacher->description }}</p>

          <a href="mailto:{{ $teacher->email }}" class="card-link">Mail</a>
          <a href="tel:{{ $teacher->phone }}" class="card-link">Bel</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


            




      </div>
  </div>
@endsection