<?php
class Model {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getLastNews() {
        $sql = 'SELECT * FROM `news` ORDER BY `date` DESC LIMIT 1;';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetch();
    }

    public function getNews($offset, $limit) {
        $sql = 'SELECT *, DATE_FORMAT(`date`, "%d.%m.%Y") formatDate FROM `news` ORDER BY `date` DESC LIMIT ?, ?;';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $offset, PDO::PARAM_INT);
        $statement->bindValue(2, $limit, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getNewsById($id) {
        $sql = 'SELECT *, DATE_FORMAT(`date`, "%d.%m.%Y") formatDate FROM `news` WHERE id=?';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
        return $statement->fetch();
    }

    public function getTotalNewsCount() {
        $sql = 'SELECT COUNT(*) FROM `news`';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchColumn();
    }
}
?>
