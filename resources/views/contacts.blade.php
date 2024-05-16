<x-layout>
    <h2 class="text-center text-white">invia una mail per avere maggiori informazioni</h2>

    <div class="container py-4">

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{route('send')}}" method="POST">
            @csrf
         <div class="mb-3">
          <label class="form-label">Nome</label>
          <input class="form-control" name="input_name" type="text" value="{{old('input_name')}}" placeholder="Nome*" />
         </div>
       
       
         <div class="mb-3">
          <label class="form-label">e-Mail</label>
          <input class="form-control" name="input_mail" type="email" value="{{old('input_mail')}}" placeholder="e-Mail*" />
         </div>
       
         <div class="mb-3">
          <label class="form-label">Telefono</label>
          <input class="form-control" name="input_tel" type="int" value="{{old('input_tel')}}" placeholder="Telefono" />
         </div>
         
         <div class="mb-3">
          <label class="form-label" >Messaggio</label>
          <textarea class="form-control" name="input_message" type="text" placeholder="Messaggio*" style="height: 10rem;">{{old('input_message')}}</textarea>
         </div>
       <p class="text-white">* campi obbligatori</p>
        
         <div class="d-grid">
          <button class="btn btn-primary btn-lg" type="submit" >Invia</button>
         </div>
       
        </form>
       
       </div>

</x-layout>