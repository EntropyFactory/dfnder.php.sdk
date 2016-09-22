<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 3:09 AM
 */

namespace DfnderSDK\CardProcessing\Impl;


use DfnderSDK\CardProcessing\CardProcessor;
use DfnderSDK\Http\DfnderRequester;
use Symfony\Component\HttpFoundation\Request;

class CardProcessorImpl implements CardProcessor {

    /**
     * @var DfnderRequester
     */
    private $requester;

    /**
     * CardProcessorImpl constructor.
     * @param DfnderRequester $requester
     */
    public function __construct(DfnderRequester $requester)
    {
        $this->requester = $requester;
    }

    /**
     * @param Request $request
     * @return array
     */
    function getCardsFromRequest(Request $request)
    {
        $cards = [];
        $i = 0;
        while($request->headers->has('x-dfnder-token-' . $i)){
            $token = $request->headers->get('x-dfnder-token-' . $i);
            $tokenType = $request->headers->get('x-dfnder-token-' . $i++ . '-type');
            $cards []= new CardImpl("", "", "", $tokenType, $token);
        }

        return $cards;
    }


}