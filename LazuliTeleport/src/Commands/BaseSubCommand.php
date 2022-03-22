<?php

declare(strict_types=1);

use CortexPE\Commando\BaseSubCommand as CommandoBaseSubCommand;

abstract class BaseSubCommand extends CommandoBaseSubCommand
{
	use BaseCommandTrait;

	protected function prepare() : void {
	}
}