<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController{
    /**
     * @Route("/test/testAction")
     */
    public function testAction(){
        return new Response(
            '<html><body>Test: test</body></html>'
        );
    }
}