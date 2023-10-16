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

        //funciones para mostrar las paginas
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

        //funcion para checkear que hay un usuario logueado
        public function checkLoggedIn() {
            if (!isset($_SESSION["ID_USER"])) {
                header('Location: ' . LOGIN);
            }
        }

        //funciones para cambios en la base de datos
        //
        //procesadores
        public function agregarProcesador(){
            $marca = $_POST['marcaProce'];
            $modelo = $_POST['modeloProce'];
            $socket = $_POST['socketProce'];
            $valor = $_POST['valorProce'];
            $this->model->addProcesador($marca, $modelo, $socket, $valor);
        }

        public function borrarProcesador(){
            $idProcesador = $_POST['idProce'];
            $this->model->deleteProcesador($idProcesador);      
        }

        //graficas
        public function agregarGrafica(){
            $marca = $_POST['marcaGrafica'];
            $modelo = $_POST['modeloGrafica'];
            $vram = $_POST['vramGrafica'];
            $valor = $_POST['valorGrafica'];
            $this->model->addGrafica($marca, $modelo, $vram, $valor);
        }

        public function borrarGrafica(){
            $idGrafica = $_POST['idGraf'];
            $this->model->deleteGrafica($idGrafica);      
        }

        //rams
        public function agregarRam(){
            $marca = $_POST['marcaRam'];
            $tamaño = $_POST['tamañoRam'];
            $velocidad = $_POST['velocidadRam'];
            $generacion = $_POST['generacionRam'];
            $valor = $_POST['valorRam'];
            $this->model->addRam($marca, $tamaño, $velocidad, $generacion, $valor);
        }

        public function borrarRam(){
            $idRam = $_POST['idRam'];
            $this->model->deleteRam($idRam);
        }

        //gabinetes
        public function agregarGabinete(){
            $marca = $_POST['marcaGabinete'];
            $modelo = $_POST['modeloGabinete'];
            $tamaño = $_POST['tamañoGabinete'];
            $valor = $_POST['valorGabinete'];
            $this->model->addGabinete($marca, $modelo, $tamaño, $valor);
        }

        public function borrarGabinete(){
            $idGabinete = $_POST['idGabinete'];
            $this->model->deleteGabinete($idGabinete);
        }
    }

