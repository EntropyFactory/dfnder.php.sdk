<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 1:16 AM
 */


namespace DfnderSDK\DependencyInjection;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;


class DfnderService {

    private $requestStack;

    /**
     * DfnderService constructor.
     * @param $requestStack RequestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }


}
