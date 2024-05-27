<?php
namespace Jumppeak\Vitals\Services;

use Jumppeak\Vitals\Contracts\ServiceHandlerInterface;


class VitalsServices
{

    public static function check($service)
    {
        $class = 'Jumppeak\\Vitals\\Services\\'.ucfirst(strtolower($service)).'Service';
        $instance = new $class;

        if(!$instance instanceof ServiceHandlerInterface)
            throw new \Exception($class .' must implements ServiceHandlerInterface interface');

        return $instance->handle();
    }
}
