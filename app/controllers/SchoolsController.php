<?php
class SchoolsController {
    private $model;
 
    public function __construct($model) {
       $this->model = $model;
    }
 
    public function getSchools() {
       $schools = $this->model->getSchools();
       include "../Views/school-list.php";
    }
 }
?>