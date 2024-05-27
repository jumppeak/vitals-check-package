<?php
namespace Jumppeak\Vitals\Services;

use Jumppeak\Vitals\Contracts\ServiceHandlerInterface;


class DatabaseService implements ServiceHandlerInterface
{
    public function handle(): bool
    {
        try {
            \DB::connection()->getPdo();
            return true;
        }catch (\Throwable $e){
            return false;
        }
    }
}
