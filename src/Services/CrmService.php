<?php
namespace Jumppeak\Vitals\Services;

use Jumppeak\Vitals\Contracts\ServiceHandlerInterface;


class CrmService implements ServiceHandlerInterface
{
    public function handle(): bool
    {
        $url = "https://ramcrm.surge.com.eg/api/ram_ksa_online_form";


        // Use get_headers() function
        $headers = @get_headers($url);
        // Use condition to check the existence of URL
        if($headers && strpos($headers[0], '400')) {
            return true;
        }
        else {
            return false;
        }
    }
}
