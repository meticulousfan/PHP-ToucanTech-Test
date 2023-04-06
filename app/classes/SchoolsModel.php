<?php
class SchoolsModel {
   private $db;

   public function __construct($db) {
      $this->db = $db;
   }

   public function getSchools() {
      $stmt = $this->db->prepare("SELECT id, name FROM schools");
      $stmt->execute();
      return $stmt->fetchAll();
   }
}
?>