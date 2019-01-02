<?php
/**
 * Created by PhpStorm.
 * User: hong1234
 * Date: 11.10.17
 * Time: 14:10
 */

namespace Foggyline\TestBundle\Service;

class Example
{
    private $client;
    private $pass;

    public function __construct($client, $pass)
    {
        $this->client = $client;
        $this->pass = $pass;
    }

    public function getMessage()
    {
        return $this->client . $this->pass;
    }
}