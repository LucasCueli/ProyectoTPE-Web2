  <header>
    <nav>
      <a href="index">Inicio</a>
      <a href="procesadores">Procesadores</a>
      <a href="placas">Placas de Video</a>
      <a href="rams">Memorias RAM</a>
      <a href="gabinetes">Gabinetes</a>
      <a href="nosotros">Contacto</a>
    </nav>
    <br>
    <?php 
    session_start();
        if(isset($_SESSION["logueado"]) && $_SESSION["logueado"] === true){
          echo "Sesion iniciada como: " . $_SESSION["USERNAME"];
          echo "<br>";
          echo "<a href='logout'>Cerrar sesion</a>";
        ;} else {
          echo "Sesion iniciada como invitado";
          echo "<br>";
          echo "<a href='login'>Inicie sesion</a>";
        }
      ?>
  </div>
</header>