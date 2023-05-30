@extends('master')
@section('content')
       <h1>Registratie SyntraPXL docent</h1>
    

      
  <div class="row">
    <form class="col-md-6">
      <div class="form-group">
        <label for="lastname">Achternaam:</label>
        <input type="text" class="form-control" id="lastname" name="lastname" required>
      </div>
      <div class="form-group">
        <label for="firstname">Voornaam:</label>
        <input type="text" class="form-control" id="firstname" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefoon:</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="website">Website:</label>
        <input type="url" class="form-control" id="website" name="website" required>
      </div>
      <div class="form-group">
        <label for="remarks">Opmerkingen:</label>
        <textarea class="form-control" id="remarks" name="remarks" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="description">Benaming les:</label>
        <input type="text" class="form-control" id="description" name="description" required>
      </div>
    
      <div class="form-group">
        <label for="location_id">Categorie:</label>
        <select class="form-control" id="category" name="category_id" required>
          <option value="">Selecteer een domein</option>
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>


      <div class="form-group">
        <label for="location_id">Campus:</label>
        <select class="form-control" id="location_id" name="location_id" required>
          <option value="">Selecteer een locatie</option>
          @foreach ($locations as $location)
          <option value="{{ $location->id }}">{{ $location->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="streetnr">Straat & nummer:</label>
        <input type="text" class="form-control" id="streetnr" name="streetnr">
      </div>
      <div class="form-group">
        <label for="codecity">Postcode & gemeente:</label>
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