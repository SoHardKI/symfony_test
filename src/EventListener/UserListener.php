<?php

namespace App\EventListener;

use App\Entity\User;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class UserListener
{
    /**
     * @param LifecycleEventArgs $args
     */
    public function preUpdate(LifecycleEventArgs $args)
    {
        /**
         * @var $user User
         */
        $user = $args->getObject();

        if ($user instanceof User) {
            if ($args->getOldValue('email') != $args->getNewValue('email')) {
               $user->setEmail("changed " . $user->getEmail());
            }
        }
    }
}