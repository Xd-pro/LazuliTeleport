<?php

declare(strict_types=1);

namespace Endermanbugzjfc\LazuliTeleport\Data;

class Messages
{
    public MessageEntry $tpaRequestRecieve;
    public MessageEntry $tpaRequestSend;
    public MessageEntry $tpaRequestAccepted;
    public MessageEntry $tpaRequestAcceptedWaiting;
    public MessageEntry $tpaRequestRejected;
    public MessageEntry $tpaExceedRequesteeLimit;

    public MessageEntry $tpahereRequestRecieve;
    public MessageEntry $tpahereRequestSend;
    public MessageEntry $tpahereRequestAccepted;
    public MessageEntry $tpahereRequestAcceptedWaiting;
    public MessageEntry $tpahereRequestRejected;
    public MessageEntry $tpahereExceedRequesteeLimit;

    public MessageEntry $teleportationCancelledRequstor;
    public MessageEntry $teleportationCancelledRequstee;
}