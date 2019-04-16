<?php

class Kawasaki extends Moto implements MotoInterface {
    private $isJaponaise;

    /**
     * Kawasaki constructor.
     * @param $isJaponaise
     */
    public function __construct($marque, $model, $prix, $topCase, $turbo, $isJaponaise)
    {
        $this->isJaponaise = $isJaponaise;

        try {
            new MotoException($this);

        } catch (Exception $e) {
            var_dump('Erreur Kawasaki: '. $e->getMessage(). 'détécté ligne'. $e->getLine().
                'Dans le fichier'.$e->getFile().'code d\'erreur: '.$e->getCode());
        }
    }

    /**
     * @return mixed
     */
    public function getisJaponaise()
    {
        return $this->isJaponaise;
    }

    /**
     * @param mixed $isJaponaise
     */
    public function setIsJaponaise($isJaponaise)
    {
        $this->isJaponaise = $isJaponaise;
    }

    /**
     * Kawasaki constructor.
     * @param $isJaponaise
     */

}

?>