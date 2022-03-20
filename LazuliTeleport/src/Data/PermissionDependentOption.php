<?php

declare(strict_types=1);

namespace Endermanbugzjfc\LazuliTeleport\Data;

class PermissionDependentOption
{
    /*
     * To anyone who is using ConfigStruct:
     * Default value of a nullable property should always be null.
     * Otherwise if the user does not set a value, the default value will be used.
     */
    public ?int $waitDurationAfterAcceptRequest = null;

    public ?int $tpaCooldown = null;

    public ?int $tpahereRequesteeLimit = null;
    public ?int $tpahereCooldown = null;

    public static function getDefault() : self
    {
        $self = new self();
        $self->waitDurationAfterAcceptRequest = 3;
        $self->tpahereRequesteeLimit = 0;
        $self->tpaCooldown = $self->tpahereCooldown = 10;

        return $self;
    }
}