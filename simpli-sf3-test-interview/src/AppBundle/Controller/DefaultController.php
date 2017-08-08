<?php

namespace AppBundle\Controller;

use AppBundle\Service\InputDataService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/my-work", name="homepage")
     */
    public function indexAction(InputDataService $dataService)
    {
        $result=$dataService->somme($this->getParameter('inputData'));

        return $this->render('default/index.html.twig',[
            'result' => $result
        ]);
    }

}
