<?php
class Posts extends Controller
{
    public function __construct() {
        $this->postModel = $this->model('Post');
    }
    public function index() {
        $posts = $this->postModel->findAllPosts();
        $data = [
            'posts' => $posts
        ];
        $this->view('posts/index', $data);
    }
    public function create() {
        if (!isLoggedIn()) {
            header('Location: '.URLROOT.'/posts');
        }
        $data = [
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => ''
        ];
        $this->view('posts/create', $data);
    }
    public function update() {

    }
    public function delete() {

    }
}   