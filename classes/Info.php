<?php
require_once 'Database.php';

class Info
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertInfo($name, $email, $message)
    {

        $this->db->query('INSERT INTO info (name , email , text) 
                          VALUES (:name , :email , :text)');

        $this->db->bind(':name', $name);
        $this->db->bind(':email', $email);
        $this->db->bind(':text', $message);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getInfo()
    {
        $this->db->query('SELECT * FROM info');

        $info = $this->db->resultSet();

        return $info;
    }

    public function getMessages()
    {
        $this->db->query('SELECT * FROM info WHERE status = 0');

        $messages = $this->db->resultSet();

        return $messages;
    }

    public function aprove()
    {

        $this->db->query(
            'UPDATE info SET status = 1  WHERE id = :id'
        );

        $this->db->bind(':id', (int) $_POST['aprove']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function checkUser()
    {

        $this->db->query('SELECT * FROM info WHERE name = :name AND email = :email');

        $this->db->bind(':name',  $_POST['name']);

        $this->db->bind(':email', $_POST['email']);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0 && $row->role == 1) {

            return $row;
        }
    }
}
