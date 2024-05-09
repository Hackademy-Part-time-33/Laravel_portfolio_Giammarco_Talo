<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Servizi Offerti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="/css/style.css" rel="stylesheet">
</head>
<body class="bg-dark">
  
  {{-- navbar --}}
  <nav class="navbar navbar-expand-lg bg-black mb-md-5">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('aboutus') }}">Chi Sono</a>
          </li>
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle" href="{{ route('services') }}" id="navbarDropdown" role="button" aria-expanded="false">
              Servizi
            </a>
            <ul class="dropdown-menu bg-black">
              @foreach ($array as $element)
              <li><a class="dropdown-item" href="#">{{ $element }}</a></li>
              @endforeach
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h1>Servizi Offerti</h1>
  <ul>
    @foreach ($array as $element)
    <li><a class="dropdown-item" href="#">{{ $element }}</a></li>
    @endforeach
  </ul>
  {{-- footer --}}
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-5">
      <div class="col-md-12 text-center">
        <span class="mb-3 mb-md-0 text-white">&copy; 2024 Company, Inc</span>
      </div>
    </footer>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  </html>
  {{-- {{route('detail', ['service' => $element])}} --}}