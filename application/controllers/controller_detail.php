<?php
include "application/models/model_news.php";

class Controller_Detail extends Controller
{

    function __construct()
    {
        $this->model = new Model_News();
        $this->view = new View();
    }

    function action_index()
    {
        $news_id = $_GET['item'];

        $data = $this->model->get_news_id($news_id);

        $date = date_create($data[0]['date']);
        $data[0]['date'] = date_format($date, 'd.m.Y');

        $this->view->generate('show_view.php', 'template_view.php', $data);
    }
}

?>