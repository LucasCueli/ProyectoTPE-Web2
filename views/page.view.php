<?php
    class PageView{

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

        public function showProcesadores(){
            
        }
    }

?>
