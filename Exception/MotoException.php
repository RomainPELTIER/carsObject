<?php

class motoException extends Exception{
    private $allowedMark = ['Kawazaki','KTM', 'Yamaha'];
    public function __construct(Moto $moto){
        if(!in_array($moto->getMarque(), $this->allowedMark)){
            throw new Exception('La moto que vous voulez n\'est pas au catalogue',500);
        }
    }
}

?>