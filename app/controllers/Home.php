<?php

class Home extends Controllers
{
    protected $posts;
    protected $users;
    public function __construct()
    {
        $this->posts = $this->model('Post');
        $this->users = $this->model('User');
    }

    public function index()
    {
        $posts = $this->posts->all();
        $this->view('Home.index', ['posts' => $posts, 'page_id' => 1]);
    }

    public function authors()
    {
        $users = $this->users->all();
        $this->view('Home.authors', ['users' => $users, 'page_id' => 2]);
    }


    public function about()
    {
        $this->view('Home.about', ['title' => 'About Page', 'page_id' => 3]);
    }

}