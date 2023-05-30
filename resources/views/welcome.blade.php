@extends('master')
@section('content')
       <h1>Registratie SyntraPXL docent</h1>
    

      
  <div class="row">
    <form class="col-md-6">
      <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" class="form-control" id="lastname" name="lastname" required>
      </div>
      <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" class="form-control" id="firstname" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="website">Website:</label>
        <input type="url" class="form-control" id="website" name="website" required>
      </div>
      <div class="form-group">
        <label for="remarks">Remarks:</label>
        <textarea class="form-control" id="remarks" name="remarks" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" class="form-control" id="description" name="description" required>
      </div>
    
      <div class="form-group">
        <label for="category_id">Category ID:</label>
        <input type="number" class="form-control" id="category_id" name="category_id">
      </div>
      <div class="form-group">
        <label for="location_id">Location:</label>
        <select class="form-control" id="location_id" name="location_id" required>
          <option value="">Select a location</option>
          @foreach ($locations as $location)
          <option value="{{ $location->id }}">{{ $location->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="streetnr">Street Number:</label>
        <input type="text" class="form-control" id="streetnr" name="streetnr">
      </div>
      <div class="form-group">
        <label for="codecity">City Code:</label>
        <input type="text" class="form-control" id="codecity" name="codecity">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="col-md-6">
    <h2>Docenten op de kaart</h2>
   
    <img src="https://www.syntra.be/wp-content/uploads/2022/07/mapje-met-dots.png" class="img-fluid mb-4">
    <p>Kan jij een extra duwtje in de rug gebruiken om te slagen? Wij bieden begeleiding op maat van de cursist. De leercoaches helpen je gratis om je manier van leren te verbeteren. Mensen die een extra uitdaging met zich meedragen zoals dyslexie, dyscalculie, ADHD, autisme, enz. kunnen ook op de nodige hulp rekenen van de leercoaches.</p>

    <p>Kan jij een extra duwtje in de rug gebruiken om te slagen? Wij bieden begeleiding op maat van de cursist. De leercoaches helpen je gratis om je manier van leren te verbeteren. Mensen die een extra uitdaging met zich meedragen zoals dyslexie, dyscalculie, ADHD, autisme, enz. kunnen ook op de nodige hulp rekenen van de leercoaches.</p>
    </div>
  </div>


@endsection