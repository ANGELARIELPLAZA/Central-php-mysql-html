<?php
session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: formulario.html");
    exit();
}
?>

<?php include '../public/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <title>Registro de Ventas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <!-- HTML: contenido para usuarios logueados -->
    <h1>Bienvenido, <?php echo $_SESSION["usuario"]; ?></h1>
    <a href="CorteCaja.php">Corte de caja</a>
    <a href="Caja.php">Caja</a>
    <a href="logout.php">Cerrar sesión</a>

    <h3>Registro de Ventas</h3>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Turno 1</h5>
                        <p class="card-text">BOLETOS:</p>
                        <p class="card-text">DINERO:</p>
                        <button type="button" class="btn btn-primary">Imprimir</button>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Turno 2</h5>
                        <p class="card-text">BOLETOS:</p>
                        <p class="card-text">DINERO:</p>
                        <button type="button" class="btn btn-primary">Imprimir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped mt-4">
        <thead class="thead-dark">
            <tr>
                <th>ID Venta</th>
                <th>Fecha</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2023-11-25</td>
                <td>Producto A</td>
                <td>5</td>
                <td>$250.00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2023-11-26</td>
                <td>Producto B</td>
                <td>3</td>
                <td>$120.00</td>
            </tr>
            <!-- Puedes agregar más filas con datos de ventas -->
        </tbody>
    </table>

</body>

</html>