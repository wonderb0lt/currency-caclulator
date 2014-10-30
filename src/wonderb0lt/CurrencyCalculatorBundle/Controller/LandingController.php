<?php

namespace wonderb0lt\CurrencyCalculatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LandingController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rates =  $em->createQuery("SELECT e FROM wonderb0ltCurrencyCalculatorBundle:ExchangeRate e
                                    INNER JOIN e.sourceCurrency src
                                    INNER JOIN e.destinationCurrency dst")
                     ->getResult();
        $currencies = $em->createQuery("SELECT c FROM wonderb0ltCurrencyCalculatorBundle:Currency c")
                         ->getResult();
        return $this->render('wonderb0ltCurrencyCalculatorBundle:Landing:index.html.twig', array("rates" => $rates, "currencies" => $currencies));
    }
}
