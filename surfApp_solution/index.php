<?php
// Open this : http://localhost/surfAPP/index.php?page=lessons
if (isset($_GET['page'])) {
    if ($_GET['page'] === 'lessons') {
        include 'app/controller/lessonController.php';
        $lessonController = new LessonController();
        $lessonController->index();
        exit;
    }
}