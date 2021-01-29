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
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'username' => trim($data['username']),
                    'email' => trim($data['email']),
                    'password' => trim($data['password']),
                    'confirmPassword' => trim($data['confirmPassword']),
                    'usernameError' => '',
                    'emailError' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    'confirmPasswordError' => '' 
                ];
                $nameValidation = "/^[a-zA-Z0-9]*$/";
                // validate username on letters/numbers
                if (empty($data['username'])) {
                    $data['usernameError'] = 'Please enter username.';
                } elseif (!preg_match($nameValidation, $data['username'])) {
                    $data['usernameError'] = 'Name can only contain letters and numbers.';
                }
                // validate email
                if (empty($data['eamil'])) {
                    $data['emailError'] = 'Please enter email address.';
                } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['emailError'] = 'Please enter the correct format.';
                } else {
                    // check if email exists
                    if ($this->userModel->findUserByEmail($data['email'])) {
                        $data['emailError'] = 'Email is already taken.';
                    }
                }
            }
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