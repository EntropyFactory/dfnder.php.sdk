<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 1:16 AM
 */


namespace DfnderSDK\DependencyInjection;

use DfnderSDK\CardProcessing\CardProcessor;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;


interface DfnderService {

    /**
     * @return CardProcessor
     */
    function getCardProcessor();
}
