<?php


namespace Imdhemy\Expo\Contracts;

/**
 * Interface MessageAble
 * @package Imdhemy\Expo\Contracts
 */
interface MessageAble
{
    /**
     * @return array|ExpoTokenAble[]
     */
    public function getTo(): array;

    /**
     * @return JsonAble
     */
    public function getData(): JsonAble;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return string
     */
    public function getBody(): string;

    /**
     * @return int|null
     */
    public function getTTL(): ?int;

    /**
     * @return int|null
     */
    public function getExpiration(): ?int;

    /**
     * @return string
     */
    public function getPriority(): string;

    /**
     * @return string|null
     */
    public function getSubtitle(): ?string;

    /**
     * @return string|null
     */
    public function getSound(): ?string;

    /**
     * @return int|null
     */
    public function getBadge(): ?int;

    /**
     * @return string|null
     */
    public function getChannelId(): ?string;
}
