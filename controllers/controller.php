<?php
include 'connect.php';
include 'models/model.php';

class Controller {
    private $newsModel;

    public function __construct($pdo) {
        $this->newsModel = new Model($pdo);
    }

    public function index() {
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = 4;
        $offset = ($currentPage - 1) * $limit;
    
        $lastnews = $this->newsModel->getLastNews();
        $fourNews = $this->newsModel->getNews($offset, $limit);
        $totalNews = $this->newsModel->getTotalNewsCount();
        $pageCount = ceil($totalNews / $limit); // Общее количество страниц
    
        include 'views/indexView.php';
    }    

    public function show($id) {
        $newsPage = $this->newsModel->getNewsById($id);
        include 'views/newsView.php';
    }
}
?>
