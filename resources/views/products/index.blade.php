<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('products.store') }}" method="post">
    @csrf
    <label> Ingrese el nombre del producto
      <input type="text" name="product_name" placeholder="Ingrese el nombre del producto">
    </label>
    <br>
    <label> Ingrese el precio del producto
      <input step="0.5" type="number" name="product_price" placeholder="Ingrese el precio del producto">
    </label>
    <br>
    <label> Ingrese el stock del producto
      <input type="number" name="product_stock" placeholder="Ingrese el stock del producto">
    </label>
    <br>
    <button type="submit">Guardar</button>
  </form>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->stock}}</td>
      </tr>
    @endforeach
</body>
</html>