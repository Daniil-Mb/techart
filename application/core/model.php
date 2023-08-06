<?php
require_once './config/connect.php';

class Model
{
    protected $connect;

    public function __construct()
    {
        global $connect;
        $this->connect = $connect;
    }


}