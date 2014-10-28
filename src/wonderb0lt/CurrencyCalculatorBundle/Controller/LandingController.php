<?php

namespace wonderb0lt\CurrencyCalculatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class LandingController extends Controller
{
    public function indexAction()
    {
        return $this->render('wonderb0ltCurrencyCalculatorBundle:Landing:index.html.twig', array());
    }

    public function conversionRateAction(Request $request) {
        $sourceCurrency = $request->get("from");
        $destinationCurrency = $request->get("to");
        $amount = $request->get("amount");

        // I *could* validate my data via Symfony2's validation here, but that's a bit over the top I think...
        if (empty($sourceCurrency) || empty($destinationCurrency) || empty($amount)) {
            throw new HttpException(400, "Please pass values for source/destination currency and amount");
        }

        // TODO Mocked response
        return new JsonResponse(array(
            "source" => $sourceCurrency,
            "destination" => $destinationCurrency,
            "sourceAmount" => $amount,
            "rate" => 1.27,
            "value" => $amount * 1.27
        ));
    }
}
