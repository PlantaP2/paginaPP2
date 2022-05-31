@props(['clients'])
{{ $slot }}


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Proyectos</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="ps-4 p-0 overflow-auto" style="list-style:circle;">
      @foreach($clients as $client)
          <li ><a class="h6 text-dark" href="{{ route('clientes.show', $client) }}">{{ $client->name }}</a></li>
      @endforeach
    </ul>
  </div>
</div>