<?php


namespace Imdhemy\Expo\Contracts;

use Illuminate\Support\Collection;

/**
 * Interface ClientAble
 * @package Imdhemy\Expo\Contracts
 */
interface ClientAble
{
    /**
     * @param MessageListAble $messages
     * @return PushTicketListAble|Collection
     */
    public function push(MessageListAble $messages): PushTicketListAble;

    /**
     * @param array|PushTicketAble[] $pushTickets
     * @return array|PushReceiptAble
     */
    public function getReceipts(array $pushTickets): array;
}
