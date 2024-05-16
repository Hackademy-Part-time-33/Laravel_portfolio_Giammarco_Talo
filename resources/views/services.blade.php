<x-layout>
  
  <h1 class="">{{ $titolo }}</h1>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($services as $element)
        <div class="col">
          <div class="card shadow-sm">
            <img src="/images/placeholder.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="{{ $element['name'] }}">
            <div class="card-body">
              <h3 class="text-dark">{{ $element['name'] }}</h3>
              <p class="card-text">Tempo di realizzazione: {{ $element['tempo_di_realizzazione'] }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-body-secondary">Prezzo base: {{ $element['costo'] }}€</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  
  
</x-layout>