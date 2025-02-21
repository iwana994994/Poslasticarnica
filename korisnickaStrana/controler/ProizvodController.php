<?php
include_once("../config/database.php");
include_once("../model/ProizvodModel.php");


class  ProizvodController{
    private $model;

    public function __construct($pdo) {
        $this->model = new ProizvodModel($pdo);
    }

    public function prikaziProizvod() {
        return $this->model->getAllProizvodi();
    }

}








?>