<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SyntraPXL Docenten portaal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      h1 {
        color: #CC0000;
        font-weight: 200;
      }
          h2 {
    
        font-weight: 200;
      }

      li.nav-item.docent a{
            background-color: #CC0000;
            color: white!important;
            border-radius: 3px;
        }

        button.btn.btn-primary.mt-2.search {
          background-color: #df2618;
          border: none;
          font-size: small;
      }

      .card-link.teacher {
          background-color: black;
          color: white;
          padding: 5px;
          text-decoration: none;
          border-radius: 4px;
          font-size: 14px;
          /* position: absolute; */
          /* margin-right: 3px; */
          display: inline;
          float: right;
      }

      h6.card-subtitle.mb-2.text-muted.category {
    background-color: white;
    border-style: solid;
    border-radius: 7px;
    font-weight: 400;
    font-size: 9px;
    padding: 5px;
    width: fit-content;
    border-color: #cc0000;
    border-width: 1px;
    color: #CC0000!important;
}
      h6.card-subtitle.mb-2.text-muted.location {
    background-color: white;
    border-style: solid;
    border-radius: 7px;
    font-weight: 400;
    font-size: 9px;
    padding: 5px;
    width: fit-content;
    border-color: #000000;
    border-width: 1px;
    color: #000000!important;
}
    </style>
  </head>
  <body>
    <div class="container pt-2 mb-4 mt-2">
      <div class="d-flex align-items-center justify-content-between">
        <img src="https://www.syntrapxl.be/themes/custom/sassy/assets/images/syntra/logo.svg" alt="logo" width="150">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="{{Request::path() === '/' ? 'nav-link active active' : 'nav-link' }}" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="{{Request::path() === 'about' ? 'nav-link active active' : 'nav-link' }}" href="{{route('about')}}">About us</a>
                </li>
                <li class="nav-item">
                  <a class="{{Request::path() === 'faq' ? 'nav-link active active' : 'nav-link' }}" href="{{route('faq')}}">FAQ</a>
                </li>
                <li class="nav-item">
                  <a class="{{Request::path() === 'contact' ? 'nav-link active active' : 'nav-link' }}" href="{{route('contact')}}">Contact us</a>
                </li>

                 <li class="nav-item docent">
                  <a class="nav-link" href="{{route('register')}}">Registratie docent</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="container">
      @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
