<?php
include 'app/config/db.php';

class LessonModel extends db {

    public function __construct() {
        parent::__construct();   
    }

    public function getLessons() {
        try {
            $query = 'SELECT * FROM lessons ORDER BY created_at DESC';
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}
