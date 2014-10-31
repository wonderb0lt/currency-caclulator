<?php

namespace wonderb0lt\CurrencyCalculatorBundle\Entity;


use Doctrine\ORM\EntityRepository;

class ExchangeRateRepository extends EntityRepository {
    public function findOneByCurrencyPair($sourceCurrency, $destinationCurrency) {
        $query = "SELECT e FROM wonderb0ltCurrencyCalculatorBundle:ExchangeRate e
                  INNER JOIN e.sourceCurrency src
                  INNER JOIN e.destinationCurrency dst
                  WHERE src.isoCode = :src AND dst.isoCode = :dst";

        $q = $this->getEntityManager()->createQuery($query);
        $q->setParameters(array("src" => $sourceCurrency, "dst" => $destinationCurrency));
        return $q->getOneOrNullResult();
    }
} 