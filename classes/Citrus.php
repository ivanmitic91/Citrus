<?php
require_once 'Database.php';

class Citrus
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllFromCitrus()
    {
        $this->db->query('SELECT * FROM citrus_info');

        $citrus = $this->db->resultSet();

        return $citrus;
    }
}
