<?php

namespace WAEasyAPI\Api;

class Api
{
    protected static $baseUrl = 'https://api.waeasyapi.com/v1/';

    protected static $acc_id = null;

    protected static $acc_secret = null;

    /*
     * App info is to store the Plugin/integration
     * information
     */
    public static $appsDetails = array();

    const VERSION = '1.0.0';

    /**
     * @param string $key
     * @param string $acc_secret
     */
    public function __construct($acc_id, $acc_secret)
    {

        echo "acc_id.....: ".$acc_id;
        self::$acc_id = $acc_id;
        self::$acc_secret = $acc_secret;
    }

    /*
     *  Set Headers
     */
    public function setHeader($header, $value)
    {
        Request::addHeader($header, $value);
    }

    public function setAppDetails($title, $version = null)
    {
        $app = array(
            'title' => $title,
            'version' => $version
        );

        array_push(self::$appsDetails, $app);
    }

    public function getAppsDetails()
    {
        return self::$appsDetails;
    }

    public function setBaseUrl($baseUrl)
    {
        self::$baseUrl = $baseUrl;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        $className = __NAMESPACE__.'\\'.ucwords($name);

        $entity = new $className();

        return $entity;
    }

    public static function getBaseUrl()
    {
        return self::$baseUrl;
    }

    public static function getID()
    {
        return self::$acc_id;
    }

    public static function getSecret()
    {
        return self::$acc_secret;
    }

    public static function getFullUrl($relativeUrl)
    {
        return self::getBaseUrl() . $relativeUrl;
    }
}
