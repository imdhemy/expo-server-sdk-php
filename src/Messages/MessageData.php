<?php


namespace Imdhemy\Expo\Messages;

use Illuminate\Support\Collection;
use Imdhemy\Expo\Contracts\JsonAble;

/**
 * Class MessageData
 * @package Imdhemy\Expo\Messages
 */
class MessageData implements JsonAble
{
    /**
     * @var Collection
     */
    protected $collection;

    /**
     * MessageData constructor.
     * @param Collection $collection
     */
    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return JsonAble
     */
    public static function empty(): JsonAble
    {
        return self::fromArray([]);
    }

    /**
     * @param array $data
     * @return JsonAble
     */
    public static function fromArray(array $data): JsonAble
    {
        return new self(new Collection($data));
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->collection->toArray();
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        return $this->collection->toJson();
    }
}
