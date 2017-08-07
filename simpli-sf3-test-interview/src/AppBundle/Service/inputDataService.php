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

     public function __construct(Array $inputData)
    {

        $this->$inputData= $container->getParameter('inputData');

    }

    public function somme()
    {
        $resultat = $this->inputData;

        foreach ($this->inputData as $inputData){
            foreach ($inputData as $value){

            }
        }

    }

}