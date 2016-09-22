<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 2:55 AM
 */

namespace DfnderSDK\CardProcessing;

interface Card {
    function getPAN();
    function getCardholderName();
    function getCVV2();
    function getType();

    /**
     * @return CardToken
     */
    function getToken();

}