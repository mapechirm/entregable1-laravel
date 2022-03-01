<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @if ($style)
    <style>
      {{ $stylecontent }}    
    </style>
    @endif

    @if ($css)
      <link rel="stylesheet" href="{{ $cssfilename }}">
    @endif

    <title>{{ $title }}</title>
  </head>
  <body style="background-color: #C6E5DF">
    @include('partials.alerts') {{-- Preguntar --}}

    @auth
        @include('partials.nav')
    @endauth
    <div
      class="container d-flex justify-content-center align-items-center flex-column mt-5" style="height: 80vh" >
        {{ $content }}
    </div>

    @if ($isForm) 
      <script src="/js/validacionFormularios.js"></script>
    @endif
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
