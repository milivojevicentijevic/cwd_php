<?php
    class Users extends Controller
    {
        public function __construct() {
            $this->userModel = $this->model('User');
        }
        public function register() {
            $data = [
                'username' => '',
                'email' => '',
                'password' => '',
                'confirmPassword' => '',
                'usernameError' => '',
                'emailError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '' 
            ];
            $this->view('users/register', $data);
        }
        public function login() {
            $data = [
                'title' => 'Login page',
                'usernameError' => '',
                'passwordError' => ''
            ];
            $this->view('users/login', $data);
        }
    }
?>