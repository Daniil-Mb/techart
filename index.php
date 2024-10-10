<?php
    include 'controllers/controller.php';

    $controller = new Controller($pdo);

    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id) {
        $controller->show($id);
    } else {
        $controller->index();
    }
?>
