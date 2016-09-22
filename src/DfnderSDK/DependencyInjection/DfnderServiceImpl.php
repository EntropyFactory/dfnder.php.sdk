<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 1:16 AM
 */


namespace DfnderSDK\DependencyInjection;

use DfnderSDK\CardProcessing\CardProcessor;
use DfnderSDK\CardProcessing\Impl\CardProcessorImpl;
use DfnderSDK\Config\DfnderConfig;
use DfnderSDK\Http\DfnderRequester;
use DfnderSDK\Http\DfnderRequesterImpl;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;


class DfnderServiceImpl implements DfnderService {

    private $config;

    /**
     * DfnderServiceImpl constructor.
     * @param DfnderConfig $config
     */
    public function __construct(DfnderConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @return CardProcessor
     */
    function getCardProcessor(){
        return new CardProcessorImpl(new DfnderRequesterImpl());
    }
}
