<?php
include '../public/header.php';
include './db/conn.php';

$resultados_por_pagina = 3;

// Definir el número total de filas en la tabla
$sql_total = "SELECT COUNT(*) as total FROM rutas";
$resultado_total = $conexion->query($sql_total);
$total_filas = $resultado_total->fetch_assoc()['total'];

$total_paginas = ceil($total_filas / $resultados_por_pagina);

$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$offset = ($pagina_actual - 1) * $resultados_por_pagina;

// Verificar si se ha enviado una consulta de búsqueda
if (isset($_GET['buscar'])) {
    $busqueda = $_GET['buscar'];
    // Modificar la consulta para filtrar por la búsqueda
    $sql = "SELECT * FROM rutas WHERE code LIKE '%$busqueda%' OR destino LIKE '%$busqueda%' LIMIT $offset, $resultados_por_pagina";
} else {
    $sql = "SELECT * FROM rutas LIMIT $offset, $resultados_por_pagina";
}

$resultado = $conexion->query($sql);
?>

<div class="col-md-6">
    <h2 class="text-center mb-4">Tabla de precios</h2>
    <!-- Formulario de búsqueda -->
    <form action="" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar por código o destino" name="buscar">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Código de Ruta</th>
                <th>Destino</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['code'] . "</td>";
                    echo "<td>" . $fila['destino'] . "</td>";
                    echo "<td>" . $fila['precio'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No se encontraron resultados.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Paginación de Bootstrap -->
    <!-- ... Código de paginación ... -->
</div>

<?php
$conexion->close();
?>
