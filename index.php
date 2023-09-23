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
            <img src="https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8UHJvY2VzYWRvcmVzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="Procesador">
            <h2>Procesadores</h2>
            <p>Estos chips están diseñados para realizar cálculos y tareas de procesamiento de datos en una máquina. Los procesadores ejecutan instrucciones de software, manipulan datos y gestionan diversas operaciones que permiten que una computadora funcione de manera eficiente y realice una amplia gama de tareas.</p>
            <div class="outer">
                <div class="button_slide slide_left">Ir a la Seccion</div>
            </div>
        </article>

        <article class="producto">
            <img src="https://images.unsplash.com/photo-1672924030487-90829105b4c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fFBsYWNhJTIwZGUlMjB2aWRlb3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Placa de video">
            <h2>Placas de Video</h2>
            <p>Estas tarjetas están diseñadas para procesar y renderizar imágenes y vídeos en pantalla. Permiten a los usuarios disfrutar de gráficos de alta calidad, jugar videojuegos exigentes, realizar tareas de diseño y edición de video, y ejecutar aplicaciones que requieren un rendimiento gráfico superior.</p>
            <div class="outer">
                <div class="button_slide slide_left">Ir a la Seccion</div>
            </div>
        </article>

        <article class="producto">
            <img src="https://mla-s1-p.mlstatic.com/993944-MLA40928711012_022020-F.jpg" alt="Memoria RAM">
            <h2>Memorias RAM</h2>
            <p>Se utiliza para almacenar temporalmente datos y programas que están en uso en un momento dado. La RAM permite un acceso rápido a la información, lo que acelera significativamente el rendimiento de la computadora.</p>
            <div class="outer">
                <div class="button_slide slide_left">Ir a la Seccion</div>
            </div>
        </article>

        <article class="producto">
            <img src="https://mauricomputacion.com.ar/images/productos/galerias/22850/1002_1733048064.png" alt="Gabinetes">
            <h2>Gabinetes</h2>
            <p> Están diseñados para proteger y organizar estos componentes, proporcionando un entorno seguro y adecuado para el funcionamiento de la computadora.</p>
            <div class="outer">
                <div class="button_slide slide_left">Ir a la Seccion</div>
            </div>
        </article>

        <!-- Agrega más productos aquí -->

    </section>

    <?php include_once 'Templates/footer.php'; ?>
</body>
</html>
