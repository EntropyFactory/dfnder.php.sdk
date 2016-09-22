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
        foreach ($request->headers->all() as $header) {
            $cards []= $header;
        }
        return $cards;
    }


}