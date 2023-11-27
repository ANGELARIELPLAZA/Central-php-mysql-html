<?php include '../public/header.php'; ?>
<head>
    <meta charset="UTF-8">
    <title>Ticket de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;

        }
        .ticket {
            width: 300px;
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #000;
        }
        .header {
            text-align: center;
            font-weight: bold;
        }
        .info {
            margin-top: 10px;
        }
        .item {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="header">
            <h2>Ticket de Compra</h2>
        </div>
        <div class="info">
            <p><strong>Fecha:</strong> <?php echo date('d/m/Y H:i:s'); ?></p>
            <p><strong>Número de Ticket:</strong> 00123</p>
        </div>
        <hr>
        <div class="item">
            <p><strong>Producto:</strong> Producto 1</p>
            <p><strong>Precio:</strong> $10.00</p>
            <p><strong>Cantidad:</strong> 2</p>
            <p><strong>Total:</strong> $20.00</p>
        </div>
        <hr>
        <div class="info">
            <p><strong>Total a Pagar:</strong> $35.00</p>
        </div>
        <p><img src="./js/qrcode/qrcode.php?s=qrl&d=8675309"></p>

    </div>
    <script>
        // Imprimir el ticket al cargar la página
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
