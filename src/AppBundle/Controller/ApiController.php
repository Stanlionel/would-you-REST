<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    /**
     * @Route("/api/", name="api")
     */
    public function apiAction()
    {
       

        return new Response(
            '<html><body>This is api</body></html>'
        );
    }
}
