<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function defaultAction(): Response
    {

        return $this->render('Inicio\index.html.twig');
    }

    /**
     * @Route("/club", name="app_club")
     */
    public function clubAction(): Response
    {
    return $this->render('club\index.html.twig');
    }

    /**
     * @Route("/beneficios", name="app_beneficios")
     */
    public function beneficiosAction(): Response
    {
        return $this->render('beneficios\index.html.twig');
    }

    /**
     * @Route("/republic", name="app_republic")
     */
    public function republicAction(): Response
    {
        return $this->render('republic\index.html.twig');
    }

    /**
     * @Route("/tienda", name="app_tienda")
     */
    public function tiendaAction(): Response
    {
        return $this->render('tienda\index.html.twig');
    }

    /**
     * @Route("/bio", name="app_bio")
     */
    public function bioAction(): Response
    {
        return $this->render('bio\index.html.twig');
    }

    /**
     * @Route("/adopta", name="app_adopta")
     */
    public function adoptaAction(): Response
    {
        return $this->render('adopta\index.html.twig');
    }
}
