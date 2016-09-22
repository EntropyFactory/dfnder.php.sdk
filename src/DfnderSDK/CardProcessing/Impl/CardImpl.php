<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 3:06 AM
 */

namespace DfnderSDK\CardProcessing\Impl;


use DfnderSDK\CardProcessing\Card;
use DfnderSDK\CardProcessing\CardToken;
use DfnderSDK\CardProcessing\CardTransaction;

class CardImpl implements Card {

    private $pan;
    private $cardholderName;
    private $cvv2;
    private $type;
    private $cardToken;

    /**
     * CardImpl constructor.
     * @param $pan
     * @param $cardholderName
     * @param $cvv2
     * @param $type
     * @param $cardToken
     */
    public function __construct($pan, $cardholderName, $cvv2, $type, $cardToken)
    {
        $this->pan = $pan;
        $this->cardholderName = $cardholderName;
        $this->cvv2 = $cvv2;
        $this->type = $type;
        $this->cardToken = $cardToken;
    }


    function getPAN()
    {
        return $this->pan;
    }

    function getCardholderName()
    {
        return $this->cardholderName;
    }

    function getCVV2()
    {
        return $this->cvv2;
    }

    function getType()
    {
        return $this->type;
    }

    /**
     * @return CardToken
     */
    function getToken()
    {
        return $this->cardToken;
    }

}