<?php


namespace Imdhemy\Expo\Messages;

use Imdhemy\Expo\Contracts\PushTicketAble;

class PushTicket implements PushTicketAble
{
    public static function fromArray(array $ticket): PushTicketAble
    {
        return new self();
    }
}
