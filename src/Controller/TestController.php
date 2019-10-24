<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller {

    /**
     * @Route("/homepage")
     */
    public function index() {
        return $this->render('homepage/index.html.twig', ['mainNavHome'=>true, 'title'=>'Accueil']);
    }

    
}