<?php

namespace App\classes;

class HomePage
{
    public function index(){
        header('Location: route.php?page=home');
    }
}