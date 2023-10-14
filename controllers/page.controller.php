<?php
    include_once('./views/page.view.php');
    include_once('./models/page.model.php');

    class pageController {
        private $model;
        private $view;

        function __construct(){
            //$this->model = new pageModel();
            $this->view = new pageView();
        }

        public function mostrarIndex(){
            $this->view->showPageIndex();
        }

        public function mostrarProcesadores(){
            $this->view->showPageProcesadores();
        }

        public function mostrarPlacas(){
            $this->view->showPagePlacas();
        }

        public function mostrarRams(){
            $this->view->showPageRams();
        }

        public function mostrarGabinetes(){
            $this->view->showPageGabinetes();
        }

        public function mostrarNosotros(){
            $this->view->showPageNosotros();
        }

    }

?>