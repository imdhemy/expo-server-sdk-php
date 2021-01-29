<?php


namespace Imdhemy\Expo\Contracts;

use ArrayAccess;

/**
 * Interface PushTicketListAble
 * @package Imdhemy\Expo\Contracts
 */
interface PushTicketListAble extends ArrayAccess
{
    /**
     * @param PushTicketAble $pushTicket
     * @return PushTicketListAble
     */
    public function addPushTicket(PushTicketAble $pushTicket): PushTicketListAble;
}
