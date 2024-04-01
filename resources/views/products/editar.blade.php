<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
      <form action="{{ route('productos.update', $producto->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}">
          </label>
        </div>
        <div class="mb-3">
          <label for="precio" class="form-label">Precio:
          <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}">
          </label>
        </div>
        <div class="mb-3">
          <label for="stock" class="form-label">Stock:
          <input type="number" class="form-control" id="stock" name="stock" value="{{ $producto->stock }}">
          </label>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>