<?php

class Form{

    private $data;
    public $surround = 'p';

    public function __construct($data=array()){

        $this->data = $data;

    }

    private function surround($html){

        return "<{$this->surround}>{$html}</{$this->surround}>";

    }

    public function input($name){
        return $this->surround('<input type="text" name="' . $name . '">');
    }
    public function select(){
        return $this->surround('<select>
        <option value="Option 1">Option 1</option>
        <option value="Option 2">Option 2</option>
        <option value="Option 3">Option 3</option>
        <option value="Option 4">Option 4</option>
        </select>');
    }
    public function textarea(){
      return $this->surround('<textarea rows="4" cols="50">Voici donc mon texte tellement passionnant</textarea>');
    }
     public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
    public function radio($radio){
        return $this->surround('<input type="radio" value="'.$radio.'">'.$radio);
    }
    public function checkbox($checkbox){
        return $this->surround('<input type="checkbox"value="'.$checkbox.'">'.$checkbox);
    }
}