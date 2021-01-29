<?php


namespace Imdhemy\Expo\Contracts;

/**
 * Interface JsonAble
 * @package Imdhemy\Expo\Contracts
 */
interface JsonAble
{
    /**
     * @return array
     */
    public function toArray(): array;

    /**
     * @return string
     */
    public function toJson(): string;
}
