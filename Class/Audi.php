<?php
class Audi extends Voiture implements AudiInterface {
    private $isQuatro;

    public function __set($name, $value){
        echo ('L\'attribut n\'existe pas ou est privé');
    }

    public function __construct( $model, $prix, $nbPortes, $clim, $siegeChauffant, $isQuatro)
    {
        parent::__construct('Audi', $model, $prix, $nbPortes, $clim, $siegeChauffant);
        $this->isQuatro = $isQuatro;
    }

    /**
     * @return mixed
     */
    public function getisQuatro()
    {
        return $this->isQuatro;
    }

    /**
     * @param mixed $isQuatro
     */
    public function setIsQuatro($isQuatro)
    {
        $this->isQuatro = $isQuatro;
    }
}
?>