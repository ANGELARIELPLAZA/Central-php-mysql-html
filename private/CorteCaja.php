<?php
session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: formulario.html");
    exit();
}
include './db/conn.php';


$hoy = date('d-m-Y'); // Obtener la fecha actual en formato 'YYYY-MM-DD'
// Consulta SQL para obtener los datos de la tabla ventas
$sql = "SELECT * FROM ventas WHERE fecha_registro = '$hoy'";
$resultado = $conexion->query($sql);
?>

<?php include '../public/header.php'; ?>

<head>
    <!-- ... Tu código HTML existente para estilos y título ... -->
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
    <!-- ... Código HTML existente ... -->
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
                <th>Fecha</th>
                <th>Hora</th>
                <th>Ruta</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['fecha_registro'] . "</td>";
                    echo "<td>" . $fila['hora_registro'] . "</td>";
                    echo "<td>" . $fila['nombre_ruta'] . "</td>";
                    echo "<td>" . $fila['cantidad_boletos'] . "</td>";
                    echo "<td>$" . $fila['total'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No se encontraron resultados.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>
