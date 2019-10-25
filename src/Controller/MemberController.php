<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class MemberController extends Controller {

    /**
     * @Route("/member")
     */
    public function index() {
        return $this->render('member/index.html.twig');
    }
    /**
     * @Route("/historique")
     */
    public function historique() {
        return $this->render('member/historique.html.twig');
    }
}