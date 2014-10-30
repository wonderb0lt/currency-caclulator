<?php

namespace wonderb0lt\CurrencyCalculatorBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use wonderb0lt\CurrencyCalculatorBundle\Entity\Currency;
use wonderb0lt\CurrencyCalculatorBundle\Entity\ExchangeRate;

class LoadSampleData implements FixtureInterface {
    function load(ObjectManager $manager)
    {
        // Currencies
        $eur = new Currency();
        $eur->setDisplayName("€");
        $eur->setIsoCode("EUR");
        $manager->persist($eur);

        $chf = new Currency();
        $chf->setDisplayName("Swiss Franks");
        $chf->setIsoCode("CHF");
        $manager->persist($chf);

        $gbp = new Currency();
        $gbp->setDisplayName("£");
        $gbp->setIsoCode("GBP");
        $manager->persist($gbp);

        $usd = new Currency();
        $usd->setDisplayName("$");
        $usd->setIsoCode("USD");
        $manager->persist($usd);

        $jpy = new Currency();
        $jpy->setDisplayName("¥");
        $jpy->setIsoCode("JPY");
        $manager->persist($jpy);

        $cad = new Currency();
        $cad->setDisplayName("Canadian Dollar");
        $cad->setIsoCode("CAD");
        $manager->persist($cad);

        $eurToUsd = new ExchangeRate();
        $eurToUsd->setSourceCurrency($eur);
        $eurToUsd->setDestinationCurrency($usd);
        $eurToUsd->setRate(1.5897);
        $manager->persist($eurToUsd);

        $eurToChf = new ExchangeRate();
        $eurToChf->setSourceCurrency($eur);
        $eurToChf->setDestinationCurrency($chf);
        $eurToChf->setRate(1.6135);
        $manager->persist($eurToChf);

        $eurToGbp = new ExchangeRate();
        $eurToGbp->setSourceCurrency($eur);
        $eurToGbp->setDestinationCurrency($gbp);
        $eurToGbp->setRate(0.8031);
        $manager->persist($eurToGbp);

        $usdToJpy = new ExchangeRate();
        $usdToJpy->setSourceCurrency($usd);
        $usdToJpy->setDestinationCurrency($jpy);
        $usdToJpy->setRate(103.5100);
        $manager->persist($usdToJpy);

        $chfToUsd = new ExchangeRate();
        $chfToUsd->setSourceCurrency($chf);
        $chfToUsd->setDestinationCurrency($usd);
        $chfToUsd->setRate(0.9860);
        $manager->persist($chfToUsd);

        $gbpToCad = new ExchangeRate();
        $gbpToCad->setSourceCurrency($gbp);
        $gbpToCad->setDestinationCurrency($cad);
        $gbpToCad->setRate(2.0174);
        $manager->persist($gbpToCad);

        $manager->flush();
    }
}