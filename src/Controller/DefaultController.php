<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class DefaultController extends AbstractController{
    /**
     * @Route("/hello/{name}")
     */
    public function index($name, LoggerInterface $logger){
        $logger->info("Say hello to $name");
            return $this->render('default/index.html.twig',[
                'name'=>$name,
            ]);
    }
}