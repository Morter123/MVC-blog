<?php

namespace vendor;

use Exception;

class ServicesContainer
{

    // В массив сервис по указаному ключу будет доступен некий объект
    protected $services = [];

    function setService($service, $func)
    {
        $this->services[$service] = $func;
    }

    function getService($service)
    {
        if (!isset($this->services[$service])) {
            throw new Exception("Not found service {$service}");
        }
        return call_user_func($this->services[$service]);
    }

    function get()
    {
        return $this->services;
    }
}
