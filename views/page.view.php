<?php
    class PageView{

        private $model;

        public function __construct(){
            $this->model = new ProductsModel();
        }

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

        public function showArticuloProcesadores(){
            echo "<section class='productos'>";
            $procesadores = $this->model->getAllProcesadores();
            foreach($procesadores as $proce){
                echo '<article class="producto">' . $proce->Marca . '<h2>' . $proce->Modelo . '</h2>' .  '<p>' . $proce->Socket . '<br>' . $proce->Valor . '</p>' .'</article>';
            }
            echo '</section>';
        }

        public function showArticuloGraficas(){
            echo "<section class='productos'>";
            $placas = $this->model->getAllGraficas();
            foreach($placas as $placa){
                echo '<article class="producto">' . $placa->Marca . '<h2>' . $placa->Modelo . '</h2>' .  '<p>' . $placa->Vram . '<br>' . $placa->Valor . '</p>' .'</article>';
            }
            echo '</section>';
        }

        public function showArticuloRams(){
            echo "<section class='productos'>";
            $rams = $this->model->getAllRams();
            foreach($rams as $ram){
                echo '<article class="producto">' . $ram->Marca . '<h2>' . $ram->Tamaño . '</h2>' .  '<p>' . $ram->Generacion . '<br>' . $ram->Velocidad . '<br>' . $ram->Valor . '</p>' . '</article>';
            }
            echo '</section>';
        }

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
