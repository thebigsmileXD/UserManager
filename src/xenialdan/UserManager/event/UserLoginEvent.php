<?php

declare(strict_types=1);

namespace xenialdan\UserManager\event;

use pocketmine\event\Cancellable;

/**
 * Class UserLoginEvent
 * Called after the player has successfully authenticated, before it spawns
 *
 * @package xenialdan\UserManager\event
 */
class UserLoginEvent extends UserEvent implements Cancellable
{
}