<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Computación</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once 'Templates/header.php'; ?>

    <section class="productos">
        <article class="producto">
            <img src="imagen1.jpg" alt="Portátil">
            <h2>Portátil</h2>
            <p>Descripción del producto.</p>
            <p>Precio: $999</p>
            <button>Comprar</button>
        </article>

        <article class="producto">
            <img src="imagen2.jpg" alt="Monitor">
            <h2>Monitor</h2>
            <p>Descripción del producto.</p>
            <p>Precio: $299</p>
            <button>Comprar</button>
        </article>

        <!-- Agrega más productos aquí -->

    </section>

    <?php include_once 'Templates/footer.php'; ?>
</body>
</html>
