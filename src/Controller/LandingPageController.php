<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingPageController extends AbstractController
{
    /**
     * @Route("/home", name="landing_page")
     */
    public function index(): Response
    {
        return $this->render('landing_page/index.html.twig', [
            'controller_name' => 'LandingPageController',
        ]);
    }

    /**
     * @Route("/properties", name="properties")
     */
    public function properties(): Response
    {
        return $this->render('landing_page/properties.html.twig', [
            'controller_name' => 'LandingPageController',
        ]);
    }

    /**
     * @Route("/about-us", name="about_us")
     */
    public function aboutUs(): Response
    {
        return $this->render('landing_page/aboutUs.html.twig', [
            'controller_name' => 'LandingPageController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('landing_page/contact.html.twig', [
            'controller_name' => 'LandingPageController',
        ]);
    }
}
