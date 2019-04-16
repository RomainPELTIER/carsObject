<?php
interface HondaInterface extends MotoInterface {


    public function __construct($marque, $model, $prix, $topCase, $turbo);
    public function getTopCase();
}
?>