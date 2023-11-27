<?php
session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: formulario.html");
    exit();
}
?>
<?php include '../public/header.php'; ?>

<!-- HTML: contenido para usuarios logueados -->
<h1>Bienvenido, <?php echo $_SESSION["usuario"]; ?></h1>
<a href="CorteCaja.php">Corte de caja</a>    
            <a href="Caja.php">Caja</a>
            <a href="logout.php">Cerrar sesión</a>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        <form action="procesar.php" method="post">
    <!-- Contenido del formulario -->
    <div class="form-group">
        <label for="codigo_ruta">Código de Ruta:</label>
        <input type="number" class="form-control" id="codigo_ruta" name="codigo_ruta" required="">
    </div>
    <div class="form-group">
        <label for="num_boletos">Número de Boletos:</label>
        <input type="number" class="form-control" id="num_boletos" name="num_boletos" required="" min="1" max="5">
    </div>
    <div class="form-group">
    <label for="tipo_descuento">Tipo de Descuento:</label>
    <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipo_descuento" id="opcion1" value="opcion1">
        <label class="form-check-label" for="opcion1">Opción 1</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipo_descuento" id="opcion2" value="opcion2">
        <label class="form-check-label" for="opcion2">Opción 2</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipo_descuento" id="opcion3" value="opcion3">
        <label class="form-check-label" for="opcion3">Opción 3</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipo_descuento" id="opcion4" value="opcion4">
        <label class="form-check-label" for="opcion4">Opción 4</label>
    </div>
</div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Enviar">
    </div>
</form>

        </div>

    <?php include 'tablaRutas.php'; ?>


<?php include '../public/footer.php'; ?>
