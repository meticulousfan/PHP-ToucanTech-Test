<?php
class MembersController {
    private $model;
 
    public function __construct($model) {
       $this->model = $model;
    }
 
    public function addMember() {
       $name = $_POST["name"];
       $email = $_POST["email"];
       $schoolId = $_POST["schoolId"];
       $this->model->addMember($name, $email, $schoolId);
    }
 
    public function getMembersBySchool($schoolId) {
       $members = $this->model->getMembersBySchool($schoolId);
       include "/path/to/view.php";
    }
 }
?>
