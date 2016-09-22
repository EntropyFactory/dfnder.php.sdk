<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 2:54 AM
 */

namespace DfnderSDK\CardProcessing;


use Symfony\Component\HttpFoundation\Request;

interface CardProcessor {
    /**
     * @param Request $request
     * @return array
     */
    function getCardsFromRequest(Request $request);


}