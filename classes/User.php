<?php
require_once 'Session.php';
session_start();
$session = new Session();
class User
{
    protected $name;
    protected $email;
    protected $message;

    protected $session;

    public function __construct()
    {

        $this->session = new Session();
    }

    public function setName($name)
    {

        if (empty($name)) {

            $this->session->flash('name', 'Please enter your name!');
        } else if (preg_match('~[0-9]+~', $name)) {

            $this->session->flash('name', 'Name cannot contain digits!');
        } else {

            $this->name = $this->testInput($name);
        }
    }

    public function getName()
    {
        return $this->name;
    }


    public function setEmail($email)
    {

        if (empty($email)) {

            $this->session->flash('email', 'Please enter your email!');
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $this->session->flash('email', 'Email not valid!');
        } else {

            $this->email = $this->testInput($email);
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setMessage($message)
    {

        if (empty($message)) {

            $this->session->flash('message', 'Please enter your message!');
        } else {

            $this->message = $this->testInput($message);
        }
    }

    public function getMessage()
    {
        return $this->message;
    }


    public function checkFields()
    {
        if (
            !empty($this->getName()) &&
            !empty($this->getEmail()) &&
            !empty($this->getMessage())
        ) {

            return true;
        }
    }

    public function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
