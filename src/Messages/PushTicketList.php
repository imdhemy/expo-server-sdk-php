<?php


namespace Imdhemy\Expo\Messages;

use Illuminate\Support\Collection;
use Imdhemy\Expo\Contracts\PushTicketAble;
use Imdhemy\Expo\Contracts\PushTicketListAble;

class PushTicketList extends Collection implements PushTicketListAble
{
    /**
     * @param array $data
     * @return PushTicketListAble
     */
    public static function fromArray(array $data): PushTicketListAble
    {
        $list = new self();

        foreach ($data as $ticket) {
            $list->addPushTicket(PushTicket::fromArray($ticket));
        }

        return $list;
    }

    /**
     * @param PushTicketAble $pushTicket
     * @return PushTicketListAble
     */
    public function addPushTicket(PushTicketAble $pushTicket): PushTicketListAble
    {
        $this->add($pushTicket);

        return $this;
    }
}
