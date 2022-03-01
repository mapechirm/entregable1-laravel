
<x-template title="Consulta de Videojuegos" :css="false" :style="false" :isForm="true">
    <x-slot name="content">
    
      @php
      $cont = 1 
      @endphp

    <div class="container overflow-auto">
    <h1 class="m-4 pb-4 text-center">Consulta de Videojuegos</h1>
        <table
          class="table table-hover table-striped table-bordered table-responsive"
        >
          <thead class="table-dark">
            <th>Nombre del videojuego</th>
            <th>Clasificación</th>
            <th>Consola</th>
            <th>Precio de adquisición</th>
            <th>Precio de venta</th>
            <th>Actualización</th>
            <th>Eliminación</th>
          </thead>
          <tbody>
            @foreach ($videojuegos as $videojuego)
            <tr>
              <td>{{ $videojuego -> nombre }}</td>
              <td>{{ $videojuego -> clasificacion }}</td>
              <td>{{ $videojuego -> consola }}</td>
              <td>${{ $videojuego -> precioAdq }}</td>
              <td>${{ $videojuego -> precioVent }}</td>
              <td>
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#actualizarVideojuego{{ $cont }}"
                >
                  Actualizar registro
                </button>
              </td>
              <td>
                <button
                  type="button"
                  class="btn btn-danger"
                  data-bs-toggle="modal"
                  data-bs-target="#eliminarVideojuego{{ $cont++ }}"
                >
                  Eliminar registro
                </button>
              </td>
            </tr>
            @endforeach

            @php
            $cont = 1 
            @endphp

            @foreach ($videojuegos as $videojuego)
                @include('partials.modalActualizar')
                @include('partials.modalBorrar')
                @php
                    $cont++
                @endphp
            @endforeach
            
          </tbody>
        </table>

        
      </div>
    </x-slot>
</x-template>