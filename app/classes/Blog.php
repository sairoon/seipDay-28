<?php


namespace App\classes;


class Blog
{
    public $blogs = [];
    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id' => 1,
                'title' => 'Surprised Tiger',
                'image' => '1.jpg',
                'short_description' => 'Lorem Ipsum is simply dummy tetry. Lorem I 1500s,',
                'long_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',

            ],
            1 => [
                'id' => 2,
                'title' => 'Crying Tiger',
                'image' => '2.jpg',
                'short_description' => 'Lorem Ipsum is simply dummy tetry. Lorem I 1500s,',
                'long_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            ],
            2 => [
                'id' => 3,
                'title' => 'Broken Heart tiger',
                'image' => '3.jpg',
                'short_description' => 'Lorem Ipsum is simply dummy tetry. Lorem I 1500s,',
                'long_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            ],
            3 => [
                'id' => 4,
                'title' => 'Tiger on Haven',
                'image' => '4.jpg',
                'short_description' => 'Lorem Ipsum is simply dummy tetry. Lorem I 1500s,',
                'long_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            ],
        ];
    }
    public function getAllBlogs(){
        return $this->blogs;
    }
}