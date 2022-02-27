<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
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

    <div
      class="container d-flex justify-content-center align-items-center flex-column"
      style="height: 100vh"
      >
        {{ $content }}
    </div>

    @if ($isForm) 
      <script src="/js/validacionFormularios.js"></script>
    @endif
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
