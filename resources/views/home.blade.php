@extends('master')
@section('content')
  <div class="row">
    <div class="col-md-10">
      <h2>Welkom</h2>
       {{--  make cards of all the teachers with a contact button ($teachers) --}}
        
   <div class="container mb-3">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <input type="text" id="search" name="search" class="form-control" placeholder="Zoek een docent">
                <button class="btn btn-primary mt-2 search" type="submit">Zoek</button>
            </form>
        </div>
        <div class="col-md-4">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <select name="category" id="category" class="form-control">
                    <option value="">Selecteer categorie</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary mt-2 search" type="submit">Zoek</button>
            </form>
        </div>
        <div class="col-md-4">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <select name="location" id="location" class="form-control">
                    <option value="">Selecteer locatie</option>
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary mt-2 search" type="submit">Zoek</button>
            </form>
        </div>
    </div>
</div>



  <div class="container">
  <div class="row">
  @if ($teachers->isEmpty())
    <p>No teachers found.</p>
  @else
      @foreach ($teachers as $teacher)
          <div class="col-md-4">
              <div class="card mb-3">
                  <div class="card-body">
                      <h5 class="card-title">{{ $teacher->firstname }} {{ $teacher->lastname }}</h5>
                      @if (!empty($teacher->category->name))
                          <h6 class="card-subtitle mb-2 text-muted category"><i class="fa-solid fa-fire-flame-simple"></i> {{ $teacher->category->name }}</h6>
                      @else
                          <h6 class="card-subtitle mb-2 text-muted">Nog geen categorie toegewezen</h6>
                      @endif


                      @if (!empty($teacher->location->name))
                          <h6 class="card-subtitle mb-2 text-muted location"><i class="fa-regular fa-building"></i> {{ $teacher->location->name }}</h6>
                      @else
                          <h6 class="card-subtitle mb-2 text-muted">Nog geen locatie toegewezen</h6>
                      @endif
                        <p class="card-text">{{ $teacher->description }}</p>

                      <a href="" class="card-link teacher">Contact</a>
                  
                  </div>
              </div>
          </div>
      @endforeach
  @endif


  </div>
</div>


            




      </div>
  </div>
@endsection