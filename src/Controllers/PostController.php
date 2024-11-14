<?php 

namespace App\Controllers;

use App\Models\Post;


class PostController {
    public function index() {
        $posts = Post::all();
        view('posts/index', compact('posts'));
    }
    public function create() {
        view('posts/create');
    }
    public function store(){
        $extension = pathinfo($_FILES['image']['tname'], PATHINFO_EXTENSION);
        dump(microtime() . rand(0,PHP_INT_MAX) . $_FILES['image']['name']);
        $filename = md5(microtime() . rand(0,PHP_INT_MAX) . $_FILES['image']['name'] . ".$extension");
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../public/uploads/' . $filename);
        dd($_FILES);
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/admin/posts');
    }

    public function show(){
        $post = Post::find($_GET['id']);
        if(!$post){
            http_response_code(404);
            echo '404 page not found';
        } else {
            view('posts/show', compact('post'));
        }
    }

    public function edit(){
        $post = Post::find($_GET['id']);
        if(!$post){
            http_response_code(404);
            echo '404 page not found';
        } else {
            view('posts/edit', compact('post'));
        }
    }

    public function update(){
        $post = Post::find($_GET['id']);
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/admin/posts');
    }

    public function destroy(){
        $post = Post::find($_GET['id']);
        $post->delete();
        redirect('/admin/posts');
    }
}