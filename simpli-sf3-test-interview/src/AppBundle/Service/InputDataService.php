<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 07/08/2017
 * Time: 17:08
 */

namespace AppBundle\Service;


class InputDataService{

    public function somme($inputData = [])
    {
        if(!isset($inputData)){ // vérifie si le tableau donné n'est pas vide
            return $resultat[0]='data are missing';
        }

        $resultat = $inputData;

        foreach ($inputData as $clef=>$data){
            if(count($data) < 2 ){
                $resultat[$clef][0]= 'il faut 2 chiffres pour effectuer la somme';

            }else{
                $resultat[$clef][2]=$data[0]+$data[1]; //calcule la somme
                //détermine si la somme est paire ou impaire
                $resultat[$clef][3]=($resultat[$clef][2]%2 === 0)? 'pair' : 'impaire';

            }
        }

        return $resultat;
    }

}