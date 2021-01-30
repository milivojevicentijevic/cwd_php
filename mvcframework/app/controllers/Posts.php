<?php
class Posts extends Controller
{
    public function __construct() {
        $this->postModel = $this->model('Post');
    }
    public function index() {
        $this->view('posts/index');
    }
}