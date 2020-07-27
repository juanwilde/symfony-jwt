<?php

declare(strict_types=1);

namespace App\Controller\Api\Listener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;

class JWTCreatedListener
{
    public function onJWTCreated(JWTCreatedEvent $event): void
    {
        $user = $event->getUser();

        $payload = $event->getData();
        unset($payload['roles']);
        $payload['userId'] = $user->getId();

        $event->setData($payload);
    }
}
