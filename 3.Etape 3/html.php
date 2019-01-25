<?php

class Html{

    private $data;
    public $head = 'head';
    public $footer ='footer';
    public $p ='p';
    public function __construct($data=array()){

        $this->data = $data;

    }

    private function surround($html,$balise){

        $this->balise =$balise;
        return "<{$this->balise}>{$html}</{$this->balise}>";

    }
    public function css(){
    return  $this->surround('<link rel="stylesheet" href="asset/css/style.css">',head);
    }
    public function  meta(){
        return $this->surround('<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">',head);
    }
   public function img(){
       return $this->surround('<img src="asset/img/passe.jpg"','p');
   }
   public function aref(){
       return $this->surround('<a href="https://github.com/Duvalraphael" target="_blank">My github</a>','p');
   }
   public function js(){
    return '<script src="asset/js/script.js"></script>';
   }
}