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
            require('./templates/header.tpl'); 
            echo '<div class="titulo"><h3>Nuestros Procesadores:</h3></div>';
            $this->showArticuloProcesadores();
            require('./templates/procesadores.phtml');
            require('./templates/footer.tpl');
        }

        public function showPagePlacas(){
            require('./templates/header.tpl'); 
            echo '<div class="titulo"><h3>Nuestras Graficas:</h3></div>';
            $this->showArticuloGraficas();
            require('./templates/placas.phtml');
            require('./templates/footer.tpl');
        }

        public function showPageRams(){
            require('./templates/header.tpl'); 
            echo '<div class="titulo"><h3>Nuestras Memorias RAM:</h3></div>';
            $this->showArticuloRams();
            require('./templates/ram.phtml');
            require('./templates/footer.tpl');
        }

        public function showPageGabinetes(){
            require('./templates/header.tpl'); 
            echo '<div class="titulo"><h3>Nuestros Gabinetes:</h3></div>';
            $this->showArticuloGabinetes();
            require('./templates/gabinetes.phtml');
            require('./templates/footer.tpl');
        }

        public function showPageNosotros(){
            require('./templates/header.tpl'); 
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
        }

        //articulos de graficas
        public function showArticuloGraficas(){
            echo "<section class='productos'>";
            $placas = $this->model->getAllGraficas();
            foreach($placas as $placa){
                echo '<article class="producto">' . $placa->Marca . '<h2>' . $placa->Modelo . '</h2>' .  '<p>' . $placa->Vram . '<br>' . $placa->Valor . '</p>' .'</article>';
            }
            echo '</section>';
        }

        //articulos de rams
        public function showArticuloRams(){
            echo "<section class='productos'>";
            $rams = $this->model->getAllRams();
            foreach($rams as $ram){
                echo '<article class="producto">' . $ram->Marca . '<h2>' . $ram->Tamaño . '</h2>' .  '<p>' . $ram->Generacion . '<br>' . $ram->Velocidad . '<br>' . $ram->Valor . '</p>' . '</article>';
            }
            echo '</section>';
        }

        //articulos de gabinetes
        public function showArticuloGabinetes(){
            echo "<section class='productos'>";
            $gabinetes = $this->model->getAllGabinetes();
            foreach($gabinetes as $gabinete){
                echo '<article class="producto">' . $gabinete->Marca . '<h2>' . $gabinete->Modelo . '</h2>' .  '<p>' . $gabinete->Tamaño . '<br>' . $gabinete->Valor . '</p>' .'</article>';
            }
            echo '</section>';
        }
    }

?>
