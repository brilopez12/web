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
      <a href="{{ route('productos.create') }}">
        <button class="btn btn-primary">
          Crear
        </button>
      </a>
      <br><br>
      <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($productos as $producto)
            <tr>
              <td>{{ $producto->nombre }}</td>
              <td>{{ $producto->precio }}</td>
              <td>{{ $producto->stock }}</td>
              <td>
                <a href="{{ route('productos.edit', $producto->id) }}">
                  <button class="btn btn-warning">
                    Editar
                  </button>
                </a>
                <form action="{{ route('productos.destroy', $producto->id) }}" method="post" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">
                    Eliminar
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>