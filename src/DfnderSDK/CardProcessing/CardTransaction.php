<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 2:56 AM
 */

namespace DfnderSDK\CardProcessing;


interface CardTransaction {
    function getId();
    function getCreated();
    function getUpdated();

    /**
     * @return Card
     */
    function getCard();
    function getAmount();
    function getTerminal();
    function getStatus();

}