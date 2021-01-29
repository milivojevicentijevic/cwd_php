<?php
    class User
{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    // find user by email. Email is passed in by Controller
    public function findUsersByEmail($email) {
        // prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // email param will be binded with the email variable
        $this->db->bind(':email', $email);
        // check if email is already registered
        if($this->db->rowCount > 0) {
            return true;
        } else {
            return false;
        }
    }
}