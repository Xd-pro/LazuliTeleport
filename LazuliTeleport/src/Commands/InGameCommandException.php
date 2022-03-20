<?php

declare(strict_types=1);

namespace Endermanbugzjfc\LazuliTeleport\Commands;

use pocketmine\command\CommandSender;

class InGameCommandException extends TerminateCommandException
{
    public function handle(
        CommandSender $sender
    ) : void {
        $message = $this->getMessage();
        $sender->sendMessage($message);
    }
}