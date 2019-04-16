<?php

class KawasakiException extends Exception
{
    public function __construct(Kawasaki $Kawasaki)
    {
       $jap = $Kawasaki->getisJaponaise();
       if(!$jap){
           throw new Exception('La moto que vous voulez n\'est pas Japonaise',500);
       }
    }
}
?>
