<?php
namespace wonderb0lt\CurrencyCalculatorBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ConversionController extends Controller {
    public function convertAction(Request $request) {
        $sourceCurrency = $request->get("from");
        $destinationCurrency = $request->get("to");
        $amount = $request->get("amount");

        // I *could* validate my data via Symfony2's validation here, but that's a bit over the top I think...
        if (empty($sourceCurrency) || empty($destinationCurrency) || empty($amount)) {
            throw new HttpException(400, "Please pass values for source/destination currency and amount");
        }

        $em = $this->getDoctrine()->getManager();
        $q = $em->createQuery("SELECT e FROM wonderb0ltCurrencyCalculatorBundle:ExchangeRate e
                               INNER JOIN e.sourceCurrency src
                               INNER JOIN e.destinationCurrency dst
                               WHERE src.isoCode = :src AND dst.isoCode = :dst ");

        $q  ->setParameter("src", $sourceCurrency)
            ->setParameter("dst", $destinationCurrency);
        $exchangeRate = $q->getOneOrNullResult();

        if ($exchangeRate !== null) {
            return new JsonResponse(array(
                "source" => $sourceCurrency,
                "destination" => $destinationCurrency,
                "sourceAmount" => $amount,
                "rate" => $exchangeRate->getRate(),
                "value" => $amount * $exchangeRate->getRate()
            ));
        } else {
            throw new HttpException("404", "Conversion unknown");
        }
    }

} 