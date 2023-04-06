<?php
class MembersModel {
   private $db;

   public function __construct($db) {
      $this->db = $db;
   }

   public function addMember($name, $email, $schoolId) {
      $stmt = $this->db->prepare("INSERT INTO members (name, email, school_id) VALUES (?, ?, ?)");
      $stmt->execute([$name, $email, $schoolId]);
   }

   public function getMembersBySchool($schoolId) {
      $stmt = $this->db->prepare("SELECT name, email FROM members WHERE school_id = ?");
      $stmt->execute([$schoolId]);
      return $stmt->fetchAll();
   }
}
?>