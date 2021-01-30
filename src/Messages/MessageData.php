<?php


namespace Imdhemy\Expo\Messages;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Imdhemy\Expo\Contracts\JsonAble;

/**
 * Class MessageData
 * @package Imdhemy\Expo\Messages
 */
class MessageData implements JsonAble
{
    /**
     * @var ArrayCollection
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
        return new self(new ArrayCollection($data));
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
        return json_encode($this->collection->toArray());
    }
}
