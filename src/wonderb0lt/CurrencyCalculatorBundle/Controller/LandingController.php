<?php

namespace wonderb0lt\CurrencyCalculatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LandingController extends Controller
{
    public function indexAction()
    {
        return $this->render('wonderb0ltCurrencyCalculatorBundle:Landing:index.html.twig', array());
    }
}
