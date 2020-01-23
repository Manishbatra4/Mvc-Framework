<?php

class Posts extends Controllers{

    public function index(){
        $posts = Post::where('user_id','=',Auth::user()->id)->get();
        $this->view('Post.index', ['page_id' => 7, 'posts' => $posts]);
    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            extract($_POST);

            Post::create([
                'title' => trim($title),
                'body' => nl2br(trim($body)),
                'user_id' => Auth::user()->id
            ]);

            redirect('posts');

        }else{
            $this->view('Post.create', ['page_id' => 7]);
        }
    }

    public function post($id){
        $post = Post::where('id','=',$id)->first();
        $this->view('Post.post', ['page_id' => 8, 'post' => $post]);
    }

    public function delete($id){
        Post::where('id','=',$id)->delete();
        redirect('posts');
    }

    public function edit($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            extract($_POST);

            Post::where('id','=', $id)->update([
                'title' => trim($title),
                'body' => nl2br(trim($body)),
            ]);

            redirect('posts');

        }else{
            $post = Post::where('id','=',$id)->first();
            $this->view('Post.edit', ['page_id' => 9, 'post' => $post]);
        }
    }

}