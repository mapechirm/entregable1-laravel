<!-- Modal actualizar -->
<div class="modal" id="actualizarVideojuego{{ $cont }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Actualizar Videojuego</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
        ></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form
          action="{{ route('videojuegos.update', ["videojuego" => $videojuego ]) }}"
          method="POST"
          class="d-grid gap-2 needs-validation"
          style="width: 100%"
        >
          @method('PUT')
          @csrf
          <div class="form-floating m-2">
            <input
              id="nombre"
              type="text"
              class="form-control"
              name="nombrevideojuego"
              placeholder="a"
              value="{{ $videojuego -> nombre }}"
              required
            />
            <label for="nombre" class="form-label"
              >Nombre del Videojuego</label
            >
            <div class="invalid-feedback">
              Por favor llene todos los campos
            </div>
          </div>
          <div class="form-floating m-2">
            <input
              id="clasificacion"
              type="text"
              class="form-control"
              name="clasificacion"
              placeholder="a"
              required
              value="{{ $videojuego -> clasificacion }}"
            />
            <label for="clasificacion" class="form-label"
              >Clasificación</label
            >
            <div class="invalid-feedback">
              Por favor llene todos los campos
            </div>
          </div>
          <div class="input-group p-2">
            <span class="input-group-text"> Consola </span>
            <select name="consola" id="" class="form-select">
              <option value="{{ $consola = "Ps" }}" {!! ($videojuego -> consola == $consola) ? 'selected' : ''!!}>Playstation</option>
              <option value="{{ $consola = "Xb" }}" {!! ($videojuego -> consola == $consola) ? 'selected' : ''!!}>Xbox</option>
              <option value="{{ $consola = "Pc" }}" {!! ($videojuego -> consola == $consola) ? 'selected' : ''!!}>PC</option>
              <option value="{{ $consola = "Mb" }}" {!! ($videojuego -> consola == $consola) ? 'selected' : ''!!}>Mobil</option>
              <option value="{{ $consola = "Sw" }}" {!! ($videojuego -> consola == $consola) ? 'selected' : ''!!}>Switch</option>
            </select>
          </div>
          <div class="form-floating m-2">
            <input
              id="precio"
              type="number"
              class="form-control"
              name="precio"
              placeholder="a"
              required
              step="0.01"
              value="{{ $videojuego -> precioAdq }}"
            />
            <label for="confpass" class="form-label"
              >Precio de Adquisición</label
            >
            <div class="invalid-feedback">
              Por favor llene todos los campos
            </div>
          </div>
          <div class="container d-flex m-3 justify-content-end modal-footer">
            <button
              type="submit"
              class="btn btn-primary m-2"
            >
              Actualizar registro
            </button>
            <button
              type="button"
              class="btn btn-danger m-2"
              data-bs-dismiss="modal"
            >
              Cancelar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>