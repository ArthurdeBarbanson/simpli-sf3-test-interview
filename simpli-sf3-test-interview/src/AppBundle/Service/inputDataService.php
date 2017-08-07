<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 07/08/2017
 * Time: 17:08
 */

namespace AppBundle\Service;


class inputDataService{

    private $inputData;

     public function __construct( $inputData )
    {

        $this->$inputData= $inputData;

    }

    public function somme()
    {
        $resultat = $this->inputData;

        foreach ($this->inputData as $clef=>$inputData){

            $resultat[$clef][2]=$inputData[0]+$inputData[1]; //calcule la somme
            $resultat[$clef][3]=($resultat[$clef][2]%2 === 0)? 'pair' : 'impaire'; //détermine si paire ou impaire

        }

        return $resultat;
    }

}