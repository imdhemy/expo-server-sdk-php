<?php


namespace Imdhemy\Expo\Contracts;

use ArrayAccess;

/**
 * Interface MessageListAble
 * @package Imdhemy\Expo\Contracts
 */
interface MessageListAble extends ArrayAccess
{
    /**
     * @param MessageAble $message
     * @return MessageListAble
     */
    public function addMessage(MessageAble $message): MessageListAble;

    /**
     * @return array
     */
    public function toArray(): array;
}
