<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 3:01 AM
 */

namespace DfnderSDK\CardProcessing;

interface CardToken {
    function getHash();
}