<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 3:18 AM
 */

namespace DfnderSDK\CardProcessing;


interface CardTerminal {

    /**
     * @param $card
     * @param $amount
     * @param $subject
     * @return CardTransaction
     */
    function charge(Card $card, $amount, $subject);

    /**
     * @param $amount
     * @return CardTransaction
     */
    function preAuthorize(Card $amount, $amount);

    /**
     * @param CardTransaction $transaction
     * @return CardTransaction
     */
    function refund(CardTransaction $transaction);
}