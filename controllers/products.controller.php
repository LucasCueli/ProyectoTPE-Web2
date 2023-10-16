<?php
    include_once('./views/page.view.php');
    include_once('./models/products.model.php');

    class ProductController {

        private $view;
        private $model;

        function __construct(){

            $this->view = new pageView();
            $this->model = new ProductsModel();
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

        public function checkLoggedIn() {
            if (!isset($_SESSION["ID_USER"])) {
                header('Location: ' . LOGIN);
            }
        }

        public function showProcesadores(){
            $this->view->showArticuloProcesadores();
        }
    }

