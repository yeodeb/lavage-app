<?php 
namespace App\Controller\Admin;

use App\Entity\LavagePrestation;
use App\Form\LavagePrestationType;
use App\Repository\LavagePrestationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends Controller {

    /**
     * @Route("/admin")
     */
    public function index() {
        return $this->render('admin/homepage/index.html.twig', ['mainNavAdmin' => true, 'title' => 'Espace Admin']);
    }

    /**
     * @Route("/rapport")
     */
    public function rapport() {
        return $this->render('admin/homepage/rapport.html.twig');
    }
}