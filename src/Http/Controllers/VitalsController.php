<?php

namespace Jumppeak\Vitals\Http\Controllers;

use Jumppeak\Vitals\Services\VitalsServices;

class VitalsController extends \Illuminate\Routing\Controller
{
    public function __invoke()
    {
        $services = collect(config('vitals.services'));

        return $services->flip()->mapWithKeys(function ($service, $key){
            return [$key => VitalsServices::check($key)];
        });
    }
}
