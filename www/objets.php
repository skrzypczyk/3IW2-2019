<?php

class PlanMaison
{
    public $fondation = 1;
    public $murs = 4;
    public $toit = 1;
    public $porte = 1 ;
    public $fenetre = 1;

    public function ajoutFondation()
    {
        $this->fondation++;
        $this->murs += 3;
        $this->fenetre ++;
        $this->porte ++;
        $this->toit ++;
    }
}

$maMaison = new PlanMaison();
$maMaison->ajoutFondation();
$maMaison->ajoutFondation();
$maMaison->ajoutFondation();
print_r($maMaison);

$maMaison2 = new PlanMaison();
print_r($maMaison2);
