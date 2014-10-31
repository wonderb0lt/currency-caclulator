<?php

namespace wonderb0lt\CurrencyCalculatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LandingController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $currencies = $em->createQuery("SELECT c FROM wonderb0ltCurrencyCalculatorBundle:Currency c")
                         ->getResult();
        return $this->render('wonderb0ltCurrencyCalculatorBundle:Landing:index.html.twig', array("currencies" => $currencies));
    }
}
