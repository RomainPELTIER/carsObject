<?php
abstract class Moto extends Vehicule implements MotoInterface {

    protected $topCase;

    public function __construct($marque, $model, $prix, $topCase)
    {
        parent::__construct($marque, $model, $prix);
        $this->topCase = $topCase;

        try{
            new MotoException($this);
        } catch(Exception $e){
            var_dump($e->getMessage(). $e->getLine());
        }
    }

    /**
     * @return mixed
     */
    public function getTopCase()
    {
        return $this->topCase;
    }

    /**
     * @param mixed $topCase
     */
    public function setTopCase($topCase)
    {
        $this->topCase = $topCase;
    }

    /**
     * @return mixed
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * @param mixed $nbPlaces
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;
    }
    protected $nbPlaces;



}
?>