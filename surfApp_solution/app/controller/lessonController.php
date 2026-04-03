<?php 
include 'app/model/LessonModel.php';

class LessonController {
    private $lessonModel;

    public function __construct() {
        $this->lessonModel = new LessonModel();
    }

    public function index() {
        $lessons = $this->lessonModel->getLessons();
        include 'app/view/lessons.php';
    }
}
