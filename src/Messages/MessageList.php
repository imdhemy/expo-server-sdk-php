<?php


namespace Imdhemy\Expo\Messages;

use Illuminate\Support\Collection;
use Imdhemy\Expo\Contracts\MessageAble;
use Imdhemy\Expo\Contracts\MessageListAble;

/**
 * Class MessageList
 * @package Imdhemy\Expo\Messages
 */
class MessageList extends Collection implements MessageListAble
{
    /**
     * @return MessageListAble
     */
    public static function init(): MessageListAble
    {
        return new self();
    }

    /**
     * @param MessageAble $message
     * @return MessageListAble
     */
    public function addMessage(MessageAble $message): MessageListAble
    {
        $item = $this->prepareMessage($message);
        $this->add($item);

        return $this;
    }

    /**
     * @param MessageAble $message
     * @return array
     */
    private function prepareMessage(MessageAble $message): array
    {
        return [
            'to' => $message->getTo(),
            'title' => $message->getTitle(),
            'body' => $message->getBody(),
        ];
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return parent::toArray();
    }
}
