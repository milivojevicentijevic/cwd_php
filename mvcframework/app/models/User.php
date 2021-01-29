<?php
    class User
{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function register($data) {
        $this->db->query('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
        // bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        // execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    // find user by email. Email is passed in by Controller
    public function findUsersByEmail($email) {
        // prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // email param will be binded with the email variable
        $this->db->bind(':email', $email);
        // check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}