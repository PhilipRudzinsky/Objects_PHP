<?php
class Czolg
{
    public $nazwa="Rudy 102";
    public $kolor="Zielony";
    public $amunicja="0";
    public function info()
    {
        echo "INFO <br>";
        echo "------------------------------------------------------ <br>";
        echo "Nazwa: ", $this->nazwa, "<br>";
        echo "Ilośc amunicji: ", $this->amunicja, "<br>";
        echo "Kolor: ", $this->kolor, "<br>";
        echo "------------------------------------------------------ <br>";
    }
    public function pomaluj($kolor)
    {
        return $this->kolor=$kolor;
    }

    public function zaladuj($amunicja)
    {
        echo "Załadowano $amunicja pocisków <br>";
        return $this->amunicja=$amunicja;
    }

    public function strzelaj()
    {
        if($this->amunicja==0)
        {
            echo "Brak amunicji! Nie mogę strzelać! <br>";
        }
        else
        {
            echo "WYSTZAŁ! <br>";
            $this->amunicja=$this->amunicja-1;
        }
    }
}

$rudy = new Czolg();
$rudy->info();
$rudy->pomaluj("Czerwony");
$rudy->info();
$rudy->strzelaj();
$rudy->zaladuj(5);
$rudy->strzelaj();
$rudy->info();