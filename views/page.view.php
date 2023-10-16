<?php
    class PageView{

        private $model;

        public function __construct(){
            $this->model = new ProductsModel();
        }

        //llamados a las paginas
        public function showPageIndex(){
            require('./templates/index.phtml');
        }

        public function showPageProcesadores(){
            require('./templates/procesadores.phtml');
        }

        public function showPagePlacas(){
            require('./templates/placas.phtml');
        }

        public function showPageRams(){
            require('./templates/ram.phtml');
        }

        public function showPageGabinetes(){
            require('./templates/gabinetes.phtml');
        }

        public function showPageNosotros(){
            require('./templates/nosotros.phtml');
        }

        //articulos de procesadores
        public function showArticuloProcesadores(){
            echo "<section class='productos'>";
            $procesadores = $this->model->getAllProcesadores();
            foreach($procesadores as $proce){
                echo '<article class="producto">' . '<h2>' . $proce->Marca . '<h2>' . '<h2>' . $proce->Modelo . '</h2>' .  '<h3>' . $proce->Socket . '<br>' . '<br>' . '$' . $proce->Valor . '</h3>' . '<div class="button_slide slide_left"><a href="#">Añadir al carrito</a></div>' .'</article>';
            }
            echo '</section>';
            include_once "./templates/footer.tpl" ; 
        }

        //articulos de graficas
        public function showArticuloGraficas(){
            echo "<section class='productos'>";
            $placas = $this->model->getAllGraficas();
            foreach($placas as $placa){
                echo '<article class="producto">' . '<h2>' . $placa->Marca . '<h2>' . '<h2>' . $placa->Modelo . '</h2>' .  '<h3>' . $placa->Vram . '<br>' . '<br>' . '$' . $placa->Valor . '</h3>' . '<div class="button_slide slide_left"><a href="#">Añadir al carrito</a></div>' .'</article>';
            }
            echo '</section>';
            include_once "./templates/footer.tpl" ; 
        }

        //articulos de rams
        public function showArticuloRams(){
            echo "<section class='productos'>";
            $rams = $this->model->getAllRams();
            foreach($rams as $ram){
                echo '<article class="producto">' . '<h2>' . $ram->Marca . '<h2>' . '<h2>' . $ram->Tamaño . '</h2>' .  '<h3>' . $ram->Generacion . '<br>' . $ram->Velocidad . '<br>' . '<br>' . '$' . $ram->Valor . '</h3>' . '<div class="button_slide slide_left"><a href="#">Añadir al carrito</a></div>' . '</article>';
            }
            echo '</section>';
            include_once "./templates/footer.tpl" ; 
        }

        //articulos de gabinetes
        public function showArticuloGabinetes(){
            echo "<section class='productos'>";
            $gabinetes = $this->model->getAllGabinetes();
            foreach($gabinetes as $gabinete){
                echo '<article class="producto">' . '<h2>' . $gabinete->Marca . '<h2>' . '<h2>' . $gabinete->Modelo . '</h2>' .  '<h3>' . $gabinete->Tamaño . '<br>' . '<br>' . '$' . $gabinete->Valor . '</h3>' . '<div class="button_slide slide_left"><a href="#">Añadir al carrito</a></div>' .'</article>';
            }
            echo '</section>';
            include_once "./templates/footer.tpl" ; 
        }
    }

?>
