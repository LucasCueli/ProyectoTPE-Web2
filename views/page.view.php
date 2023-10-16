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
                echo '<article class="producto">' . $proce->Marca . '<h2>' . $proce->Modelo . '</h2>' .  '<p>' . $proce->Socket . '<br>' . 'Precio (USD): $' . $proce->Valor . '<br>' . 'ID: ' . $proce->ID_procesadores . '</p>' .'</article>';
            }
            echo '</section>';
        }

        //articulos de graficas
        public function showArticuloGraficas(){
            echo "<section class='productos'>";
            $placas = $this->model->getAllGraficas();
            foreach($placas as $placa){
                echo '<article class="producto">' . $placa->Marca . '<h2>' . $placa->Modelo . '</h2>' .  '<p>' . $placa->Vram . '<br>' . 'Precio (USD): $' . $placa->Valor . '<br>' . 'ID: ' . $placa->ID_graficas . '</p>' .'</article>';
            }
            echo '</section>';
        }

        //articulos de rams
        public function showArticuloRams(){
            echo "<section class='productos'>";
            $rams = $this->model->getAllRams();
            foreach($rams as $ram){
                echo '<article class="producto">' . $ram->Marca . '<h2>' . $ram->Tamaño . '</h2>' .  '<p>' . $ram->Generacion . '<br>' . $ram->Velocidad . '<br>' . 'Precio (USD): $' . $ram->Valor . '<br>' . 'ID: ' . $ram->ID_RAM . '</p>' . '</article>';
            }
            echo '</section>';
        }

        //articulos de gabinetes
        public function showArticuloGabinetes(){
            echo "<section class='productos'>";
            $gabinetes = $this->model->getAllGabinetes();
            foreach($gabinetes as $gabinete){
                echo '<article class="producto">' . $gabinete->Marca . '<h2>' . $gabinete->Modelo . '</h2>' .  '<p>' . $gabinete->Tamaño . '<br>' . 'Precio (USD): $' . $gabinete->Valor . '<br>' . 'ID: ' . $gabinete->ID_gabinete . '</p>' .'</article>';
            }
            echo '</section>';
        }
    }

?>
