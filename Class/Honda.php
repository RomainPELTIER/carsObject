<?php

class Honda extends Moto implements HondaInterface{

    protected $turbo;



    public function __construct($marque, $model, $prix, $topCase, $turbo)
    {
        $this -> turbo = $turbo;
        parent::__construct($marque, $model, $prix, $topCase);
    }

    /**
     * @return mixed
     */
    public function getTurbo()
    {
        return $this->turbo;
    }

    /**
     * @param mixed $turbo
     */
    public function setTurbo($turbo)
    {
        $this->turbo = $turbo;
    }
}

?>