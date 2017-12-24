<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
/**
 * @Route(/hello/{name})
 */
class DefaultController{
    public function index($name){
            return new Response('Hello '.$name.'!');
    }
}