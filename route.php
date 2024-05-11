<?php
require_once 'vendor/autoload.php';
use App\classes\Blog;

if (isset($_GET['page'])){
    if ($_GET['page'] == 'home'){
        $blog = new Blog();
        $blogs = $blog->getAllBlogs();
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'about'){
        include 'pages/about.php';
    }
    elseif ($_GET['page'] == 'service'){
        include 'pages/service.php';
    }
}

