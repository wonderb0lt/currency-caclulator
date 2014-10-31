<?php

namespace wonderb0lt\CurrencyCalculatorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExchangeRate
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="wonderb0lt\CurrencyCalculatorBundle\Entity\ExchangeRateRepository")
 */
class ExchangeRate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumn(name="sourceCurrency", referencedColumnName="id")
     */
    private $sourceCurrency;

    /**
     * @var Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumn(name="destinationCurrency", referencedColumnName="id")
     */
    private $destinationCurrency;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float")
     */
    private $rate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rate
     *
     * @param float $rate
     * @return ExchangeRate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return Currency
     */
    public function getDestinationCurrency()
    {
        return $this->destinationCurrency;
    }

    /**
     * @param Currency $destinationCurrency
     */
    public function setDestinationCurrency($destinationCurrency)
    {
        $this->destinationCurrency = $destinationCurrency;
    }

    /**
     * @return Currency
     */
    public function getSourceCurrency()
    {
        return $this->sourceCurrency;
    }

    /**
     * @param Currency $sourceCurrency
     */
    public function setSourceCurrency($sourceCurrency)
    {
        $this->sourceCurrency = $sourceCurrency;
    }


}
