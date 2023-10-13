<header>
  <div class="header-container">
    <div class="svg-container">
      <a href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
          <g fill="#222831" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,256v-256h256v256z" id="bgRectangle"></path></g><g fill="#d31dda" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.682,0 -23,10.317 -23,23c0,0.553 0.448,1 1,1h7c0.552,0 1,-0.448 1,-1c0,-7.732 6.268,-14 14,-14c7.732,0 14,6.268 14,14c0,7.732 -6.268,14 -14,14v-7c0,-0.552 -0.448,-1 -1,-1h-7c-0.552,0 -1,0.448 -1,1v7h-5v-4c0,-0.552 -0.448,-1 -1,-1h-4c-0.552,0 -1,0.448 -1,1v4c0,0.552 0.448,1 1,1h4v5c0,0.552 0.448,1 1,1h5c0.552,0 1,-0.448 1,-1v-5h7v7c0,0.553 0.448,1 1,1c12.682,0 23,-10.317 23,-23c0,-12.683 -10.318,-23 -23,-23z"></path></g></g>
        </svg>
      </a>
    </div>
    <nav>
      <a href="index.php">Inicio</a>
      <a href="procesadores.php">Procesadores</a>
      <a href="placas.php">Placas de Video</a>
      <a href="ram.php">Memorias RAM</a>
      <a href="gabinetes.php">Gabinetes</a>
      <a href="nosotros.php">Contacto</a>
      <a href="login.php">Iniciar Sesion</a>
    </nav>
    <?php 
        session_start();
        if(isset($_SESSION["logueado"]) && $_SESSION["logueado"] === true){
          echo "Sesion iniciada como: " . $_SESSION["USERNAME"];
        ;} else {
          echo "<a href='login.phtml'>Inicie sesion</a>";
        }
      ?>
  </div>
</header>