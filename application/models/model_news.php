<?php
require_once './config/connect.php';

class Model_News extends Model
{
    public function get_news($page = 1)
    {
        $records_per_page = 4;
        $offset = ($page - 1) * $records_per_page;

        $stmt = mysqli_prepare($this->connect, "SELECT * FROM news ORDER BY date DESC LIMIT ?, ?");
        mysqli_stmt_bind_param($stmt, "ii", $offset, $records_per_page);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $news = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $data['news'] = $news;
        $data['page'] = $page;

        return $data;
    }

    public function get_news_count($offset)
    {
        $stmt = mysqli_prepare($this->connect, "SELECT * FROM news");
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $data['news'] = $news;

        $data['count'] = count($data['news']);
        $data['last_page'] = ceil($data['count'] / $offset);

        return $data['last_page'];
    }


    public function get_last_new($offset)
    {
        $stmt = mysqli_prepare($this->connect, "SELECT * FROM news ORDER BY date DESC LIMIT ?");
        mysqli_stmt_bind_param($stmt, "i", $offset);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $news = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $data['last_new'] = $news;
        return $data['last_new'];
    }


    public function get_news_id($news_id)
    {
        $stmt = $this->connect->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->bind_param("i", $news_id);
        $stmt->execute();

        $result = $stmt->get_result();
        $news = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();

        return $news;
    }
}

?>