<x-template title="Login" :css="false" :style="false" :isForm="true">
  <x-slot name="content">
    <h1 class="m-4 pb-4">Ingreso a Mancos Anónimos</h1>
      <form
        action="{{ route('login') }}"
        method="post"
        class="d-grid gap-2 needs-validation"
        style="width: 40%"
        novalidate
      >
        @csrf
        <div class="form-floating">
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="a"
            name="email"
            required
          />
          <label for="email" class="form-label">Correo Electrónico</label>
          <div class="invalid-feedback">
            Por favor llene este campo con una dirección de correo electrónico
            válido
          </div>
        </div>
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="pass"
            placeholder="a"
            name="password"
            required
          />
          <label for="pass" class="form-label">Contraseña</label>
          <div class="invalid-feedback">
            Por favor llene este campo con una contraseña válida
          </div>
        </div>
        <input
          type="submit"
          value="Ingresar"
          class="btn btn-success m-2"
          name=""
        />
      </form>
  </x-slot>
</x-template>
