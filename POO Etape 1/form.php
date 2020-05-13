<?php 

class Form{

    private $data;
    public $surround = 'p';

    public function __construct($data = array()){
        $this->data = $data;

    }

    private function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }

    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input($name){
        return $this->surround(
            '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');  
    }

    public function select($pays){
        return $this->surround(
            '<select id="pays"  pays="' . $pays . '" value="' . $this->getValue($pays) . '"><option value="Belgique">Belgique</option></select>');  
    }

    public function textarea($message){
        return $this->surround(
            '<textarea  message="' . $message . '" value="' . $this->getValue($message) . '"></textarea>');  
    }

    public function check($checkbox){
        return $this->surround(
            '<input type="checkbox" name="' . $checkbox . '" value="' . $this->getValue($checkbox) . '"><label for="vehicle1"> I have a bike</label>');  
    }
  
    public function radio($radio){
        return $this->surround(
            '<input type="radio" name="' . $radio . '" value="' . $this->getValue($radio) . '"><label for="male">Male</label><br>');  
    }
    
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}
?>