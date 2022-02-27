<x-template title="Registro de Videojuegos" :css="false" :style="true" :isForm="true">
  <x-slot name="stylecontent">
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  </x-slot>

  <x-slot name="content">
    {{-- @include('partials.alerts') --}} {{-- Preguntar --}}
    <h1 class="m-4 pb-4">Registro de Videojuegos</h1>
      <form
        action="{{ route('videojuegos.store') }}"
        method="post"
        class="d-grid gap-2 needs-validation"
        novalidate
      >
      @csrf
        <div class="form-floating">
          <input
            id="nombre"
            type="text"
            class="form-control"
            name="nombrevideojuego"
            placeholder="a"
            required
          />
          <label for="nombre" class="form-label">Nombre del Videojuego</label>
          <div class="invalid-feedback">Por favor llene todos los campos</div>
        </div>
        <div class="form-floating">
          <input
            id="clasificacion"
            type="text"
            class="form-control"
            name="clasificacion"
            placeholder="a"
            required
          />
          <label for="clasificacion" class="form-label">Clasificación</label>
          <div class="invalid-feedback">Por favor llene todos los campos</div>
        </div>
        <div class="input-group">
          <span class="input-group-text"> Consola </span>
          <select name="consola" id="" class="form-select">
            <option value="Ps">Playstation</option>
            <option value="Xb">Xbox</option>
            <option value="Pc">PC</option>
            <option value="Mb">Mobil</option>
            <option value="Sw">Switch</option>
          </select>
        </div>
        <div class="form-floating">
          <input
            id="precio"
            type="number"
            class="form-control"
            name="precio"
            placeholder="a"
            required
            step="0.01"
          />
          <label for="confpass" class="form-label">Precio de Adquisición</label>
          <div class="invalid-feedback">Por favor llene todos los campos</div>
        </div>
        <input
          type="submit"
          value="Registrar videojuego"
          class="btn btn-success m-2"
          name="registrarUsuario"
        />
      </form>
  </x-slot>
</x-template>