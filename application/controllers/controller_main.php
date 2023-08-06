<?php
include "application/models/model_news.php";

class Controller_Main extends Controller
{

    function __construct()
    {
        $this->model = new Model_News();
        $this->view = new View();
    }

    function action_index()
    {
        $offset = 4;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $data = $this->model->get_news((int)$page);
        $lastPage = $this->model->get_news_count($offset);
        $lastNew = $this->model->get_last_new(1);

        $data['page'] = $page;
        $data['offset'] = $page > 1 ? 1 : 0;
        $data['offset_for_button'] = 1;
        $data['count'] = count($data['news']);
        $data['last_page'] = $page == $lastPage ? True : False;
        $data['last_new'] = $lastNew;

        for ($i = 0; $i < count($data['news']); $i++) {
            $date = date_create($data['news'][$i]['date']);
            $data['news'][$i]['date'] = date_format($date, 'd.m.Y');
        }
        $this->view->generate('main_view.php', 'template_view.php', $data);
    }

}

?>