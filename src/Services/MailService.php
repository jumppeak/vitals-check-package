<?php
namespace Jumppeak\Vitals\Services;

use Jumppeak\Vitals\Contracts\ServiceHandlerInterface;

class MailService implements ServiceHandlerInterface
{
    public function handle(): bool
    {
        $config = config('mail.mailers.'.config('mail.default'));

        try {
            $transport = new \Swift_SmtpTransport($config['host'], $config['port'], $config['encryption']);
            $transport->setUsername($config['username']);
            $transport->setPassword($config['password']);
            $transport->setTimeout(1);

            $mailer = new \Swift_Mailer($transport);
            $mailer->getTransport()->start();
            return true;
        }catch (\Throwable $e) {
           return false;
        }
    }
}
