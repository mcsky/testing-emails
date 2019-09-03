<?php
declare(strict_types=1);

namespace App\Domain\User\Rules;

use App\Domain\User\Model\User;
use Biig\Component\Domain\Event\DomainEvent;
use Biig\Component\Domain\Rule\PostPersistDomainRuleInterface;

class SendRegistrationEmail implements PostPersistDomainRuleInterface
{
    /**
     * @param DomainEvent $event
     */
    public function execute(DomainEvent $event)
    {

    }

    /**
     * Returns an array of event or a string it listen on.
     * @return array|string
     */
    public function after()
    {
        return User::EVENT_PREPARE_REGISTRATION;
    }
}
