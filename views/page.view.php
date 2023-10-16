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
                echo '<article class="producto">' . $proce->Marca . '<h2>' . $proce->Modelo . '</h2>'
                . '<p>' . $proce->Socket . ', ' . $proce->Valor . '</p>' .'</article>';
            }
            echo '</section>';
        }
    }

?>
