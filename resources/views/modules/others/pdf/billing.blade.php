<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
        .invoice-card {
            background: white !important;
            color: black !important;
        }
        .information {
            background: linear-gradient(45deg, #1de099, #1dc8cd) !important;
            color: #FFF;
        }
    </style>

</head>
<body>
    <main>
            <div class="card invoice-card">
                <div class="card-header invoice-card">
            </div>
            <div class="card-body invoice-card">
            <span class="float-right" style="color:black;"> <strong>Factura:</strong> {{ $venta->source }} </span>
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <div>
                            <strong>GP14Airland</strong>
                        </div>
                        <div>Madalinskiego 8</div>
                        <div>71-101 Szczecin, Poland</div>
                        <div>Email: contacto@rollers.cl</div>
                        <div>Teléfono: +56 944 666 3333</div>
                    </div>
                </div>

            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Descripción</th>
                            <th class="center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="left strong">Origin License</td>
                            <td class="left">Extended License</td>
                            <td class="right">$999,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">

                </div>

            <div class="col-lg-4 col-sm-5 ml-auto">
            <table class="table table-clear">
            <tbody>
            <tr>
            <td class="left">
            <strong>Impuesto</strong>
            </td>
        <td class="right">${{ $venta->impuesto }}</td>
            </tr>
            <tr>
            <td class="left">
            <strong>Total</strong>
            </td>
            <td class="right">
            <strong>${{ $venta->monto_total }}</strong>
            </td>
            </tr>
            </tbody>
            </table>

            </div>

            </div>

            </div>
            </div>
    </main>

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-lg-left text-center">
                        <div class="copyright ">
                            &copy; Copyright <strong>GP14LATAM</strong>. Todos los derechos reservados
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- #footer -->
</body>
</html>