<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Send Email</title>
</head>
<body>
    <h3>Detalle de Vuelo</h3>
    <table class="table">
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Descuento</th>
                <th scope="col">Monto total</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($flight_sell_details as $flight)
            <tr>
            <th scope="row">{{ $flight->id }}</th>
                <td>{{ $flight->cantidad }}</td>
                <td>{{ $flight->precio }}</td>
                <td>{{ $flight->descuento }}</td>
                <td>{{ $flight->monto_total }}</td>
                <td>{{ $flight->tipo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    
    </br>
    {{-- <h3>Detalle de Vehículo</h3>
    <table class="table">
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Descuento</th>
                <th scope="col">Monto total</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @@foreach ($flight_sell_details as $flight)
            <tr>
            <th scope="row">$flight->id</th>
                <td>$flight->cantidad</td>
                <td>$flight->precio</td>
                <td>@$flight->descuento</td>
                <td>@$flight->monto_total</td>
                <td>@$flight->tipo</td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}
</body>
</html>