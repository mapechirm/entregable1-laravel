@if ( session('success') )
    <div class="alert alert-success alert-dismissible position-fixed bottom-0 end-0">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      {{ session('success') }}
    </div>
@endif

@if (session('danger') || ($errors) -> first())
    <div class="alert alert-danger alert-dismissible position-fixed bottom-0 end-0">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      @if ($errors)
          {{ ($errors) -> first() }}
      @endif

      @if (session('danger'))
        {{ session('danger') }}
      @endif
    </div>
@endif
