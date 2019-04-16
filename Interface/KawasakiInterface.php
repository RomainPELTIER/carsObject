<?php
interface KawasakiInterface extends MotoInterface {


    public function __construct($marque, $model, $prix, $topCase, $turbo);
    public function getTopCase();
}
?>