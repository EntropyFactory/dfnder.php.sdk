<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 9/22/16
 * Time: 3:46 AM
 */

namespace DfnderSDK\Config;


class DfnderConfigImpl implements DfnderConfig {

    private $url;
    private $access_key;
    private $access_secret;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getAccessKey()
    {
        return $this->access_key;
    }

    /**
     * @return mixed
     */
    public function getAccessSecret()
    {
        return $this->access_secret;
    }

    /**
     * DfnderConfigImpl constructor.
     * @param $url
     * @param $access_key
     * @param $access_secret
     */
    public function __construct($url, $access_key, $access_secret)
    {
        $this->url = $url;
        $this->access_key = $access_key;
        $this->access_secret = $access_secret;
    }

}