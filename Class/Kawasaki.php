<?php
class Kawasaki extends Moto implements KawasakiInterface {
    private $isJaponaise;

    public function __set($name, $value){
        echo ('L\'attribut n\'existe pas ou est privé');
    }

    public function __construct( $model, $prix, $topCase)
    {
        parent::__construct( "Kawasaki", $model, $prix, $topCase, true);
        $this->isJaponaise = true;
    }
}
?>