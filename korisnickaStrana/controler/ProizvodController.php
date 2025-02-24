<?php
include_once(__DIR__ ."/../model/ProizvodModel.php");


class  ProizvodController{
    private $model;

    public function __construct($pdo) {
        $this->model = new ProizvodModel($pdo);
    }

    public function prikaziProizvod() {
        return $this->model->getAllProizvodi();
    }
    public function prikazi5Proizvoda() {
        return $this->model->get5Proizvoda();
    }


}








?>