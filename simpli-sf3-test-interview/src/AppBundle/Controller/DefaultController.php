<?php

namespace AppBundle\Controller;

use AppBundle\Service\InputDataService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/my-work", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $inputDataService = $this->get(InputDataService::class);
        $result=$inputDataService->somme($this->getParameter('inputData'));

        return $this->render('default/index.html.twig',[
            'result' => $result
        ]);
    }

}
