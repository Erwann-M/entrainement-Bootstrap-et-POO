<?php


class Client {
    public $lastname;
    public $name;
    public $bic;
    public $iban;
    public $solde;


    public function cestLaPaye() {
        $this->solde = mt_rand(100, 5000);
    }
}
