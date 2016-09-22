<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 2:51 AM
 */

namespace DfnderSDK\Config;


interface DfnderConfig {
    function getUrl();
    function getAccessKey();
    function getAccessSecret();
}